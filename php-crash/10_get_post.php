<?php
    // echo $_GET['name'];
    // echo $_GET['age'];
    if(isset($_POST['submit'])) {

        echo $_POST['name'];
        echo $_POST['age'];
    }

?>

<a href="<?php echo $_SERVER['PHP_SELF'] ?>?name=Brad&age=30">Self</a>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
    <input type="text" name="name">
    <input type="text" name="age">
    <input type="submit" value="Submit" name="submit">
</form>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
    <input type="text" name="name">
    <input type="text" name="age">
    <input type="submit" value="Submit" name="submit">
</form>