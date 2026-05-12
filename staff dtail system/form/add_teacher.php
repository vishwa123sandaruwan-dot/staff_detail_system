<?php
include 'config.php';

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data - Basic Information
    $zone = $_POST['zone'] ?? '';
    $division = $_POST['division'] ?? '';
    $school = $_POST['school'] ?? '';
    $census_number = $_POST['census_number'] ?? '';
    $name = $_POST['name'] ?? '';
    $gender = $_POST['gender'] ?? '';
    $nic = $_POST['nic'] ?? '';
    $whatsapp = $_POST['whatsapp'] ?? '';
    
    // Appointment Information
    $service = $_POST['service'] ?? '';
    $appointment_type = $_POST['appointment_type'] ?? '';
    $first_appointment = $_POST['first_appointment'] ?? '';
    $retirement_date = $_POST['retirement_date'] ?? '';
    
    // Teaching Information
    $appointed_subject = $_POST['appointed_subject'] ?? '';
    $appointed_medium = $_POST['appointed_medium'] ?? '';
    $subjects_taught = $_POST['subjects_taught'] ?? '';
    $teaching_grades = $_POST['teaching_grades'] ?? '';
    $subjects_medium = $_POST['subjects_medium'] ?? '';
    
    // Qualifications
    $exam_evaluation = $_POST['exam_evaluation'] ?? '';
    $degree = $_POST['degree'] ?? '';
    $highest_qualification = $_POST['highest_qualification'] ?? '';
    
    // NEW: Spouse/Family Information
    $spouse_name = $_POST['spouse_name'] ?? '';
    $spouse_nic = $_POST['spouse_nic'] ?? '';
    $spouse_occupation = $_POST['spouse_occupation'] ?? '';
    $spouse_workplace = $_POST['spouse_workplace'] ?? '';
    $children_count = $_POST['children_count'] ?? 0;
    $emergency_contact = $_POST['emergency_contact'] ?? '';
    $blood_group = $_POST['blood_group'] ?? '';
    $medical_conditions = $_POST['medical_conditions'] ?? '';
    
    // Handle file upload
    $photo = '';
    if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
        $uploadDir = 'uploads/';
        
        // Create uploads directory if it doesn't exist
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }
        
        $fileExtension = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
        $fileName = uniqid() . '_' . time() . '.' . $fileExtension;
        $uploadPath = $uploadDir . $fileName;
        
        // Validate file type
        $allowedTypes = ['image/jpeg', 'image/png', 'image/jpg'];
        if (in_array($_FILES['photo']['type'], $allowedTypes)) {
            // Validate file size (max 2MB)
            if ($_FILES['photo']['size'] <= 2 * 1024 * 1024) {
                if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploadPath)) {
                    $photo = $fileName;
                }
            }
        }
    }
    
    try {
        // Insert into database with all fields
        $stmt = $pdo->prepare("
            INSERT INTO teachers (
                zone, division, school, census_number, name, gender, nic, whatsapp,
                service, appointment_type, first_appointment, retirement_date,
                appointed_subject, appointed_medium, subjects_taught, teaching_grades,
                subjects_medium, exam_evaluation, degree, highest_qualification, photo,
                spouse_name, spouse_nic, spouse_occupation, spouse_workplace,
                children_count, emergency_contact, blood_group, medical_conditions
            ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
        ");
        
        $stmt->execute([
            // Basic Information
            $zone, $division, $school, $census_number, $name, $gender, $nic, $whatsapp,
            
            // Appointment Information
            $service, $appointment_type, $first_appointment, $retirement_date,
            
            // Teaching Information
            $appointed_subject, $appointed_medium, $subjects_taught, $teaching_grades,
            $subjects_medium,
            
            // Qualifications
            $exam_evaluation, $degree, $highest_qualification,
            
            // Photo
            $photo,
            
            // NEW: Spouse/Family Information
            $spouse_name, $spouse_nic, $spouse_occupation, $spouse_workplace,
            $children_count, $emergency_contact, $blood_group, $medical_conditions
        ]);
        
        // Success response
        echo json_encode([
            'success' => true,
            'message' => 'Teacher added successfully!',
            'teacher_id' => $pdo->lastInsertId()
        ]);
        
    } catch (PDOException $e) {
        // Error response
        if ($e->getCode() == 23000) { // Duplicate entry
            echo json_encode([
                'success' => false,
                'message' => 'A teacher with this NIC already exists.'
            ]);
        } else {
            echo json_encode([
                'success' => false,
                'message' => 'Database error: ' . $e->getMessage()
            ]);
        }
    }
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Invalid request method.'
    ]);
}
?>