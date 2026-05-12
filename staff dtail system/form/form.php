<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A/MIHINTHALE MAHA VIDYALAYA</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
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
            --light-gray: #e9ecef;
            --border-radius: 12px;
            --shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            --transition: all 0.3s ease;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #9fafefff 100%);
            color: var(--dark);
            line-height: 1.6;
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding: 20px;
        }

        .container {
            max-width: 1200px;
            width: 100%;
            margin: 0 auto;
        }

        header {
            text-align: center;
            margin-bottom: 30px;
        }

        .logo-container {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 20px;
            margin-bottom: 20px;
            padding: 20px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: var(--border-radius);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .logo-frame {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background: linear-gradient(135deg, #ffffff, #f8f9fa);
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            border: 4px solid white;
            padding: 8px;
            position: relative;
            overflow: hidden;
            transition: var(--transition);
        }

        .logo-frame::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: conic-gradient(transparent, rgba(255,255,255,0.3), transparent 30%);
            animation: rotate 4s linear infinite;
        }

        .logo-frame::after {
            content: '';
            position: absolute;
            inset: 4px;
            background: linear-gradient(135deg, #ffffff, #f8f9fa);
            border-radius: 50%;
        }

        .logo-image {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            object-fit: cover;
            position: relative;
            z-index: 1;
            border: 2px solid var(--primary);
            transition: var(--transition);
        }

        .logo-frame:hover {
            transform: scale(1.05);
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.15);
        }

        .logo-frame:hover .logo-image {
            transform: scale(1.1);
        }

        .school-info {
            text-align: left;
            flex: 1;
            max-width: 500px;
        }

        h1 {
            font-size: 2.8rem;
            color: white;
            margin-bottom: 10px;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
            font-weight: 700;
            letter-spacing: 1px;
        }

        .subtitle {
            color: rgba(255, 255, 255, 0.95);
            font-size: 1.4rem;
            font-weight: 500;
            margin-bottom: 5px;
            text-shadow: 0 1px 5px rgba(0, 0, 0, 0.2);
        }

        .motto {
            color: rgba(255, 255, 255, 0.8);
            font-size: 1.1rem;
            font-style: italic;
            margin-top: 10px;
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

        .form-control {
            width: 100%;
            padding: 12px 15px 12px 45px;
            border: 1px solid var(--light-gray);
            border-radius: var(--border-radius);
            font-size: 14px;
            transition: var(--transition);
            background: white;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--accent);
            box-shadow: 0 0 0 3px rgba(76, 201, 240, 0.2);
        }

        .input-icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--gray);
        }

        textarea.form-control {
            min-height: 80px;
            resize: vertical;
            padding-left: 15px;
        }

        select.form-control {
            padding-left: 45px;
        }

        .file-upload {
            position: relative;
            display: inline-block;
            width: 100%;
        }

        .file-upload-label {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 12px;
            border: 2px dashed var(--light-gray);
            border-radius: var(--border-radius);
            cursor: pointer;
            transition: var(--transition);
            text-align: center;
            background: var(--light);
        }

        .file-upload-label:hover {
            border-color: var(--accent);
            background: rgba(76, 201, 240, 0.05);
        }

        .file-upload-input {
            position: absolute;
            left: 0;
            top: 0;
            opacity: 0;
            width: 100%;
            height: 100%;
            cursor: pointer;
        }

        .file-upload-icon {
            font-size: 20px;
            color: var(--primary);
            margin-right: 10px;
        }

        .form-actions {
            display: flex;
            gap: 15px;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid var(--light-gray);
        }

        .btn {
            padding: 12px 25px;
            border-radius: var(--border-radius);
            font-weight: 600;
            font-size: 14px;
            cursor: pointer;
            transition: var(--transition);
            border: none;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            flex: 1;
        }

        .btn-primary {
            background: var(--primary);
            color: white;
        }

        .btn-primary:hover {
            background: var(--secondary);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(67, 97, 238, 0.3);
        }

        .btn-secondary {
            background: var(--light);
            color: var(--dark);
            border: 1px solid var(--light-gray);
        }

        .btn-secondary:hover {
            background: var(--light-gray);
        }

        .success-message {
            background: rgba(75, 181, 67, 0.1);
            border: 1px solid var(--success);
            color: var(--success);
            padding: 15px;
            border-radius: var(--border-radius);
            margin-bottom: 20px;
            display: none;
        }

        .error-message {
            background: rgba(220, 53, 69, 0.1);
            border: 1px solid var(--danger);
            color: var(--danger);
            padding: 15px;
            border-radius: var(--border-radius);
            margin-bottom: 20px;
            display: none;
        }

        .back-link {
            text-align: center;
            margin-top: 30px;
        }

        .back-link a {
            color: white;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: var(--transition);
            padding: 10px 20px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: var(--border-radius);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .back-link a:hover {
            color: var(--accent);
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-2px);
        }

        .section-title {
            grid-column: 1 / -1;
            font-size: 1.3rem;
            color: var(--primary);
            margin: 20px 0 10px 0;
            padding-bottom: 10px;
            border-bottom: 2px solid var(--light-gray);
            position: relative;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 60px;
            height: 2px;
            background: var(--accent);
        }

        @media (max-width: 768px) {
            .form-grid {
                grid-template-columns: 1fr;
            }
            
            .form-actions {
                flex-direction: column;
            }
            
            body {
                padding: 10px;
            }
            
            .logo-container {
                flex-direction: column;
                text-align: center;
            }
            
            .school-info {
                text-align: center;
            }
            
            h1 {
                font-size: 2.2rem;
            }
        }

        /* Animation for form elements */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes rotate {
            100% {
                transform: rotate(360deg);
            }
        }

        .form-group {
            animation: fadeIn 0.5s ease forwards;
        }

        /* Decorative elements */
        .floating-shapes {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: -1;
        }

        .shape {
            position: absolute;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            animation: float 6s ease-in-out infinite;
        }

        .shape:nth-child(1) {
            width: 80px;
            height: 80px;
            top: 10%;
            left: 10%;
            animation-delay: 0s;
        }

        .shape:nth-child(2) {
            width: 120px;
            height: 120px;
            top: 70%;
            left: 80%;
            animation-delay: 2s;
        }

        .shape:nth-child(3) {
            width: 60px;
            height: 60px;
            top: 40%;
            left: 85%;
            animation-delay: 4s;
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0) rotate(0deg);
            }
            50% {
                transform: translateY(-20px) rotate(180deg);
            }
        }
    </style>
</head>
<body>
    <!-- Floating background shapes -->
    <div class="floating-shapes">
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>
    </div>

    <div class="container">
        <header>
            <div class="logo-container">
                <div class="logo-frame">
                    <!-- Fixed: Added alt text and default school logo if image not found -->
                    <img src="images.png" alt="A/Mihinthale Maha Vidyalaya Logo" class="logo-image" onerror="this.onerror=null; this.src='data:image/svg+xml;utf8,<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 100 100\"><circle cx=\"50\" cy=\"50\" r=\"45\" fill=\"%234361ee\"/><text x=\"50\" y=\"55\" text-anchor=\"middle\" fill=\"white\" font-family=\"Arial\" font-size=\"24\">AMV</text></svg>';">
                </div>
                <div class="school-info">
                    <h1>A/MIHINTHALE NATIONAL SCHOOL </h1>
                    <div class="subtitle">අ/මිහින්තලේ ජාතික පාසල</div>
                    <div class="motto">ආලෝකෝ උදපාදී</div>
                </div>
            </div>
        </header>

        <div class="form-container">
            <div class="form-main">
                <div class="form-header">
                    <h2>ගුරු ලේඛන පෝරමය</h2>
                    <p>Fill This Form. - මෙම පෝරමය පුරවන්න.</p>
                </div>

                <div class="success-message" id="successMessage">
                    <i class="fas fa-check-circle"></i> <span>Teacher added successfully!</span>
                </div>

                <div class="error-message" id="errorMessage">
                    <i class="fas fa-exclamation-circle"></i> <span>There was an error adding the teacher. Please try again.</span>
                </div>

                <form id="teacherForm" action="add_teacher.php" method="POST" enctype="multipart/form-data">
                    <div class="form-grid">
                        <div class="section-title">ගුරුවරයාගේ තොරතුරු</div>
                        
                        <div class="form-group">
                            <label for="zone">කලාපය *</label>
                            <div class="input-with-icon">
                                <i class="fas fa-map-marker-alt input-icon"></i>
                                <input type="text" id="zone" name="zone" class="form-control" placeholder="Enter zone" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="division">කොට්ඨාසය *</label>
                            <div class="input-with-icon">
                                <i class="fas fa-map input-icon"></i>
                                <input type="text" id="division" name="division" class="form-control" placeholder="Enter division" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="school">පාසල *</label>
                            <div class="input-with-icon">
                                <i class="fas fa-school input-icon"></i>
                                <input type="text" id="school" name="school" class="form-control" placeholder="Enter school name" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="census_number">පාසල් සංගණන අංකය *</label>
                            <div class="input-with-icon">
                                <i class="fas fa-hashtag input-icon"></i>
                                <input type="text" id="census_number" name="census_number" class="form-control" placeholder="Enter census number" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name">සම්පූර්ණ නම *</label>
                            <div class="input-with-icon">
                                <i class="fas fa-user input-icon"></i>
                                <input type="text" id="name" name="name" class="form-control" placeholder="Enter full name" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="gender">Gender *</label>
                            <div class="input-with-icon">
                                <i class="fas fa-venus-mars input-icon"></i>
                                <select id="gender" name="gender" class="form-control" required>
                                    <option value="">Select Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="nic">NIC *</label>
                            <div class="input-with-icon">
                                <i class="fas fa-id-card input-icon"></i>
                                <input type="text" id="nic" name="nic" class="form-control" placeholder="Enter NIC number" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="whatsapp">WhatsApp Number</label>
                            <div class="input-with-icon">
                                <i class="fab fa-whatsapp input-icon"></i>
                                <input type="tel" id="whatsapp" name="whatsapp" class="form-control" placeholder="Enter WhatsApp number">
                            </div>
                        </div>

                        <div class="section-title">පත්වීම පිලිබඳ තොරතුරු</div>

                        <div class="form-group">
                            <label for="service">සේවාව *</label>
                            <div class="input-with-icon">
                                <i class="fas fa-briefcase input-icon"></i>
                                <select id="service" name="service" class="form-control" required>
                                    <option value="">සේවාව තෝරන්න</option>
                                    <option value="SLTS">SLTS</option>
                                    <option value="DEVELOPMENT OFFICER SERVICE">සංවර්ධන නිලධාරී සේවය</option>
                                    <option value="OTHER">වෙනත්</option>
                                </select>
                            </div>
                        </div>

                        <!-- FIXED: Added proper appointment_type select element -->
                        <div class="form-group">
                            <label for="appointment_type">පත්වීම් වර්ගය *</label>
                            <div class="input-with-icon">
                                <i class="fas fa-user-tie input-icon"></i>
                                <select id="appointment_type" name="appointment_type" class="form-control" required>
                                    <option value="">පත්වීම් වර්ගය තෝරන්න</option>
                                    <option value="PERMANENT">ස්ථිර</option>
                                    <option value="TEMPORARY">තාවකාලික</option>
                                    <option value="PROBATION">පරීක්ෂණ කාලය</option>
                                    <option value="CONTRACT">ගිවිසුම්</option>
                                    <option value="OTHER">වෙනත්</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="first_appointment">පළමු පත්වීම් දිනය *</label>
                            <div class="input-with-icon">
                                <i class="fas fa-calendar-alt input-icon"></i>
                                <input type="date" id="first_appointment" name="first_appointment" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="retirement_date">විශ්‍රාමික දිනය</label>
                            <div class="input-with-icon">
                                <i class="fas fa-calendar-times input-icon"></i>
                                <input type="date" id="retirement_date" name="retirement_date" class="form-control">
                            </div>
                        </div>

                        <div class="section-title">ඉගැන්වීම් පිලිබඳ තොරතුරු</div>

                        <div class="form-group">
                            <label for="appointed_subject">පත් කළ විෂය *</label>
                            <div class="input-with-icon">
                                <i class="fas fa-book input-icon"></i>
                                <input type="text" id="appointed_subject" name="appointed_subject" class="form-control" placeholder="Enter appointed subject" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="appointed_medium">පත් කරන ලද විෂය මාධ්‍යය *</label>
                            <div class="input-with-icon">
                                <i class="fas fa-language input-icon"></i>
                                <select id="appointed_medium" name="appointed_medium" class="form-control" required>
                                    <option value=""> මාධ්‍ය තෝරන්න.</option>
                                    <option value="Sinhala">සිංහල</option>
                                    <option value="Tamil">දෙමළ</option>
                                    <option value="English">ඉංග්‍රීසි </option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="subjects_taught">ඉගැන්වූ විෂයයන් *</label>
                            <div class="input-with-icon">
                                <i class="fas fa-book-open input-icon"></i>
                                <textarea id="subjects_taught" name="subjects_taught" class="form-control" placeholder="List all subjects taught" required></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="teaching_grades">උගන්වන ශ්‍රේණි *</label>
                            <div class="input-with-icon">
                                <i class="fas fa-graduation-cap input-icon"></i>
                                <input type="text" id="teaching_grades" name="teaching_grades" class="form-control" placeholder="e.g., Grade 6-11" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="subjects_medium">උගන්වන විෂයේහි මාධ්‍යය *</label>
                            <div class="input-with-icon">
                                <i class="fas fa-language input-icon"></i>
                                <select id="subjects_medium" name="subjects_medium" class="form-control" required>
                                    <option value="">මාධ්‍ය තෝරන්න</option>
                                    <option value="Sinhala">සිංහල</option>
                                    <option value="Tamil">දෙමළ</option>
                                    <option value="English">ඉංග්‍රීසි</option>
                                </select>
                            </div>
                        </div>

                        <div class="section-title">සුදුසුකම් සහ ඇගයීම්</div>

                        <div class="form-group">
                            <label for="exam_evaluation">ජාතික විභාග ඇගයීම</label>
                            <div class="input-with-icon">
                                <i class="fas fa-chart-bar input-icon"></i>
                                <input type="text" id="exam_evaluation" name="exam_evaluation" class="form-control" placeholder="Enter exam evaluation role">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="degree">උපාධිය</label>
                            <div class="input-with-icon">
                                <i class="fas fa-user-graduate input-icon"></i>
                                <input type="text" id="degree" name="degree" class="form-control" placeholder="Enter degree">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="highest_qualification">ඉහළ සුදුසුකම් *</label>
                            <div class="input-with-icon">
                                <i class="fas fa-award input-icon"></i>
                                <input type="text" id="highest_qualification" name="highest_qualification" class="form-control" placeholder="Enter highest qualification" required>
                            </div>
                        </div>

                        <!-- NEW: Spouse/Family Information Section -->
                        <div class="section-title">පවුල් තොරතුරු</div>

                        <div class="form-group">
                            <label for="spouse_name">කලත්‍රයාගේ නම</label>
                            <div class="input-with-icon">
                                <i class="fas fa-heart input-icon"></i>
                                <input type="text" id="spouse_name" name="spouse_name" class="form-control" placeholder="Enter spouse full name">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="spouse_nic">කලත්‍රයාගේ ජා.හැ.අ.</label>
                            <div class="input-with-icon">
                                <i class="fas fa-id-card input-icon"></i>
                                <input type="text" id="spouse_nic" name="spouse_nic" class="form-control" placeholder="Enter spouse NIC number">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="spouse_occupation">කලත්‍රයාගේ රැකියාව</label>
                            <div class="input-with-icon">
                                <i class="fas fa-briefcase input-icon"></i>
                                <input type="text" id="spouse_occupation" name="spouse_occupation" class="form-control" placeholder="Enter spouse occupation">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="spouse_workplace">කලත්‍රයාගේ සේවා ස්ථානය</label>
                            <div class="input-with-icon">
                                <i class="fas fa-building input-icon"></i>
                                <input type="text" id="spouse_workplace" name="spouse_workplace" class="form-control" placeholder="Enter spouse workplace">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="children_count">දරුවන් ගණන</label>
                            <div class="input-with-icon">
                                <i class="fas fa-child input-icon"></i>
                                <input type="number" id="children_count" name="children_count" class="form-control" placeholder="Enter number of children" min="0">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="emergency_contact">හදිසි ඇමතුම් අංකය</label>
                            <div class="input-with-icon">
                                <i class="fas fa-phone-alt input-icon"></i>
                                <input type="tel" id="emergency_contact" name="emergency_contact" class="form-control" placeholder="Enter emergency contact number">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="blood_group">රුධිර වර්ගය</label>
                            <div class="input-with-icon">
                                <i class="fas fa-tint input-icon"></i>
                                <select id="blood_group" name="blood_group" class="form-control">
                                    <option value="">රුධිර කාණ්ඩය තෝරන්න.</option>
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group full-width">
                            <label for="medical_conditions">සෞඛ්‍ය තත්ත්වයන්</label>
                            <div class="input-with-icon">
                                <i class="fas fa-file-medical input-icon"></i>
                                <textarea id="medical_conditions" name="medical_conditions" class="form-control" placeholder="good or bad"></textarea>
                            </div>
                        </div>

                        <div class="form-group full-width">
                            <label for="photo">Profile Photo</label>
                            <div class="file-upload">
                                <label for="photo" class="file-upload-label">
                                    <i class="fas fa-cloud-upload-alt file-upload-icon"></i>
                                    <span id="file-name">Choose a profile photo (JPEG, PNG, max 2MB)(මෙය සැපිරීම අනිවාර්ය නැත.)</span>
                                </label>
                                <input type="file" id="photo" name="photo" class="file-upload-input" accept="image/jpeg, image/png">
                            </div>
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i> හරි
                        </button>
                        <button type="reset" class="btn btn-secondary">
                            <i class="fas fa-redo"></i> අලුත් ෆෝමය
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Added back link for better navigation -->
        <div class="back-link">
            <a href="index.php">
                <i class="fas fa-arrow-left"></i> Back to Home
            </a>
        </div>
    </div>

    <script>
        // File upload name display
        document.getElementById('photo').addEventListener('change', function(e) {
            const fileName = e.target.files[0] ? e.target.files[0].name : 'Choose a profile photo (JPEG, PNG, max 2MB)(මෙය සැපිරීම අනිවාර්ය නැත.)';
            document.getElementById('file-name').textContent = fileName;
        });

        // Set max date for appointment and retirement dates
        const today = new Date().toISOString().split('T')[0];
        document.getElementById('first_appointment').max = today;
        document.getElementById('retirement_date').min = today;

        // Form submission handling with AJAX
        document.getElementById('teacherForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Basic form validation
            const requiredFields = [
                'zone', 'division', 'school', 'census_number', 'name', 'gender', 'nic',
                'service', 'appointment_type', 'first_appointment', 'appointed_subject',
                'appointed_medium', 'subjects_taught', 'teaching_grades', 'subjects_medium',
                'highest_qualification'
            ];
            
            let isValid = true;
            requiredFields.forEach(field => {
                const element = document.getElementById(field);
                if (!element.value.trim()) {
                    isValid = false;
                    element.style.borderColor = 'var(--danger)';
                } else {
                    element.style.borderColor = '';
                }
            });
            
            if (!isValid) {
                showMessage('error', 'Please fill in all required fields');
                return;
            }
            
            // NIC validation (basic format check)
            const nic = document.getElementById('nic').value.trim();
            const nicRegex = /^([0-9]{9}[xXvV]|[0-9]{12})$/;
            if (!nicRegex.test(nic)) {
                showMessage('error', 'Please enter a valid NIC number (9 digits with X/V or 12 digits)');
                document.getElementById('nic').style.borderColor = 'var(--danger)';
                return;
            }
            
            // Date validation
            const firstAppointment = document.getElementById('first_appointment').value;
            const retirementDate = document.getElementById('retirement_date').value;
            
            if (retirementDate && retirementDate < firstAppointment) {
                showMessage('error', 'Retirement date cannot be before first appointment date');
                document.getElementById('retirement_date').style.borderColor = 'var(--danger)';
                return;
            }
            
            // Show loading state
            const submitBtn = document.querySelector('.btn-primary');
            const originalText = submitBtn.innerHTML;
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Adding Teacher...';
            submitBtn.disabled = true;
            
            // Create FormData object
            const formData = new FormData(this);
            
            // Submit form via AJAX
            fetch('add_teacher.php', {
                method: 'POST',
                body: formData
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                if (data.success) {
                    showMessage('success', data.message);
                    // Reset form
                    document.getElementById('teacherForm').reset();
                    document.getElementById('file-name').textContent = 'Choose a profile photo (JPEG, PNG, max 2MB)(මෙය සැපිරීම අනිවාර්ය නැත.)';
                    
                    // Redirect after 2 seconds
                    setTimeout(() => {
                        window.location.href = 'success.php';
                    }, 2000);
                } else {
                    showMessage('error', data.message);
                }
            })
            .catch(error => {
                showMessage('error', 'Network error: ' + error.message);
                console.error('Form submission error:', error);
            })
            .finally(() => {
                // Restore button
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
            });
        });

        function showMessage(type, message) {
            const successMsg = document.getElementById('successMessage');
            const errorMsg = document.getElementById('errorMessage');
            
            if (type === 'success') {
                successMsg.style.display = 'block';
                errorMsg.style.display = 'none';
                successMsg.querySelector('span').textContent = message;
            } else {
                errorMsg.style.display = 'block';
                successMsg.style.display = 'none';
                errorMsg.querySelector('span').textContent = message;
            }
            
            // Auto-hide messages after 5 seconds
            setTimeout(() => {
                successMsg.style.display = 'none';
                errorMsg.style.display = 'none';
            }, 5000);
        }

        // Add input event listeners to remove error styling
        document.querySelectorAll('.form-control').forEach(input => {
            input.addEventListener('input', function() {
                this.style.borderColor = '';
            });
        });

        // Form reset handling
        document.querySelector('.btn-secondary').addEventListener('click', function() {
            document.getElementById('file-name').textContent = 'Choose a profile photo (JPEG, PNG, max 2MB)(මෙය සැපිරීම අනිවාර්ය නැත.)';
            // Hide any messages
            document.getElementById('successMessage').style.display = 'none';
            document.getElementById('errorMessage').style.display = 'none';
        });
    </script>
</body>
</html>