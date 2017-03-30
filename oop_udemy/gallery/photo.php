<?php
require_once("admin/includes/init.php");

if (empty($_GET['id'])) {
    redirect('index.php');
}

$photo = Photo::find_by_id($_GET['id']);
echo $photo->filename;
//echo count($photo);

if (isset($_POST['submit'])) {
    $author = $_POST['author'];
    $body = $_POST['body'];

    $new_comment = Comment::create_comment($photo->id, $author, $body);

    if ($new_comment) {
        $new_comment->save();
        redirect("photo.php?id={$photo->id}");
    } else {
        $message = "There was some problems while saving";
    }

} else {
    $author = '';
    $body = '';
}

$comments = Comment::find_the_comments($photo->id);

//echo '<pre>';
//print_r($photo);
//echo '</pre>';

$users =  User::find_by_id($_SESSION['user_id']);
//echo $users->first_name;

?>



<?php include("includes/header.php"); ?>


<div class="row">

    <div class="col-lg-8">

        <!-- Blog Post -->

        <!-- Title -->
        <h1>Blog Post Title</h1>

        <!-- Author -->
        <p class="lead">
            by <a href="#">Start Bootstrap</a>
        </p>

        <hr>

        <!-- Date/Time -->
        <p><span class="glyphicon glyphicon-time"></span> Posted on August 24, 2013 at 9:00 PM</p>

        <hr>

        <!-- Preview Image -->
        <img class="img-responsive" src="admin/<?php echo $photo->picture_path()?>" width="800" />

        <!--            <img class="img-responsive" src="http://placehold.it/900x300" alt="">-->

        <hr>

        <!-- Post Content -->
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, vero, obcaecati, aut,
            error quam sapiente nemo saepe quibusdam sit excepturi nam quia corporis eligendi eos magni recusandae
            laborum minus inventore?</p>

        <?php  echo $photo->description; ?>

        <hr>

        <!-- Blog Comments -->

        <!-- Comments Form -->
        <div class="well">
            <h4>Leave a Comment:</h4>
            <form role="form" method="post">
                <div class="form-group">
                    <label for="author">Author</label>
                    <input type="text" name="author" class="form-control">
                </div>

                <div class="form-group">
                    <textarea name="body" class="form-control" rows="3"></textarea>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

        <hr>

        <!-- Posted Comments -->

        <?php foreach ($comments as $comment): ?>
            <!-- Comment -->
            <div class="media">
                <a class="pull-left" href="#">
                    <img src="admin/<?php echo $users->image_path_and_placeholder() ?>" width="64"/>
                    <!--                        <img class="media-object" src="http://placehold.it/64x64" alt="">-->
                </a>
                <div class="media-body">
                    <h4 class="media-heading"> <?php echo $comment->author; ?>
                        <!--                        <small>August 25, 2014 at 9:30 PM</small>-->
                    </h4>
                    <?php echo $comment->body; ?>
                </div>
            </div>
        <?php endforeach; ?>


        <!-- Comment -->
        <div class="media">
            <a class="pull-left" href="#">
                <img class="media-object" src="http://placehold.it/64x64" alt="">
            </a>
            <div class="media-body">
                <h4 class="media-heading">Start Bootstrap
                    <small>August 25, 2014 at 9:30 PM</small>
                </h4>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.
                Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi
                vulputate fringilla. Donec lacinia congue felis in faucibus.
                <!-- Nested Comment -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Nested Start Bootstrap
                            <small>August 25, 2014 at 9:30 PM</small>
                        </h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin
                        commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce
                        condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                </div>
                <!-- End Nested Comment -->
            </div>
        </div>

    </div>




    <!-- Blog Sidebar Widgets Column -->
    <div class="col-md-4">


        <?php include("includes/sidebar.php"); ?>



    </div>
    <!-- /.row -->

    <?php include("includes/footer.php"); ?>
