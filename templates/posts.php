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
            <?php 
                if(isset($posts)) {
                    echo ' vl';
                } else {
                    echo 'cc';
                }
            ?>
            <?php
            foreach ($posts as $post) :
            ?>
                <div class="col-12 col-md-4 card" style="width: 16rem;">
                    <img src="<?php echo $post['url_thumbnail'] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $post['title'] ?></h5>
                        <p class="card-text"><?php echo $post['content'] ?></p>
                        <p class="card-text">Ngày đăng: <?php echo $post['time'] ?></p>
                        <p class="card-text">Tag: #<?php echo $post['tag'] ?></p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>