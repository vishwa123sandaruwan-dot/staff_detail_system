<?php
include 'config.php';

// Fetch all teachers
$stmt = $pdo->query("SELECT * FROM teachers ORDER BY name");
$teachers = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A/MIHINTHALE MAHA VIDYALAYA</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Your existing CSS remains the same */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary: #4361ee;
            --secondary: #3a0ca3;
            --accent: #4cc9f0;
            --light: #f8f9fa;
            --dark: #212529;
            --success: #4bb543;
            --warning: #ffcc00;
            --danger: #dc3545;
            --gray: #6c757d;
            --light-gray: #bbbabaff;
            --border-radius: 12px;
            --shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            --transition: all 0.3s ease;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #e4edf5 100%);
            color: var(--dark);
            line-height: 1.6;
            min-height: 100vh;
            padding: 20px;
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
        }

        header {
            text-align: center;
            margin-bottom: 50px;
            position: relative;
            overflow: hidden;
            border-radius: var(--border-radius);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
            background: linear-gradient(135deg, var(--dark));
            padding: 0;
        }

        .header-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('medium_Mihintale_Maha_Vidayalaya_84b93084f6.webp');
            background-size: cover;
            opacity: 0.3;
        }

        .logo-container {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 30px;
            margin-bottom: 0;
            padding: 40px 30px;
            position: relative;
            z-index: 1;
        }

        .logo-frame {
            width: 140px;
            height: 140px;
            border-radius: 50%;
            background: linear-gradient(135deg, #ffffff, #f8f9fa);
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
            border: 5px solid rgba(255, 255, 255, 0.5);
            padding: 10px;
            position: relative;
            overflow: hidden;
            transition: var(--transition);
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }

        .logo-frame::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: conic-gradient(transparent, rgba(255,255,255,0.5), transparent 30%);
            animation: rotate 6s linear infinite;
        }

        .logo-frame::after {
            content: '';
            position: absolute;
            inset: 5px;
            background: linear-gradient(135deg, #0e0e0eff, #000000ff);
            border-radius: 50%;
        }

        .logo-image {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            object-fit: cover;
            position: relative;
            z-index: 1;
            border: 3px solid var(--primary);
            transition: var(--transition);
        }

        .logo-frame:hover {
            transform: scale(1.08);
            box-shadow: 0 20px 45px rgba(0, 0, 0, 0.25);
        }

        .logo-frame:hover .logo-image {
            transform: scale(1.1);
        }

        .school-info {
            text-align: left;
            flex: 1;
            max-width: 600px;
        }

        h1 {
            font-size: 3.2rem;
            color: black;
            margin-bottom: 15px;
            text-shadow: 0 3px 15px rgba(0, 0, 0, 0.3);
            font-weight: 800;
            letter-spacing: 1.5px;
            position: relative;
            display: inline-block;
        }

        h1::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 100%;
            height: 3px;
            background: rgba(255, 255, 255, 0.5);
            border-radius: 3px;
        }

        .subtitle {
            color: rgba(255, 255, 255, 1);
            font-size: 1.6rem;
            font-weight: 1000;
            margin-bottom: 10px;
            text-shadow: 0 2px 8px rgba(255, 255, 255, 1);
            letter-spacing: 0.5px;
        }

        .motto {
            color: rgba(255, 255, 255, 0.85);
            font-size: 1.3rem;
            font-style: italic;
            margin-top: 15px;
            padding: 10px 20px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 30px;
            display: inline-block;
            backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

   
        .form-container {
            background: white;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            overflow: hidden;
        }

        .form-main {
            padding: 40px;
            max-height: 80vh;
            overflow-y: auto;
        }

        .form-header {
            margin-bottom: 30px;
            text-align: center;
        }

        .form-header h2 {
            font-size: 1.8rem;
            color: var(--dark);
            margin-bottom: 10px;
        }

        .form-header p {
            color: var(--gray);
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .full-width {
            grid-column: 1 / -1;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: var(--dark);
        }

        .input-with-icon {
            position: relative;
        }


        h1 {
            font-size: 2.5rem;
            background: linear-gradient(to right, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            background-clip: text;
            color: white;
            margin-bottom: 10px;
        }

        .subtitle {
            color: var(--gray);
            font-size: 1.1rem;
            max-width: 600px;
            margin: 0 auto;
        }

        .app-container {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 30px;
            background: white;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            overflow: hidden;
            min-height: 70vh;
        }

        .sidebar {
            background: var(--light);
            padding: 30px;
            border-right: 1px solid var(--light-gray);
        }

        .search-container {
            position: relative;
            margin-bottom: 25px;
        }

        .search-box {
            width: 100%;
            padding: 15px 20px 15px 50px;
            border: 1px solid var(--light-gray);
            border-radius: 50px;
            font-size: 16px;
            transition: var(--transition);
            background: white;
        }

        .search-box:focus {
            outline: none;
            border-color: var(--accent);
            box-shadow: 0 0 0 3px rgba(76, 201, 240, 0.2);
        }

        .search-icon {
            position: absolute;
            left: 20px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--gray);
        }

        .filter-options {
            display: flex;
            gap: 10px;
            margin-bottom: 25px;
            flex-wrap: wrap;
        }

        .filter-btn {
            padding: 8px 15px;
            background: white;
            border: 1px solid var(--light-gray);
            border-radius: 50px;
            font-size: 14px;
            cursor: pointer;
            transition: var(--transition);
        }

        .filter-btn:hover, .filter-btn.active {
            background: var(--primary);
            color: white;
            border-color: var(--primary);
        }

        .teacher-list {
            max-height: 500px;
            overflow-y: auto;
            padding-right: 10px;
        }

        .teacher-list::-webkit-scrollbar {
            width: 6px;
        }

        .teacher-list::-webkit-scrollbar-track {
            background: var(--light-gray);
            border-radius: 10px;
        }

        .teacher-list::-webkit-scrollbar-thumb {
            background: var(--primary);
            border-radius: 10px;
        }

        .teacher-item {
            display: flex;
            align-items: center;
            padding: 20px;
            background: white;
            border-radius: var(--border-radius);
            margin-bottom: 15px;
            cursor: pointer;
            transition: var(--transition);
            border: 1px solid transparent;
        }

        .teacher-item:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow);
            border-color: var(--accent);
        }

        .teacher-item.active {
            border-color: var(--primary);
            background: rgba(67, 97, 238, 0.05);
        }

        .teacher-avatar {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 20px;
            margin-right: 20px;
            overflow: hidden;
            flex-shrink: 0;
        }

        .teacher-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .teacher-info {
            flex: 1;
        }

        .teacher-name {
            font-weight: 700;
            font-size: 18px;
            margin-bottom: 5px;
            color: var(--dark);
        }

        .teacher-subject {
            color: var(--primary);
            font-weight: 600;
            margin-bottom: 5px;
        }

        .teacher-department {
            color: var(--gray);
            font-size: 14px;
        }

        .main-content {
            padding: 30px;
            display: flex;
            flex-direction: column;
        }

        .teacher-details {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 20px;
        }

        .welcome-message {
            max-width: 500px;
        }

        .welcome-icon {
            font-size: 80px;
            color: var(--primary);
            margin-bottom: 20px;
            opacity: 0.7;
        }

        .welcome-message h2 {
            font-size: 2rem;
            margin-bottom: 15px;
            color: var(--dark);
        }

        .welcome-message p {
            color: var(--gray);
            font-size: 1.1rem;
        }

        .detail-card {
            width: 100%;
            max-width: 900px;
            background: white;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            overflow: hidden;
            display: none;
        }

        .detail-header {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            padding: 30px;
            text-align: center;
            position: relative;
        }

        .detail-photo {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin: 0 auto 20px;
            border: 5px solid rgba(255, 255, 255, 0.3);
            overflow: hidden;
            background: white;
        }

        .detail-photo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .detail-name {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .detail-subject {
            font-size: 18px;
            opacity: 0.9;
        }

        .detail-body {
            padding: 30px;
        }

        .detail-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .detail-item {
            padding: 15px;
            background: var(--light);
            border-radius: var(--border-radius);
        }

        .detail-label {
            font-size: 14px;
            color: var(--gray);
            margin-bottom: 5px;
        }

        .detail-value {
            font-size: 16px;
            font-weight: 600;
            color: var(--dark);
        }

        .contact-actions {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .contact-btn {
            padding: 12px 25px;
            border-radius: 50px;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 8px;
            cursor: pointer;
            transition: var(--transition);
            border: none;
            font-size: 16px;
        }

        .email-btn {
            background: var(--primary);
            color: white;
        }

        .email-btn:hover {
            background: var(--secondary);
        }

        .whatsapp-btn {
            background: var(--success);
            color: white;
        }

        .whatsapp-btn:hover {
            background: #3a9e35;
        }

        .more-btn {
            background: var(--warning);
            color: white;
        }

        .more-btn:hover {
            background: #e6b800;
        }

        .no-teachers {
            text-align: center;
            padding: 40px;
            color: var(--gray);
        }

        .no-teachers i {
            font-size: 50px;
            margin-bottom: 15px;
            opacity: 0.5;
        }

        .add-teacher-btn {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background: var(--primary);
            color: white;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            box-shadow: var(--shadow);
            cursor: pointer;
            transition: var(--transition);
            z-index: 100;
        }

        .add-teacher-btn:hover {
            background: var(--secondary);
            transform: scale(1.1);
        }

        @media (max-width: 992px) {
            .app-container {
                grid-template-columns: 1fr;
            }
            
            .sidebar {
                border-right: none;
                border-bottom: 1px solid var(--light-gray);
            }
        }

        @media (max-width: 576px) {
            .contact-actions {
                flex-direction: column;
            }
            
            .contact-btn {
                width: 100%;
                justify-content: center;
            }
            
            .detail-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <div class="header-background"></div>
            <div class="logo-container">
                <div class="logo-frame">
                    <img src="images.png" alt="A/Mihinthale Maha Vidyalaya Logo" class="logo-image">
                </div>
                <div class="school-info">
                    <h1>A/MIHINTHALE NATIONAL SCHOOL</h1>
                    <div class="subtitle">ආලෝකෝ උදපාදී</div>
                    <div class="motto">TEACHER'S INFOMATION</div>
                </div>
            </div>
            <div class="header-decoration"></div>
        </header>

        <div class="app-container">
            <div class="sidebar">
                <div class="search-container">
                    <i class="fas fa-search search-icon"></i>
                    <input type="text" class="search-box" placeholder="Search teachers by name or subject...">
                </div>
                
                <div class="filter-options">
                    <button class="filter-btn active" data-department="all">සියලු</button>
                    <button class="filter-btn" data-department="Science">විද්‍යාව</button>
                    <button class="filter-btn" data-department="Languages">සිංහල</button>
                    <button class="filter-btn" data-department="Mathematics">ගණිතය</button>
                    <button class="filter-btn" data-department="Arts">ICT</button>
                </div>
                
                <div class="teacher-list">
                    <?php if (count($teachers) > 0): ?>
                        <?php foreach ($teachers as $teacher): ?>
                            <div class="teacher-item" data-id="<?php echo $teacher['id']; ?>" 
                                 data-department="<?php echo htmlspecialchars($teacher['department']); ?>">
                                <div class="teacher-avatar">
                                    <?php if (!empty($teacher['photo'])): ?>
                                        <img src="form/uploads/<?php echo htmlspecialchars($teacher['photo']); ?>" alt="<?php echo htmlspecialchars($teacher['name']); ?>">
                                    <?php else: ?>
                                        <?php 
                                            $initials = '';
                                            $nameParts = explode(' ', $teacher['name']);
                                            foreach ($nameParts as $part) {
                                                $initials .= strtoupper(substr($part, 0, 1));
                                            }
                                            echo $initials;
                                        ?>
                                    <?php endif; ?>
                                </div>
                                <div class="teacher-info">
                                    <div class="teacher-name"><?php echo htmlspecialchars($teacher['name']); ?></div>
                                    <div class="teacher-subject"><?php echo htmlspecialchars($teacher['subject']); ?></div>
                                    <div class="teacher-department"><?php echo htmlspecialchars($teacher['department']); ?></div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <div class="no-teachers">
                            <i class="fas fa-users-slash"></i>
                            <h3>No Teachers Found</h3>
                            <p>Add teachers to the database to get started</p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            
            <div class="main-content">
                <div class="teacher-details">
                    <div class="welcome-message" id="welcomeMessage">
                        <div class="welcome-icon">
                            <i class="fas fa-user-graduate"></i>
                        </div>
                        <h2>අ/මිහින්තලා ජාතික පාසලේ ගුරු දත්ත එකතුව වෙත ඔබව සාදරයෙන් පිළිගනිමු..!</h2>
                        <p>ඔවුන්ගේ තොරතුරු  සහ සම්බන්ධතා  නිරීක්ෂණයට  ලැයිස්තුවෙන් ගුරුවරයෙකු තෝරන්න.</p>
                    </div>
                    
                    <div class="detail-card" id="detailCard">
                        <div class="detail-header">
                            <div class="detail-photo">
                                <img id="detailPhoto" alt="Teacher Photo">
                            </div>
                            <h2 class="detail-name" id="detailName">Teacher Name</h2>
                            <p class="detail-subject" id="detailSubject">Subject</p>
                        </div>
                        
                        <div class="detail-body">
                            <div class="detail-grid">
                                <div class="detail-item">
                                    <div class="detail-label">කලාපය</div>
                                    <div class="detail-value" id="detailZone">-</div>
                                </div>
                                <div class="detail-item">
                                    <div class="detail-label">කොට්ඨාසය</div>
                                    <div class="detail-value" id="detailDivision">-</div>
                                </div>
                                <div class="detail-item">
                                    <div class="detail-label">පාසල</div>
                                    <div class="detail-value" id="detailSchool">-</div>
                                </div>
                                <div class="detail-item">
                                    <div class="detail-label">පාසල් සංගණන අංකය</div>
                                    <div class="detail-value" id="detailCensusNumber">-</div>
                                </div>
                                <div class="detail-item">
                                    <div class="detail-label">සම්පූර්ණ නම</div>
                                    <div class="detail-value" id="detailFullName">-</div>
                                </div>
                                <div class="detail-item">
                                    <div class="detail-label">Gender</div>
                                    <div class="detail-value" id="detailGender">-</div>
                                </div>
                                <div class="detail-item">
                                    <div class="detail-label">NIC</div>
                                    <div class="detail-value" id="detailNIC">-</div>
                                </div>
                                <div class="detail-item">
                                    <div class="detail-label">WhatsApp Number</div>
                                    <div class="detail-value" id="detailWhatsApp">-</div>
                                </div>
                                <div class="detail-item">
                                    <div class="detail-label">සේවාව</div>
                                    <div class="detail-value" id="detailService">-</div>
                                </div>
                                <div class="detail-item">
                                    <div class="detail-label">පත්වීම් වර්ගය</div>
                                    <div class="detail-value" id="detailAppointmentType">-</div>
                                </div>
                                <div class="detail-item">
                                    <div class="detail-label">පළමු පත්වීම් දිනය</div>
                                    <div class="detail-value" id="detailFirstAppointment">-</div>
                                </div>
                                <div class="detail-item">
                                    <div class="detail-label">විශ්‍රාමික දිනය</div>
                                    <div class="detail-value" id="detailRetirementDate">-</div>
                                </div>
                                <div class="detail-item">
                                    <div class="detail-label">පත් කළ විෂය</div>
                                    <div class="detail-value" id="detailAppointedSubject">-</div>
                                </div>
                                <div class="detail-item">
                                    <div class="detail-label">පත් කරන ලද විෂය මාධ්‍යය</div>
                                    <div class="detail-value" id="detailAppointedMedium">-</div>
                                </div>
                                <div class="detail-item">
                                    <div class="detail-label">උගන්වනු ලබන විෂයයන්</div>
                                    <div class="detail-value" id="detailSubjectsTaught">-</div>
                                </div>
                                <div class="detail-item">
                                    <div class="detail-label">උගන්වනු ලබන ශ්‍රේණි</div>
                                    <div class="detail-value" id="detailTeachingGrades">-</div>
                                </div>
                                <div class="detail-item">
                                    <div class="detail-label">උගන්වන විෂයයන්හි මාධ්‍යය</div>
                                    <div class="detail-value" id="detailSubjectsMedium">-</div>
                                </div>
                                <div class="detail-item">
                                    <div class="detail-label">ජාතික විභාග ඇගයීම</div>
                                    <div class="detail-value" id="detailExamEvaluation">-</div>
                                </div>
                                <div class="detail-item">
                                    <div class="detail-label">උපාධිය</div>
                                    <div class="detail-value" id="detailDegree">-</div>
                                </div>
                                <div class="detail-item">
                                    <div class="detail-label">ඉහළම සුදුසුකම්</div>
                                    <div class="detail-value" id="detailHighestQualification">-</div>
                                </div>
                            </div>
                            
                            <div class="contact-actions">
                                <button class="contact-btn more-btn" id="moreBtn">
                                   <i class="fas fa-info-circle"></i> More Details
                                </button>
                                <button class="contact-btn whatsapp-btn" id="whatsappBtn">
                                    <i class="fab fa-whatsapp"></i> WhatsApp
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // DOM elements
        const teacherItems = document.querySelectorAll('.teacher-item');
        const welcomeMessage = document.getElementById('welcomeMessage');
        const detailCard = document.getElementById('detailCard');
        const searchBox = document.querySelector('.search-box');
        const filterButtons = document.querySelectorAll('.filter-btn');
        let currentTeacherId = null;

        // Show teacher details with AJAX
        function showTeacherDetails(teacherId) {
            currentTeacherId = teacherId;
            
            // Update active state in list
            teacherItems.forEach(item => {
                item.classList.remove('active');
                if (item.getAttribute('data-id') === teacherId) {
                    item.classList.add('active');
                }
            });
            
            // Show loading state
            document.getElementById('detailName').textContent = 'Loading...';
            document.getElementById('detailSubject').textContent = 'Loading...';
            
            // Fetch teacher details via AJAX
            fetch(`get_teacher_details.php?id=${teacherId}`)
                .then(response => response.json())
                .then(teacher => {
                    if (teacher.error) {
                        alert(teacher.error);
                        return;
                    }
                    
                    // Update detail card with actual data
                    document.getElementById('detailName').textContent = teacher.name || '-';
                    document.getElementById('detailSubject').textContent = teacher.subject || '-';
                    document.getElementById('detailZone').textContent = teacher.zone || '-';
                    document.getElementById('detailDivision').textContent = teacher.division || '-';
                    document.getElementById('detailSchool').textContent = teacher.school || '-';
                    document.getElementById('detailCensusNumber').textContent = teacher.census_number || '-';
                    document.getElementById('detailFullName').textContent = teacher.name || '-';
                    document.getElementById('detailGender').textContent = teacher.gender || '-';
                    document.getElementById('detailNIC').textContent = teacher.nic || '-';
                    document.getElementById('detailWhatsApp').textContent = teacher.whatsapp || '-';
                    document.getElementById('detailService').textContent = teacher.service || '-';
                    document.getElementById('detailAppointmentType').textContent = teacher.appointment_type || '-';
                    document.getElementById('detailFirstAppointment').textContent = teacher.first_appointment || '-';
                    document.getElementById('detailRetirementDate').textContent = teacher.retirement_date || '-';
                    document.getElementById('detailAppointedSubject').textContent = teacher.appointed_subject || '-';
                    document.getElementById('detailAppointedMedium').textContent = teacher.appointed_medium || '-';
                    document.getElementById('detailSubjectsTaught').textContent = teacher.subjects_taught || '-';
                    document.getElementById('detailTeachingGrades').textContent = teacher.teaching_grades || '-';
                    document.getElementById('detailSubjectsMedium').textContent = teacher.subjects_medium || '-';
                    document.getElementById('detailExamEvaluation').textContent = teacher.exam_evaluation || '-';
                    document.getElementById('detailDegree').textContent = teacher.degree || '-';
                    document.getElementById('detailHighestQualification').textContent = teacher.highest_qualification || '-';
                    
                    // Update photo
                    if (teacher.photo) {
                        document.getElementById('detailPhoto').src = `uploads/${teacher.photo}`;
                    } else {
                        // Create initials avatar
                        const initials = teacher.name.split(' ').map(n => n[0]).join('').toUpperCase();
                        document.getElementById('detailPhoto').src = `data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="150" height="150"><rect width="150" height="150" fill="%234361ee"/><text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" font-family="Arial" font-size="60" fill="white">${initials}</text></svg>`;
                    }
                    
                    // Update contact buttons with real functionality
                    document.getElementById('whatsappBtn').onclick = () => {
                        if (teacher.whatsapp) {
                            const whatsappUrl = `https://wa.me/${teacher.whatsapp.replace(/\D/g, '')}`;
                            window.open(whatsappUrl, '_blank');
                        } else {
                            alert('No WhatsApp number available');
                        }
                    };
                    
                    // Show detail card and hide welcome message
                    welcomeMessage.style.display = 'none';
                    detailCard.style.display = 'block';
                })
                .catch(error => {
                    console.error('Error fetching teacher details:', error);
                    alert('Error loading teacher details');
                });
        }

        // More button functionality - redirect to detailed page
        document.getElementById('moreBtn').addEventListener('click', function() {
            if (currentTeacherId) {
                window.location.href = `more_teacher_details.php?id=${currentTeacherId}`;
            } else {
                alert('Please select a teacher first');
            }
        });

        // Search functionality
        searchBox.addEventListener('input', function(e) {
            const searchTerm = e.target.value.toLowerCase();
            
            teacherItems.forEach(item => {
                const teacherName = item.querySelector('.teacher-name').textContent.toLowerCase();
                const teacherSubject = item.querySelector('.teacher-subject').textContent.toLowerCase();
                const teacherDepartment = item.querySelector('.teacher-department').textContent.toLowerCase();
                
                if (teacherName.includes(searchTerm) || teacherSubject.includes(searchTerm) || teacherDepartment.includes(searchTerm)) {
                    item.style.display = 'flex';
                } else {
                    item.style.display = 'none';
                }
            });
        });

        // Filter functionality
        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Update active state
                filterButtons.forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');
                
                const department = this.getAttribute('data-department');
                
                teacherItems.forEach(item => {
                    if (department === 'all' || item.getAttribute('data-department') === department) {
                        item.style.display = 'flex';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });

        // Add click event to teacher items
        teacherItems.forEach(item => {
            item.addEventListener('click', function() {
                const teacherId = this.getAttribute('data-id');
                showTeacherDetails(teacherId);
            });
        });
    </script>
</body>
</html>