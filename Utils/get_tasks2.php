
<?php

$servername = "localhost";
$username = "root";
$password = "";
$databasename = "zadania";

// CREATE CONNECTION
$conn = new mysqli($servername,
	$username, $password, $databasename);

// GET CONNECTION ERRORS
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

// SQL QUERY
$query = "SELECT * FROM `pierwsza`;";

// FETCHING DATA FROM DATABASE
$result = $conn->query($query);

        if ($result->num_rows > 0)
        {
        	// OUTPUT DATA OF EACH ROW
        	while($row = $result->fetch_assoc())
        	{
                ?>
				<table class= "table table-primary	table-bordered ">
				<thead>
				<tr class="d-flex">
        		
        			<!-- <th class="flex-grow-1"></th> -->
					<h1><?php echo $row["id"]. " - Zadanie: " ." " ?></h1>
        			<th scope="col" class="flex-grow-1 align-content-start"><?php echo $row["title"]. "" ?></th>
        			<th scope="col" class="flex-grow-1 align-content-start	"><?php echo $row["content"]. "  rodzaj    : " ."" ?></th>
        			<th scope="col" class="flex-grow-1 align-content-start"><?php echo $row["kategoria"]. "<br>"; ?></th>
			</tr>
				</div>
                    <?php 
        	}
        }
        else {
        	echo "0 results";
        }
       	
    $conn->close();

?>