<h1>Товары</h1>
<a href="/admin/product.php?action=add" class="btn btn-dark btn-block mb-3">Добавить новый товар</a>
<code>Список товаров</code>
<?php foreach ($products as $item): ?>
    <div class="card mt-3">
        <div class="card-images-wrap">
            <img class="card-img-top" src="<?php echo $item['photo1'] ?>" alt="Card image cap">
            <img class="card-img-top" src="<?php echo $item['photo2'] ?>" alt="Card image cap">
            <img class="card-img-top" src="<?php echo $item['photo3'] ?>" alt="Card image cap">
        </div>
        <div class="card-body">
            <h5 class="card-title"><?php echo $item['name'] ?></h5>
            <p class="card-text"><?php echo $item['description'] ?></p>
            <p class="card-text">Цена: <?php echo $item['price'] ?> р.</p>
        </div>
        <div class="card-footer">
            <small class="text-muted">Код товара <?php echo $item['article'] ?> | ID <?php echo $item['id'] ?></small>
            <a href="/admin/product.php?action=delete&id=<?php echo $item['id'] ?>" class="btn btn-danger float-md-right">Удалить</a>
            <a href="/admin/product.php?action=edit&id=<?php echo $item['id'] ?>" class="btn btn-dark float-md-right mr-2">Редактировать</a>
            <a href="/shop/product.php?id=<?php echo $item['id'] ?>" class="btn btn-primary float-md-right mr-2">Открыть в каталоге</a>
        </div>
    </div>
<?php endforeach; ?>
