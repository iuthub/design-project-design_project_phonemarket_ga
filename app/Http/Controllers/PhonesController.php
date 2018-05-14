<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Phone;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Auth;
class PhonesController extends Controller
{

    public function home(){
        $room_num = Auth::user()->room_num;
        $phones = Phone::all()->where('room_num', $room_num);
        // $phones = Phone::all();
        // return $phones;
        return view('home', ['phones' => $phones]);
        // return view('home')->with($phones);
    }

    //Insert into database
     public function add(Request $request){
        $phone = new Phone;
        $phone->name = $request->input("name"); 
        $phone->description = $request->input("description"); 
        $phone->price = $request->input("price"); 
        $phone->type = $request->input("type"); 
        $this->validate($request, [ 'upload_photo' => 
                                    'required|image|mimes:jpeg,jpg,png,gif',
                                    'name'=>'required',
                                    'description'=>'required',
                                    'price'=>'required']);
        $image = $request->file('upload_photo');
        $name = $image->getClientOriginalName(); 
        $image->move(storage_path("upload"), $name);
        $phone->photo = $name;
        $phone->room_num = Auth::user()->room_num;
        
        $phone->save();
        return redirect('/home')->with('successMsg', 'Information Saved!');
    }
    public function delete($id){
        Phone::where('id',$id)->delete();
        return redirect('/home')->with('successMsg', 'Information deleted successfully');
    }



    public function welcome(){
        // $room_num = Auth::user()->room_num;
        // $phones = Phone::all()->where('room_num', $room_num);
        $phones = Phone::all();
        // return $phones;
        return view('welcome', ['phones' => $phones]);
        // return view('home')->with($phones);
    }



    

}
