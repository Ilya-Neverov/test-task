<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $mail = trim(strip_tags(filter_input(INPUT_POST, "mail", FILTER_VALIDATE_EMAIL)));
        $name = trim(strip_tags(filter_input(INPUT_POST, "name", FILTER_UNSAFE_RAW)));
        $password_0 = trim(strip_tags(filter_input(INPUT_POST, "password_0", FILTER_UNSAFE_RAW)));
        $password_1 = trim(strip_tags(filter_input(INPUT_POST, "password_1", FILTER_UNSAFE_RAW)));

        if ($mail == true) {
            if ($name == true) {
                if ($password_0 and $password_1) {
                    $comparison = strcmp($password_0, $password_1);
                    if ($comparison == null) {

                        include_once 'mysql/open_mysql.php';
                        $hash = password_hash($password_1, PASSWORD_BCRYPT);
                        $sql_mail = mysqli_query($mysqli, "SELECT * FROM `user` WHERE `mail` LIKE '$mail'");
                        $int = $sql_mail->num_rows;

                        if ($int == 1) {

                            $info = "$mail" . '<br>' . 'почта занята';
                            include_once 'registration.php';
                        } else {
                            $sql = "INSERT INTO `user` (`id_user`, `name`, `mail`, `password`) VALUES (NULL, '$name', '$mail', '$hash')";
                            $save = mysqli_query($mysqli, $sql);
                            echo 'Вы успешно зарегистрированны!' . '<br>' . '<a href="index.php">Авторизация</a>';
                        }

                        include_once 'mysql/close_mysql.php';
                    } else {
                        $info = 'пароль не совпадает';
                        include_once 'registration.php';
                    }
                } else {
                    $info = 'введите пароль';
                    include_once 'registration.php';
                }
            } else {
                $info = 'введите имя';
                include_once 'registration.php';
            }
        } else {
            $info = 'некорректно введена почта';
            include_once 'registration.php';
        }
        ?>
    </body>
</html>