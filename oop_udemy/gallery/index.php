<?php include("includes/header.php"); ?>

<?php
// determine page (based on <_GET>)
$page = !empty($_GET['page']) ? (int)$_GET['page'] : 1;

$items_per_page = 4;
$item_total_count = Photo::count_all();

$paginate = new Paginate($page, $items_per_page, $item_total_count);

$sql = "SELECT * FROM photos ";
$sql .= "LIMIT {$items_per_page} ";
$sql .= "OFFSET {$paginate->offset()}";

$photos = Photo::find_by_query($sql);

//$photos = Photo::find_all();
?>

    <div class="row">

    <!-- Blog Entries Column -->
    <div class="col-md-8">
        <div class="row">
            <?php foreach ($photos as $photo) : ?>

                <div class="col-md-3">
                    <a href="photo.php?id=<?php echo $photo->id ?>" class="thumbnail"><img
                                style="height: 100px; width:100px;"
                                src="admin/<?php echo $photo->picture_path() ?>"/></a>
                </div>

            <?php endforeach; ?>
        </div>
        <div class="row">
            <div class="col-md-12">
                <ul class="pager">
                    <?php

                    if ($paginate->page_total() > 1) {
                        if ($paginate->has_previous()) {
                            echo " <li class=\"prev\"><a href=\"index.php?page={$paginate->previous()}\">Previous</a></li>";
                        }


                    for ($i=1; $i <= $paginate->page_total() ; $i++) {
                        if ($i == $paginate->current_page){
                        echo "<li class='active'><a href=\"index.php?page={$i}\">{$i}</a></li>";
                        }else{
                        echo "<li><a href=\"index.php?page={$i}\">{$i}</a></li>";
                        }
                    }


                        if ($paginate->has_next()) {
                            echo " <li class=\"next\"><a href=\"index.php?page={$paginate->next()}\">Next</a></li>";
                        }
                    }

                    ?>


<!--                    <li class="prev"><a href="#">Previous</a></li>-->
                </ul>
            </div>
        </div>


    </div>


    <!-- Blog Sidebar Widgets Column -->
    <div class="col-md-4">
        <?php include("includes/sidebar.php"); ?>
    </div>
    <!-- /.row -->

<?php include("includes/footer.php"); ?>