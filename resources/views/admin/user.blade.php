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

        <div style="position: relative; top: 60px; right: -150px;">

            <table class="table table-striped table-dark table-hover">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    @if ($item->usertype == 1)
                    <td>Not allowed</td>
                    @else
                    <td><a href="{{ url('deleteuser', $item->id) }}">Delet</a></td>

                    @endif
                </tr>
                    
                @endforeach
            </tbody>
        </table>
    </div>

    </div>
   @include('admin.adminscript')

</body>
</html>