<?php

return [
    '#^/$#' => [
        'controller' => 'PageController',
        'action' => 'index',
    ],
    '#^/about$#' => [
        'controller' => 'PageController',
        'action' => 'about',
    ],
    '#^/contacts$#' => [
        'controller' => 'PageController',
        'action' => 'contacts',
    ],
    '#^/category/([a-zA-Z-]+)$#' => [
        'controller' => 'ProductController',
        'action' => 'showAllByCategory',
    ],
];