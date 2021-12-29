<?php
$title = 'Список продуктов';
require_once('../../templates/header.php');

$query = "SELECT * FROM products";
$res = $pdo->query($query);
$products = $res->fetchAll();

$query = "SELECT * FROM categories";
$res = $pdo->query($query);
$categories = $res->fetchAll();

if (isset($_SESSION['createProductErrors'])){
    $errors = implode('<br>', $_SESSION['createProductErrors']);
    echo "
    <div class='alert alert-danger text-center' role='alert'>
         {$errors}
    </div>
    ";
    unset($_SESSION['createProductErrors']);
}

?>

<form method="POST" action="../../actions/admin/createProduct.php" enctype="multipart/form-data">
    <input class="form control mb-2 w-100" name='name' placeholder="Наименование" value="<?= $_SESSION['lastProductCreate']['name'] ?? '' ?>">
    <textarea class="form-control mb-2" name='description' placeholder="Описание"><?= $_SESSION['lastProductCreate']['description'] ?? '' ?></textarea>
    <input class="form control mb-2" name='price' placeholder="Цена" value="<?= $_SESSION['lastProductCreate']['price'] ?? '' ?>">
    <input type='file' class="form control mb-2" name='file'>
    <select class="form control mb-2" name='category_id'>
        <?php
            $lastCategoryId = $_SESSION['lastProductCreate']['category_id'];
            if (!$lastCategoryId) {
                echo '<option disabled selected>-- Выберите категорию --</option>';
            }
            foreach($categories as $category){
                $selected = $lastCategoryId == $category['id'] ? 'selected' : '';
                echo "<option $selected value = '{$category['id']}'>{$category['name']}</option>";
            }
        ?>
    </select>
    <button class="btn btn-primary w-100" type="submit">Добавить</button>
</form>

<table class="table table-bordered mt-5">
    <thead>
        <tr>
            <th>#</th>
            <th>Наименование</th>
            <th>Описание</th>
            <th>Цена</th>
            <th>Категория</th>
            <th>Изображение</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if (!$products) {
            echo
            "
            <tr>
                <td class='text-center' colspan='6'>
                    <em>Продукты отсутствуют</em>
                </td>
            </tr>
            ";
        }
        $path = PRODUCTS_IMAGE_PATH;
        foreach ($products as $product) {
            echo
            "
            <tr>
                <td>{$product['id']}</td>
                <td>{$product['name']}</td>
                <td>{$product['description']}</td>
                <td>{$product['price']}</td>
                <td>{$product['category_id']}</td>
                <td class='text-center'>
                    <img height='100' src='{$path}{$product['picture']}'>
                </td>
            </tr>
            ";
        }
        ?>
    </tbody>
</table> 
<?php 
    require_once('../../templates/footer.php');
?>