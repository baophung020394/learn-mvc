<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <form action="?action=doAdd" method="POST">
                <label>Title</label>
                <input type="text" name="title" class="form-control">
                <label>Content</label>
                <textarea class="form-control" name="content" cols="60" rows="10"></textarea>
                <label>Url Thumbnail</label>
                <input type="text" name="url_thumbnail" class="form-control">
                <label>Tag</label>
                <input type="text" name="tag" class="form-control">
                <button type="submit" class="btn btn-primary mt-3" name="ok">Add</button>
            </form>
        </div>
    </div>
</body>

</html>