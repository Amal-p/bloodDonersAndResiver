<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doner;
use Illuminate\Support\Facades\Storage;

class donerRegistration extends Controller
{
    //
    function addData(Request $request){

        $name = $request -> name;
        $age = $request -> age;
        $blood_group = $request -> blood_group;
        $city = $request -> city;
        $state = $request -> state;
        $zip = $request -> zip;
        $mobile = $request -> mobile;
        $email = $request -> email;
        $file = $request->file('id_proof');
        //$id_proof = $request -> file('id_proof') -> store('Asset');
        $filename = date('Y-m-d-H-i-s-').rand().'.'.$file->getClientOriginalExtension();
        //$id_proof = Storage::putFileAs('image', $request->file('id_proof'), $image);
        $file->move('uploads/image', $filename);
        


        $doner = new Doner;
        $doner -> name = $name;
        $doner -> age = $age;
        $doner -> blood_group = $blood_group;
        $doner -> city = $city;
        $doner -> state = $state;
        $doner -> zip = $zip;
        $doner -> mobile = $mobile;
        $doner -> email = $email;
        $doner -> id_proof = $filename;
        $doner -> verify = false;
        $result = $doner -> save();

        if($result){
            return redirect('/register')->with('message', 'Record create');
        }
        else{
            return redirect('/register')->with('message', 'Record Not create Please check your data or contact our team');
        }

    }
}
