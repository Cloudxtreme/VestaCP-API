<?php

/* Created by https://github.com/YannMartin/ */

class vestacp_api {

  function create_account($username, $password, $email, $package, $fist_name, $last_name) {

    require_once('src/server-info.php');

    $vst_command = 'v-add-user';

    $postvars = array(
    'user' => $vst_username,
    'password' => $vst_password,
    'returncode' => $vst_returncode,
    'cmd' => $vst_command,
    'arg1' => $username,
    'arg2' => $password,
    'arg3' => $email,
    'arg4' => $package,
    'arg5' => $fist_name,
    'arg6' => $last_name
    );

    $postdata = http_build_query($postvars);
    $postdata = http_build_query($postvars);
    $postdata = http_build_query($postvars);
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, 'https://' . $vst_hostname . ':8083/api/');
    curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $postdata);
    $answer = curl_exec($curl);

    if($answer == 0) {
        // Le serveur a bien executer
    } else {
        echo "Erreur: " .$answer. "\n";
    }

  }

  function add_domain($username, $domain) {

    require_once('src/server-info.php');

    $vst_command = 'v-add-domain';

    $postvars = array(
    'user' => $vst_username,
    'password' => $vst_password,
    'returncode' => $vst_returncode,
    'cmd' => $vst_command,
    'arg1' => $username,
    'arg2' => $domain
    );

    $postdata = http_build_query($postvars);
    $postdata = http_build_query($postvars);
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, 'https://' . $vst_hostname . ':8083/api/');
    curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $postdata);
    $answer = curl_exec($curl);

    if($answer == 0) {
        // Le serveur a bien executer
    } else {
        echo "Erreur: " .$answer. "\n";
    }

  }

  function create_database($username, $db_name, $db_user, $db_pass) {

    require_once('src/server-info.php');

    $vst_command = 'v-add-database';

    $postvars = array(
    'user' => $vst_username,
    'password' => $vst_password,
    'returncode' => $vst_returncode,
    'cmd' => $vst_command,
    'arg1' => $username,
    'arg2' => $db_name,
    'arg3' => $db_user,
    'arg4' => $db_pass
    );

    $postdata = http_build_query($postvars);
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, 'https://' . $vst_hostname . ':8083/api/');
    curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $postdata);
    $answer = curl_exec($curl);

    if($answer == 0) {
        // Le serveur a bien executer
    } else {
        echo "Erreur: " .$answer. "\n";
    }

  }

  function delete_user_account($username) {

    require_once('src/server-info.php');

    $vst_command = 'v-delete-user';

    $postvars = array(
    'user' => $vst_username,
    'password' => $vst_password,
    'returncode' => $vst_returncode,
    'cmd' => $vst_command,
    'arg1' => $username
    );

    $postdata = http_build_query($postvars);
    $postdata = http_build_query($postvars);
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, 'https://' . $vst_hostname . ':8083/api/');
    curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $postdata);
    $answer = curl_exec($curl);

    if($answer == 0) {
        // Le serveur a bien executer
    } else {
        echo "Erreur: " .$answer. "\n";
    }

  }

  function create_email_account($username, $domain, $account, $password) {

    require_once('src/server-info.php');

    $vst_command = 'v-add-mail-account';

    $postvars = array(
    'user' => $vst_username,
    'password' => $vst_password,
    'returncode' => $vst_returncode,
    'cmd' => $vst_command,
    'arg1' => $username,
    'arg2' => $domain,
    'arg3' => $account,
    'arg4' => $password
    );

    $postdata = http_build_query($postvars);
    $postdata = http_build_query($postvars);
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, 'https://' . $vst_hostname . ':8083/api/');
    curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $postdata);
    $answer = curl_exec($curl);

    if($answer == 0) {
        // Le serveur a bien executer
    } else {
        echo "Erreur: " .$answer. "\n";
    }

  }

}
