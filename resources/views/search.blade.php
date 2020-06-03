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
<div class="searchBook">
    <form method="post" action="{{url("/search")}}">
        @method("GET")
        @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">Search Book</label>
            <input type="email" class="form-control" name="title">
        </div>
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
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
        <th scope="col">Created_at</th>
        <th scope="col">Updated_at</th>
    </tr>
    </thead>
    @foreach($searchBooks as $searchbook)
        <tbody>
        <tr>
            <th scope="row">{{$searchbook->__get("id")}}</th>
            <td>{{$searchbook->__get("title")}}</td>
            <td>{{$searchbook->__get("ISBN")}}</td>
            <td>{{$searchbook->__get("pub_year")}}</td>
            <td>{{$searchbook->__get("avaiable")}}</td>
            <td>{{$searchbook->__get("author_id")}}</td>
            <td>{{$searchbook->__get("created_at")}}</td>
            <td>{{$searchbook->__get("updated_at")}}</td>
        </tr>
        </tbody>
    @endforeach
</table>
</body>
</html>
