<h1>Корзина</h1>
<?php if(!count($product) == 0) : ?>
<button type="button" class="btn btn-primary" disabled>
    К оплате
</button>
<a href="/product.php" class="btn btn-primary">
    Продолжить покупки
</a>
<button type="button" class="btn btn-danger float-md-right" data-toggle="modal" data-target="#exampleModal">
    Очистить корзину
</button>
<?php else: ?>

<h4>Ваша корзина пуста пустая, <a href="/product.php" class="btn btn-outline-secondary">
        купите
    </a> что ни будь ;)</h4>
<?php endif; ?>
<?php foreach ($product as $row): ?>
<div class="cart-wrap">
    <img src="<?php echo $row['photo1'] ?>" alt="">
    <div><?php echo $row['name'] ?></div>
    <div>&#8381; <?php echo $row['price'] ?></div>
    <div>
        <div class="product-btn">
            <a href="/product.php?action=singepage&id=<?php echo $row['id'] ?>" class="btn btn-secondary">Подробнее</a>
            <a href="/product.php?action=deletecart&id=<?php echo $row['id'] ?>" class="btn btn btn-danger">Удалить</a>
        </div>
    </div>
</div>
<?php endforeach; ?>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Вы уверены?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Это приведёт к удалению всех товаров из корзины. Продолжить?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
                <a href="/product.php?action=deletecart" class="btn btn btn-danger">Удалить</a>
            </div>
        </div>
    </div>
</div>
