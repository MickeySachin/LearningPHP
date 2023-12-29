
<?php
   
   /*
   // PHP DataBase Connectivity
      // MySQLi extension - Procedural
      // MySQLi extension - Object Oriented
      // PDO - Object Oriented

   // Connecting to DB using MySQLi extension ( procedural )
   $host = 'localhost';
   $user = 'root';
   $pass = '';
   $db = 'sachindb';

   $cnx = mysqli_connect($host, $user, $pass);
   
   if (!$cnx){
      die("Error in connection: " .mysqli_connect_error());
   }
   else{
      echo "<p>Connected successfully</p>";
      // Select the database
      $db_selected = mysqli_select_db($cnx, $db) ;
      if(!$db_selected) {
         die ("Cannot connect to the database : " . mysqli_error($cnx));
      }
      else{
         echo "<p>Database `${db}` is selected</p>";
      }
   }
   
   // Creating database
   /*
   $query = "create database `${db}`";
   mysqli_query($cnx, $query);  // mysqli_query() returns 1 when query executed successfully 

   if ($query){
    echo '<p>Database created successfully.</p>';
   }
   else{
    echo '<p>Database can`t be created - '.mysqli_error($cnx).'</p>';
   }
   */
   
/*
   // Creating table - backticks(``) are used to specify column, table and database names
   $tableName = "students";
   $queryCreateTable = "CREATE TABLE IF NOT EXISTS `$tableName` ( 
   `id` int(10) unsigned AUTO_INCREMENT PRIMARY KEY,
   `name` varchar(50),
   `age` smallint(6));";

   if (mysqli_query($cnx, $queryCreateTable)){
      echo "<br/> Table '$tableName' created successfully.";
   }

  
  // Inserting data into table
  $queryInsert = "INSERT INTO `students`(`name`, `age`)
   VALUES('sachin', 23),
   ('Rahul', 24),
   ('Ajay', 27)";

   if (mysqli_query($cnx, $queryInsert)){
      echo "<br/> Data inserted successfully.";
   }
   else{
      echo 'Data can`t be inserted. Error: ', mysqli_error($cnx), "\n";
   }
   

   // Retreiving the data
   $queryFetch = "SELECT * FROM `students`";
   $result = mysqli_query($cnx, $queryFetch);

   while ($rows = mysqli_fetch_assoc($result)) // Data is returned in Associative array
   {
      echo "ID : ", $rows['id'], " - ", "Name : ", $rows['name'], "  - ", "Age : ", $rows['age'], '<br>';
   }


   // Deleting records
   $queryDelete = "DELETE FROM `students` WHERE `id` > '3' ";
   $affectedRows = mysqli_affected_rows($cnx);
   
   if(mysqli_query($cnx, $queryDelete))
   {
      echo "<br/> ${affectedRows} rows deleted successfully.";
      
   }

   x
   // Updating records
   $queryUpdate = "UPDATE `students` SET `name` = 'saanvi' WHERE `id` = 2";
   $result = mysqli_query($cnx, $queryUpdate);
   $affectedRows = mysqli_affected_rows($cnx);
   
   if ($result){
      echo "<br> ${affectedRows} Record(s) updated successfully.";
   }
   else{
      echo 'Could not update record. Error: ', mysqli_error($cnx), "\n";
   }


   */


   mysqli_close($cnx);

?>