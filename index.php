<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $roll = $_POST['roll'];
    $con = mysqli_connect('localhost', 'root', '', 'ch');
    $sql = "INSERT INTO CH(name,roll) VALUES ('$name','$roll')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo 'done';
    }
}
?>
<form action="" method="post">
    <label for="name">Name</label>
    <input type="text" name="name"><br><br>
    <label for="name">Roll</label>
    <input type="text" name="roll"><br><br>
    <input type="submit" value="Submit" name="submit">
</form>


<a href="display.php" style="background: red;
  padding: 4px 10px;
  color: white;
  text-decoration: none;
  border-radius: 3px;">Display</a>
