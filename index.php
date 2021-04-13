<?php 
error_reporting(E_ALL);
ini_set("display_errors", "on");
// phpinfo();
// exit;
// include composer autoload
require 'vendor/autoload.php';

// import the Intervention Image Manager Class
use Intervention\Image\ImageManager;

// create an image manager instance with favored driver
$manager = new ImageManager(array('driver' => 'imagick'));

// to finally create image instances
$city = $manager->make('images/city.jpg')->resize(1024, 768)->blur(5);
$logo = $manager->make('images/logo.png')->resize(320, 240);
$city->insert($logo, 'center');
$city->save('images/fon.jpg');