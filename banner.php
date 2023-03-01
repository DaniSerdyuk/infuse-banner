<?php
use App\BannerApplication;
use Dotenv\Dotenv;

header("Content-Type: image/jpeg");

require __DIR__.'/vendor/autoload.php';


Dotenv::createImmutable(__DIR__)->load();

$app = new BannerApplication($_SERVER);

echo $app
    ->saveStatistic()
    ->getImage();

