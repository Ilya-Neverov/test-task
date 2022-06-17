<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $mail = trim(strip_tags(filter_input(INPUT_POST, "mail", FILTER_VALIDATE_EMAIL)));
        $password = trim(strip_tags(filter_input(INPUT_POST, "password", FILTER_UNSAFE_RAW)));

        if ($mail and $password == true) {

            include_once 'mysql/open_mysql.php';

            $sql_mail = mysqli_query($mysqli, "SELECT `name`, `mail`, `password` FROM user WHERE `mail` = '$mail'");

            $int = $sql_mail->num_rows;
            if ($int == 1) {

                while ($row = $sql_mail->fetch_assoc()) {

                    if (password_verify($password, $row['password'])) {
                        echo 'Добро пожаловать в систему' . '<br>' . "$row[name]";
                    } else {
                        $info = 'неверный пароль';
                        include_once 'index.php';
                    }
                }
            } else {
                $info = "$mail" . '<br>' . 'почта не зарегистрирована';
                include_once 'index.php';
            }

            include_once 'mysql/close_mysql.php';
        } else {
            $info = 'неправильный ввод пары: почта - пароль';
            include_once 'index.php';
        }
        ?>
    </body>
</html>