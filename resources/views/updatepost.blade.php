<!DOCTYPE html>
<html lang="en">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update dashboard</title>
 
<body>
    <x-app-layout>
 <div>
 
               
                
        <form action="{{url('confirm_update',$data->id)}}" method="POST"enctype="multipart/form-data">
        <div>
        <label>Post Description</label>
        <input type="text"name ="description" value="{{$data->description}}">
        @csrf
        </div>

        <br> <br>
        <div>
            <label>Current  image</label>
            <img src="/post/{{$data->image}}"height="300px"width="300px">
        </div>

        <div>
            <label>Change image</label>
            <input type="file" name="image">
        </div>

        <br>

        <input type="submit"value="Update Post" style="background-color: green;">





        </form>
        



 


    </x-app-layout>
</body>
</html>

