<?php
header('Content-Type: text/html; charset=UTF-8');

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
  if (!empty($_GET['save'])) {
    print('Спасибо, результаты сохранены.');
  }

  include('form.php');

  exit();
}

$errors = FALSE;
if (empty($_POST['fio'])) {
  print('Заполните имя.<br/>');
  $errors = TRUE;
}
if (empty($_POST['email'])) {
  print('Заполните e-mail.<br/>');
  $errors = TRUE;
}
if (empty($_POST['biography'])) {
  print('Заполните биографию.<br/>');
  $errors = TRUE;
}
if (empty($_POST['sp-sp'])) {
    print('Выберите способность.<br/>');
    $errors = TRUE;
}
if (empty($_POST['checkbox'])) {
    print('Поставьте галочку.<br/>');
    $errors = TRUE;
}


if ($errors) {
  exit();
}


$user = 'u21936';
$pass = '36562577';
$db = new PDO('mysql:host=localhost;dbname=u21936', $user, $pass, array(PDO::ATTR_PERSISTENT => true));


try {
  $str = implode(',',$_POST['sp-sp']);
  
  $stmt = $db->prepare("INSERT INTO appl SET fio = ?, email = ?, yob = ?, pol = ?, limb = ?, biograghy = ?");
  $stmt -> execute([$_POST['fio'],$_POST['email'],$_POST['yob'],$_POST['radio-pol'],$_POST['radio-kon'],$_POST['biography']]);

  $stmt = $db->prepare("INSERT INTO abilities SET abilities = ?");
  $stmt -> execute([$str]);
  
}
catch(PDOException $e){
  print('Error : ' . $e->getMessage());
  exit();
}

header('Location: ?save=1');

