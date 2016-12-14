<?php

const NOT_FOUND = '404';

$__routes = [
    'welcome' => 'User@welcome',
    'login' => 'Auth@login',
    'profile' => 'User@profile',
    NOT_FOUND => 'Auth@notFound'
];