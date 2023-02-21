<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>
    <style>
        body{
            background: black!important;
        }
        table{
            background: white!important;
            margin-top: 50px;
        }
    </style>
    <body class="antialiased">
        <div class="container">
            <div class="text-right">
                <a href="create" class="btn btn-success">Create New List</a>
            </div>
        <table class="table">
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Created At</td>
                <td>Action</td>
            </tr>
                @foreach($todo_arr as $td)
            <tr>
                <td>{{$td->id}}</td>
                <td>{{$td->name}}</td>
                <td>{{$td->created_at}}</td>
                <td><a href="delete/{{$td->id}}">Delete</a> | <a href="edit/{{$td->id}}">Edit</a></td>
                
            </tr>
            @endforeach
        </table>
    </div>
    </body>
</html>