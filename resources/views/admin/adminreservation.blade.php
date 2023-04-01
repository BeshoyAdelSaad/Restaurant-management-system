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
                <table class="table text-white my-4 bordered">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>phone</th>
                        <th>Guest</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Message</th>
                    </tr>
                    @foreach ($data as $reserve)
                    <tr>
                        <td>{{ $reserve->name }}</td>
                        <td>{{ $reserve->email }}</td>
                        <td>{{ $reserve->phone }}</td>
                        <td>{{ $reserve->guest }}</td>
                        <td>{{ $reserve->date }}</td>
                        <td>{{ $reserve->time }}</td>
                        <td>{{ $reserve->message }}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    
   @include('admin.adminscript')

</body>
</html>