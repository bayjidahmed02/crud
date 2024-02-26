<title>Edit</title>
<?php
$con = mysqli_connect('localhost', 'root', '', 'ch');
if (isset($_REQUEST['edit_id'])) {
    $id = $_REQUEST['edit_id'];
    $sql = "SELECT * FROM CH WHERE id=$id";
    $data = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($data);
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $roll = $_POST['roll'];
    $sql = "UPDATE ch set name = '$name', roll = '$roll' WHERE id = $id";

    $result =  mysqli_query($con, $sql);
    if ($result) {
        echo 'Updated';
        // header("location: edit.php?edit_id=$id");
        header("location: display.php");
    }
}
?>
<form action="" method="post">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <label for="name">Name</label>
    <input type="text" name="name" value="<?php echo $row['name'] ?>"><br><br>
    <label for="name">Roll</label>
    <input type="text" name="roll" value="<?php echo $row['roll'] ?>"><br><br>
    <input type="submit" value="Update" name="update">
</form>

<a href="display.php" style="background: red;
  padding: 4px 10px;
  color: white;
  text-decoration: none;
  border-radius: 3px;">Display</a>
