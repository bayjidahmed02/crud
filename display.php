<?php
$con = mysqli_connect('localhost', 'root', '', 'ch');
$sql = "SELECT * FROM ch";
$result = mysqli_query($con, $sql);

if (isset($_GET['delete_id'])) {
    $id = $_GET['delete_id'];
    $delete_sql = "DELETE FROM ch WHERE id = $id";
    mysqli_query($con, $delete_sql);
    header('location: display.php');
}
if (isset($_GET['edit_id'])) {
    $id = $_GET['edit_id'];
    header("location: edit.php?edit_id=$id");
}
?>
<title>Display</title>
<table border="1" cellpadding="10px" style="margin-bottom: 20px;">
    <thead>
        <tr>
            <td>id</td>
            <td>Name</td>
            <td>Roll</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($rows = mysqli_fetch_assoc($result)) {
            $id =  $rows['id'];
            $name =  $rows['name'];
            $roll = $rows['roll'];
        ?>
            <tr>
                <td><?php echo $id; ?></td>
                <td><?php echo $name; ?></td>
                <td><?php echo $roll; ?></td>
                <td>
                    <a href="?edit_id=<?php echo $id; ?>">Edit</a>
                    <a href="?delete_id=<?php echo $id; ?>">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<a href="index.php" style="background: red;
  padding: 4px 10px;
  color: white;
  text-decoration: none;
  border-radius: 3px;">Create</a>
