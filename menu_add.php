<?php
require('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
            
        <title>manageMenu</title>

    </head>

    <body>
        <!-- <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Library</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data</li>
            </ol>
        </nav> -->

        <form action="" method="POST"> 
                <!-- name -->
            <div class="form-group">
                <label for="text-input">ชื่ออาหาร</label>
                <input class="form-control" type="text" id="text-input" name="name">
            </div>
                <!-- select -->
            <div class="form-group">
                <label for="select-input">ประเภทอาหาร</label>
                <select class="form-control custom-select" id="select-input" name="category">
                    <option>เลือกประเภทอาหาร</option>
                    <option>คาว</option>
                    <option>หวาน</option>
                    <option>เครื่องดื่ม</option>
                    <option>อื่น</option>
                </select>
            </div>
                <!-- price -->
            <div class="input-group mb-3">
                <span class="input-group-text">฿</span>
                <input type="text" class="form-control" name="price" aria-label="Amount (to the nearest dollar)">
                <span class="input-group-text">.00</span>
            </div>

                <!-- comment -->
            <div class="form-group">
                <label for="textarea-input">รายละเอียด</label>
                <textarea class="form-control" id="textarea-input" name="comment" rows="5"></textarea>
            </div>

                <!-- upload img -->
            <div class="mb-3">
                <label for="formFileMultiple" class="form-label">Upload image</label>
                <input class="form-control" type="file" name="file" id="formFileMultiple" multiple>
            </div>

            <button type="submit" name="submit" class="btn btn-primary">บันทึกข้อมูล</button>

        </form>

        
    </body>

</html>

<?php
if(isset($_POST["submit"])){
$sql = "INSERT INTO menu(menu_name, menu_image, menu_price, menu_describe, menu_category)
VALUES ('".$_POST["name"]."','".$_POST["file"]."','".$_POST["price"]."','".$_POST["comment"]."','".$_POST["category"]."') ";




$result = $conn->query($sql);
// header('location:Thanks.php');
// echo "$sql";
}



?>