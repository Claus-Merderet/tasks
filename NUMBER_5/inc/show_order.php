<?php
/*
 * Выводит полную таблицу заказы через цикл
 * с функцией замены спец символов
 */
if (!empty($_POST['order'])) {
    $query = "SELECT * FROM orders";
    $connect = mysqli_connect('localhost', 'root', 'root', 'tours');
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_array($result);
    printf('  <table style="margin: 10px 0;"  class="table table-bordered"> <tr>
    <th scope="col">ID заказа</th>
    <th scope="col">Имя заказчика</th>
    <th scope="col">Номер телефона</th>
    <th scope="col">Email</th>
    <th scope="col">Нужна виза</th>
    <th scope="col">Страна</th>
    <th scope="col">Время заказа</th>
   </tr>');
    do {
        printf('
   <tr>
    <td>' . protect($row['order_id']) . '</td>
    <td>' . protect($row['name']) . '</td>
    <td>' . protect($row['number']) . '</td>
    <td>' . protect($row['email']) . '</td>
    <td>' . protect($row['visa']) . '</td>
    <td>' . protect($row['country']). '</td>
    <td>' . protect($row['time']) . '</td>
  </tr> ');
    } while ($row = mysqli_fetch_array($result));
    printf('</table>');
}
function protect($string) {
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}
