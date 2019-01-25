<h1>Товары</h1>
<div class="container products-wrap">
    <?php foreach ($products as $row): ?>
        <div class="product-wrap">
            <a href="/product.php?action=singepage&id=<?php echo $row['id'] ?>">
                <img class="product-img" src="<?php echo $row['photo1'] ?>" alt="<?php echo $row['name'] ?>">
            </a>
            <p class="product-name"><?php echo $row['name'] ?></p>
            <p class="product-price">&#8381; <?php echo $row['price'] ?></p>
            <div class="product-btn">
            <a href="/product.php?action=singepage&id=<?php echo $row['id'] ?>" class="btn btn-secondary">Подробнее</a>
            <?php if (isset($_SESSION['auth']['login'])) : ?>
                <a href="/product.php?action=add&id=<?php echo $row['id'] ?>" class="btn btn-primary">В корзину</a>
            <?php endif ?>
            </div>
        </div>
    <?php endforeach; ?>
</div>
