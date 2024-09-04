<x-app-layout>
     <div style="width: 80%; margin: 40px auto; background-color: #f7f7f7; padding: 20px; border: 1px solid #ddd; box-shadow: 0px 0px 10px rgba(0,0,0,0.1);">
         <form action="{{url('upload_post')}}" method="POST" enctype="multipart/form-data"> @csrf<div> 
            
         <label style="font-weight: bold;">Description</label>

          <input type="text" name="description" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
         </div>
          <div> 
            <label style="font-weight: bold;">Upload an image</label> 
            <input type="file" name="image" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;"> 
        </div>
        <div>
        <input type="submit"  style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;"> 
        </div>
     </form> 
    </div> 
</x-app-layout>