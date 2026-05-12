<?php
include 'config.php';

// Get teacher ID from URL
$teacher_id = $_GET['id'] ?? 0;

// Fetch teacher details
$stmt = $pdo->prepare("SELECT * FROM teachers WHERE id = ?");
$stmt->execute([$teacher_id]);
$teacher = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$teacher) {
    die("Teacher not found");
}

// Fetch spouse details (you'll need to add these fields to your database)
// For now, I'll show how to display them if they exist
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($teacher['name']); ?> - Additional Details</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Add similar styling as your main page */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #bbbabaff 100%);
            color: #212529;
            line-height: 1.6;
            padding: 20px;
        }
        
        .container {
            max-width: 1000px;
            margin: 0 auto;
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            overflow: hidden;
        }
        
        .header {
            background: linear-gradient(135deg, #4361ee, #3a0ca3);
            color: white;
            padding: 30px;
            text-align: center;
        }
        
        .back-btn {
            position: absolute;
            left: 20px;
            top: 20px;
            background: rgba(0, 0, 0, 0.72);
            border: none;
            color: white;
            padding: 10px 15px;
            border-radius: 50px;
            cursor: pointer;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 5px;
        }
        
        .content {
            padding: 30px;
        }
        
        .detail-section {
            margin-bottom: 30px;
        }
        
        .section-title {
            font-size: 1.5rem;
            color: #4361ee;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid #e9ecef;
        }
        
        .detail-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
        }
        
        .detail-item {
            padding: 15px;
            background: #f8f9fa;
            border-radius: 8px;
        }
        
        .detail-label {
            font-size: 14px;
            color: #6c757d;
            margin-bottom: 5px;
        }
        
        .detail-value {
            font-size: 16px;
            font-weight: 600;
            color: #212529;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <a href="home.php" class="back-btn">
                <i class="fas fa-arrow-left"></i> Back
            </a>
            <h1><?php echo htmlspecialchars($teacher['name']); ?></h1>
            <p><?php echo htmlspecialchars($teacher['subject']); ?> Teacher</p>
        </div>
        
        <div class="content">
            <div class="detail-section">
                <h2 class="section-title">පුද්ගලික සහ පවුලේ විස්තර</h2>
                <div class="detail-grid">
                    <div class="detail-item">
                        <div class="detail-label">කලත්‍රයාගේ නම</div>
                        <div class="detail-value"><?php echo htmlspecialchars($teacher['spouse_name'] ?? 'Not provided'); ?></div>
                    </div>
                    <div class="detail-item">
                        <div class="detail-label">කලත්‍රයාගේ හැ.ප.අ</div>
                        <div class="detail-value"><?php echo htmlspecialchars($teacher['spouse_nic'] ?? 'Not provided'); ?></div>
                    </div>
                    <div class="detail-item">
                        <div class="detail-label">කලත්‍රයාගේ රැකියාව</div>
                        <div class="detail-value"><?php echo htmlspecialchars($teacher['spouse_occupation'] ?? 'Not provided'); ?></div>
                    </div>
                    <div class="detail-item">
                        <div class="detail-label">කලත්‍රයාගේ රැකියා ස්ථානය</div>
                        <div class="detail-value"><?php echo htmlspecialchars($teacher['spouse_workplace'] ?? 'Not provided'); ?></div>
                    </div>
                    <div class="detail-item">
                        <div class="detail-label">ළමුන් සංඛ්‍යාව</div>
                        <div class="detail-value"><?php echo htmlspecialchars($teacher['children_count'] ?? 'Not provided'); ?></div>
                    </div>
                </div>
            </div>
            
            <div class="detail-section">
                <h2 class="section-title">අමතර තොරතුරු</h2>
                <div class="detail-grid">
                    <div class="detail-item">
                        <div class="detail-label">හදිසි ඇමතුම් අංකය</div>
                        <div class="detail-value"><?php echo htmlspecialchars($teacher['emergency_contact'] ?? 'Not provided'); ?></div>
                    </div>
                    <div class="detail-item">
                        <div class="detail-label">රුධිර කාණ්ඩය</div>
                        <div class="detail-value"><?php echo htmlspecialchars($teacher['blood_group'] ?? 'Not provided'); ?></div>
                    </div>
                    <div class="detail-item">
                        <div class="detail-label">සෞඛ්‍ය තත්ත්වය</div>
                        <div class="detail-value"><?php echo htmlspecialchars($teacher['medical_conditions'] ?? 'None reported'); ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>