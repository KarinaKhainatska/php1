<?php
declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Level;
use Symfony\Component\VarDumper\VarDumper;
use Faker\Factory;

$log = new Logger('app_logger');

$log->pushHandler(new StreamHandler(__DIR__ . '/app.log', Level::Info));
$log->log(Level::Info, 'Проєкт PHP з Composer успішно створено!');

$data = [
    'name' => 'Карина',
    'age' => 20,
    'skills' => ['PHP', 'JS']
];

VarDumper::dump($data);

$faker = Factory::create();
echo "Випадкове ім'я: " . $faker->name() . PHP_EOL;
echo "Випадковий email: " . $faker->email() . PHP_EOL;
