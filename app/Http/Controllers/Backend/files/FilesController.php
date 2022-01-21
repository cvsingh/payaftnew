<?php

namespace App\Http\Controllers\Backend\files;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FilesDetails;

class FilesController extends Controller
{
    public function FileView() {
        $data['allData'] = FilesDetails::all();
        return view('backend.files.file_view', $data);
    }

    public function FileAdd() {
        return view('backend.files.file_add');
    }

    public function FileStore(Request $request) {
        $validatedData = $request->validate([
            'file_no' => 'required|unique:files_details',
            'subject'  => 'required',
            'section'  => 'required'
        ]);

        $data = new FilesDetails();
        $data->file_no = $request->file_no;
        $data->subject = $request->subject;
        $data->section = $request->section;
        $data->save();

        $notification = array(
            'message' => 'File Detail Inserted Successfully.',
            'alert-type' => 'success'
        );

        return redirect()->route('files.view')->with($notification);

    }

    public function FileEdit($id) {
        $editData = FilesDetails::find($id);
        return view('backend.files.edit_file', compact('editData'));
    }

    public function FileUpdate(Request $request, $id) {
        $data = FilesDetails::find($id);
        $data->file_no = $request->file_no;
        $data->subject = $request->subject;
        $data->section = $request->section;
        $data->save();

        $notification = array(
            'message' => 'File Details Updated Successfully.',
            'alert-type' => 'info'
        );

        return redirect()->route('files.view')->with($notification);
    }

    public function FileDelete($id) {
        $file = FilesDetails::find($id);
        $file->delete();

        $notification = array(
            'message' => 'File Deleted Successfully.',
            'alert-type' => 'error'
        );

        return redirect()->route('files.view')->with($notification);
    }
}
