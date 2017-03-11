<?php

include_once ROOT . '/models/Blog.php';
include_once ROOT . '/models/Subscribe.php';

class SiteController
{

    public function actionIndex()
    {
            $blogList = [];
            $blogList = Blog::getBlogList();

        if(isset($_POST['save'])) {

            $email = $_POST['email'];

            if(isset($email)) {
                Subscribe::addEmail($email);
            }
        }
        
        require_once(ROOT . '/views/site/index.php');

        return true;
    }


    public function actionView($id)
    {
        if($id) {
            $postItem = Blog::getPostById($id);
            require_once(ROOT. '/views/site/view.php');
        }
        return true;
    }

}
