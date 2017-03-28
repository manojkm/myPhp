<?php include("includes/header.php"); ?>
<?php  if (!$session ->is_signed_in()){redirect("login.php");}?>




<?php
$photos =  Photo::find_all();

echo $_SESSION['user_id'];

//$users =  User::find_by_id($_SESSION['user_id']);
//echo $users->first_name;
/*foreach ($photos as $photo){

    echo $photo->id;

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
                        Photos
                        <small>Subheading</small>
                    </h1>

                    <h4>Photo, Find by ID</h4>

                    <?php
//                        $users_found = Photo::find_user_by_id(1);
//                        echo  $users_found -> filename ;

                        ?>

                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-file"></i> Blank Page
                        </li>
                    </ol>


                    <table class="table">

                        <tr>
                            <td>Photo</td>
                            <td>Id</td>
                            <td>File Name</td>
                            <td>Title</td>
                            <td>Size</td>

                        </tr>

                        <?php foreach ($photos as $photo) :  ?>

                        <tr>
                            <td><img src="<?php echo $photo->picture_path()?>" width="62" height="62"/>

                            <div class="pic_link">
                                <a href="delete_photo.php?id=<?php echo $photo->id?>">Delete</a>
                                <a href="#">View</a>
                                <a href="edit_photo.php?id=<?php echo $photo->id?>"">Edit</a>
                            </div>

                            </td>
                            <td><?php echo $photo->id; ?></td>
                            <td><?php echo $photo->filename; ?></td>
                            <td><?php echo $photo->title; ?></td>
                            <td><?php echo $photo->size; ?></td>
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