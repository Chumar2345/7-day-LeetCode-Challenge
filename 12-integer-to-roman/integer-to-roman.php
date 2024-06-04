class Solution {

    /**
     * @param Integer $num
     * @return String
     */
    public static function intToRoman(int $num) {
       static $values = [
        1000 => 'M',
        900 => 'CM',
        500 => 'D',
        400 => 'CD',
        100 => 'C',
        90 => 'XC',
        50 => 'L',
        40 => 'XL',
        10 => 'X',
        9 => 'IX',
        5 => 'V',
        4 =>'IV',
        1 => 'I',
    ];

    $romanValue = '';
    foreach($values as $int => $roman){

        while($num >= $int){
           $num = $num - $int;

           $romanValue .= $roman;
           if(!$num){
            break;
           }
        }
    }
     return $romanValue; 
    }
}

$new_array = Solution::intToRoman(3);
echo '"'. $new_array .'"';



<?php
// Database connection details
$servername = "your_server_name";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

// User input
$search_first_name = $_GET['first_name'] ?? null;  // e.g., from URL query parameters or form input
$search_last_name = $_GET['last_name'] ?? null;
$search_cnic = $_GET['cnic'] ?? null;
$search_phone = $_GET['phone'] ?? null;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize the base SQL query
$sql = "SELECT * FROM users WHERE 1=1";

// Add conditions based on user inputs
if ($search_first_name && $search_last_name) {
    $sql .= " AND (first_name = '" . $conn->real_escape_string($search_first_name) . "' AND last_name = '" . $conn->real_escape_string($search_last_name) . "')";
}
if ($search_cnic) {
    $sql .= " OR cnic = '" . $conn->real_escape_string($search_cnic) . "'";
}
if ($search_phone) {
    $sql .= " OR phone = '" . $conn->real_escape_string($search_phone) . "'";
}

// Execute the query
$result = $conn->query($sql);

// Fetch and display the results
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - First Name: " . $row["first_name"]. " - Last Name: " . $row["last_name"]. " - CNIC: " . $row["cnic"]. " - Phone: " . $row["phone"]. "<br>";
    }
} else {
    echo "0 results";
}

// Close the connection
$conn->close();
?>
