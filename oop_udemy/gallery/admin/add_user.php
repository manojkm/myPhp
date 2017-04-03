<?php include("includes/header.php"); ?>
<?php  if (!$session ->is_signed_in()){redirect("login.php");}?>

<?php

$message = "";


$user = new User();
if (isset($_POST['create'])){

    if ($user){
        $user->username     = $_POST['username'];
        $user->first_name   = $_POST['first_name'];
        $user->last_name    = $_POST['last_name'];
        $user->password     = $_POST['password'];

        $user->set_file($_FILES['user_image']);


        if ($user->upload_photo()){
            $message = "Photo uploaded successfully";
        }
        else{

            $message = join("<br/>", $user->errors);
        }


    }
}

?>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

        <?php include("includes/top_nav.php"); ?>

        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->

        <?php include("includes/side_nav.php"); ?>

        <!-- /.navbar-collapse -->
    </nav>

    <div id="page-wrapper">


        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Add User
                        <small>Subheading</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-file"></i> Blank Page
                        </li>
                    </ol>
                    <?php
                    echo $message;
                    ?>


                    <form action="" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <input type="file" name="user_image" id="exampleInputFile">
                            <p class="help-block">Example block-level help text here.</p>
                        </div>



                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="firstname" name="username" placeholder="Username">
                        </div>

                        <div class="form-group">
                            <label for="firstname">First Name</label>
                            <input type="text" class="form-control" id="firstname" name="first_name" placeholder="First Name">
                        </div>

                        <div class="form-group">
                            <label for="lastname">Last Name</label>
                            <input type="text" class="form-control" id="lastname" name="last_name" placeholder="Last Name">
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        </div>


                        <button type="submit" name="create" class="btn btn-primary">Submit</button>

                    </form>

                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->


    </div>
    <!-- /#page-wrapper -->

<?php include("includes/footer.php"); ?>