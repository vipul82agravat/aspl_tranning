<?php

 require_once __DIR__.'/bootstrap.php';

 $parameters = [
 'my_var' => ' vip Hello world !!!'
 ];

 // Render our view
 echo $twig->render('helloworld.html.twig', $parameters);
