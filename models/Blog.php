<?php

class Blog
{
   public static function getPostById($id)
   {
    $id = intval($id);
       
       if($id) {
           $db = Db::getConnection();
           $result = $db->query('SELECT * FROM post WHERE id ='. $id);
           $result->setFetchMode(PDO::FETCH_ASSOC);
           $postItem = $result->fetch();
           return $postItem;
       }
   }
    
    
    public static function getBlogList() {
 
        $db = Db::getConnection();
        
        $blogList = [];
        
        $result = $db->query('SELECT id, title, text, author FROM post');

        $i = 0;
        while($row = $result->fetch()) {
            $blogList[$i]['id'] = $row['id'];
            $blogList[$i]['title'] = $row['title'];
            $blogList[$i]['text'] = $row['text'];
            $blogList[$i]['author'] = $row['author'];
            $i++;
        }

        return $blogList;
    }


}
