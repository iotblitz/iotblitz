<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .email-header {
            text-align: center;
            background-color: #28a745;
            padding: 20px;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
            color: #fff;
        }
        .email-header img {
            max-width: 150px;
        }
        .email-content {
            padding: 20px;
        }
        .email-footer {
            text-align: center;
            padding: 20px;
            font-size: 14px;
            color: #fff;
            background-color: #218838;
            border-bottom-left-radius: 8px;
            border-bottom-right-radius: 8px;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="email-header">
            <img src="{{ asset('public/public_page') }}/assets/images/logo.webp" alt="IoTBlitz LLP">
        </div>
        <div class="email-content">
            <h1>Welcome, {{ $data['name'] }}!</h1>
            <p>We are excited to inform you that your account has been successfully created. Below are your account details:</p>
            <ul>
                <li><strong>Email:</strong> {{ $data['email'] }}</li>
                <li><strong>Password:</strong> {{ $data['password'] }}</li>
                <li><strong>Role:</strong> {{
                    ($data['user_type'] == 'C') ? 'Content Writer' :
                    (($data['user_type'] == 'E') ? 'Employee' :
                    (($data['user_type'] == 'M') ? 'Manager' :
                    (($data['user_type'] == 'AD') ? 'Admin' :
                    'Super Admin')))
                }}</li>
            </ul>
            <p>You can log in using the following link:</p>
            <p><a href="{{route('admin.login')}}" target="_blank">{{route('admin.login')}}</a></p>
            <p>Please keep this information secure and do not share it with anyone.</p>
            <p>Thank you for joining us!</p>
        </div>
        <div class="email-footer">
            <p>This is an auto-generated email. Please do not reply.</p>
            <p>&copy; 2024 IoTBlitz. All rights reserved.</p>
            <p>Visit us at <a href="https://iotblitz.com" target="_blank" style="color: #fff;">iotblitz.com</a></p>
        </div>
    </div>
</body>
</html>
