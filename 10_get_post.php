<?php
//$_GET and $_POST superglobals are used to pass data through urls and forms

if(isset($_POST['submit']))
{
    echo $_POST['name'];
    echo $_POST['age'];
}
// echo $_POST['name'];
// echo $_POST['age'];
?>

<a href="<?php echo $_SERVER['PHP_SELF'];?>?name=Walt&age=30">Click</a>

<!--Use GET for searches otherwise use POST it's safer-->
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
    <div>
        <label for="name">Name: </label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="age">Age: </label>
        <input type="text" name="age">
    </div>
    <input type="submit" value="Submit" name="submit">
</form>