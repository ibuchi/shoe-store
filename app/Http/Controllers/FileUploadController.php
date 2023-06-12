<?php

namespace App\Http\Controllers;

use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Http\Request;

class FileUploadController extends Controller
{

    public function showUploadForm()
    {
        return view('upload');
    }

    public function storeUploads(Request $request)
    {

        $response = Cloudinary::upload($request->file('file')->getRealPath())->getSecurePath();

        dd($response);

        return back()
            ->with('success', 'File uploaded successfully');
    }
}
