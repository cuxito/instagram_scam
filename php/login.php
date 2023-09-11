<<<<<<< HEAD
<?php
if (isset($_POST['submit'])) {
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
    header('location: ../index.html');
}
=======
<?php
if (isset($_POST['submit'])) {
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
    header('location: ../index.html');
}
>>>>>>> 1da559525e8872885c0f2451e77fd6e4702ef352
