<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Image;

class ImageController extends Controller {

  public function imageUpload() {

    return view('imageUpload');
  }

  public function imageStore(Request $request)
   {
    //   request()->validate([
    //       'image_name' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //   ]);

      $image = new Image;

      if ($request->hasFile('image_name')) {
            $imagePath = $request->file('image_name');
            $imageName = time() . '.' . $imagePath ->getClientOriginalExtension();

            $imagePath ->move('uploads', $imageName );
            $image ->image_name= $imageName ;
        };

      $image->save();
    }
}
