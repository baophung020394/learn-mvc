<?php
require_once('DbModel.php');

class PostModel extends DbModel 
{
   
    public function getPost()
    {

        $con = $this->connect();
        $result = $con->query('SELECT * FROM mvc_post');

        $posts = array();

        if ($result->num_rows > 0) {
            while ($post = mysqli_fetch_assoc($result)) {
                $posts[] = $post;
            }
        }
        // echo '<pre>';
        // var_dump($posts);
        // echo '</pre>';

        return $posts;
    }

    public function addPost($post)
    {
        $con = $this->connect();

        $time = date('Y-m-d H:i:s');

        $sql = "INSERT INTO `mvc_post` (`id`, `title`, `content`, `time`, `url_thumbnail`, `tag`) VALUES (
            NULL, 
            '" . $post['title'] . "',
            '" . $post['content'] . "',
            '" . $time . "',
            '" . $post['url_thumbnail'] . "',
            '" . $post['tag'] . "'
            )
        ";

        $result = $con->query($sql);

        // if($result) {
        //     echo 'success';
        // } else {
        //     echo 'fail';
        // }

        return $result;
    }
}
