<?php include("includes/header.php"); ?>
<?php  if (!$session ->is_signed_in()){redirect("login.php");}?>
<?php

if (empty($_GET['id'])) {
    redirect('photos.php');
}

$comments = Comment::find_the_comments($_GET['id']);
//$comments = Comment::find_by_id($_GET['id']);
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
                        Comments
                        <small>user Comments</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-file"></i> Blank Page
                        </li>
                    </ol>
<!--                    <a href="add_user.php" class="btn btn-primary">Add new user</a>-->

                    <?php
                    echo "<div><p class=\"text-danger\">" . $session->message() . "</p></div>";
                    ?>

                    <table class="table">

                        <tr>
                            <td>Id</td>
                            <td>Photo Id</td>
                            <td>Author</td>
                            <td>Comments</td>
                        </tr>

                        <?php foreach ($comments as $comment) :  ?>

                            <tr>
                                <td><?php echo $comment->id; ?></td>
                                <td><?php echo $comment->photo_id; ?></td>
                                <td><?php echo $comment->author ?>  <div class="action_link">
                                        <a href="delete_comment_photo.php?id=<?php echo $comment->id?>">Delete</a>
                                    </div></td>
                                <td><?php echo $comment->body; ?></td>

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