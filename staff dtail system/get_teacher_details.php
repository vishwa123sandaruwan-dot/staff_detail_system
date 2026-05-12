<?php
include 'config.php';

header('Content-Type: application/json');

if (isset($_GET['id'])) {
    $teacher_id = intval($_GET['id']);
    
    $stmt = $pdo->prepare("SELECT * FROM teachers WHERE id = ?");
    $stmt->execute([$teacher_id]);
    $teacher = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if ($teacher) {
        echo json_encode($teacher);
    } else {
        echo json_encode(['error' => 'Teacher not found']);
    }
} else {
    echo json_encode(['error' => 'No teacher ID provided']);
}
?>