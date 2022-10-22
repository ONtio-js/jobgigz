<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FunctionController extends Controller
{
    public static function checkfileextandmove($filetype = 'filetype',Request $request){
        $newFileName = time().'-'.$request->name ? $request->name : 'jobgigz'.$request->file->extension;


        if ($filetype == ('jpg' || 'png' || 'jpeg')){
            $request->file->move(public_path('images/homepage/latest-jobs'),$newFileName);
        }else if($filetype == 'docx'){
            $request->file->move(public_path('images/homepage/latest-jobs'),$newFileName);
        }else{
            $request->image->move(public_path('pdf'),$newFileName);
        }

        return $newFileName;
    }
}
