<h1>Добавление нового товара</h1>
<?php if ($error) : ?>
    <div class="alert alert-danger" role="alert">
        <?= $error ?>
    </div>
<?php endif ?>
<form method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Product name">
        </div>
        <div class="col">
            <label for="article">Article</label>
            <input type="text" name="article" class="form-control" id="article" placeholder="Article">
        </div>
    </div>
    <div class="form-row mt-2">
        <div class="form-group col-md-4">
            <label for="price">Price</label>
            <input type="text" name="price" class="form-control" id="price">
        </div>
        <div class="form-group col-md-4">
            <label for="quantity">Quantity</label>
            <input type="text" name="quantity" class="form-control" id="quantity">
        </div>
        <div class="form-group col-md-4">
            <label for="category">Category</label>
            <select id="category" name="category" class="form-control">
                <option value="1" selected>Ноутбук</option>
                <option value="2" >Смартфон</option>
                <option value="3" >Телевизор</option>
            </select>
        </div>
    </div>
    <div class="custom-file">
        <input type="file" name="photo1" class="custom-file-input" id="photo1">
        <label class="custom-file-label" for="photo1">Photo 1</label>
    </div>
    <div class="custom-file mt-3">
        <input type="file" name="photo2" class="custom-file-input" id="photo2">
        <label class="custom-file-label" for="photo2">Photo 2</label>
    </div>
    <div class="custom-file mt-3">
        <input type="file" name="photo3" class="custom-file-input" id="photo3">
        <label class="custom-file-label" for="photo3">Photo 3</label>
    </div>
    <div class="form-group mt-2">
        <label for="description">Description</label>
        <textarea class="form-control" name="description" id="description" rows="3"></textarea>
    </div>
    <button type="submit" name="add-product" class="btn btn-primary mt-3">Добавить</button>
</form>