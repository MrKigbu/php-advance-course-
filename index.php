<?php

use App\Core\Session;

require 'vendor/autoload.php'; 

$session = new Session;
$session->set('name', 'John Doe');
echo $session->get('name');

echo'<prev>';
var_dump(App\Core\Request::uri());
echo '</pre>';