<?php

/*
 * Trying to mess around with php PDO driver
 * This is now de-facto standard for querring 
 * so many databases through PHP. 
 */


/**
 * Try connecting a database. Please see the way a dsn is formed to connect to 
 * the database. Try connecting database could always give a exception. 
 */
try {
    $pdo = new PDO("mysql:host=localhost;dbname=test_pdo", 'root', "password");
    #If you want a persistant connection
    #$pdo = new PDO("mysql:host=localhost;dbname=test_pdo", 'root', "password", array(
    #    PDO::ATTR_PERSISTENT => true
    #));
    #
    # Attributes could also be set by  PDO::setAttribute(). But after the connection
    # is made, it will have no effect there forward. 
    
} catch (Exception $e) {
    die($e->getMessage());
}


/**
 * The most old form of quering and getting the data
 * Isn't it resemble the 
 */
echo "Using PDO for query operation\n";
$rows = $pdo->query("Select * from tab1 order by id desc limit 1");
foreach ($rows as $row) {
    print_r($row);
}

echo "\n\n\n";
/**
 * Transaction and commit
 */

try {  
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->beginTransaction();
  $pdo->exec("insert into tab1 (name) values ('name1')"); // This will pass but it will also be rollbacked
  $pdo->exec("insert into tab2 (name) values ('name2')"); // This will fail
  echo "Am I executed"; // No, this will not be executed
  $pdo->commit();
  
} catch (Exception $e) {
  $pdo->rollBack();
  echo "Trying to execute 2 queries, one get execute and one dont. Rolling back the whole thing\n";
  echo "Failed: " . $e->getMessage() . "\n\n";
}
echo "\n\n\n";
/**
 * Prepared statement examples
 * 
 * Prepared statements are also called cached queries, so do use them 
 * as much as you can.
 */

/**
 * Inserting data using prepared statement
 */
echo "Doing insert though prepared statement\n";

$stmt = $pdo->prepare("INSERT INTO tab1 (name) VALUES (?)");
//bindParam() function will bind the first(1) variable going into this
//query with the name variable
$stmt->bindParam(1, $name);

// insert one row
$name = 'one';
$stmt->execute();
echo "First name one\n";

// insert another row with different values
$name = 'two';
$stmt->execute();
echo "Second name gone\n";

echo "\n\n\n";
/**
 * Selecting data using prepared statement
 */

$stmt = $pdo->prepare("select count(*) as one_count from tab1 where name =?");

$stmt->bindColumn(1, $par1);

$stmt->execute(array('one')); // Another way
$rows = $stmt->fetchAll(PDO::FETCH_OBJ);

echo "Used select query using prepared statement and got the result below\n";
print_r($rows);

?>
