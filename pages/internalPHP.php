
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "<?php $_PHP_SELF ?>" method = "get">
        Name: <input type = "text" name = "name" />
        Age: <input type = "text" name = "age" />
        <input type = "submit" />
        
      </form>

</body>
</html>

<?php

   if( $_GET ) 
   {
        if (preg_match("/[^A-Za-z'-]/",$_GET['name'] )) {
            die ("invalid name and name should be alpha");
        }
        ECHO 'USING METHOD GET<br>';
        echo "Welcome ". $_GET['name']. "<br />";
        echo "You are ". $_GET['age']. " years old.";
        exit();
   }
   if( $_POST ) {
        if (preg_match("/[^A-Za-z'-]/",$_POST['name'] )) {
            die ("invalid name and name should be alpha");
        }
        ECHO 'USING METHOD POST<br>';
        echo "Welcome ". $_POST['name']. "<br />";
        echo "You are ". $_POST['age']. " years old.";
        exit();
    }

    /*  To show script result without overwriting the document
    if( $_REQUEST["name"] || $_REQUEST["age"] ) {
        echo "Welcome ". $_REQUEST['name']. "<br />";
        echo "You are ". $_REQUEST['age']. " years old.";
        exit();
    }
    */

?>