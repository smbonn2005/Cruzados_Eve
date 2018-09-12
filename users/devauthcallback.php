<?php
require_once('auth_functions.php');
require_once('secret.php');
session_start();

$useragent="App Cruzados, creada por alejandro@toporojo.es.";

// Make sure that the secret matches the one set before the redirect.
if (isset($_SESSION['auth_state']) and isset($_GET['state']) and $_SESSION['auth_state']==$_GET['state']) {
    $code=$_GET['code'];
    $state=$_GET['state'];


    //Do the initial check.
    $url='https://login.eveonline.com/oauth/token';
    $verify_url='https://login.eveonline.com/oauth/verify';
    $header='Authorization: Basic '.base64_encode($clientid.':'.$secret);
    $fields_string='';
    $fields=array(
                'grant_type' => 'authorization_code',
                'code' => $code
            );
    foreach ($fields as $key => $value) {
        $fields_string .= $key.'='.$value.'&';
    }
    rtrim($fields_string, '&');
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array($header));
    curl_setopt($ch, CURLOPT_POST, count($fields));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
    $result = curl_exec($ch);

    if ($result===false) {
        auth_error(curl_error($ch));
    }
    curl_close($ch);
    $response=json_decode($result);
    $auth_token=$response->access_token;
    $ch = curl_init();

// Get the Character details from SSO

    $header='Authorization: Bearer '.$auth_token;
    curl_setopt($ch, CURLOPT_URL, $verify_url);
    curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array($header));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
    $result = curl_exec($ch);
    if ($result===false) {
        auth_error(curl_error($ch));
    }
    curl_close($ch);
    $response=json_decode($result);


    if (!isset($response->CharacterID)) {
        auth_error('No character ID returned');
    }


    $_SESSION['auth_characterid']=$response->CharacterID;
    $_SESSION['auth_id']=$userid;
    $_SESSION['auth_charactername']=$response->CharacterName;
    $_SESSION['auth_userdetails']=json_encode($userdetails);
    $_SESSION['auth_characterhash']=$response->CharacterOwnerHash;
    session_write_close();
    header('Location:'. $_SESSION['auth_redirect']);
    
    exit;

} else {
    echo "Fallo, no hay state, te has logueado??";
    error_log($_SESSION['auth_state']);
    error_log($_GET['state']);
}
