<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){

        return view('home.index');
    }

  public function upload(Request $request){

    $data= new Post;
    $data->username=Auth::user()->name;
    $data->description=$request->description;
    //Slika insert i sta ako ne zelim da saljem sliku ili komentar!!
    $image=$request->image;
    if($image){


    
    $imageName=time().'.'.$image->getClientOriginalExtension();
    $request->image->move('post',$imageName);
    $data->image=$imageName;

  }
    //kraj slika
    $data->save();
    return redirect()->back();


    }
}