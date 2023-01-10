<?php

 require_once __DIR__.'/bootstrap.php';

 $parameters = [
 'my_var' => '  This text becomes test case !!!',
 'arr'=>['one'=>12,'two'=>23]
 ];

 // Render our view
//echo $twig->render('tag.html.twig', $parameters);
// echo $twig->render('TESTtest.html.twig', $parameters);
echo $twig->render('form.twig', $parameters);

//echo $twig->render('use.twig', $parameters);

