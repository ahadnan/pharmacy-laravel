<?php

namespace App\Http\Controllers;

use Session;
use App\Upload;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function index()
    {
        return view('upload');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'message' => 'required',
            'image' => 'required|image',
        ]);

        $upload = new Upload;

        $upload_image = $request->image;

        $upload_image_new_name = time() . $upload_image->getClientOriginalName();

        $upload_image->move('uploads/prescription', $upload_image_new_name);

        $upload->name = $request->name;
        $upload->email = $request->email;
        $upload->address = $request->address;
        $upload->phone = $request->phone;
        $upload->message = $request->message;
        $upload->image = 'uploads/prescription' . $upload_image_new_name;    // folder_name/image.jpg

        $upload->save();

        Session::flash('success', 'Successfully Sent');

        return redirect()->back();
    }
}
