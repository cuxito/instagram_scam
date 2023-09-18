<?php

if (isset($_POST['submit'])) {
    $res = array();
    $login_tmp = array('username' => $_POST['username'], 'password' => $_POST['password']);
    file_put_contents('login_tmp.json', json_encode($login_tmp));
    exec('python login.py', $res);
    var_dump($res);
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
