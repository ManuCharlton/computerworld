<?php
include'connection.php'
?>

<?php



if (isset($_POST['action']) && $_POST['action'] == 'update') {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $age = $_POST['age'];
    $id = $_POST['id'];
    $address = $_POST['address'];

    $update_query = "UPDATE client_information SET name = '$name', surname ='$surname', age =' $age, 'address = $address WHERE id = '$id'";
    $result = mysqli_query($conn, $update_query);
    $student = mysqli_fetch_assoc($result);
}




$select_query = "SELECT * FROM client_information WHERE id = '$id' ";
$result = mysqli_query($conn, $select_query);
$student = mysqli_fetch_assoc($result);




?>
<form action="" method="post" id="database">
    <input type="hidden" name="action" value="update">
    <div class="form-group">
        <input type="text" placeholder="name" name="name" class="form-control" value="<?php echo $student['name'] ?>">
    </div>
    <div class="form-group">
        <input type="text" placeholder="surname" name="surname" class="form-control" value="<?php echo $student['surname'] ?>">
    </div>
    <div class="form-group">
        <input type="text" placeholder="age" name="age" class="form-control" value="<?php echo $student['age'] ?>">
    </div>
    <div class="form-group">
        <input type="hidden" placeholder="id" name="id" class="form-control" value="<?php echo $student['id'] ?>">
    </div>
    <div class="form-group">
        <input type="hidden" placeholder="adress" name="address" class="form-control" value="<?php echo $student['address'] ?>">
    </div>


    <div>
        <button type="submit" class="btn btn-primary" value="update">update</button>
    </div>
</form>
<?php
mysqli_close($conn);
?>






