<?php

 require_once __DIR__.'/bootstrap.php';
 $bgcolor=0;
 isset($_GET['color']) ? $bgcolor=1 : $bgcolor=0;


 $parameters = [
 'my_var' => '  This text becomes test case !!!',
 'bgcolor'=>$bgcolor
 ];

 // Render our view
//echo $twig->render('tag.html.twig', $parameters);
echo $twig->render('child.html.twig', $parameters);
