<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;





class HomeController extends Controller
{
    public function index(){

        $post=Post::All();
        return view('home.index',compact('post'));
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

    public function view_post(){

      $name= Auth::user()->name;
      $post= POST:: where ('username','=',$name)->get();

      return view('post_page',compact(('post')));

    }

    public function delete_post($id){
      $data=Post::find($id);
      $data->delete();
      return redirect()->back();
    }


    public function update_post($id){

      $data=Post::find($id);

      return view('updatepost',compact('data'));
    }

    public function confirm_update(Request $request, $id){

      $post=Post::find($id);
      $post->description= $request->description;

      $image=$request->image;
          if($image){
            $imageName=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('post',$imageName);
            $post->image=$imageName;

  }

  $post->save();
  return redirect()->back();
  
  }

}
  


