<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Admin
                <small>Subheading</small>
            </h1>

            <h3>Found user details with ID - Method 2 (Auto Instantation - Loop)</h3>

            <h3>Found user details with ID - Method 2 (Instantation)</h3>

            <?php
            $users_found = User::find_user_by_id(2);
            $results = User::instantation_one($users_found);

            echo "User ID =    " .$results->id .  "<br/>";
            echo "User name =  " .$results->username .  "<br/>";
            echo "Password =   " .$results->password .  "<br/>";
            echo "First name = " .$results->first_name .  "<br/>";

            ?>

            <h3>Found user details with ID - Method 1 (Long)</h3>

            <?php

            $users_found = User::find_user_by_id(2);

            $user = new User();
            $user->id = $users_found['id'];
            $user->username = $users_found['username'];
            $user->password = $users_found['password'];
            $user->first_name = $users_found['first_name'];
            $user->last_name = $users_found['last_name'];

            echo "User ID = " . $user->id .  "<br/>";
            echo "User name = " .$user->username .  "<br/>";
            echo "Password = " .$user->password .  "<br/>";
            echo "First name = " .$user->first_name .  "<br/>";

            ?>



            <h3>Found user with ID</h3>

            <?php

            $users_found = User::find_user_by_id(2);
            echo $users_found['username'];
            echo "<hr/>";


            ?>


            <h3>Static method intro</h3>

            <?php

            $result_set = User::find_all_users();

            while ($row = mysqli_fetch_array($result_set)){
                echo $row ['username'] . "<br/>" ;
            }

            echo "<hr/>";

            foreach ($result_set as $row){
                echo $row ['username']. "<br/>";
            }

            ?>




            <h3>Found all user with both while & for loop</h3>

            <?php
            $user = new User();
            $result_set = $user->find_all_users();

            while ($row = mysqli_fetch_array($result_set)){
                echo $row ['username'] . "<br/>" ;
            }

            echo "<hr/>";

            foreach ($result_set as $row){
                echo $row ['username']. "<br/>";
            }

            ?>



            <h3>Found user with ID</h3>

            <?php

            $sql = "SELECT * FROM users WHERE id=1";
            $result = $database->query($sql);
            $users_found = mysqli_fetch_array($result);

            echo $users_found['username'];
            echo "<hr/>";

            ?>




            <h3>DB connection testing </h3>

            <?php

                if ($database->connection){
                    echo "DB connection testing is fine";
                }
             echo "<hr/>";

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