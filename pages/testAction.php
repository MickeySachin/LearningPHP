
<?php
    if( $_SERVER['REQUEST_METHOD'] == 'GET') {
        if (preg_match("/[^A-Za-z'-]/", $_GET['name'])){
            die ('INvalid name');
        }
        ECHO 'USING METHOD GET<br>';
        echo "Welcome ". $_GET['name']. "<br />";
        echo "You are ". $_GET['age']. " years old.";
        exit();
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        if (preg_match("/[^A-Za-z'-]/", $_POST['name'])){
            die ('INvalid name');
        }
        ECHO 'USING METHOD POST<br>';
        echo "Welcome ". $_POST['name']. "<br />";
        echo "You are ". $_POST['age']. " years old.";
        exit();
    }
?>
