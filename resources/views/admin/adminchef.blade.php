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
      
          <form action="{{ url('uploadchef') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="container">
            <div class="row">
              
              <div class="col-sm-4">
                <label for="name">Name</label>
                <input class="form-control mb-4" type="text" name="name" value="{{ old('name') }}" placeholder="Enter Your name" required>
              </div>
            
              <div class="col-sm-4">
                <label for="speciality">Speciality</label>
                <input class="form-control mb-4" type="text" name="speciality" value="{{ old('speciality') }}" placeholder="Enter Your Speciality" required>
              </div>
            
              <div class="col-sm-4">
                <label for="name">Image</label>
                <input class="form-control mb-4" type="file" name="image" value="{{ old('image') }}">
              </div>
            
              <div class="col-sm-8">
                <input class="form-control mb-4" type="submit" value="Save">
              </div>
            </div>
          </div>
          </form>

          <table class="table">
            <tr>
                <th>Name</th>
                <th>Speciality</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
            @foreach ($data as $chef)
            <tr>
              <td>{{ $chef->name }}</td>
              <td>{{ $chef->speciality }}</td>
              <td><img src="{{ asset('chefimage/' . $chef->image) }}" alt="" class="img img-fluid"></td>
                
                <td>
                    <form action="{{ url('deletechef', $chef->id) }}" method="POST">
                    <a class="btn btn-light p-2 m-1" href="{{ url('editchef', $chef->id) }}">Edit</a>
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