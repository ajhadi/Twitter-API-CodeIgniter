<?php
    if($_POST['idx']) {
        $id = $_POST['idx'];      
        $sql = mysql_query("SELECT * FROM siswa WHERE id = $id");
        while ($result = mysql_fetch_array($sql)){
        ?>
        <form action="edit.php" method="post">
            <input type="hidden" name="id" value="<?php echo $result['id']; ?>">
            <div class="form-group">
                <label>Nama Siswa</label>
                <input type="text" class="form-control" name="nama" value="<?php echo $result['nama']; ?>">
            </div>
            <div class="form-group">
                <label>Umur</label>
                <input type="text" class="form-control" name="umur" value="<?php echo $result['umur']; ?>">
            </div>
              <button class="btn btn-primary" type="submit">Update</button>
        </form>     
        <?php } }
?>