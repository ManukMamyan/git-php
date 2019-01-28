<h1>Контроль заказов администратором.</h1>
<code>Данные о заказе</code>
<table class="table table-hover mt-3">
    <thead class="thead-dark">
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Product ID</th>
        <th scope="col">Order ID</th>
        <th scope="col">Quantity</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($orderItem as $item): ?>
        <a href="/">
            <tr>
                <th><?php echo $item['id'] ?></th>
                <td><?php echo $item['product_id'] ?></td>
                <td><?php echo $item['order_id'] ?></td>
                <td><?php echo $item['quantity'] ?></td>
        </a>
    <?php endforeach; ?>
    </tbody>
</table>
<div class="card">
    <div class="card-header">
        Пользователь сделавший заказ:
    </div>
    <div class="card-body">
        <blockquote class="blockquote mb-0">
                <p>ID: <?php echo $user['id'] ?></p>
                <p>Name: <?php echo $user['user_name'] ?></p>
                <p>Login:<?php echo $user['login'] ?></p>
                <p>Email: <?php echo $user['email'] ?></p>
        </blockquote>
    </div>
</div>
<table class="table table-hover mt-3">
    <thead class="thead-dark">
    <tr>
        <th scope="col">Товары из заказа</th>
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
