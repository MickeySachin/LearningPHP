
<?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'sachinform';
    $table = 'usertable';

    $cnx = mysqli_connect($host, $user, $pass, $db);

    // if (!$cnx){
    //     die("Error in connection: " .mysqli_connect_error());
    // }
    // else{
    //     echo "<p>Connected successfully</p>";

    //     // Create table is not exists
    //     $query = "CREATE DATABASE IF NOT EXISTS `${db}`";
    //     if (mysqli_query($cnx, $query)){
    //         echo "<p>Database created successfully.</p>";
    //     }
    //     else{
    //         echo "Error creating database: " .mysqli_error($cnx) ."<br />";
    //     }
        
    //     // Select database
    //     $db_selected = mysqli_select_db($cnx, $db) ;
    //     if(!$db_selected) {
    //         die ("Cannot connect to the database : " . mysqli_error($cnx));
    //     }
    //     else{
    //         echo "<p>Database `${db}` is selected</p>";
    //     }
    // }


    // Signup Process
    if ($_POST && $_POST['hiddeninp'] == 'signupform'){
        // $_POST['hiddeninp'] is used to select the form inside 'signupForm.php'
        
        $user = $_POST['userid'];
        $pass = $_POST['passid'];
        $cpass = $_POST['cpassid'];
        
        if ($pass == $cpass){

            $initQuery = "INSERT INTO `${table}` (`sr`, `username`, `password`) VALUES(?, ?, ?) ";
            $queryInsert = mysqli_prepare($cnx, $initQuery);
            
            $querySelect = "SELECT * FROM `${table}` WHERE `username` = '${user}' AND `password` = '${pass}' ";
            $rows = mysqli_query($cnx, $querySelect);
            $currRow = 0;
            
            if($rows){
                if (mysqli_num_rows($rows) > 0){ 
                    echo ('<h3>User already registered!</h3>');
                    exit();
                }
                else{
                    $queryTempSelect = "SELECT * FROM `${table}`";
                    $rows = mysqli_query($cnx, $queryTempSelect);
                    $currRow = mysqli_num_rows($rows) + 1;
                    mysqli_stmt_bind_param($queryInsert, 'iss', $currRow, $user, $pass);
                }
            }
        
            if(mysqli_stmt_execute($queryInsert)){
                echo "<h3>User added Successfully.</h3>";
            }
            else{  
                echo "<h3>Failed to add user:</h3>". mysqli_error();
            }

        }
        else{
            echo "<h3>Password and Confirmed Password should be same:</h3>". mysqli_error($cnx);
        }
    }

    
    // Login Process
    if ($_POST && $_POST['hiddeninp'] == 'loginform'){
        
        // $_POST['hiddeninp'] is used to select the form inside 'loginForm.php'
        $user = $_POST['userid'];
        $pass = $_POST['passid'];

        
        $query = "SELECT * FROM `${table}` WHERE `username` = '${user}' AND `password` = '${pass}' ";

        if ($rows = mysqli_query($cnx, $query)){

            if (mysqli_num_rows($rows) > 0){  // if (mysqli_affected_rows($cnx) > 0){
                while ($res = mysqli_fetch_assoc($rows)) {
                    if ($user == $res['username'] && $pass == $res['password']){
                        echo "<h3>User `${res['username']}` Found Successfully!</h3>";
                    }
                }
            }
            else{
                die ("<h3>No user found with provided username and password.</h3>");
            }
        }
        else{
            echo ("<h3>Login Restricted:</h3>". mysqli_error($cnx));
        }

    }

?>