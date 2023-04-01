<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    @include('admin.admincss')
  </head>
  <body>


    <div class="container-scroller">

    @include('admin.navbar')

    <div class="container w-50 my-5 text-center">
    <div class="row text-center text-white">
      <form action="{{ url('updatefood', $data->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="container">
                <div class="row">
                    <div class="col-sm-5">
                        <label for="title">Title</label>
                        <input class="form-control mb-4" type="text" id="title" name="title" value="{{ $data->title }}" required>
                    </div>
                    <div class="col-sm-5">
                        <label for="price">Price</label>
                        <input class="form-control mb-4" type="number" id="price" name="price" value="{{ $data->price }}" required>
                    </div>
                    <div class="col-sm-5">
                        <label for="description">Description</label>
                        <input class="form-control mb-4" type="text" id="description" name="description" value="{{ $data->description }}" required>
                    </div>
                    <div class="col-sm-5">
                        <label for="image">Old Image</label>
                        <img src="{{ asset('foodimage/'.$data->image) }}" alt="" >
                    </div>
                    <div class="col-sm-5">
                        <label for="image">New Image</label>
                        <input class="form-control mb-4" type="file" id="image" name="image" required>
                    </div>
                    <div class="col-sm-10">
                        <input class="form-control mb-4" type="submit" value="Update">
                    </div>
                    
                </div>
            </div>
          
        </form>
    </div>
    </div>
    </div>
    
   @include('admin.adminscript')

</body>
</html>