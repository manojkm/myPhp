<?php include("includes/header.php"); ?>
<?php  if (!$session ->is_signed_in()){redirect("login.php");}?>

<?php

$message = "";

if (isset($_POST['submit'])){

    $photo = new Photo();
    $photo-> title = trim($_POST['title']);
    $photo->set_file($_FILES['file_upload']);

    if ($photo->save()){
            $message = "Photo uploaded successfully";
    }
    else{

        $message = join("<br/>", $photo->errors);
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
                        Upload
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

                    <form action="upload.php" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                        </div>


                        <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <input type="file" name="file_upload" id="exampleInputFile">
                            <p class="help-block">Example block-level help text here.</p>
                        </div>


                        <button type="submit" name="submit" class="btn btn-default">Submit</button>


                    </form>




                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->


    </div>
    <!-- /#page-wrapper -->

<?php include("includes/footer.php"); ?>