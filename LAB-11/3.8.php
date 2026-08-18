<?php

if(isset($_COOKIE["user"]))
{
    echo "Welcome Back! Repeated User";
}
else
{
    setcookie("user", "Md Shamshad", time()+3600);
    echo "Welcome! New User";
}

?>