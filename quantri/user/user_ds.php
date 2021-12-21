

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/user.css">
    
</head>

<body>
    <div class="nd">
        <div class="tren">
        <div class="name">
        <div>Danh sách người dùng</div>
        </div>
        
        <div class="bang">
           
            <table border="1px">
            <tr>
                <td>idUser</td>
                <td>Username</td>
                <td>Password</td>
                <td>Email</td>
                <td>idgroup</td>
                <td>Chức Năng</td>
                <td>  <a href="index.php?page=user_them">Thêm</a></td>
            </tr>
            <?php foreach ($list as $row ) { ?>
            <tr>
                <td><?=$row['idUser']?></td>
                <td><?=$row['username']?></td>
                <td><?=$row['pass']?></td>
                <td><?=$row['email']?></td>
                <td><?=($row['idGroup'])?"Admin":"User"?></td>
                <td>
                
                <div><a href="index.php?page=user_sua&idUser=<?=$row['idUser'] ?>">Sửa</a></div>
                    <div><a href="user/user_xoa.php?idUser=<?=$row['idUser'] ?>" onclick="return Del('<?php  echo $row['username'];?>')">Xóa</a></div>

                </td>
            </tr>
            <?php } ?>
            </table>
            
        </div>
        </div>
        <div class="duoi">

        </div>
        
    </div>

</body>
<script>
 function Del(name){
        return confirm("Bạn có chắc chắn muốn xoa user: " + name + " ?");
    }
   </script>
  
</html>