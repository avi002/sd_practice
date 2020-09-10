<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ImageModel;
use Image;

class UploadController extends Controller
{
    public function index(){
        return view('admin.pages.upload');
    }
    public function store(Request $req){
        if ($req->file('picture'))
        {
            $originalImage      = $req->file('picture');
            $imageName          = $this->uploadImage($originalImage);
            $obj = new ImageModel();
            $obj->filename = $imageName;
            if($obj->save()){
                return redirect()->back()->with('msg','upload successful');
            }
        }

    }
    private function uploadImage($originalImage)
    {
        $profileImage    = Image::make($originalImage);

        $tmp             = $originalImage->getClientOriginalName();
        $ext2            = explode(".", $tmp);
        $ext             = end($ext2);
        $imageName       = time().'.'.$ext;
        // local
        $path            = public_path().'/uploads/'; 
        // deployment
        // $path          = base_path().'/../'.'uploads/';
        
        $profileImage->save($path.$imageName);
        return $imageName;
    }

}
