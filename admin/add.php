<?php
include('../lib/function.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhập câu hỏi</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="icon" href="../assets/img/Huy_Hiệu_Đoàn.png" type="image/gif" sizes="16x16">
</head>

<body>
<div class="container" style="text-align: center;">
    <br>
    <h2>Add user</h2>
    <br>
    <hr>

    <form action="add-infor.php" method="post">
        <input type="hidden" name="id" value="0">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Họ tên</label>
                    <input required type="text" class="form-control" id="exampleInputEmail1"
                           aria-describedby="emailHelp" placeholder="Nhập họ tên" name="ds_name">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Đơn vị</label>
                    <input required name="ds_address" type="text" class="form-control" id="exampleInputPassword1"
                           placeholder="Nhập đơn vị">
                </div>
                <div class="form-group" style="text-align: center;">
                    <button style="text-align: center;" type="submit" class="btn btn-primary">Gửi câu hỏi</button>
                    <a style="text-align: center;" href="list.php" class="btn btn-primary">Danh sách câu hỏi</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group form-check">
                    <label class="form-check-label" for="exampleCheck1">Câu hỏi</label><br>
                    <textarea required name="ds_desc" id="exampleCheck1" cols="70" rows="6"></textarea>
                </div>
            </div>
        </div>
    </form>
</div>
</body>

</html>