<?php
/*
    Template Name: Login
    MEU Theme | MEU Page Template
	Copyright: 2020, Jan Hamara, www.janhamara.com
    Wordpress v5.4
 */


require 'vendor/autoload.php';
use Auth0\SDK\Auth0;

$auth0 = new Auth0([
  'domain' => 'meu-dev.eu.auth0.com',
  'client_id' => 'F7SVHAQH1LDYVJKOq6OR95UpdaE4dN7e',
  'client_secret' => 'H66C9oiuJdLv3-jhhDacXRfPqYdjGfDktAZ-6CjJmqqgkoqGG3Q8CX3I1zyKEgX9',
  'redirect_uri' => 'https://www.meubratislava.eu',
  'scope' => 'openid profile email',
]);

$auth0->login();
?>