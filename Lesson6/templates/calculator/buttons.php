<h1 class="text-center">Калькулятор с кнопками</h1>
<div class="container">
    <form method="post">
        <div class="form-row">
            <div class="col">
                <input type="text" class="form-control" name="first-number" placeholder="Первое число">
            </div>
            <div class="col">
                <input type="text" class="form-control" name="second-number" placeholder="Второе число">
            </div>
        </div>
        <div class="form-row align-items-center">
            <button type="submit" name="operation" value="sum" class="btn btn-primary btn-operation">Сложить</button>
            <button type="submit" name="operation" value="diff" class="btn btn-primary btn-operation">Вычесть</button>
            <button type="submit" name="operation" value="multipl" class="btn btn-primary btn-operation">Умножить</button>
            <button type="submit" name="operation" value="div" class="btn btn-primary btn-operation">Разделить</button>
        </div>
    </form>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon3">Результат</span>
        </div>
        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="<?php echo $result; ?>" readonly>
    </div>
</div>