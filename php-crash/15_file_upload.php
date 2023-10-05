<?php
    if(isset($_POST['submit'])) {
        $allowed_ext = array('png','jpg','jpeg','gif');
        if(!empty($_FILES['upload']['name'])) {
            print_r($_FILES);
            $file_name = $_FILES['upload']['name'];
            $file_size = $_FILES['upload']['size'];
            $file_tmp = $_FILES['upload']['tmp_name'];
            $target_dir = "uploads/{$file_name}";
            $file_name_array = explode('.',$file_name);
            $file_ext = strtolower(end($file_name_array));
            if(in_array($file_ext, $allowed_ext)) {
                if($file_size <= 100000000) {
                    move_uploaded_file($file_tmp, $target_dir);
                    $message = '<p>Success</p>';
                }
                else {
                    $message = '<p>file too big</p>';
                }
            }
            else {

                $message = "<p>{$file_ext} extensions not allowed</p>";
            }
        }
        else {
            $message = '<p>Please choose file</p>';
        }
    }
?>

<!DOCTYPE html>
<html>
<body>

<h1>My First Heading</h1>
<?php echo $message ?? null ?>
<form action='<?php echo $_SERVER['PHP_SELF']?>' enctype='multipart/form-data' method='POST'>
<input type='file' name='upload'>
<input type='submit' value='Submit' name='submit'>
</form>
</body>
</html>