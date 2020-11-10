<?php
class PostView
{
    public function showAllPosts($posts) {
        require_once('templates/posts.php');
    }

    public function formAddPost() {
        require_once('templates/formaddpost.php');
    }

    public function notifyAddPost($status) {
        if($status) {
            echo 'Add success, <a href="http://localhost/learn-mvc/?action=list" >Click to go home</a>';
        } else {
            echo 'Add fail';
        }
    }
}
