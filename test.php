<?php

class User {
  public $name;
  public $surname;
  public $email;
  public $age;

  public function printInfoUser($name, $surname, $email, $age){
    echo
    '<b>Name: </b>' . $name . '<br>' .
    '<b>Surname: </b>' . $surname  . '<br>' .
    '<b>Email: </b>' . $email . '<br>' .
    '<b>Age: </b>' . $age . '<br>'.
    '<hr>';
  }
}

$users = [
  [
    'name' => 'Aldo',
    'surname' => 'Rossi',
    'email' => 'aldo@email.com',
    'age' => 31
  ],
  [
    'name' => 'Rosy',
    'surname' => 'Romeo',
    'email' => 'aldo@email.com',
    'age' => 31
  ],
  [
    'name' => 'Enzo',
    'surname' => 'Canta',
    'email' => 'aldo@email.com',
    'age' => 31
  ]
];


 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>

     <h1>BLOG Boolean</h1>
     <?php
     foreach ($users as $user) {
       $userBlog = new User();
       $userBlog->name = $user['name'];
       $userBlog->surname = $user['surname'];
       $userBlog->email = $user['email'];
       $userBlog->age = $user['age'];
       $userBlog->printInfoUser($userBlog->name, $userBlog->surname, $userBlog->email, $userBlog->age );
     }
     ?>



   </body>
 </html>
