<?php


class Subscribe
{
    
    public static  function addEmail($email)
    {

            $db = Db::getConnection();
            $result = $db->prepare("INSERT INTO emails(id, email) VALUES (:email)");
            $result->bindParam(':email', $email);
            $result->execute();


        return $result;
    }

}