<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A/Mihinthale Maha Vidyalaya</title>
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
            max-width: 450px;
            padding: 40px 35px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            position: relative;
            overflow: hidden;
            transition: transform 0.3s ease;
        }

        .container:hover {
            transform: translateY(-5px);
        }

        .container::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(126, 87, 194, 0.05) 0%, transparent 70%);
            z-index: -1;
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        .header h1 {
            color: #4a3b8c;
            font-size: 28px;
            margin-bottom: 8px;
            font-weight: 700;
            letter-spacing: 1px;
        }

        .header h2 {
            color: #6c63a0;
            font-size: 16px;
            font-weight: normal;
            margin-bottom: 20px;
        }

        .title {
            text-align: center;
            margin-bottom: 30px;
            position: relative;
        }

        .title h3 {
            color: #4a3b8c;
            font-size: 24px;
            font-weight: 600;
            display: inline-block;
            padding-bottom: 10px;
        }

        .title h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background: linear-gradient(90deg, transparent, #7e7ef5, transparent);
            border-radius: 3px;
        }

        .field {
            position: relative;
            margin-bottom: 25px;
        }

        .field input {
            width: 100%;
            padding: 14px 16px;
            background: rgba(245, 247, 250, 0.8);
            border: 1px solid rgba(200, 200, 220, 0.5);
            border-radius: 10px;
            font-size: 16px;
            color: #333;
            transition: all 0.3s ease;
        }

        .field input:focus {
            border-color: #7e7ef5;
            outline: none;
            box-shadow: 0 0 0 3px rgba(126, 126, 245, 0.2);
            background: rgba(255, 255, 255, 0.9);
        }

        .field label {
            position: absolute;
            top: 14px;
            left: 16px;
            color: #8888bb;
            font-size: 16px;
            pointer-events: none;
            transition: all 0.3s ease;
        }

        .field input:focus + label,
        .field input:not(:placeholder-shown) + label {
            top: -10px;
            left: 12px;
            font-size: 12px;
            background: white;
            padding: 2px 8px;
            color: #7e7ef5;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .checkbox {
            display: flex;
            align-items: center;
        }

        .checkbox input {
            margin-right: 8px;
            accent-color: #7e7ef5;
        }

        .checkbox label {
            color: #666;
            font-size: 14px;
        }

        .pass-link a {
            color: #7e7ef5;
            text-decoration: none;
            font-size: 14px;
            transition: color 0.3s ease;
        }

        .pass-link a:hover {
            color: #5a5ac9;
            text-decoration: underline;
        }

        .field input[type="submit"] {
            background: linear-gradient(135deg, #7e7ef5 0%, #5a5ac9 100%);
            color: white;
            border: none;
            cursor: pointer;
            font-weight: 600;
            padding: 14px;
            border-radius: 10px;
            transition: all 0.3s ease;
            letter-spacing: 0.5px;
            font-size: 16px;
        }

        .field input[type="submit"]:hover {
            background: linear-gradient(135deg, #8e8eff 0%, #6a6ad9 100%);
            box-shadow: 0 8px 20px rgba(126, 126, 245, 0.4);
            transform: translateY(-2px);
        }

        .field input[type="submit"]:active {
            transform: translateY(0);
        }

        /* Custom checkbox styling */
        .checkbox input[type="checkbox"] {
            width: 18px;
            height: 18px;
            position: relative;
            cursor: pointer;
        }

        /* Decorative elements */
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

        .school-name {
            font-size: 24px;
            font-weight: 700;
            color: #4a3b8c;
            text-align: center;
            margin-bottom: 5px;
        }

        .portal-name {
            font-size: 16px;
            color: #6c63a0;
            text-align: center;
            margin-bottom: 20px;
        }

        .developer-credit {
            text-align: center;
            margin-top: 25px;
            color: #6c63a0;
            font-size: 14px;
            font-style: italic;
        }

        @media (max-width: 480px) {
            .container {
                padding: 30px 25px;
            }
            
            .content {
                flex-direction: column;
                align-items: flex-start;
            }
            
            .pass-link {
                margin-top: 10px;
            }
        }
    </style>
</head>
<body>
    <div class="decoration decoration-1"></div>
    <div class="decoration decoration-2"></div>
    
    <div class="container">
        <div class="header">
            <div class="school-name">A/MIHINTHALE MAHA VIDYALAYA</div>
            <div class="portal-name">Admin's Login</div>
        </div>

        <div class="title">
            <h3>Admin Login</h3>
        </div>

        <form action="./process.php" method="post" autocomplete="off">
            <!--username-->
            <div class="field">
                <input type="text" name="username" title="username" id="username" placeholder=" " required>
                <label for="username">User Name:</label>
            </div>
            <!--password-->
            <div class="field">
                <input type="password" name="password" title="password" id="password" placeholder=" " required>
                <label for="password">Password:</label>
            </div>

            <div class="content">
                <div class="checkbox">
                    <input type="checkbox" id="rem-me" title="remember me">
                    <label for="rem-me">Remember me</label>
                </div>

                <div class="pass-link">
                    <a href="fogetpass.php">Forgot password?</a>
                </div>
            </div>

            <div class="field">
                <input type="submit" value="Login" name="login">
            </div>
        </form>

        <div class="developer-credit">
            Developed By Vishwa Sandaruwan
        </div>
    </div>

    <script>
        // Add functionality for floating labels
        document.addEventListener('DOMContentLoaded', function() {
            const inputs = document.querySelectorAll('.field input');
            
            inputs.forEach(input => {
                // Check if input has content on page load (for browser autofill)
                if(input.value) {
                    input.parentNode.classList.add('has-content');
                }
                
                input.addEventListener('focus', function() {
                    this.parentNode.classList.add('focused');
                });
                
                input.addEventListener('blur', function() {
                    if(!this.value) {
                        this.parentNode.classList.remove('focused');
                    }
                });
            });
        });
    </script>
</body>
</html>