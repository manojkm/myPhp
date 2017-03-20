<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Admin
                <small>Subheading</small>
            </h1>

            <h3>Testing Save Method</h3>

            <h4>Update</h4>


            <?php

/*          $user = User::find_user_by_id(88);
            $user->username = "asdasd";
            $user->save();*/

            ?>

            <h4>Create</h4>
            <?php

//            $user = new User();
//            $user->username = "asdasd";
//            $user->save();

            ?>


            <h3>Testing Delete Method</h3>
            <?php

            $user = User::find_user_by_id(92);
            $user->delete();

            ?>

            <h3>Testing Update Method</h3>

            <?php

/*          $user = User::find_user_by_id(8);
            $user->last_name = "test1";
            $user->update();*/

            ?>


            <h3>Testing Create Method</h3>

            <?php
/*
            $user = new User();

            $user->username = "u3";
            $user->password = "p3";
            $user->first_name = "f3";
            $user->last_name = "l3";

            if ($user->create()){
                echo "created";
            }

            else {

                echo "not created";
            }*/

            ?>



            <h3>Find one user - Method 2 (Auto Instantation - Loop)</h3>

            <?php
            $users_found = User::find_user_by_id(6);
            echo  $users_found -> username ;

            echo "<h4>var_dump</h4>";
            var_dump( $users_found);
            echo "<h4>print_r</h4>";
            print_r( $users_found);

            ?>

            <h3>Find all users - Method 2 (Auto Instantation - Loop)</h3>

            <?php
                $users_found = User::find_all_users();

                // Prints variable to stdout in human-readable format
               /*  print_r($users_found );*/

                foreach($users_found as $users){
                    echo $users -> id . "<br/>";
                }

            ?>

            <br/><br/>

            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
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