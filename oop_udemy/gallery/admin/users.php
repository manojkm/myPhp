<?php include("includes/header.php"); ?>
<?php  if (!$session ->is_signed_in()){redirect("login.php");}?>


<?php
$users =  User::find_all();
/*foreach ($users as $user){

    echo $user->id;

}*/
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
                        Users
                        <small>Manage Users</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-file"></i> Blank Page
                        </li>
                    </ol>


                    <a href="add_user.php" class="btn btn-primary">Add new user</a>

                    <?php
                    echo "<div><p class=\"text-danger\">" . $session->message() . "</p></div>";
                    ?>


                    <table class="table">

                        <tr>
                            <td>Id</td>
                            <td>Photo</td>
                            <td>Username</td>
                            <td>First Name</td>
                            <td>Last Name</td>

                        </tr>

                        <?php foreach ($users as $user) :  ?>

                            <tr>
                                <td><?php echo $user->id; ?></td>
                                <td><img src="<?php echo $user->image_path_and_placeholder() ?>" width="62" height="62"/> </td>
                                <td><?php echo $user->username; ?>
                                    <div class="action_link">
                                        <a href="delete_user.php?id=<?php echo $user->id?>">Delete</a>
<!--                                        <a href="#">View</a>-->
                                        <a href="edit_user.php?id=<?php echo $user->id?>"">Edit</a>
                                    </div></td>
                                <td><?php echo $user->first_name; ?></td>
                                <td><?php echo $user->last_name; ?></td>
                            </tr>

                        <?php endforeach;?>

                    </table>

                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->


    </div>
    <!-- /#page-wrapper -->

<?php include("includes/footer.php"); ?>