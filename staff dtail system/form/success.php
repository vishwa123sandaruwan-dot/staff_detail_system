<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Submitted Successfully</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #e4edf5 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
            color: #333;
        }

        .container {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
            padding: 50px 40px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .container::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(76, 201, 240, 0.05) 0%, transparent 70%);
            z-index: -1;
        }

        .success-icon {
            width: 120px;
            height: 120px;
            background: linear-gradient(135deg, #4bb543, #3a9e35);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 30px;
            animation: pulse 2s infinite;
            box-shadow: 0 10px 25px rgba(75, 181, 67, 0.3);
        }

        .success-icon i {
            font-size: 60px;
            color: white;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
                box-shadow: 0 10px 25px rgba(75, 181, 67, 0.3);
            }
            50% {
                transform: scale(1.05);
                box-shadow: 0 15px 35px rgba(75, 181, 67, 0.4);
            }
            100% {
                transform: scale(1);
                box-shadow: 0 10px 25px rgba(75, 181, 67, 0.3);
            }
        }

        h1 {
            color: #4a3b8c;
            font-size: 32px;
            margin-bottom: 15px;
            font-weight: 700;
        }

        .subtitle {
            color: #6c63a0;
            font-size: 18px;
            margin-bottom: 30px;
            line-height: 1.5;
        }

        .message {
            background: rgba(245, 247, 250, 0.8);
            border-radius: 15px;
            padding: 25px;
            margin-bottom: 35px;
            text-align: left;
            border-left: 4px solid #4bb543;
        }

        .message h3 {
            color: #4a3b8c;
            margin-bottom: 15px;
            font-size: 20px;
        }

        .message p {
            color: #555;
            line-height: 1.6;
            margin-bottom: 10px;
        }

        .details {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin-bottom: 40px;
            gap: 15px;
        }

        .detail-item {
            background: white;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            flex: 1;
            min-width: 150px;
            border-top: 3px solid #7e7ef5;
        }

        .detail-item i {
            font-size: 24px;
            color: #7e7ef5;
            margin-bottom: 10px;
        }

        .detail-label {
            font-size: 14px;
            color: #888;
            margin-bottom: 5px;
        }

        .detail-value {
            font-size: 18px;
            font-weight: 600;
            color: #4a3b8c;
        }

        .actions {
            display: flex;
            justify-content: center;
            gap: 15px;
            flex-wrap: wrap;
        }

        .btn {
            padding: 14px 30px;
            border-radius: 10px;
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
            font-size: 16px;
            cursor: pointer;
            border: none;
        }

        .btn-primary {
            background: linear-gradient(135deg, #7e7ef5 0%, #5a5ac9 100%);
            color: white;
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, #8e8eff 0%, #6a6ad9 100%);
            box-shadow: 0 8px 20px rgba(126, 126, 245, 0.4);
            transform: translateY(-2px);
        }

        .btn-secondary {
            background: rgba(245, 247, 250, 0.9);
            color: #6c63a0;
            border: 1px solid rgba(200, 200, 220, 0.5);
        }

        .btn-secondary:hover {
            background: white;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            transform: translateY(-2px);
        }

        .decoration {
            position: absolute;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(126, 126, 245, 0.1) 0%, transparent 70%);
            z-index: -1;
        }

        .decoration-1 {
            width: 200px;
            height: 200px;
            top: -100px;
            right: -100px;
        }

        .decoration-2 {
            width: 150px;
            height: 150px;
            bottom: -75px;
            left: -75px;
        }

        @media (max-width: 600px) {
            .container {
                padding: 40px 25px;
            }
            
            .details {
                flex-direction: column;
            }
            
            .actions {
                flex-direction: column;
            }
            
            .btn {
                width: 100%;
                justify-content: center;
            }
        }
    </style>
</head>
<body>
    <div class="decoration decoration-1"></div>
    <div class="decoration decoration-2"></div>
    
    <div class="container">
        <div class="success-icon">
            <i class="fas fa-check"></i>
        </div>
        
        <h1> Submitted Successfully!</h1>
        <p class="subtitle">Your answers have been recorded and submitted for evaluation</p>
        
        <div class="message">
            <h3>Thank you for your kindness..!</h3>
            <p><i class="fas fa-check-circle" style="color: #186db7ff; margin-right: 8px;"></i> Your data has been successfully added.</p>
            <p><i class="fas fa-check-circle" style="color: #186db7ff; margin-right: 8px;"></i> ඔබගේ දත්ත සාර්ථකව එකතු කරන ලදී.</p>
            <p><i class="fas fa-check-circle" style="color: #186db7ff; margin-right: 8px;"></i> உங்கள் தரவு வெற்றிகரமாக சேர்க்கப்பட்டது.</p>
        </div>
        
        <div class="details">
            <div class="detail-item">
                <i class="fas fa-calendar-check"></i>
                <div class="detail-label">Submission Date</div>
                <div class="detail-value" id="submissionDate">Loading...</div>
            </div>
            
            <div class="detail-item">
                <i class="fas fa-file-alt"></i>
                <div class="detail-label">Role</div>
                <div class="detail-value" id="testType">Teacher</div>
            </div>
            
            <div class="detail-item">
                <i class="fas fa-id-badge"></i>
                <div class="detail-label">Data</div>
                <div class="detail-value" id="candidateId">Stored</div>
            </div>
        </div>
        
        <div class="actions">
            <a href="form.php" class="btn btn-primary">
                <i class="fas fa-home"></i> Return to form
    </a>
    </div>

    <script>
        // Set current date and time
        document.addEventListener('DOMContentLoaded', function() {
            const now = new Date();
            const options = { 
                year: 'numeric', 
                month: 'long', 
                day: 'numeric',
                hour: '2-digit',
                minute: '2-digit'
            };
            document.getElementById('submissionDate').textContent = now.toLocaleDateString('en-US', options);
            
            // Add slight delay to success animation for better effect
            setTimeout(() => {
                document.querySelector('.success-icon').style.animationPlayState = 'running';
            }, 500);
        });
    </script>
</body>
</html>