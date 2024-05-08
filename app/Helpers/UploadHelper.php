<?php 

namespace App\Helpers;

use File;

class UploadHelper
{
    public static function uploadImage($request, $table_name)
    {
        if($request->hasFile('profile_pic')) {  
            $file = $request->file('profile_pic');
            $image_name = time().".".$file->getClientOriginalName();
            $file->move(public_path('uploads/images/'.$table_name), $image_name);
            return $image_name;
        }

        return null;
    }
 
    public static function deleteOldImage($imageName, $table_name)
    {
        $imagePath = public_path('uploads/images/'. $table_name .'/' .$imageName);
         
        if(File::exists($imagePath)){
            unlink($imagePath);
        }
    }
}