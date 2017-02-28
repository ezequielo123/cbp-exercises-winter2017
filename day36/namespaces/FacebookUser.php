<?php

class FacebookUser implements UserInterface
{
    
    public function getUsername()
    {

    }

    public function setUsername(string $username)
    {

    }

    public function print_user_username()
    {
        
    }
}

$user = new FacebookUser();
$user->setUsername('Roger');
echo $user->getUsername();