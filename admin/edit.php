<?php
include('../lib/function.php');
if (isset($_GET['user_id'])) $user_id = intval($_GET['user_id']);
else $user_id = 0;

$user_info = get_a_record('danhsach', $user_id);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>

<body>
    <h2>Edit user #<?= $user_id ?></h2>
    <form action="submit-edit.php" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Họ tên</label>
            <input required type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name" name="name" value="<?=$user_info['ds_name']?>">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Đơn vị</label>
            <input required name="donvi" type="text" class="form-control" id="exampleInputPassword1" placeholder="Nhạp don vi" value="<?=$user_info['ds_address']?>">
        </div>
        <div class="form-group form-check">
            <label class="form-check-label" for="exampleCheck1">Câu hỏi</label><br>
            <textarea required name="desc" id="exampleCheck1" cols="70" rows="10"><?=$user_info['ds_desc']?></textarea>

        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>

</html>