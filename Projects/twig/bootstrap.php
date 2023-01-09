<?php

 // Load our autoloader
 require_once __DIR__.'/vendor/autoload.php';

 // Specify our Twig templates location
 $loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/templates');
 // or a simple PHP function

$filter = new \Twig\TwigFilter('vipul', function ($string) {

    return strtoupper($string);
});
$function = new \Twig\TwigFunction('vip', function ($v) {
    // ...
    return $v;
});
$test = new \Twig\TwigTest('viptest', function ($s) {
    // ...
     if (isset($s) && $s == 'red') {
        return true;
    }
    else{
        return false;
    }
});

 // Instantiate our Twig
 $twig = new \Twig\Environment($loader);
 $twig->addFilter($filter);
 $twig->addFunction($function);
 $twig->addTest($test);


