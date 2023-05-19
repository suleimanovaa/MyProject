<?php

declare(strict_types=1);

$uriParts = parse_url($_SERVER["REQUEST_URI"]);

switch ($uriParts['path'] ?? '') {
    case '':
    case '/':
        require_once __DIR__ . DIRECTORY_SEPARATOR . 'main.php';
        break;
    case '/1':
        require_once __DIR__ . DIRECTORY_SEPARATOR . 'sup.html';
        break;
    case '/2':
        require_once __DIR__ . DIRECTORY_SEPARATOR . 'sutach.html';
        break;
    case '/3':
        require_once __DIR__ . DIRECTORY_SEPARATOR . 'pahlava.html';
        break;
    default:
        http_response_code(404);
        require_once __DIR__.DIRECTORY_SEPARATOR.'public'.DIRECTORY_SEPARATOR.'404.php';
}