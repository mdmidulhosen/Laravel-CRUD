<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- font-awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    

 <div class="container p-5">
 <table class="table table-dark">
  <thead>
    <tr >
      <th scope="col">#</th>
      <th scope="col">Last Name</th>
      <th scope="col">Father Name</th>
      <th scope="col">Mother Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1;?>
    @foreach($users as $user)
    <tr>
      <td scope="row">{{$i++}}</td>
      <td >{{$user->l_name}}</td>
      <td>{{$user->father_name}}</td>
      <td>{{$user->mother_name}}</td>
      <td>{{$user->number}}</td>
      <td>{{$user->email}}</td>
      <td><a href="{{route('editUser', $user->id)}}" style="cursor:pointer; margin-right:10px;"><i class="fa-sharp fa-solid fa-pen-to-square text-success"></i> </a> <a href="{{route('deleteUser', $user->id)}}"><i class="fa-solid text-danger fa-trash"></i></a></td>
    </tr>
    @endforeach
  </tbody>
</table>
 </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
