<h1>Ваш заказ</h1>
<table class="table table-hover mt-3">
    <thead class="thead-dark">
    <tr>
        <th scope="col">Номер заказа</th>
        <th scope="col">ID Товара</th>
        <th scope="col">Кол-во товара</th>
        <th scope="col"></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($orderItem as $item): ?>
        <a href="/">
            <tr>
                <th><button class="btn btn-dark" disabled><?php echo $item['order_id'] ?></button></th>
                <td><button class="btn btn-dark" disabled><?php echo $item['product_id'] ?></button></td>
                <td><button class="btn btn-dark" disabled><?php echo $item['quantity'] ?></button></td>
                <td><button type="button" class="btn btn-dark" id="user-delete-order" data-id="<?php echo $item['order_id'] ?>" title="Удалить заказ">Удалить заказ</button></td>
        </a>
    <?php endforeach; ?>
    </tbody>
</table>
<table class="table table-hover mt-3">
    <thead class="thead-dark">
    <tr>
        <th scope="col">Товары в заказе</th>
    </tr>
    </thead>
</table>
<?php foreach ($products as $item): ?>
    <div class="card mb-3">
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
        </div>
    </div>
<?php endforeach; ?>

<script src="/js/userorder.js" defer></script>
