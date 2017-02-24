<?php

include_once ROOT . '/models/Blog.php';

class SiteController
{

    public function actionIndex()
    {
            $blogList = [];
            $blogList = Blog::getBlogList();
        
        
        require_once(ROOT . '/views/site/index.php');

        return true;
    }

}
