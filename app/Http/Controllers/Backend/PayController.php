<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Paymaster;
use App\Models\Employee;
use Illuminate\Support\Facades\DB;


class PayController extends Controller
{
    public function PayView()
    {
        $data['allData'] = DB::table('employees')
            ->join('paymasters', 'employees.id', '=', 'paymasters.employee_id')->select('employees.name', 'paymasters.*')->get();
        return view('backend.pay.view_pay', $data);
    }

    public function PayAdd()
    {

        $data['employees'] = Employee::all()->where('pay_creation', 'N');
        return view('backend.pay.pay_add', $data);
    }

    public function PayStore(Request $request)
    {

        Paymaster::insert([
            'employee_id' => $request->employee_id,
            'basic_pay' => $request->basic_pay,
            'da_flag' => $request->da_flag,
            'hospitaliy_allowance' => $request->hospitaliy_allowance,
            'hra' => $request->hra,
            'tpt' => $request->tpt,
            'orderly_allowance' => $request->orderly_allowance,
            'employer_contribution_epf' => $request->employer_contribution_epf,
            'cashier_allowance_flag' => $request->cashier_allowance_flag,
            'medical_allowance_flag' => $request->medical_allowance_flag,
            'arrears' => $request->arrears,
            'pension' => $request->pension,
            'eol' => $request->eol,
            'gpf' => $request->gpf,
            'cghs' => $request->cghs,
            'cgeis' => $request->cgeis,
            'employee_contribution_epf' => $request->employee_contribution_epf,
            'insurance' => $request->insurance,
            'incometax' => $request->incometax,
            'cess' => $request->cess
        ]);
        $id = $request->employee_id;
        $employee = Employee::find($id);
        $employee->pay_creation = 'Y';
        $employee->save();

        $notification = array(
            'message' => 'Record in Paymaster Inserted Successfully.',
            'alert-type' => 'success'
        );

        return redirect()->route('pay.view')->with($notification);
    }
}
