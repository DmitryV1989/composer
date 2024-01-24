<?php
require $_SERVER['DOCUMENT_ROOT'] . "/vendor/autoload.php";

dump("Hello");

$user = new user;
dump($user->digit);

use Intervention\Image\ImageManager;

// create image manager with desired driver
$manager = new ImageManager(
    new Intervention\Image\Drivers\Gd\Driver()
);

// open an image file
$image = $manager->read('image1.jpg');

// resize image instance
$image->resize(height: 100);

// insert a watermark
//$image->place('images/watermark.png');

// encode edited image
$encoded = $image->toJpg();

// save encoded image
$encoded->save('image2.jpg');





// TODO: выработать .gitignore, загнать в репозиторий , деплой на продакшене , после деплоя заново установить пакеты
