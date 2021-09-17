<?php
    // require_once 'config/connectSQL.php';
    $sql = "SELECT * FROM products p JOIN brands b ON p.brand_id = b.brand_id";
    $query = mysqli_query($connect, $sql);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Danh sách sản phẩm</h2>
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>Số thứ tự</th>
                        <th>Tên sản phẩm</th>
                        <th>Ảnh sản phẩm</th>
                        <th>Giá sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Mô tả</th>
                        <th>Thương hiệu</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php while($rows = mysqli_fetch_assoc($query)){ ?>
                            <tr>
                                <td><?php echo $rows["product_id"] ?></td>
                                <td><?php echo $rows["product_name"] ?></td>
                                <td>
                                    <img src="img/<?php echo $rows["image"] ?>" style="width: 30%">
                                </td>
                                <td><?php echo $rows["price"] ?></td>
                                <td><?php echo $rows["quantitty"] ?></td>
                                <td><?php echo $rows["description"] ?></td>
                                <td><?php echo $rows["brand_name"] ?></td>
                                <td>
                                    <a href="index.php?page_layout=modify&id= <?php echo $rows["product_id"] ?>">
                                        Sửa
                                    </a>
                                </td>
                                <td>
                                    <a onclick="return confirm_Del('<?php echo $rows['product_name'] ?>')" 
                                       href="index.php?page_layout=delete&id= <?php echo $rows["product_id"] ?>">
                                        Xóa
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tr>
                </thead>
            </table>
            <a class="btn btn-primary" href="index.php?page_layout=add">Thêm mới</a>
        </div>
    </div>
</div>
<script>
    function confirm_Del(name){
        return confirm("Bạn có chắc muốn xóa sản phẩm "+ name + "?");
    }
</script>