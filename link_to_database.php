?>php

//connecting to the database 
$dbServerName = "localhost";
$dbUserName = "hfmasara0904";
$dbPassword = "cr2NAcRU";
$dbName = "Carvana";

if (!$connect){  //checking if the connection is valid 

    die("ERROR: Cannot connect to database $db on server $server using user name $user (".mysqli_connect_errno().
	", ".mysqli_connect_error().")");
}
else:  //connection is successful
    {
        $connect = mysqli_connect($dbServerName,$dbUserName,$dbPassword,$dbName);
    }

$family_friendly = $_POST['family_friendly'];
$number_of_seats = $_POST['#of_seats'];
$number_of_doors = $_POST['#of_doors'];
$trunk_space = $_POST['Trunk_space'];
$interior_space = $_POST['interior_space'];


$sql = "SELECT * FROM vehicle WHERE number_of_doors = $number_of_doors AND number_of_seats = $number_of_seats AND interior_space = $interior_space AND family_friendly = $family_friendly AND trunk_space = $trunk_space";

if (number_of_doors = $number_of_doors AND number_of_seats = $number_of_seats AND interior_space = $interior_space AND family_friendly = $family_friendly AND trunk_space = $trunk_space){
    $result = mysqli_query($connect, $sql);  //accessing the database and processing the query 
    $resultCheck = mysqli_num_row($result);  //checks if there was data returned

    if ($resultCheck > 0){
        while ($row = mysqli_fetch_assoc($result)){
            echo $row[vehicle_type];
    }
    else:{
        echo "No record found!!!"
    }
mysqli_close($connect);   

?>