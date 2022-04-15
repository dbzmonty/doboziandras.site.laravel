<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\File;

class ImageController extends Controller
{
    public function store(Request $request)
    {
        if (!$request->hasFile('upload'))
            return json_encode(['default' => '']);
        
        $file = $request->file('upload');
        $fileName = uniqid();                        
        $fullFileName = $fileName.'.'.$file->extension();
        Image::make($file)->save(public_path("uploads/{$fullFileName}"));

        return json_encode(['default' => asset('uploads/'.$fullFileName)]);
    }

    public static function uploadImage(Request $request)
    {
        $file = $request->file('cover');        
        $fileName = uniqid();
        $cover = Image::make($file)->save(public_path("uploads/{$fileName}.{$file->extension()}"));
        return $cover;
    }

    public static function deleteImage($fileName)
    {
        $file = public_path("uploads/{$fileName}");

        if (File::exists($file))
        {
            File::delete($file);
        }
    }
}
