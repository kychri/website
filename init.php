<?php

session_start();

require "cPanel/cPanel.php";
require "vendor/autoload.php";

// Twig
$loader = new Twig_Loader_Filesystem(__Dir__ . "/views");
$twig = new Twig_Environment($loader);

// cPanel
$cPanel = new cPanel("nekld1fjbirl", "Chosen96#", "107.180.40.57");
