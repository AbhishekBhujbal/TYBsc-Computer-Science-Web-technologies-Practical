CREATE TABLE Student (
    Stud_id INT PRIMARY KEY,
    name VARCHAR(255),
    class INT
);

CREATE TABLE Competition (
    c_no INT PRIMARY KEY,
    c_name VARCHAR(255),
    type VARCHAR(255)
);
////////////////////////////////////////////////////////////////////////////////

CREATE TABLE Student_Competition (
    Stud_id INT,
    c_no INT,
    rank INT,
    year INT,
    PRIMARY KEY (Stud_id, c_no),
    FOREIGN KEY (Stud_id) REFERENCES Student(Stud_id),
    FOREIGN KEY (c_no) REFERENCES Competition(c_no)
);
/////////////////////////////////////////////////////////////////////////////////

<?php
// Database connection parameters
$servername = "your_server_name";
$username = "your_username";
$password = "your_password";
$database = "your_database_name";

// Create a database connection
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the competition name is provided by the user
if (isset($_POST['competition_name'])) {
    $competition_name = $_POST['competition_name'];

    // Query to fetch the student who secured 1st rank in the specified competition
    $sql = "SELECT Student.name
            FROM Student
            JOIN Student_Competition ON Student.Stud_id = Student_Competition.Stud_id
            JOIN Competition ON Student_Competition.c_no = Competition.c_no
            WHERE Competition.c_name = ? AND Student_Competition.rank = 1";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $competition_name);

    if ($stmt->execute()) {
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // Display the student's information
            $row = $result->fetch_assoc();
            echo "Student who secured 1st rank in $competition_name: " . $row['name'];
        } else {
            echo "No student secured 1st rank in $competition_name.";
        }
    } else {
        echo "Error executing the query: " . $conn->error;
    }

    $stmt->close();
}

// Close the database connection
$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Find Student by Competition</title>
</head>
<body>
    <form method="POST" action="">
        <label for="competition_name">Enter Competition Name: </label>
        <input type="text" id="competition_name" name="competition_name" required>
        <input type="submit" value="Search">
    </form>
</body>
</html>
