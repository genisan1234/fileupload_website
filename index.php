<?php

$request = $_SERVER['REQUEST_URI'];

    if(preg_match('^\/upload_website\/about[\/]?$^',$request)){
        require __DIR__ . '/views/about.php';
    }
    else if(preg_match('^\/upload_website\/contact[\/]?$^',$request)){
        require __DIR__ . '/views/contact.php';
    }  
    else if(preg_match('^\/upload_website\/login[\/]?$^',$request)){
        require __DIR__ . '/views/login.php';
    }
    else if(preg_match('^\/upload_website\/register[\/]?$^',$request)){
        require __DIR__ . '/views/register.php';
    }
    else if(preg_match('^\/upload_website\/validate_login[\/]?$^',$request)){
        require __DIR__ . '/views/validate_login.php';
    }
    else if(preg_match('^\/upload_website\/insert_user[\/]?$^',$request)){
        require __DIR__ . '/views/insert_user.php';
    }
    else if(preg_match('^\/upload_website\/users\?username=[a-zA-Z0-9_]+$^',$request)){
        require __DIR__ . '/views/user.php';
    }
    else if(preg_match('^\/upload_website\/login\?error=[a-zA-z0-9%,]+$^',$request)){
        require __DIR__ . '/views/login.php';
    }
    else if(preg_match('^\/upload_website\/register\?error=[a-zA-z0-9%,]+$^',$request)){
        require __DIR__ . '/views/register.php';
    }
    else if(preg_match('^\/upload_website\/logout[\/]?$^',$request)){
        require __DIR__ . '/views/logout.php';
    }
    else if(preg_match('^\/upload_website\/upload[\/]?$^',$request)){
        require __DIR__. '/views/upload.php';
    }
    else if(preg_match('^\/upload_website\/$^',$request)){
        require __DIR__ . '/views/index.php';
    } 
    else{
        http_response_code(404);
        require __DIR__ . '/views/404.php';

    }
?>