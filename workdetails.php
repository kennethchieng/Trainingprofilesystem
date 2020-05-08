<?php
/*require_once("include/initialize.php");  
$studentid = $_SESSION['StudentID'];
$studentcom = $_SESSION['COMPANY'];


$sql = "INSERT INTO tblworkstats (StudentID, COMPANY, COMADDRESS, STATUS, DHired_Day, DHired_Month, DHired_Year, DQFR_Day, DQFR_Month, DQFR_Year, ANNUALINCOME)
		VALUES ('$studentid', '$COMPANY', '$COMADDRESS', '$STATUS', '$DHired_Day', '$DHired_Month', '$DHired_Year', '$DQFR_Day', '$DQFR_Month', '$DQFR_Year', '$ANNUALINCOME' )";
$mydb->setQuery($sql);
$mydb->executeQuery();

if (isset($_POST['btnSubmit'])) {
    # code...  

    message("Success","success");
    redirect("index.php");
}
*/
?>

<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
require_once("include/initialize.php");  
$link = mysqli_connect("localhost", "root", "", "dbcaiwl");
 $studentid = $_SESSION['StudentID'];
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$StudentID = mysqli_real_escape_string($link, $_REQUEST['studentid']);
$COMPANY = mysqli_real_escape_string($link, $_REQUEST['COMPANY']);
$COMADDRESS = mysqli_real_escape_string($link, $_REQUEST['COMADDRESS']);
$STATUS = mysqli_real_escape_string($link, $_REQUEST['STATUS']);
$DHired_Day = mysqli_real_escape_string($link, $_REQUEST['DHired_Day']);
$DHired_Month = mysqli_real_escape_string($link, $_REQUEST['DHired_Month']);
$DHired_Year = mysqli_real_escape_string($link, $_REQUEST['DHired_Year']);
$DQFR_Day = mysqli_real_escape_string($link, $_REQUEST['DQFR_Day']);
$DQFR_Month = mysqli_real_escape_string($link, $_REQUEST['DQFR_Month']);
$DQFR_Year = mysqli_real_escape_string($link, $_REQUEST['DQFR_Year']);
$ANNUALINCOME = mysqli_real_escape_string($link, $_REQUEST['ANNUALINCOME']);

 
// Attempt insert query execution
$sql = "INSERT INTO tblworkstats (StudentID, COMPANY, COMADDRESS, STATUS, DHired_Day, DHired_Month, DHired_Year, DQFR_Day, DQFR_Month, DQFR_Year, ANNUALINCOME)
		VALUES ('$studentid', '$COMPANY', '$COMADDRESS', '$STATUS', '$DHired_Day', '$DHired_Month', '$DHired_Year', '$DQFR_Day', '$DQFR_Month', '$DQFR_Year', '$ANNUALINCOME' )";
if(mysqli_query($link, $sql)){
    message("Success","success");
    redirect("index.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>