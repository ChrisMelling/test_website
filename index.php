<?php

require 'libs/Bootstrap.php';
require 'libs/Controller.php';
require 'libs/Model.php';
require 'libs/View.php';

require 'libs/Database.php';
require 'libs/Session.php';

require 'util/Auth.php';

require 'config/paths.php';

$app = new Bootstrap();
$app->init();