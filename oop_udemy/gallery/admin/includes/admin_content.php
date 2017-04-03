<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Admin
                <small>Dashboard</small>
            </h1>


            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-users fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $session->count; ?></div>
                                    <div>New Views</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-photo fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo Photo::count_all(); ?>
                                        <?php
                                        //                                        $photos =  Photo::find_all();
                                        //                                        echo count($photos);
                                        ?>
                                    </div>
                                    <div>Photos</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Total Photos in Gallery</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-user fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo User::count_all(); ?>

                                    </div>

                                    <div>Users</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Total Users</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-support fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo Comment::count_all(); ?></div>
                                    <div>Comments</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Total Comments</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>


            </div> <!--First Row-->


            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div id="piechart" style="width: 900px; height: 500px;"></div>
                </div>
            </div>


            <h3>Photo : Create</h3>
            <?php

//            $photos = new Photo();
//            $photos->title = "dummy";
//            $photos->save();

            ?>


            <h3>Find all photos</h3>

            <?php

            $photos = Photo::find_all();
            foreach ($photos as $photo) {

                echo $photo->title;

            }
            ?>

            <h3>Testing Save Method</h3>

            <h4>Update</h4>


            <?php

            /*          $user = User::find_user_by_id(88);
                        $user->username = "asdasd";
                        $user->save();*/

            ?>

            <h4>Create</h4>
            <?php
            /*
                        $user = new User();
                        $user->username = "gggggggggggggggggg";
                        $user->save();

                        */ ?>


            <h3>Testing Delete Method</h3>
            <?php

            /*            $user = User::find_user_by_id(92);
                        $user->delete();*/

            ?>

            <h3>Testing Update Method</h3>

            <?php
            $user = User::find_user_by_id(8);
            $user->last_name = "tm";
            $user->update();
            ?>


            <h3>Testing Create Method</h3>

            <?php

/*            $user = new User();
            $user->username = "u3";
            $user->password = "p3";
            $user->first_name = "f3";
            $user->last_name = "l3";

            if ($user->create()) {
                echo "created";
            } else {
                echo "not created";
            }*/

            ?>


            <h3>Find one user by ID - Method 2 (Auto Instantation - Loop)</h3>

            <?php
            $users_found = User::find_user_by_id(6);
            echo $users_found->username;

            echo "<h4>var_dump</h4>";
            var_dump($users_found);
            echo "<h4>print_r</h4>";
            print_r($users_found);

            ?>

            <h3>Find all users - Method 2 (Auto Instantation - Loop)</h3>

            <?php
            $users_found = User::find_all_users();

            // Prints variable to stdout in human-readable format
            /*  print_r($users_found );*/

            foreach ($users_found as $users) {
                echo $users->id . "<br/>";
            }

            ?>

            <br/><br/>

            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i> <a href="index.html">Dashboard</a>
                </li>
                <li class="active">
                    <i class="fa fa-file"></i> Blank Page
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

</div>
<!-- /.container-fluid -->