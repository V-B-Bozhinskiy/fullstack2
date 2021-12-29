<?php
require_once "../../templates/header.php";

$query = "SELECT * FROM users";
$users = $pdo->query($query);

$query = "SELECT * FROM cities";
$cities = $pdo->query($query);


echo("
    <table class = 'table table-bordered'>
    <thead>
        <tr>
            <td> id </td>
            <td> Логин </td>
            <td> Имя </td>
           <td> id города </td>
        </tr>
    </thead>
    <tbody>
");

foreach ($users as $user){
    $city = $user['city_id'] ? $user['city_id'] : '-';
    
    echo "
        <tr>
            <td>{$user['id']}</td>
            <td>{$user['login']}</td>
            <td>
            <a href = '../../pages/user.php?id={$user['id']}'>
                {$user['name']}
            </a>
            </td>
            <td>{$city}</td>
            <td class='text-center'>
                <form method='post' action='../../actions/del_user.php'>
                    <input hidden name='id' value='{$user['id']}'>
                    <button class='btn btn-danger'>x</button>
                </form>
            </td>
        </tr>
    ";


}

echo "</tbody>
     </table>   ";
require_once "../../templates/footer.php";
?>