<!DOCTYPE html>
<html lang="en">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User dashboard</title>
 <style>
                    table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  border: 1px solid #ddd;
  padding: 10px;
  text-align: left;
}

th {
  background-color: #f0f0f0;
}

tr:nth-child(even) {
  background-color: #f9f9f9;
}

tr:hover {
  background-color: #e0e0e0;
}

th:nth-child(1), td:nth-child(1) {
  width: 30%;
}

th:nth-child(2), td:nth-child(2) {
  width: 20%;
}

th:nth-child(3), td:nth-child(3) {
  width: 20%;
}

th:nth-child(4), td:nth-child(4) {
  width: 30%;
}

td img {
  width: 100%;
  height: auto;
  border-radius: 10px;
}

.update-button, .delete-button {
  background-color: #4CAF50;
  color: #fff;
  border: none;
  padding: 10px;
  font-size: 16px;
  cursor: pointer;
}

.update-button:hover, .delete-button:hover {
  background-color: #3e8e41;
}

.table-container {
  max-width: 800px;
  margin: 40px auto;
}
    </style>
<body>
    <x-app-layout>
 <div>
        <table>

            <tr>
                <th>Post description</th>
                <th>Image</th>
                <th>Update</th>
                <th>Delete</th>
                

            </tr>
            @foreach($post as $post)
            <tr>
                    <td>{{$post->description}}</td>
                    <td>
                        <img src="post/{{$post->image}}">
                   </td>
                    <td><a href="{{url('update_post',$post->id)}}"class="btn btn-primary"></a><-Update</td>


                    <td>
                        <a onclick = "return confirm('are you sure to delete?')" href=
                    "{{url('delete_post',$post->id)}}" class="btn btn-danger"></a><-Delete</td>


            </tr>
                @endforeach

        </table>



 </div>


    </x-app-layout>
</body>
</html>