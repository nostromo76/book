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
    $data->save();
    return redirect()->back();


    }
}