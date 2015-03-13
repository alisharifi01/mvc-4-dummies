<?php
Class User
{
    public static function test(){
        $users=DBHandler::getOne("SELECT password FROM users WHERE id>:id",array(':id' => 3));
        return $users;
    }
}
?>