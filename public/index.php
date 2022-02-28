<?php

if( !session_id() ) { session_start(); session_regenerate_id(); }

require_once '../app/init.php';

$app = new App;