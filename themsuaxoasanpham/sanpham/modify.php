<?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }

    //Lay thong tin san pham theo id duoc nhan
    $sql_info = "SELECT * FROM products p JOIN brands b ON p.brand_id=b.brand_id WHERE product_id = $id";
    $query_info = mysqli_query($connect, $sql_info);
    $row_info = mysqli_fetch_assoc($query_info);
?>

<?php
    //Lay thong tin thuong hieu
    $sql = "SELECT * FROM brands";
    $query = mysqli_query($connect, $sql);
    // $rows = mysqli_fetch_assoc($query);
?>

<?php
    if(isset($_POST["btn_submit"])){
        $product_name = $_POST["product_name"];

        if($_FILES["product_image"]['name'] == ''){
            $product_image = $row_info['product_image'];
        } else {
            $product_image = $_FILES['product_image']['name'];
            $product_image_tmp = $_FILES['product_image']['name_tmp'];
            move_uploaded_file($product_image_tmp, 'img/'.$product_image);
        }
        
        $product_price = $_POST['product_price'];
        $product_quantity = $_POST['product_quantity'];
        $product_description = $_POST['product_description'];
        $brand_id = $_POST['brand_id'];

        $sql_modify = "UPDATE products SET product_name='$product_name', image='$product_image', price=$product_price, quantitty=$product_quantity, description='$product_description', brand_id=$brand_id WHERE product_id=$id";
        $query_modify = mysqli_query($connect, $sql_modify);
        header('location: index.php?page_layout=list');
    }
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Chỉnh sửa thông tin sản phẩm</h2>
        </div>
        <div class="card-body">
            <form  method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for=""> Tên sản phẩm</label>
                <input type="text" name="product_name" class="form-control"  value= "<?php echo $row_info['product_name'] ?>" required>
            </div>
                
            <div class="form-group">
                <label for=""> Ảnh sản phẩm</label><br />
                <input type="file" name="product_image" required>
            </div>

            <div class="form-group">
                <label for=""> Giá sản phẩm</label>
                <input type="number" name="product_price" class="form-control" value= "<?php echo $row_info['price'] ?>" required>
            </div>

            <div class="form-group">
                <label for=""> Số lượng</label>
                <input type="number" name="product_quantity" class="form-control" value= "<?php echo $row_info['quantitty'] ?>" required>
            </div>

            <div class="form-group">
                <label for=""> Mô tả</label>
                <input type="text" name="product_description" class="form-control" value= "<?php echo $row_info['description'] ?>" required>
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

            <button type="submit" name="btn_submit" class="btn btn-success">Sửa</button>
            </form>
        </div>
    </div>
</div>