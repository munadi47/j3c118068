<?php
    if ($_GET['aksi']=="Edit"){
        echo "<h2>Form Edit</h2>";
		?>
        <form>
            <input type="text" name="nm" value="<?php echo $_GET['nm'] ?>">
            <input type="submit" name="sub" value="Simpan Perubahan">
            <input type="submit" name="sub" value="Kembali ke Tampil Data">
			<input type="hidden" name="aksi" value="Edit">
			<input type="hidden" name="idupdate" value="
            <?php 
                if (isset($_GET['idupdate']))
                    echo $_GET['idupdate']; 
                else
                    echo $_GET['id'];
                ?>">

		</form>	
		<?php
        if (isset($_GET['sub'])){
            if ($_GET['sub']=="Kembali ke Tampil Data"){
                header("location:01_tampildata.php");
            }
            else {
                if (strlen($_GET['nm'])){
                    if (strlen($_GET['nm'])){
						include "koneksi.php";
						mysqli_query($kon,"UPDATE `mahasiswa` SET `nama` = '".$_GET['nm']."' WHERE `mahasiswa`.`id` = ".$_GET['idupdate']);
						echo "<br>Nama Baru ".$_GET['nm']." Telah Disimpan";
					}
                }
            }
        }
    }

    else {
        echo "<h2>Mau Delete</h2>";
        
     }
?>