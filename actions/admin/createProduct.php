<?php
require $_SERVER['DOCUMENT_ROOT']."/config.php";

$errors = [];
$_SESSION['createProductErrors'] = null;

$file = $_FILES['file'];
if (!$file['name']){
    $errors[] = 'Вы не загрузили изображение';
} else {
    $types = $file['type'];
    $type = explode('/',$types);
    if ($type[0] != 'image'){
        $errors[] = 'Файл должен быть изображением!';
    }
}

$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];
$category_id = $_POST['category_id'];

if (!$name){
    $errors[] = 'Наименование не может быть пустым';
}
if (!$description){
    $errors[] = 'Описание не может быть пустым';
}
if (!$price){
    $errors[] = 'Цена должна быть задана';
}
if (!$category_id){
    $errors[] = 'Категория не может быть пустой!';
}

if (count($errors)){
    $_SESSION['lastProductCreate'] = [
        'name' => $name,
        'description' => $description,
        'price' => $price,
        'category_id' => $category_id,
    ];

    $_SESSION['createProductErrors'] = $errors;
    header('Location: /pages/admin/products.php');
    exit();
}

$temp = explode('.', $file['name']);
$ext = $temp[count($temp)-1];
$filename = time().rand(10000,99999).'.'.$ext;

//echo $file['tmp_name'];
move_uploaded_file($file['tmp_name'],"$document_root/images/products/$filename");

$query = "INSERT INTO products (name, description, price, category_id, picture) VALUES (:name, :description, :price, :category_id, :picture)";
$res = $pdo->prepare($query);
$res->execute([
    ':name' => $name,
    ':description' => $description,
    ':price' => $price,
    ':category_id' => $category_id,
    ':picture' => $filename
]);

unset($_SESSION['lastProductCreate']);

header("Location: /pages/admin/products.php");