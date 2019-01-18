<h1 class="text-center">Калькулятор с селектом</h1>
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
            <div class="col-auto my-1">
                <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
                <select name="operation" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                    <option value="sum" selected>Сложить</option>
                    <option value="diff">Вычесть</option>
                    <option value="multipl">Умножить</option>
                    <option value="div">Разделить</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Выполнить</button>
        </div>
    </form>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon3">Результат</span>
        </div>
        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="<?php echo $result; ?>" readonly>
    </div>
</div>