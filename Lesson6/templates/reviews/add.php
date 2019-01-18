<h1 class="text-center">Добавить отзыв</h1>

<div class="container">
    <form method="post">
        <div class="form-group">
            <label for="exampleFormControlInput1">Ваше имя*</label>
            <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Mikhail">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Email</label>
            <input type="email" name="email" class="form-control" id="exampleFormControlInput1"
                   placeholder="name@example.com">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Отзыв*</label>
            <textarea class="form-control" name="review" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Отправить
        </button>
    </form>
    <p class="error"> <?php echo $error ?></p>
</div>