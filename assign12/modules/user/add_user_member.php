<h2>ฟอร์มเพิ่มUser</h2>
    <form method="post" action="index.php?md=user&action=insert_user" enctype="multipart/form-data">
        <div class="form-floating"><input style="width: 300px;" class="form-control" placeholder="Username" type="text" name="username" required><label for="floatingInput">Username</label></div>
        <br>
        <div class="form-floating"><input style="width: 300px;" class="form-control" placeholder="Password" type="Password" name="passwd" required><label for="floatingInput">Password</label></div>
        <input type="hidden" name='level' value="2">
        <br>
        <div>
            <input class="btn btn-primary rounded-pill px-3" type="submit" name="bsubmit" value="เพิ่มUser">
            <input class="btn btn-primary rounded-pill px-3"  type="reset" value="ยกเลิก">  
        </div>
    </form>