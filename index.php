<?php

declare(strict_types=1);

namespace App;

use Exception;
use Error;

require_once('src/Controller/NoteController.php');
require_once('src/Utility/debug.php');
require_once('src/request.php');

$db_config = require_once('config/config.php');

try{
$request = new Request($_GET, $_POST);
(new NoteController($request, $db_config))->run();
} catch (Error|Exception $e){
  echo '<h1>An error happend :(</h1>';
  echo 'We got an error. Try again later.';
}