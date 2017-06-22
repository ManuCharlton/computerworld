<!--<link href="bootstrap-4.0.0-alpha.6-dist/css/bootstrap.min.css" rel="stylesheet">-->
<!--<link href="bootstrap-4.0.0-alpha.6-dist/js/bootstrap.js" rel="stylesheet">-->
<!--<link href="bootstrap-4.0.0-alpha.6-dist/css/jumbotron.css" rel="stylesheet">-->
<!--<link href="viewport-bug-workaround.css" rel="stylesheet">-->
<!---->
<!---->
<!--<nav class="navbar navbar-inverse navbar-fixed-top">-->
<!--    <div class="container">-->
<!--        <div class="navbar-header">-->
<!--            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"-->
<!--                    aria-expanded="false" aria-controls="navbar">-->
<!--                <span class="sr-only">Toggle navigation</span>-->
<!--                <span class="icon-bar"></span>-->
<!--                <span class="icon-bar"></span>-->
<!--                <span class="icon-bar"></span>-->
<!--            </button>-->
<!--            <a class="navbar-brand" href="#">client Information</a>-->
<!--        </div>-->
<!--</nav>-->
<!---->
<!--<div class="jumbotron">-->
<!--    <div class="container">-->
<!--        <form action=" " method="post" id="database">-->
<!--            <input type="hidden" name="action" value="insert">-->
<!--            <div class="form-group">-->
<!--                <input type="text" placeholder="name" name="name" class="form-control">-->
<!--            </div>-->
<!--            <div class="form-group">-->
<!--                <input type="text" placeholder="surname" name="surname" class="form-control">-->
<!--            </div>-->
<!--            <div class="form-group">-->
<!--                <input type="text" placeholder="age" name="age" class="form-control">-->
<!--            </div>-->
<!--            <div class="form-group">-->
<!--                <input type="text" placeholder="address" name="address" class="form-control">-->
<!--            </div>-->
<!---->
<!--            <div>-->
<!--                <button type="submit" class="btn btn-primary" value="insert">Submit</button>-->
<!--            </div>-->
<!--        </form>-->
<!--        <br>-->
<!--        <form action="update.php" method="post">-->
<!--            <button type="submit" class="btn btn-primary" value="insert">edit</button>-->
<!--        </form>-->

<?php
include 'connection.php';
include 'resources.php'
?>


        <form action="" method="get" id="database">
            <input type="hidden" name="action" value="update">
            <div class="form-group">
                <input type="hidden" placeholder="id" name="id" class="form-control" value="<?php echo $student['id'] ?>">
            </div>
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
                <input type="text" placeholder="product" name="product" class="form-control" value="<?php echo $student['product'] ?>">
            </div>
            <div class="form group">
                <input type="text" placeholder="address" name="address" class="form-control" value="<?php echo $student['address']?>">
            </div>

            <div>
                <button type="submit" class="btn btn-primary" value="submit">submit</button>
            </div>
        </form>

