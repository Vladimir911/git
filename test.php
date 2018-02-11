<!DOCTYPE html>
<html>
<head>
    <title>Это ваш новый проект</title>
    <meta charset='utf-8'>
</head>
<body>
    Hello World!
    <br/>
    <br/>

    <?php

    $db_host = 'localhost';
    $db_user = 'root';
    $db_password = '';
    $db_name = 'users';

    include_once('db.class.php');

    try {

        $db = new DB($db_host, $db_user, $db_password, $db_name);

        echo "<b>Tables from your database: </b><br/>";

        echo "<pre>";
        print_r($db->query("SHOW TABLES"));
        echo "</pre>";

        echo "<b>Books list: </b><br/>";

        echo "<pre>";
        print_r($db->query("SELECT * FROM db_users"));
        echo "</pre>";

    } catch (Exception $e) {
        echo $e->getMessage() . ':(';
    }

    ?>

</body>
</html>