<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function upload(Request $request)
    {

        // $request->validate([
        //     'file' => 'required|file|max:50000|mimes:mp4,mov,mkv,webm'
        // ]);

        $validator = Validator::make($request->all(), [
            'file' => 'required|file|max:50000|mimes:mp4,mov,mkv,webm'
        ]);

        if ($validator->fails()) {
            return view('bubblediag3')->withErrors(['msg' => 'THATS NOT THE STUFF !!!']);
        }

        // Check if the file is valid

        $filePath = $request->file('file')->store('videos', 'public');
        return view('bubblediag4');

        // Return error response
        //return view('bubblediag3')->with('error', 'THATS NOT THE STUFF !!');
    }
}