<!-- <?php
include('connection.php');

$name = $_POST['name'] ?? '';
$hireDate = $_POST['hireDate'] ?? '';
$status = $_POST['status'] ?? '';
$department = $_POST['department'] ?? '';
$jobPosition = $_POST['jobPosition'] ?? '';
$workExpertise = $_POST['workExpertise'] ?? '';
$technicalSkills = $_POST['technicalSkills'] ?? '';

if ($name && $hireDate && $status) {
    $query = "INSERT INTO employees (name, department, hire_date, status, job_position	, work_expertise, technical_skills) 
              VALUES ('$name', '$department', '$hireDate', '$status', '$jobPosition', '$workExpertise', '$technicalSkills')";

    if (mysqli_query($conn, $query)) {
        echo "New record created successfully";
        
        header('Location: competency.php');
        exit(); // Always call exit after header redirection
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
} else {
    echo "Please fill in all required fields.";
}
?>
 -->