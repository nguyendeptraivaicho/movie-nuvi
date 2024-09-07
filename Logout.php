<?php

require 'SimpleTut/Connections/Connections.php';
include "check.php";

session_destroy();

header( "Location: index.php");

?>