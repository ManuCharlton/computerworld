<?php

include 'connection.php';

if (isset($_GET['action']) && $_GET['action'] == 'update') {
    $name = $_GET['name'];
    $surname = $_GET['surname'];
    $age = $_GET['age'];
    $address = $_GET['address'];
    $product = $_GET['product'];

    $insert_query = "INSERT INTO client_information (id, name, surname, age, product, address) VALUE ('$name','$surname','$age','$id','$address','$product')";

    $result = mysqli_query($conn, $update_query);
    $student = mysqli_fetch_assoc($result);

}


$select_query = "SELECT * FROM client_information WHERE id = '$id' ";
$result = mysqli_query($conn, $select_query);
$student = mysqli_fetch_assoc($result);



//$insert_query = "INSERT INTO manu (name,surname,age) value ('$name','$surname','$age')";
?>


<!--    <form action="" method="post" id="database">-->
<!--        <input type="hidden" name="action" value="update">-->
<!--        <div class="form-group">-->
<!--            <input type="text" placeholder="name" name="name" class="form-control" value="--><?php //echo $student['name'] ?><!--">-->
<!--        </div>-->
<!--        <div class="form-group">-->
<!--            <input type="text" placeholder="surname" name="surname" class="form-control" value="--><?php //echo $student['surname'] ?><!--">-->
<!--        </div>-->
<!--        <div class="form-group">-->
<!--            <input type="text" placeholder="age" name="age" class="form-control" value="--><?php //echo $student['age'] ?><!--">-->
<!--        </div>-->
<!--        <div class="form-group">-->
<!--            <input type="hidden" placeholder="id" name="id" class="form-control" value="--><?php //echo $student['id'] ?><!--">-->
<!--        </div>-->
<!--        <div class="form-group">-->
<!--            <input type="hidden" placeholder="address" name="address" class="form-control" value="--><?php //echo $student['address'] ?><!--">-->
<!--        </div>-->
<!---->
<!---->
<!--        <div>-->
<!--            <button type="submit" class="btn btn-primary" value="update">update</button>-->
<!--        </div>-->
<!--    </form>-->
<?php
//mysqli_close($conn);
//?>

