<h1 class="text-center">Страница товара</h1>

<div class="container">
    <div class="singe-product-wrap">
        <div class="card">
            <div class="card-img-wrap">
                <img class="card-img-top" src="<?php echo $product['photo1'] ?>" alt="...">
                <img class="card-img-top" src="<?php echo $product['photo2'] ?>" alt="...">
                <img class="card-img-top" src="<?php echo $product['photo3'] ?>" alt="...">
            </div>
            <div class="card-body">
                <h4 class="card-title"><?php echo $product['category'] ?> <?php echo $product['name'] ?></h4>
                <p class="card-text">Код товара: <?php echo $product['article'] ?></p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Описание: <?php echo $product['description'] ?></li>
                <li class="list-group-item cart-price">&#8381; <?php echo $product['price'] ?></li>
                <li class="list-group-item">Товара на складе: <?php echo $product['quantity'] ?> шт.</li>
            </ul>
            <div class="card-body">
                <button type="button" class="btn btn-primary" disabled>Купить</button>
                <button type="button" class="btn btn-primary" disabled>В корзину</button>
            </div>
        </div>
    </div>
</div>