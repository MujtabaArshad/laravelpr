<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
        <div class="container p-5">
            <div class="col-md-10">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Password</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($selectallData as $std)
                            <tr>
                                <td>{{$std['name']}}</td>
                                <td>{{$std['email']}}</td>
                                <td>{{$std['password']}}</td>
                                <td><a href="edituser/{{$std['id']}}" class="btn btn info" >Edit</a></td>
                                <td><a href="remove/{{$std['id']}}" class="btn btn danger">Remove</a></td>
                            </tr>
                          @endforeach
                        </tbody>
                    </table>
            </div>
        </div>
     </body>
</html>