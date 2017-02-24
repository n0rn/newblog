<?php

class Blog
{

    public static function getBlogList() {
 
        $db = Db::getConnection();
        
        $blogList = [];
        
        $result = $db->query('SELECT id, title, text, author '
                . 'FROM post '
                . 'ORDER BY date DESC '
                . 'LIMIT 5');

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
