<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Dashboard</title>
</head>

<body>
    <x-app-layout>
        <div>
            <form action="{{ route('update.post', $post->id) }}" method="POST" enctype="multipart/form-data">
            
                @csrf
                <div>
                    <label>Post Description</label>
                    <input type="text" name="description" value="{{ $data->description }}" required>
                </div>

                <br><br>

                <div>
                    <label>Current Image</label>
                    <img src="{{ asset('post/' . $data->image) }}" height="300px" width="300px" alt="Current Image">
                </div>

                <div>
                    <label>Change Image</label>
                    <input type="file" name="image">
                </div>

                <br>

                <input type="submit" value="Update Post" style="background-color: green;">
            </form>
            </form>
        </div>
    </x-app-layout>
</body>
</html>
