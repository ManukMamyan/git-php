<h1 class="text-center">Товары</h1>
<div class="container products-wrap">
    <?php foreach ($products as $row): ?>
        <div class="product-wrap">
            <a href="/product.php?id=<?php echo $row['id'] ?>">
                <img class="product-img" src="<?php echo $row['photo1'] ?>" alt="<?php echo $row['name'] ?>">
            </a>
            <p class="product-name"><?php echo $row['name'] ?></p>
            <p class="product-price">&#8381; <?php echo $row['price'] ?></p>
            <a href="/product.php?id=<?php echo $row['id'] ?>" class="btn btn-outline-primary product-btn">Подробнее</a>
        </div>
    <?php endforeach; ?>
</div>
