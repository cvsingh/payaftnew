<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;
use App\Models\Letter;
use App\Models\FilesDetails;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;


class LetterController extends Controller
{
  public function letterView()
  {
    // $user = Auth::guard('employee')->user();
    //   $user = User::find($id);
    $data['current_user'] = Auth::guard('employee')->user();
    $data['users'] = Employee::all();
    $data['allData'] = Letter::all();
    return view('backend.letter.letter_view', $data);
  }

  public function letterInbox()
  {
    // $user = Auth::guard('employee')->user();
    //   $user = User::find($id);
    $data['current_user'] = Auth::guard('employee')->user();
    $user_id = Auth::guard('employee')->user()->id;
    $data['users'] = Employee::all();
    $usertype = Auth::guard('employee')->user()->usertype;

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
    } else {
      $data['allData'] = [];
    }

    return view('backend.letter.letter_inbox', $data);
  }

  public function letterAdd()
  {
    // $data['current_user'] = Auth::guard('employee')->user();
    $usertype = Auth::guard('employee')->user()->usertype;
    $data['files'] = FilesDetails::all();
    $data['users'] = Employee::where('usertype', 'SO')->get();
    return view('backend.letter.letter_add', $data);
  }

  public function letterStore(Request $request)
  {
    $file_no = FilesDetails::where('id', $request->file_id)->first()->file_no;
    $file_subject = FilesDetails::where('id', $request->file_id)->first()->subject;
    $user_id = Auth::guard('employee')->user()->id;
    Letter::insert([
      'file_id' => $request->file_id,
      'file_no' => $file_no,
      'file_subject' => $file_subject,
      'type_document' => $request->type_document,
      'letter_no' => $request->letter_no,
      'letter_subject' => $request->letter_subject,
      'letter_date' => $request->letter_date,
      'tsk_id' => $user_id,
      'tsk_date' => Carbon::now(),
    ]);

    $notification = array(
      'message' => 'Letter Inserted Successfully.',
      'alert-type' => 'success'
    );

    return redirect()->route('letter.view')->with($notification);
  }

  public function letterSubmit($id)
  {
    $usertype = Auth::guard('employee')->user()->usertype;
    if ($usertype == 'tsk') {
      $data['users'] = Employee::where('usertype', 'SO')->get();
    } elseif ($usertype == 'SO') {
      $data['users'] = Employee::where('usertype', 'AR')->Orwhere('usertype', 'DR')->get();
    } elseif ($usertype == 'AR') {
      $data['users'] = Employee::where('usertype', 'DR')->Orwhere('usertype', 'JR')->get();
    } elseif ($usertype == 'DR') {
      $data['users'] = Employee::where('usertype', 'JR')->Orwhere('usertype', 'PR')->get();
    } elseif ($usertype == 'JR') {
      $data['users'] = Employee::where('usertype', 'PR')->get();
    } elseif ($usertype == 'PR') {
      $data['users'] = Employee::where('usertype', 'PR')->get();
    }
    $data['editData'] = Letter::find($id);
    return view('backend.letter.letter_submit', $data);
  }

  public function letterSubmitToHigher(Request $request, $id)
  {
    $user = Auth::guard('employee')->user();
    $next_user = Employee::where('id', $request->so_id)->first();
    $letter = Letter::find($id);
    if ($user->usertype == 'tsk') {
      $letter->tsk_id = $user->id;
      $letter->so_id = $request->so_id;
      $letter->tsk_date =  Carbon::now();
      $letter->status = 'Letter Submitted by ' . $user->name . ' ' . $user->usertype . ' on - ' . Carbon::now();
    } elseif ($user->usertype == 'SO') {
      if ($next_user->usertype == 'DR') {
        $letter->ar_id = '9999';
        $letter->ar_date =  Carbon::now();
        $letter->dr_id = $request->so_id;
      } else {
        $letter->ar_id = $request->so_id;
      }
      $letter->so_id = $user->id;
      $letter->so_date =  Carbon::now();
      $letter->status = $letter->status . ' | Letter Submitted by ' . $user->name . ' ' . $user->usertype . ' on - ' . Carbon::now();
    } elseif ($user->usertype == 'AR') {
      if ($next_user->usertype == 'JR') {
        $letter->dr_id = '9999';
        $letter->dr_date =  Carbon::now();
        $letter->jr_id = $request->so_id;
      } else {
        $letter->dr_id = $request->so_id;
      }
      $letter->ar_id = $user->id;
      $letter->ar_date =  Carbon::now();
      $letter->status = $letter->status . ' | Letter Submitted by ' . $user->name . ' ' . $user->usertype . ' on - ' . Carbon::now();
    } elseif ($user->usertype == 'DR') {
      if ($next_user->usertype == 'PR') {
        $letter->jr_id = '9999';
        $letter->jr_date =  Carbon::now();
        $letter->pr_id = $request->so_id;
      } else {
        $letter->jr_id = $request->so_id;
      }
      $letter->dr_id = $user->id;
      $letter->dr_date =  Carbon::now();
      $letter->status = $letter->status . ' | Letter Submitted by ' . $user->name . ' ' . $user->usertype . ' on - ' . Carbon::now();
    } elseif ($user->usertype == 'JR') {
      $letter->jr_id = $user->id;
      $letter->jr_date =  Carbon::now();
      if ($request->so_id != '9999') {
        $letter->pr_id = $request->so_id;
      } else {
        $letter->pr_id = $request->so_id;
        $letter->disposal = 'Closed';
      }
      $letter->status = $letter->status . ' | Letter Submitted by ' . $user->name . ' ' . $user->usertype . ' on - ' . Carbon::now();
    } elseif ($user->usertype == 'PR') {
      $letter->pr_id = $user->id;
      $letter->pr_date =  Carbon::now();
      $letter->disposal = 'Closed';
      $letter->status = $letter->status . ' | Letter Disposed Off by ' . $user->name . ' ' . $user->usertype . ' on - ' . Carbon::now();
    }

    $letter->save();

    $notification = array(
      'message' => 'Letter Submitted successfully.',
      'alert-type' => 'success'
    );

    return redirect()->route('letter.view')->with($notification);
  }
}
