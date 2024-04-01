<?php

class User
{

  public $username;
  private $email;

  public function __construct($username, $email)
  {
    $this->username = $username;
    $this->email = $email;
  }

  public function addFriend()
  {
    return "$this->email added a new friend";
  }

  public function getEmail()
  {
    return $this->email;
  }

  public function setEmail($email)
  {
    if (strpos($email, '@') > -1) {
      $this->email = $email;
    }
  }
}

$userOne = new User('mario', 'mario@ya.ru');
$userTwo = new User('dan', 'dan@ya.ru');

echo "the class the object \$userOne is " . get_class($userOne) . "\n";

echo "userOne $userOne->username\n";
echo $userOne->getEmail() . "\n";
echo $userOne->addFriend() . "\n";

echo "userTwo $userTwo->username \n";
echo $userTwo->getEmail() . "\n";
echo $userTwo->addFriend() . "\n";


echo "features the Class:\n";
print_r(get_class_vars('User')); // features the Class
echo "methods the Class:\n";
print_r(get_class_methods('User')); // methods the Class

$userOne->setEmail('nikita@mail.ru');
echo "\n";
echo "userOne email now is " . $userOne->getEmail(), "\n";


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