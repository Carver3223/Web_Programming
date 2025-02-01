<?php
// details doe our database
$servername = "localhost"; 
$username = "username"; 
$password = "32Rusttytm32!"; 
$dbname = "student_records";

//creates a connection  to MySQL
$conn = new mysqli($servername, $username, $password, $dbname);

//checks for connectiona and exits otherwise
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); 
}

// takes data from the form
$name = $_POST['name']; //student name
$student_id = $_POST['student_id']; //student ID
$grade = $_POST['grade']; // Student's grade

// SQL query that inserts data into the database
$sql = "INSERT INTO students (name, student_id, grade) VALUES ('$name', '$student_id', '$grade')";

//starts the query and displays either a success or error message
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully"; 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error; 
}

// Closes the database connection
$conn->close();
?>
