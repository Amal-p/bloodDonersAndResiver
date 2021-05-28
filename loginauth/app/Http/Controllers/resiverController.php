<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resiver;

class resiverController extends Controller
{

    function index(){
        $resivers = Resiver::all();
        return view('index', compact('resivers'));
    }

    //
    function saveData(Request $request){

        $name = $request -> name;
        $blood_group = $request -> blood_group;
        $unit = $request -> unit;
        $mobile = $request -> mobile;
        $patient_name = $request -> patient_name;
        $hospital = $request -> hospital;
        $required_date = $request -> required_date;
        $email = $request -> email;
        $verify = false;
        if($email==null){
            $email = "noemail@email";
            $resiver = new Resiver;

            //$ldate = date('Y-m-d');
            
            $resiver -> name = $name;
            $resiver -> blood_group = $blood_group;
            $resiver -> unit = $unit;
            $resiver -> mobile = $mobile;
            $resiver -> patient_name = $patient_name;
            $resiver -> hospital = $hospital;
            $resiver -> required_date = $required_date;
            $resiver-> application_date = date('Y-m-d');
            $resiver -> email = $email;
            $resiver -> verify = $verify;
            
            $result = $resiver -> save();
            if($result){
                return redirect('/reciverregister')->with('message', 'Record created');
            }else{
                return redirect('/reciverregister')->with('message', 'Record Not create');
            }
            
        }
        else{
            $resiver = new Resiver;
            
            $resiver -> name = $name;
            $resiver -> blood_group = $blood_group;
            $resiver -> unit = $unit;
            $resiver -> mobile = $mobile;
            $resiver -> patient_name = $patient_name;
            $resiver -> hospital = $hospital;
            $resiver -> required_date = $required_date;
            $resiver-> application_date = date('Y-m-d');
            $resiver -> email = $email;
            $resiver -> verify = $verify;
            
            $result = $resiver -> save();
            if($result){
                return redirect('/reciverregister')->with('message', 'Record created');
            }else{
                return redirect('/reciverregister')->with('message', 'Record Not create');
            }
            
        }
        
    }


    function showData(){
        $resivers = Resiver::all();
        return view('Resiver/resiverfulldata', compact('resivers'));
    }

    function verifyData(Request $request){
        $id = $request -> id;
        $resiver = Resiver::find($id);
        $resiver -> verify = true;
        $resiver -> save();
        return redirect('/showallreceiver');
    }

    function updateData(Request $request){
        $id = $request -> id;
        $resiver = Resiver::find($id);
        return view('Resiver/resiverupdateform', compact('resiver'));
    }

    function updateDataSave(Request $request){
        $id = $request -> id;
        $name = $request -> name;
        $blood_group = $request -> blood_group;
        $unit = $request -> unit;
        $mobile = $request -> mobile;
        $patient_name = $request -> patient_name;
        $hospital = $request -> hospital;
        $required_date = $request -> required_date;
        $email = $request->email;

        $resiver = Resiver::find($id);

        $resiver->name = $name;
        $resiver->blood_group = $blood_group;
        $resiver->unit = $unit;
        $resiver->mobile = $mobile;
        $resiver->patient_name = $patient_name;
        $resiver->hospital = $hospital;
        $resiver->required_date = $required_date;
        $resiver->email = $email;
        $result = $resiver -> save();
        if($result){
            return redirect('/showallreceiver')->with('message', 'Record Updated');
        }else{
            return redirect('/reciverregister')->with('message', 'Record Not Updated');
        }

    }

    function deleteData(Request $request){
        $id = $request->id;
        $resiver = Resiver::find($id);
        $result = $resiver -> delete();
        if($result){
            return redirect('/showallreceiver')->with('message', 'Record Deleted');
        }else{
            return redirect('/reciverregister')->with('message', 'Record Not Deleted');
        }
    }

    function showAllresiverNotVerify(Request $request){
        $resivers = Resiver::where('verify',0)->get();
        return view('Resiver/resiverfulldata', compact('resivers'));
    }

}
