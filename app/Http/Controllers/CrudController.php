<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crud;
class CrudController extends Controller
{
    //

    public function show(){
    	$user = Crud::all();
    	return view('showdata',['user'=>$user]);
    }

    public function insert(Request $request){
    	$user = new Crud;
    	$user->name = $request->name;
    	$user->city = $request->city;
    	$user->phone = $request->phone;
    	$user->job = $request->job;
    	$user->save();
    	return view('message',['msg'=>'Inserted']);
    }

    public function update(Request $request){
    	$id = $request->id;
    	if($id != null)
    		$user = Crud::where('id',$id)->first();
        if($user != null){
        	$name = $request->name;
        	$city = $request->city;
        	$job = $request->job;
        	$phone = $request->phone;
        	if($name != null)
        		$user->name = $name;
        	if($city != null)
        		$user->city = $city;
        	if($phone != null)
        		$user->phone = $phone;
        	if($job != null)
        		$user->job = $job;
        	$user->save();
        	return view('message',['msg'=>'Updated']);
        }else{
        	return view('message',['msg'=>'Couldnt Update']);
        }
    	
    }

    public function delete(Request $request){
    	$id = $request->id;
    	if($id != null){
    		Crud::destroy($id);
    		return view('message',['msg'=>'Deleted']);
    	}
    	else
    		return view('message',['msg'=>'Couldnt delete']);
    }
}
