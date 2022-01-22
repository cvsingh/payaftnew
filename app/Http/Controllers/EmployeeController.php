<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\Employee;
use App\Models\Letter;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;

class EmployeeController extends Controller
{
    public function Index()
    {

        return view('employee.employee_login');
    }

    public function Dashboard()
    {
        $data['users'] = Auth::guard('employee')->user();
        $data['no_letters'] = Letter::count();
        $data['no_disposed_letters'] = Letter::whereNotNull('pr_date')->Orwhere('disposal', 'Closed')->count();
        $data['no_pending_letters'] = $data['no_letters'] - $data['no_disposed_letters'];
        $data['oldest_pending'] = Letter::max('letter_date');

        $user = Auth::guard('employee')->user();
        //    $user_id = Auth::guard('employee')->user()->id;
        $usertype = $user->usertype;
        $user_id = $user->id;
        if ($usertype == 'tsk') {
            $data['allData'] = Letter::where('tsk_id', $user_id)->whereNull('so_id')->get();
        } elseif ($usertype == 'SO') {
            $data['allData'] = Letter::where('so_id', $user_id)->whereNull('ar_id')->get();
        } elseif ($usertype == 'AR') {
            $data['allData'] = Letter::where('ar_id', $user_id)->whereNull('dr_id')->get();
        } elseif ($usertype == 'DR') {
            $data['allData'] = Letter::where('dr_id', $user_id)->whereNull('jr_id')->get();
        } elseif ($usertype == 'JR') {
            $data['allData'] = Letter::where('jr_id', $user_id)->whereNull('pr_id')->get();
        } elseif ($usertype == 'PR') {
            $data['allData'] = Letter::where('pr_id', $user_id)->whereNull('pr_date')->get();
        }

        // return redirect()->route('employee.dashboard', $data);
        return view('employee.index', $data);
    }

    public function Login(Request $request)
    {
        //dd($request->all());

        $check = $request->all();
        if (Auth::guard('employee')->attempt(['email' => $check['email'], 'password' => $check['password']])) {
            return redirect()->route('employee.dashboard')->with('error', 'Employee Login suceess');
        } else {
            return back()->with('error', 'Invalid Email or Password');
        }
    }

    public function employeeLogout()
    {
        Auth::guard('employee')->logout();
        return redirect()->route('employee_login_from')->with('error', 'Logout suceess');
    }

    public function employeeRegister()
    {
        return view('employee.employee_register');
    }

    public function employeeRegisterCreate(Request $request)
    {
        Employee::insert([
            'salutation' => $request->salutation,
            'designation' => $request->designation,
            'date_of_birth' => $request->date_of_birth,
            'date_coc' => $request->date_coc,
            'name' => $request->name,
            'email' => $request->email,
            'usertype' => $request->usertype,
            'password' => Hash::make('Welcome@123'),
            //  'password' => Hash::make($request->password),
            'created_at' => Carbon::now(),

        ]);

        $notification = array(
            'message' => 'User created Successfully.',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.dashboard')->with($notification);
    }

    public function ChangePassword()
    {
        return view('employee.body.change_password');
    }

    public function UpdatePassword(Request $request)
    {
        $validateData = $request->validate([
            'oldpassword' => 'required',
            'password' => 'required|confirmed'
        ]);

        $hashedPassword = Auth::guard('employee')->user()->password;

        if (Hash::check($request->oldpassword, $hashedPassword)) {
            $user = Employee::find(Auth::guard('employee')->user()->id);
            $user->password = Hash::make($request->password);
            $user->save();
            Auth::guard('employee')->logout();

            return redirect()->route('employee_login_from')->with('error', 'Password changed suceessfully.');
        } else {
            $notification = array(
                'message' => 'Current Password is invalid.',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
    }
}
