<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.admincss')
  </head>
  <body>
    <div class="container-scroller">

    @include('admin.navbar')
        
        <div class="container w-50 my-5 text-center">
            <div class="row text-center text-white">
            
            <form action="{{ url('uploadfood') }}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-5">
                                <label for="title">Title</label>
                                <input class="form-control mb-4" type="text" id="title" name="title" placeholder="Title" value="{{ old('title') }}" required>
                            </div>
                            <div class="col-sm-5">
                                <label for="price">Price</label>
                                <input class="form-control mb-4" type="number" id="price" name="price" placeholder="Price" value="{{ old('price') }}" required>
                            </div>
                            <div class="col-sm-5">
                                <label for="description">Description</label>
                                <input class="form-control mb-4" type="text" id="description" name="description" placeholder="Description" value="{{ old('description') }}" required>
                            </div>
                            <div class="col-sm-5">
                                <label for="image">Image</label>
                                <input class="form-control mb-4" type="file" id="image" name="image" required>
                            </div>
                            <div class="col-sm-10">
                                <input class="form-control mb-4" type="submit" value="Save">
                            </div>
                            
                        </div>
                    </div>
                </form>

                <table class="table">
                    <tr>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($data as $food)
                    <tr>
                        <td>{{ $food->title }}</td>
                        <td>{{ $food->price }}</td>
                        <td>{{ $food->description }}</td>
                        <td><img src="{{ asset('foodimage/' . $food->image) }}" alt="" class="img img-fluid"></td>
                        
                        <td>
                            <form action="{{ url('deletefood', $food->id) }}" method="POST">
                            <a class="btn btn-light p-2 m-1" href="{{ url('editfood', $food->id) }}">Edit</a>
                            @csrf
                            <input class="btn btn-light p-2 m-1" type="submit" value="Delet">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>

    </div>

   @include('admin.adminscript')

</body>
</html>