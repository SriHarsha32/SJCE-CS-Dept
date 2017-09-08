<?php
    if(is_array($_FILES)) {
        if(is_uploaded_file($_FILES['file']['tmp_name'])) {
            $sourcePath = $_FILES['file']['tmp_name'];
            $targetPath = "../upload_images/".$_FILES['file']['name'];
            if(move_uploaded_file($sourcePath,$targetPath)) {
            ?>
            <img src="<?php echo $targetPath; ?>" width="100px" height="100px" />
            <?php
            }
        }
    }
?>