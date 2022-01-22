<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Employee;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function Login()
    {
        return view('user.index');
    }

    public function AdminView()
    {

        $data['allData'] = User::all();
        return view('backend.user.view_user', $data);
    }

    public function EmployeeView()
    {

        $data['allData'] = Employee::all();
        return view('backend.user.view_employee', $data);
    }

    public function AdminAdd()
    {
        return view('backend.user.user_add');
    }

    public function UserStore(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|unique:users',
            'name'  => 'required'
        ]);

        $data = new User();
        $data->usertype = $request->usertype;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->save();

        $notification = array(
            'message' => 'User Inserted Successfully.',
            'alert-type' => 'success'
        );

        return redirect()->route('user.view')->with($notification);
    }

    public function UserEdit($id)
    {
        $editData = User::find($id);
        return view('backend.user.edit_user', compact('editData'));
    }

    public function EmployeeEdit($id)
    {
        $editData = Employee::find($id);
        return view('backend.user.edit_employee', compact('editData'));
    }

    public function UserUpdate(Request $request, $id)
    {
        $data = User::find($id);
        $data->usertype = $request->usertype;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->save();

        $notification = array(
            'message' => 'User Updated Successfully.',
            'alert-type' => 'info'
        );

        return redirect()->route('user.view')->with($notification);
    }

    public function EmployeeUpdate(Request $request, $id)
    {
        $data = Employee::find($id);
        $data->salutation = $request->salutation;
        $data->usertype = $request->usertype;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->designation = $request->designation;
        $data->date_of_birth = $request->date_of_birth;
        $data->date_coc = $request->date_coc;

        $data->save();

        $notification = array(
            'message' => 'Employee Updated Successfully.',
            'alert-type' => 'info'
        );

        return redirect()->route('employee.view')->with($notification);
    }

    public function UserDelete($id)
    {
        $user = User::find($id);
        $user->delete();

        $notification = array(
            'message' => 'User Deleted Successfully.',
            'alert-type' => 'error'
        );

        return redirect()->route('user.view')->with($notification);
    }

    public function UserLogout()
    {
        Auth::guard('auth')->logout();
        return redirect()->route('/')->with('error', 'User Logout suceess');
    }
}
