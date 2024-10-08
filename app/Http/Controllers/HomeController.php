<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;




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


public function confirm_update(Request $request, $id) {
    // Validate input
    $request->validate([
        'description' => 'required|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Optional image validation
    ]);

    $post = Post::findOrFail($id); // Use findOrFail to throw an exception if not found
    $post->description = $request->description;

    if ($request->hasFile('image')) {
        // Generate a unique filename
        $imageName = time() . '.' . $request->image->getClientOriginalExtension();

        // Move the image to the 'public/post' directory
        $request->image->move(public_path('post'), $imageName);

        // Store the filename in the database
        $post->image = $imageName;
    }

    $post->save();

    return redirect()->back()->with('success', 'Post updated successfully!');
}
  
  }




