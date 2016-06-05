<?php

require_once 'vendor/autoload.php';
require_once 'src\Blog.php';

use RestService\Server;

Server::create('/blog', 'Blog')
    ->collectRoutes()
    ->run();