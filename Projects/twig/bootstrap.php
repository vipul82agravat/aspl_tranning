<?php

 // Load our autoloader
 require_once __DIR__.'/vendor/autoload.php';

 // Specify our Twig templates location
 $loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/templates');
 // or a simple PHP function

//  $loader = new \Twig\Loader\ArrayLoader([
//     'index' => 'Hello {{ name }}!',
// ]);

 // Specify our Twig templates custom Tag Count
$customtag= new \Twig\TwigFilter('customtagcount',function ($string) {

            return count($string);
});
// // Specify our Twig templates custom Filter for Filter Upper Case
$filter = new \Twig\TwigFilter('customFilterUpperCase', function ($string) {

    return strtoupper($string);
});

// Specify our Twig templates custom function for  FunctionReturn values
$function = new \Twig\TwigFunction('CustomFunctionReturn', function ($v) {
    // ...
    return $v;
});

// Specify our Twig templates custom Test for  customTestColor check values

$test = new \Twig\TwigTest('customTestColor', function ($s) {
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
 $twig->addFilter($customtag);
 $twig->addFunction($function);
 $twig->addTest($test);


