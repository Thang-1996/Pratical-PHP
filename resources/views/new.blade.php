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
<form method="post" action="{{url("/save-book")}}">
    @method("POST")
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Title</label>
        <input type="text" class="form-control" name="title" placeholder="Enter Book Title">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">ISBN</label>
        <input type="text" class="form-control" name="isbn" placeholder="Enter Book ISBN">
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Pub_Year</label>
        <input type="text" class="form-control" name="pub_year" placeholder="Enter Book Pub_Year">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Avaiable</label>
        <input type="text" class="form-control" name="avaiable" placeholder="Enter Book avaiable">
    </div>
    <div class="form-group">
        <label>Authors</label>
        <select name="author_id" class="form-control">
            @foreach($authors as $author)
                <option value="{{$author->__get("id")}}">{{$author->__get("author_name")}}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>
