<?php

return [
    'connection' => [
        'dsn'      => sprintf('mysql:host=%s;dbname=%s', env('DB_HOST'), env('DB_DATABASE')),
        'username' => env('DB_USERNAME'),
        'password' => env('DB_PASSWORD'),
    ],
    'options' => [
        \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_OBJ,
        \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
    ],
];
