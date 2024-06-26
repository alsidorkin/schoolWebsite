<?php

require_once __DIR__ . '/../../app/database/db.php';

$isSubmit = false;
$errMsg = [];
$regStatus = '';
$users = selectAll('users');


function loginUser($existance)
{
  $_SESSION['id'] = $existance['id'];
  $_SESSION['login'] = $existance['username'];
  $_SESSION['admin'] = $existance['admin'];
  // $_SESSION['librarian'] = $existance['librarian'];

  if ($_SESSION['admin']==1) {
    header('Location: ' . BASE_URL . 'admin/users/index.php');

  } else if ($_SESSION['admin']==2) {
    header('Location: ' . BASE_URL . 'library/index.php');

  } else{
    header('Location: ' . BASE_URL);
  }
}

// код для формы регистрации
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-reg'])) {
  $admin = 0;
  $login = trim($_POST['login']);
  $email = trim($_POST['email']);
  $passF = trim($_POST['pass-first']);
  $passS = trim($_POST['pass-second']);

  if ($login === '' || $email === '' || $passF === '' || $passS === '') {// проверка на заполнение всех полей
    array_push($errMsg, "Не все поля заполнены!!!");
  } else if (mb_strlen($login, 'UTF8') < 2) {// проверка на количество символов логина
    array_push($errMsg, "Логин должен быть больше 2-х символов!!!");
  } else if ($passF !== $passS) {// проверка на одинаковость паролей
    array_push($errMsg, "Пароли в обеих полях должны быть одинаковы!!!");
  } else {

    $existance = selectOne('users', ['email' => $email]);
    if ($existance && $existance['email'] === $email) {
      array_push($errMsg, "Пользователь с такими данными уже существует!!!");
    } else {

      $pass = password_hash($passS, PASSWORD_BCRYPT);
      $post = [
        'admin' => $admin,
        'username' => $login,
        'email' => $email,
        'password' => $pass,

      ];

      $id = insert('users', $post);
      $user = selectOne('users', ['id' => $id]);

      loginUser($existance);
    }
  }
} else {
  // сохранение значений инпутов логин и имейл
  $login = '';
  $email = '';
}

// код для формы авторизации
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-log'])) {
  $email = trim($_POST['email']);
  $pass = trim($_POST['pass']);
  if ($email === '' || $pass === '') {// проверка на заполнение всех полей
    array_push($errMsg, "Не все поля заполнены!!!");
  } else {

    $existance = selectOne('users', ['email' => $email]);
    if ($existance && password_verify($pass, $existance['password'])) {
      //авторизовать
      loginUser($existance);
    } else {
      //ошибка авторизации

      array_push($errMsg, "Почта либо пароль введены не правильно!!!");
    }
  }
} else {
  // сохранение значений инпутов логин и имейл

  $email = '';
}




if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['create-user'])) {
  $admin = 0;
  $login = trim($_POST['login']);
  $email = trim($_POST['email']);
  $passF = trim($_POST['pass-first']);
  $passS = trim($_POST['pass-second']);

  if ($login === '' || $email === '' || $passF === '' || $passS === '') {// проверка на заполнение всех полей
    array_push($errMsg, "Не все поля заполнены!!!");
  } else if (mb_strlen($login, 'UTF8') < 2) {// проверка на количество символов логина
    array_push($errMsg, "Логин должен быть больше 2-х символов!!!");
  } else if ($passF !== $passS) {// проверка на одинаковость паролей
    array_push($errMsg, "Пароли в обеих полях должны быть одинаковы!!!");
  } else {

    $existance = selectOne('users', ['email' => $email]);
    if ($existance && $existance['email'] === $email) {
      array_push($errMsg, "Пользователь с такими данными уже существует!!!");
    } else {

      $pass = password_hash($passS, PASSWORD_BCRYPT);
      if (isset($_POST['admin'])) {
        $admin = 1;
      }

      $user = [
        'admin' => $admin,
        'username' => $login,
        'email' => $email,
        'password' => $pass,

      ];

      $id = insert('users', $user);
      $users = selectOne('users', ['id' => $id]);
      header('location: ../../admin/users/index.php ');
    }
  }
} else {
  // сохранение значений инпутов логин и имейл
  $login = '';
  $email = '';
}

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
  $id = $_GET['id'];
  $user = selectOne('users', ['id' => $id]);
  $id = $user['id'];
  $admin = $user['admin'];
  $username = $user['username'];
  $mail = $user['email'];
}

// изменение пользователя
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['edit-user'])) {
  $id = $_POST['id'];
  // $admin = isset($_POST['admin']) ? 1 : 0;
  // $librarian = isset($_POST['librarian']) ? 2 : 0;
  if ($_POST['admin']==1){
    $admin = 1;
  }
  else if ($_POST['admin']==2){
    $admin = 2;
  }
  else{
    $admin = 0;
  }
  $login = trim($_POST['login']);
  $email = trim($_POST['email']);
  $passF = trim($_POST['pass-first']);
  $passS = trim($_POST['pass-second']);

  if ($login === '') {// проверка на заполнение всех полей
    array_push($errMsg, "Не все поля заполнены!!!");
  } else if (mb_strlen($login, 'UTF8') < 2) {// проверка на количество символов логина
    array_push($errMsg, "Логин должен быть больше 2-х символов!!!");
  } else if ($passF !== $passS) {// проверка на одинаковость паролей
    array_push($errMsg, "Пароли в обеих полях должны быть одинаковы!!!");
  } else {
    $pass = password_hash($passS, PASSWORD_BCRYPT);

    $user = [
      'admin' => $admin,
      'username' => $login,
      'password' => $pass,

    ];

    update('users', $id, $user);
    header('location: ../../admin/users/index.php ');
  }
} else {
  // сохранение значений инпутов логин и имейл
  $login = '';
  $email = '';
}

// удаление пользователя

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id_delete'])) {

  $id = $_GET['id_delete'];
  deletes('users', $id);
  header('location: ../../admin/users/index.php ');
}
