<?php
require 'config/social_config.php';
$wpcc_state = md5( mt_rand() );
session_start();
$_SESSION[ 'wpcc_state' ] = $wpcc_state;
 
$params = array(
  'response_type' => 'code',
  'client_id' => CLIENT_ID,
  'state' => $wpcc_state,
  'redirect_uri' => REDIRECT_URL
);
 
$url_to = AUTHENTICATE_URL .'?'. http_build_query( $params );
header("Location:".$url_to);
?>