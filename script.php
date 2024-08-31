<?php 

$base_grant_url = 'https://n27.network-auth.com/splash/grant';
$user_continue_url = 'http://www.google.com';

$grant_url=$base_grant_url . "?continue_url=" . urlencode($user_continue_url);

header("location: $grant_url");
 ?>