<?php 
$rollno = $_GET['rollno'];
  $conn = new mysqli('localhost', 'root', '', 'placementdb');
  $sql = "SELECT * FROM details WHERE rollno='$rollno'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $rollno = $row['rollno'];
    $tenth = $row['tenth'];
    $cpi = $row['cpi'];
    $age = $row['age'];
    $branch = $row['branch'];
    $interest = $row['interest'];
    $year = $row['year'];
    $placed = $row['placed'];
    $ctc = $row['ctc'];
  }
  

?>

<!DOCTYPE html>
<html>
<head>
  <title>Student Information</title>
</head>
<body>
  
  <p><strong>Roll No:</strong> <?php echo $rollno; ?></p>
  <p><strong>10th Class(%):</strong> <?php echo $tenth; ?></p>
  <p><strong>CGPA(till semester 7):</strong> <?php echo $cpi; ?></p>
  <p><strong>Age:</strong> <?php echo $age; ?></p>
  <p><strong>Specialization:</strong> <?php echo $branch; ?></p>
  <p><strong>Area of Interest:</strong> <?php echo $interest; ?></p>
  <p><strong>Batch Year:</strong> <?php echo $year; ?></p>
  <p><strong>Placement Stats:</strong> <?php echo $placed; ?></p>
  <p><strong>CTC (if placed):</strong> <?php echo $ctc; ?></p>
  <form method="post" action="stuapplication.php">
    <input type="submit" name="goback" value="Go Back">
    
  </form>
  
 
</body>
<body>
    
</html>