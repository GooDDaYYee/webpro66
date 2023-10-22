<h1>ฟรอ์มเพิ่มUser</h1>
    <form method="post" action="index.php?md=user&action=insert_user" enctype="multipart/form-data">
        <div>*Username : <input type="text" name="username" require></div>
        <div>*Password : <input type="Password" name="passwd" require></div>
        <input type="hidden" name='level' value="2">
        <div>
            <input type="submit" name="bsubmit" value="เพิ่มUser">
            <input type="reset" value="ยกเลิก">  
        </div>
    </form>
    หมายเหตุกรอกข้อมูลทุกช่องที่มีขึ้นเครื่องหมาย *