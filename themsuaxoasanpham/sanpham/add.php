<?php
    $sql = "SELECT * FROM brands";
    $query = mysqli_query($connect, $sql);
?>

<?php
    if(isset($_POST["btn_submit"])){
        $product_name = $_POST["product_name"];

        $product_image = $_FILES["product_image"]['name'];
        $product_image_tmp = $_FILES['product_image']['tmp_name'];

        $product_price = $_POST['product_price'];
        $product_quantity = $_POST['product_quantity'];
        $product_description = $_POST['product_description'];
        $brand_id = $_POST['brand_id'];

        $sql_add = "INSERT INTO products (product_name, image, price, quantitty, description, brand_id) 
            VALUES('$product_name', '$product_image', $product_price, $product_quantity, '$product_description', $brand_id)";

        $query = mysqli_query($connect, $sql_add);
        move_uploaded_file($product_image_tmp, 'img/'.$product_image);
        header('location: index.php?page_layout=list');
    }
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Thêm sản phẩm</h2>
        </div>
        <div class="card-body">
            <form  method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for=""> Tên sản phẩm</label>
                <input type="text" name="product_name" class="form-control" required>
            </div>
                
            <div class="form-group">
                <label for=""> Ảnh sản phẩm</label><br />
                <input type="file" name="product_image" required>
            </div>

            <div class="form-group">
                <label for=""> Giá sản phẩm</label>
                <input type="number" name="product_price" class="form-control" required>
            </div>

            <div class="form-group">
                <label for=""> Số lượng</label>
                <input type="number" name="product_quantity" class="form-control" required>
            </div>

            <div class="form-group">
                <label for=""> Mô tả</label>
                <input type="text" name="product_description" class="form-control" required>
            </div>

            <div class="form-group">
                <label for=""> Thương hiệu</label>
                <select class="form-control" name="brand_id">
                    <?php while($rows_brand = mysqli_fetch_assoc($query)){ ?>
                        <option value = <?php echo $rows_brand["brand_id"] ?> >
                            <?php echo $rows_brand["brand_name"] ?>
                        </option>
                    <?php } ?>
                </select>
            </div>

            <button type="submit" name="btn_submit" class="btn btn-success">Thêm</button>
            </form>
        </div>
    </div>
</div>