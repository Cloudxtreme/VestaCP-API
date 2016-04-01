<?php

require_once('vestacp_api/class_vestacp.php');

// Création d'un compte
$username = 'exemple';
$password = 'exemple';
$email = 'exemple@exemple.fr';
$package = 'exemple';
$fist_name = 'exemple';
$last_name = 'exemple';

{

  $action = new vestacp_api;
  $action->create_account($username, $password, $email, $package, $fist_name, $last_name);

}

// Ajout d'un domaine
$username = 'exemple';
$domain = 'exemple.com';

{

  $action = new vestacp_api;
  $action->add_domain($username, $domain);

}

// Créer une base de donnée
$username = 'exemple';
$db_name = 'exemple';
$db_user = 'exemple';
$db_pass = 'exemple';

{

  $action = new vestacp_api;
  $action->create_database($username, $db_name, $db_user, $db_pass);

}

// Supprimer un compte
$username = 'exemple';

{

  $action = new vestacp_api;
  $action->delete_user_account($username);

}

// Création d'un compte email
$username = 'exemple';
$domain = 'exemple.com';
$account = 'contact';
$password = 'exemple';

{

  $action = new vestacp_api;
  $action->create_email_account($username, $domain, $account, $password);

}
