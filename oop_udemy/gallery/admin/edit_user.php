<?php include("includes/header.php"); ?>
<?php  if (!$session ->is_signed_in()){redirect("login.php");}?>

<?php

if (empty($_GET['id'])){
    redirect('users.php');
}


$user = User::find_by_id($_GET['id']);


if (isset($_POST['update'])){

    if ($user){
        $user->username     = $_POST['username'];
        $user->first_name   = $_POST['first_name'];
        $user->last_name    = $_POST['last_name'];
        $user->password     = $_POST['password'];

        $user->set_file($_FILES['user_image']);
        $user->save_user_and_image();
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


                    <form action="" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <input type="file" name="user_image" id="exampleInputFile">
                            <p class="help-block">Example block-level help text here.</p>
                        </div>



                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="firstname" name="username" placeholder="Username" value="<?php echo $user->username; ?>">
                        </div>

                        <div class="form-group">
                            <label for="firstname">First Name</label>
                            <input type="text" class="form-control" id="firstname" name="first_name" placeholder="First Name" value="<?php echo $user->first_name; ?>">
                        </div>

                        <div class="form-group">
                            <label for="lastname">Last Name</label>
                            <input type="text" class="form-control" id="lastname" name="last_name" placeholder="Last Name" value="<?php echo $user->last_name; ?>">
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="<?php echo $user->password; ?>">
                        </div>


                        <button type="submit" name="update" class="btn btn-primary">Update</button>

                    </form>

                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->


    </div>
    <!-- /#page-wrapper -->

<?php include("includes/footer.php"); ?>