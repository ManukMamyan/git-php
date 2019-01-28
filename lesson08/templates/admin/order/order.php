<h1>Контроль заказов администратором.</h1>

<?php if (count($order) > 0) : ?>
<code>Список существующих заказов</code>
<table class="table table-hover mt-3">
    <thead class="thead-dark">
    <tr>
        <th scope="col">Order ID</th>
        <th scope="col">Created</th>
        <th scope="col">User ID</th>
        <th scope="col">Status</th>
        <th scope="col"></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($order as $item): ?>
        <a href="/">
        <tr>
            <th><?php echo $item['id'] ?></th>
            <td><?php echo $item['created_at'] ?></td>
            <td><?php echo $item['user_id'] ?></td>
            <td><?php echo $item['status'] ?></td>
            <td><a href="order.php?action=order&id=<?php echo $item['id'] ?>" class="btn btn-dark">Подробнее</a>
                <button type="button" class="btn btn-danger" id="delete-order" data-id="<?php echo $item['id'] ?>" title="Удалить заказ">X</button>
        </tr>
        </a>
    <?php endforeach; ?>
    </tbody>
</table>
<?php else: ?>
    <div class="py-5">
        <code>Заказов нет</code>
    </div>
<?php endif ?>

<script src="/js/order.js" defer></script>
