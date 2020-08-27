<?php
require_once(__DIR__ . '/User.php');

$array_users = [
  [
    'name' => 'Aldo',
    'surname' => 'Cahuana',
    'email' => 'aldo@email.com',
    'password' => '123',
    'eta' => 18
  ],
  [
    'name' => 'Carlo',
    'surname' => 'Rossi',
    'email' => 'carlo@email.com',
    'password' => '123',
    'eta' => 13
  ],
    [
    'name' => 'Rosa',
    'surname' => 'Zampina',
    'email' => 'rosa@email.com',
    'password' => '123',
    'eta' => 31
  ],
    [
    'name' => 'Fabrizio',
    'surname' => 'Luna',
    'email' => 'luna@email.com',
    'password' => '123',
    'eta' => 64
  ],
];

foreach ($array_users as $user) {
  $user = new User($user['name'], $user['surname'], $user['email'], $user['password'], $user['eta']);
  $user->canComment();
  $user_data = $user->getUserData();
  ?>
  <li>Name: <?php echo  $user_data ['name']?> </li>
  <li>Surname: <?php echo  $user_data ['surname']?> </li>
  <li>Email: <?php echo  $user_data ['email']?> </li>
  <li>Eta: <?php echo  $user_data ['eta']?> </li>
  <li>Comment: <?php echo  $user_data ['comment']?> </li>
  <hr>
<?php
}
// echo 'Lista users';
//
// $user = new User('Aldo', 'Cahuana', 'aldo@email.com', '123', 'yes');
// $user->comment = true;
// $user_data = $user->getUserData();

// var_dump($user)
?>

<!-- <ul>
  <li>Nome: <?php echo  $user_data ['name']?> </li>
  <li>Nome: <?php echo  $user_data ['surname']?> </li>
  <li>Nome: <?php echo  $user_data ['email']?> </li>
  <li>Nome: <?php echo  $user_data ['eta']?> </li>
</ul> -->
