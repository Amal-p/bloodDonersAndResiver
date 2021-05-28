<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doner;
use Illuminate\Support\Facades\File;
use phpDocumentor\Reflection\PseudoTypes\True_;

class donerData extends Controller
{
    //Search crud operation
    function search(Request $request){
        $search_key = $request->searchkey;
        $type = $request->type;
        if($type == "blood_grooup"){
            $doners = Doner::where('blood_group', $search_key)->get();
            return view('donerserchresult', compact('doners', 'search_key', 'type'));
        }
        else{
            $doners = Doner::where('mobile', $search_key)->get();
            return view('donerserchresult', compact('doners', 'search_key', 'type'));
        }
        
    }

    function update(Request $request){
        $id = $request -> id;
        $doner = Doner::find($id);
        return view('donerupdate', compact('doner'));
    }

    function updatesave(Request $request){
        $id = $request -> id;
        $doner = Doner::find($id);
        $file = $request->file('id_proof');
        if($file){
            File::delete('uploads/image/'.$doner->id_proof);

            $name = $request -> name;
            $age = $request -> age;
            $blood_group = $request -> blood_group;
            $city = $request -> city;
            $state = $request -> state;
            $zip = $request -> zip;
            $mobile = $request -> mobile;
            $email = $request -> email;
            //$id_proof = $request -> file('id_proof') -> store('Asset');
            $filename = date('Y-m-d-H-i-s-').rand().'.'.$file->getClientOriginalExtension();
            //$id_proof = Storage::putFileAs('image', $request->file('id_proof'), $image);
            $file->move('uploads/image', $filename);


            $doner -> name = $name;
            $doner -> age = $age;
            $doner -> blood_group = $blood_group;
            $doner -> city = $city;
            $doner -> state = $state;
            $doner -> zip = $zip;
            $doner -> mobile = $mobile;
            $doner -> email = $email;
            $doner -> id_proof = $filename;
            $result = $doner -> save();
            if($result){
                $message = 'Record Update';
                 return redirect('/updatedeletout')->with('message', 'Record Update');
            }
            else{
                return redirect('/updatedeletout')->with('message', 'Record Not Update');
            }
        }
        else{
            $doner = Doner::find($id);


            $name = $request -> name;
            $age = $request -> age;
            $blood_group = $request -> blood_group;
            $city = $request -> city;
            $state = $request -> state;
            $zip = $request -> zip;
            $mobile = $request -> mobile;
            $email = $request -> email;

            $doner -> name = $name;
            $doner -> age = $age;
            $doner -> blood_group = $blood_group;
            $doner -> city = $city;
            $doner -> state = $state;
            $doner -> zip = $zip;
            $doner -> mobile = $mobile;
            $doner -> email = $email;
            $result = $doner -> save();
            if($result){
                return redirect('/updatedeletout')->with('message', 'Record Update');
            }
            else{
                return redirect('/updatedeletout')->with('message', 'Record Not Update');
            }
        }
    }

    function delete(Request $request){
        $id = $request -> id;
        $file = $request->file('id_proof');
        $doner = Doner::find($id);
        File::delete('uploads/image/'.$doner->id_proof);
        $result = $doner->delete();
        if($result){
            return redirect('/updatedeletout')->with('message', 'Record Deleate');
        }
        else{
            return redirect('/updatedeletout')->with('message', 'Record Not Deleate');
        }
    }



//Compleate list crud operation from show all
    function showall(){
        $doners = Doner::all();
        return view('donerfulllist', compact('doners'));
    }

    function verify(Request $request){
        $id = $request -> id;
        $doner = Doner::find($id);
        $doner->verify = true;
        $doner->save();
        return redirect('/showalldoner');
    }
    
    function updateFromList(Request $request){
        $id = $request -> id;
        $doner = Doner::find($id);
        return view('updateFromListform', compact('doner'));
    }

    function updateFromListSave(Request $request){
        $id = $request -> id;
        $doner = Doner::find($id);
        $file = $request->file('id_proof');
        if($file){
            File::delete('uploads/image/'.$doner->id_proof);

            $name = $request -> name;
            $age = $request -> age;
            $blood_group = $request -> blood_group;
            $city = $request -> city;
            $state = $request -> state;
            $zip = $request -> zip;
            $mobile = $request -> mobile;
            $email = $request -> email;
            //$id_proof = $request -> file('id_proof') -> store('Asset');
            $filename = date('Y-m-d-H-i-s-').rand().'.'.$file->getClientOriginalExtension();
            //$id_proof = Storage::putFileAs('image', $request->file('id_proof'), $image);
            $file->move('uploads/image', $filename);


            $doner -> name = $name;
            $doner -> age = $age;
            $doner -> blood_group = $blood_group;
            $doner -> city = $city;
            $doner -> state = $state;
            $doner -> zip = $zip;
            $doner -> mobile = $mobile;
            $doner -> email = $email;
            $doner -> id_proof = $filename;
            $result = $doner -> save();
            if($result){
                $message = 'Record Update';
                 return redirect('/showalldoner')->with('message', 'Record Update');
            }
            else{
                return redirect('/showalldoner')->with('message', 'Record Not Update');
            }
        }
        else{
            $doner = Doner::find($id);


            $name = $request -> name;
            $age = $request -> age;
            $blood_group = $request -> blood_group;
            $city = $request -> city;
            $state = $request -> state;
            $zip = $request -> zip;
            $mobile = $request -> mobile;
            $email = $request -> email;

            $doner -> name = $name;
            $doner -> age = $age;
            $doner -> blood_group = $blood_group;
            $doner -> city = $city;
            $doner -> state = $state;
            $doner -> zip = $zip;
            $doner -> mobile = $mobile;
            $doner -> email = $email;
            $result = $doner -> save();
            if($result){
                return redirect('/showalldoner')->with('message', 'Record Update');
            }
            else{
                return redirect('/showalldoner')->with('message', 'Record Not Update');
            }
        }
    }


    function deleteFromList(Request $request){
        $id = $request -> id;
        $file = $request->file('id_proof');
        $doner = Doner::find($id);
        File::delete('uploads/image/'.$doner->id_proof);
        $result = $doner->delete();
        if($result){
            return redirect('/showalldoner')->with('message', 'Record Deleted');
        }
        else{
            return redirect('/showalldoner')->with('message', 'Record Not Delete');
        }
    }

    function showAllDonerNotVerify(Request $request){
        $doners = Doner::where('verify',0)->get();
        return view('donerfulllist', compact('doners'));
    }
}


