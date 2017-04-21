<?php

$db = new mysqli('localhost', 'sql', 'sql', 'employees1');

if($db->connect_errno > 0){
    die('Unable to connect to database [' . $db->connect_error . ']');
}

$sql = <<<SQL
   SELECT * FROM `employees` WHERE `birth_date` like "1965-02-01" AND `hire_date` > "1990-01-01" AND `gender` like 'M'ORDER BY (last_name) ASC, (first_name) ASC
SQL;

if(!$result = $db->query($sql)){
    die('There was an error running the query [' . $db->error . ']');
}

while($row = $result->fetch_assoc()){
   echo $row['first_name'] . ' ' . $row['last_name'] . '<br />'; 
}

?>
