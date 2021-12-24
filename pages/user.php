<?php
    session_start();
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>
</head>
  <body>
    <div class='container mt-5'>
<?php
$id = $_GET['id'];
 

$user = 'root';
$password = '';

$pdo = new Pdo('mysql:dbname=fullstack2;host=127.0.0.1',$user,$password);


$query = "SELECT * FROM users WHERE id = :id";
$res = $pdo->prepare($query);
$res->execute([
    ':id' => $id
]);

$user  = $res->fetch();

if ($user){
   // echo "Найден пользователь {$user['login']}";
   $query = "SELECT * FROM cities";
   $res = $pdo->query($query);
   $cities = $res->fetchAll();

   if (isset($_SESSION['error'])){
       echo "
       <div class='alert alert-danger text-center' role='alert'>
            {$_SESSION['error']}
       </div>
       ";
       unset($_SESSION['error']);
   }

   if (isset($_SESSION['result'])){
    echo "
    <div id='alertSuccess' class='alert alert-success text-center' role='alert'>
         {$_SESSION['result']}
    </div>
    ";
    unset($_SESSION['result']);
}
?>
    <form method="post" action="../actions/edit_user.php">
        <label>Имя</label>
        <input name='id' hidden value='<?=$user['id']?>'>
        <input class="form-control" name='name' value='<?=$user['name']?>'>
        <label>Login</label>
        <input class="form-control" name='login' value='<?=$user['login']?>'>
        <select class="form-control mb-2" name="city_id">
                <?php
                    if (!$user['city_id']){
                        echo "<option value='<?= NULL?>' selected disabled>--Город--</option>";
                    }
                    foreach ($cities as $city){
                        $selected = $city['id'] == $user['city_id'] ? 'selected' : '';
                        echo "<option $selected value ='{$city['id']}'>{$city['name']}</option>";
                    };
                ?>
        </select>
        <button type='submit' class="btn btn-success w-100"> СОХРАНИТЬ </button>
    </form>
    </div>
    <script> 
        $(document).ready(function(){
            setTimeout(function(){
                $('#alertSuccess').fadeOut()
            }, 3000)
        })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>

<?php
} else {
    echo "404";
}
?>