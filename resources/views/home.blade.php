<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>
<body>
<form  role="form" action="{{url("/search")}}" method="POST">
    @method("POST")
    @csrf
    <div class="form-group" style="width: 30%;margin: 0 auto;display: flex;align-content: center">
        <input type="text" name="bookname" class="form-control" id="book" placeholder="Search....">
        <button class="btn btn-dark">Search</button>
    </div>
</form>
<div class="mb-0 col-lg-3 float-right d-flex justify-content-end">
    <a href="{{url("/new-book")}}" class="btn btn-primary">Create</a>
</div>
<table class="table">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Title</th>
        <th scope="col">ISBN</th>
        <th scope="col">PUB_Year</th>
        <th scope="col">Avalible</th>
        <th scope="col">Author_id</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
    </tr>
    </thead>
    @foreach($books as $book)
    <tbody>
    <tr>
        <th scope="row">{{$book->__get("id")}}</th>
        <td>{{$book->__get("title")}}</td>
        <td>{{$book->__get("ISBN")}}</td>
        <td>{{$book->__get("pub_year")}}</td>
        <td>{{$book->__get("avaiable")}}</td>
        <td>{{$book->__get("author_id")}}</td>
        <td> <a href="{{url("/edit-book/{$book->__get("id")}")}}" class="btn btn-outline-dark">Edit</a></td>
        <td>
            <form action="{{url("/delete-book/{$book->__get("id")}")}}" method="post">
                @method("DELETE")
                @csrf
                <button type="submit" onclick="return confirm('Are you sure?');" class="btn btn-outline-dark">Delete</button>
            </form>
        </td>
    </tr>
    </tbody>
    @endforeach
</table>
</body>
</html>
