<?php include("includes/header.php"); ?>


<?php
        // determine page (based on <_GET>)
$page = !empty($_GET['page'])? (int)$_GET['page'] : 1 ;

$items_per_page = 4;
$item_total_count = Photo::count_all();
$photos = Photo::find_all();

?>


<div class="row">

    <!-- Blog Entries Column -->
    <div class="col-md-8">
        <div class="row">
        <?php foreach ($photos as $photo) : ?>

                <div class="col-md-3">
                    <a href="photo.php?id=<?php echo $photo->id?>" class="thumbnail"><img  style="height: 100px; width:100px;" src="admin/<?php echo $photo->picture_path() ?>" /></a>
                </div>

        <?php endforeach; ?>
        </div>
    </div>


    <!-- Blog Sidebar Widgets Column -->
    <div class="col-md-4">
        <?php include("includes/sidebar.php"); ?>
    </div>
    <!-- /.row -->

    <?php include("includes/footer.php"); ?>