<?php

 require_once __DIR__.'/bootstrap.php';

 $parameters = [
 'my_var' => '  This text becomes test case !!!'
 ];

 // Render our view
//echo $twig->render('tag.html.twig', $parameters);
// echo $twig->render('TESTtest.html.twig', $parameters);
echo $twig->render('form.twig', $parameters);

//echo $twig->render('use.twig', $parameters);

