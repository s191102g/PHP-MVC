


<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" rel= "stylesheet" >
<h4 class="col-10 m-auto p-2 text-center">SỬA THÔNG TIN NGƯỜI DÙNG</h4>
<form action="" method="post" class="border border-primary col-10 m-auto p-2">
   <div class="form-group">
     <label>Tên Đăng Nhập</label> <input name="ten" value="<?=$list['username']?>" type="text" class="form-control"/>
   </div>
   <div class="form-group">
     <label>Password</label> <input name="pass" type="password" class="form-control"/>
   </div> 
   <div class="form-group">
     <label>Email</label> <input name="email" type="text" value="<?=$list['email']?>"  class="form-control"/>
   </div> 
   
   <div class="form-group">
     <label>Quyền: </label> 
     <input name="idg" type="radio" <?php if($list['idGroup']== 1 ) echo 'checked';?> value="1"/> Admin 
     <input name="idg" type="radio" <?php if($list['idGroup']== 0 ) echo 'checked';?> value="0" /> User
   </div> 
   <div class="form-group">
     <input name="btn" type="submit" value="Sửa thông tin" class="btn btn-primary" onclick="return Del('<?php  echo $list['username'];?>')"/> 
   </div>
   <script>
    function Del(name){
        return confirm("Bạn có chắc chắn muốn sửa user: " + name + " ?");
    }
   </script>
</form>
