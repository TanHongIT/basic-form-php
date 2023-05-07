<?php
include('../lib/function.php');
$options = array(
    'order_by' => 'id ASC'
);
$users = get_all('danhsach', $options);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách câu hỏi</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="icon" href="../assets/img/Huy_Hiệu_Đoàn.png" type="image/gif" sizes="16x16">
</head>

<body>
<div class="container">
    <h2>Danh sách</h2>
    <br>
    <a href="add.php" class="btn btn-primary">Add new user</a>
    <br>
    <table class="table">
        <thead>

        <tr>
            <th scope="col">stt</th>
            <th scope="col">Tên</th>
            <th scope="col">Đon vị</th>
            <th scope="col">Câu hỏi</th>
            <th>Action</th>
        </tr>

        </thead>
        <tbody>
        <?php foreach ($users as $user) : ?>
            <tr>
                <th scope="row"><?php echo $user['id'] ?></th>
                <td style="color: red; font-weight: bold;"><?= $user['ds_name'] ?></td>
                <td><?= $user['ds_address'] ?></td>
                <td><?= $user['ds_desc'] ?></td>
                <td>
                    <a href="edit.php?user_id=<?php echo $user['id']; ?>">Edit</a> |
                    <a onclick="return confirm('Are you sure to delete?')"
                       href="delete.php?user_id=<?php echo $user['id']; ?>">Delete </a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>

</html>