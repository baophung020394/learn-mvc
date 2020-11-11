<?php

class PostController
{
    public function getPost()
    {
        // Goi Model => Function getPost() tuong tac voi database va lay tat ca bai viet
        require_once('models/PostModel.php');
        $postModel = new PostModel();
        $posts = $postModel->getPost();
        require_once('views/PostView.php');
        $postView = new PostView();
        $postView->showAllPosts($posts);
    }

    public function addPost()
    {
        require_once('views/PostView.php');
        $postView = new PostView();
        $postView->formAddPost();
    }

    public function doAdd() {
        $title = $_POST['title'];
        $content = $_POST['content'];
        $urlthumbnail = $_POST['url_thumbnail'];
        $tag = $_POST['tag'];
        
        $post = array(
            'title' => $title,
            'content' => $content,
            'url_thumbnail' => $urlthumbnail,
            'tag' => $tag
        );

        require_once('models/PostModel.php');
        $postModel = new PostModel();
        $status = $postModel->addpost($post);

        require_once('views/PostView.php');
        $postView = new PostView();
        $postView->notifyAddPost($status);

    }
}
