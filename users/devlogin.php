<?php
session_start();
if (isset($_SESSION['auth_characterid'])) {
    echo "Logged in. ".$_SESSION['auth_characterid'];
    exit;
} else {
    //Throw login redirect.
    $authsite='https://login.eveonline.com';
    $authurl='/oauth/authorize';
    $client_id='220ed3f1abeb40f284c4c7e60320e3c1';
    $redirect_uri="https://cruzados-chucu.c9users.io/Cruzados_Eve/users/devauthcallback.php";
    $state=uniqid();

    $redirecturl=$_SERVER['HTTP_REFERER'];
    
    if (!preg_match("#^https://cruzados-chucu.c9users.io/(.*)$#", $redirecturl, $matches)) {
        $redirecturl='/';
    } else {
        $redirecturl=$matches[1];
    }

    $redirect_to="https://cruzados-chucu.c9users.io/".$redirecturl;
    $_SESSION['auth_state']=$state;
    $_SESSION['auth_redirect']=$redirect_to;
    session_write_close();
    header(
        'Location:'.$authsite.$authurl
        .'?response_type=code&redirect_uri='.$redirect_uri
        .'&client_id='.$client_id.'&scope=&state='.$state
    );
    exit;
}
