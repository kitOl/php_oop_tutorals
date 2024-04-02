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

  public function __destruct()
  {
    echo "the user $this->username was removed\n";
  }

  public function __clone()
  {
    $this->username = $this->username . "(cloned)";
  }

  public function addFriend()
  {
    return "$this->email added a new friend";
  }

  public function message()
  {
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

  public function message()
  {
    return "$this->email, an admin, sent a new message";
  }
}

$userOne = new User('mario', 'mario@ya.ru');
$userTwo = new User('dan', 'dan@ya.ru');
$userThree = new AdminUser('luigi', 'luigi@mail.ru', 5);

// unset($userTwo);
$userFour = clone $userOne;
echo "userFour " . $userFour->username, "\n";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP OOP Tutoral</title>
</head>

<body>
  <h1>Magic methods</h1>
  <p>
    <a href="https://www.php.net/manual/en/language.oop5.magic.php">Magic methods</a>
  </p>
</body>

</html>