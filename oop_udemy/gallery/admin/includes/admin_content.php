<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Admin
                <small>Subheading</small>
            </h1>



            <?php
            //                if ($database->connection){
            //
            //                    echo "true";
            //                }
            ?>

            <!-- Method 1-->

            <?php
            //
            //            $sql =  " SELECT * FROM users WHERE id=1";
            //            $result = $database->query($sql);
            //            $user_found = mysqli_fetch_array($result);
            //
            //                echo $user_found['username'] ;

            ?>

            <!-- Method 2-->

            <?php

            //            $user = new User();
            //
            //            $result_set= $user->find_all_users();
            //
            //            while ($row = mysqli_fetch_array($result_set)){
            //                echo $row['username'] . "&nbsp;". $row['last_name'] . "<br/>" ;
            //
            //            }

            ?>


            <!-- Method 3-->

            <?php
            //            $userID = 1;
            //            $found_user= User::find_user_by_id($userID);
            //            echo $found_user['username'];

            ?>

            <?php

            //            $found_user= User::find_user_by_id(2);
            //            $user = User::instantation($found_user);
            //
            //                echo $user->username ;

            ?>



            <?php

            $user = User::find_user_by_id(14);
            $user->first_name = "ssss";
            $user->update();

            ?>

            <?php
//
//            $user =  new User();
//            $user->username = "ssss";
//            $user->first_name = "kkkk";
//            $user->save();

            ?>







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