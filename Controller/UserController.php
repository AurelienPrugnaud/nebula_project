<?php
    namespace Aurelien\Nebula\Controller;
    use Aurelien\Nebula\Database;
    use Aurelien\Nebula\User;

    if ($_SERVER["REQUEST_METHOD"] == "POST"):
        if (!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['cgu'])):
            $user = User::addUser($dbc, $_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['password']);
        endif;
    endif;