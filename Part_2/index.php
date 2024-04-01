<?php

  class User {

    public $username = 'ivan';
    public $email = 'ivan@ya.ru';

    public function addFriend() {
      return "$this->email added a new friend";
    }


  }

  $userOne = new User();
  $userTwo = new User();

  echo "the class the object \$userOne is " . get_class($userOne) . "\n";
  
  echo "userOne $userOne->username\n";
  echo $userOne->email . "\n";
  echo $userOne->addFriend() . "\n";
  
  $userTwo->username = 'Oleg';
  $userTwo->email = 'oleg@ya.ru';
  echo "userTwo $userTwo->username \n";
  echo $userTwo->email . "\n";
  echo $userTwo->addFriend() . "\n";
    

  echo "features the Class:\n";
  print_r(get_class_vars('User')); // features the Class
  echo "methods the Class:\n";
  print_r(get_class_methods('User')); // methods the Class


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP Tutoral</title>
</head>
<body>
    
</body>
</html>