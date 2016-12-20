<?php

function call($controller, $action) {
    require_once('controllers/' . $controller . '_controller.php');

    switch ($controller) {
        case 'pages':
            require_once('models/post.php');
            $controller = new PagesController();
            break;
        case 'posts':

            // model to query the database
            require_once('models/post.php');
            $controller = new PostsController();
            break;
    }

    $controller->{ $action }();
}

// entry for the new controller and its actions
$controllers = array(
    'pages' => ['home', 'error','disconnect','connect'],
    'posts' => ['index', 'show','send']);

if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
        call($controller, $action);
    } else {
        call('pages', 'error');
    }
} else {
    call('pages', 'error');
}
