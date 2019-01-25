<h1 class="text-center">Отзывы</h1>

<div class="container">
    <?php foreach ($reviews as $row): ?>
    <div class="jumbotron">
        <p class="lead"><?php echo $row['user_review'] ?></p>
        <hr class="my-4">
        <p> <?php echo $row['user_name'] ?> | <?php echo $row['user_email'] ?></p>
    </div>
    <?php endforeach; ?>
</div>