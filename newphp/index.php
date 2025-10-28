<?php
$pages = [
    "/" => [
        "title" => "Головна",
        "file"  => "home.php"
    ],
    "/login" => [
        "title" => "Логін",
        "file"  => "login.php"
    ],
];

$url = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

if (isset($pages[$url])) {
    $page = $pages[$url];
} else {
    $page = ["title" => "Сторінка не знайдена", "file" => "404.php"];
}

$title = $page["title"];
include "pages/" . $page["file"];
