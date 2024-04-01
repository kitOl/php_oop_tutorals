<?php

class User
{

  public $username;
  protected $email;
  public $role = 'member';

  public function __construct($username, $email)
  {
    $this->username = $username;
    $this->email = $email;
  }

  public function addFriend()
  {
    return "$this->email added a new friend";
  }

  public function message() {
    return "$this->email sent a new message";
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

class AdminUser extends User
{
  public $level;
  public $role = 'admin';

  public function __construct($username, $email, $level) 
  {
    $this->level = $level;
    parent::__construct($username, $email);
  }

  public function message() {
    return "$this->email, an admin, sent a new message";
  }
}

$userOne = new User('mario', 'mario@ya.ru');
$userTwo = new User('dan', 'dan@ya.ru');
$userThree = new AdminUser('luigi', 'luigi@mail.ru', 5);

echo "userThree email is " . $userThree->getEmail(), "\n";
echo "userThree level is " . $userThree->level, "\n";
echo "userThree role is " . $userThree->role, "\n";

echo "userOne role is " . $userOne->role, "\n";

echo $userOne->message(), "\n";
echo $userTwo->message(), "\n";
echo $userThree->message(), "\n";

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