<?php

if(isset($_POST['submit']))
{
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    $age = htmlspecialchars($_POST['age']);

    // $name=filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS);

    echo $name;
}
// echo $_POST['name'];
// echo $_POST['age'];
?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
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