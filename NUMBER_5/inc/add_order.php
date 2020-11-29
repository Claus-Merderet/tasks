<?php
/*Проверяем нажатие кнопки,
 * если кнопка нажата и незаполнены все поля выводит "Заполните все данные"
 * иначе Выполняется подготовленный запрос
 */
if (!empty($_POST['sub']) && $_POST['sub'] == "Submit") {
    if (empty($_POST['name']) || empty($_POST['number']) || empty($_POST['email']) || empty($_POST['country'])){
        echo("Заполните все данные");
    }
    else {
        try {
            $query = "INSERT INTO orders VALUES (NULL, :name, :number, :email, :visa, :country, NOW())";
            $msg = $connect->prepare($query);
            $msg->execute(['name' => ($_POST['name']), 'number' => ($_POST['number']), 'email' => ($_POST['email']), 'visa' => ($_POST['visa']), 'country' => htmlspecialchars($_POST['country'])]);
        } catch (PDOException $e) {
            echo "error" . $e->getMessage();
        }
    }

}


