<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Pesan Baru dari Website</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f6f8; margin: 0; padding: 20px;">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" style="max-width: 600px; margin: auto; background: #ffffff; border-radius: 10px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); overflow: hidden;">
        <tr>
            <td style="background-color: #4CAF50; color: #ffffff; text-align: center; padding: 20px;">
                <h2 style="margin: 0; font-size: 22px;">📩 Pesan Baru dari Website</h2>
            </td>
        </tr>
        <tr>
            <td style="padding: 20px; color: #333333; font-size: 15px; line-height: 1.6;">
                <p><strong style="color:#4CAF50;">Nama:</strong> {{ $data['name'] }}</p>
                <p><strong style="color:#4CAF50;">Email:</strong> {{ $data['email'] }}</p>
                <p><strong style="color:#4CAF50;">Pesan:</strong></p>
                <div style="background:#f9f9f9; border-left: 4px solid #4CAF50; padding: 10px; margin-top: 10px; border-radius: 5px;">
                    {{ $data['message'] }}
                </div>
            </td>
        </tr>
        <tr>
            <td style="background-color: #f0f0f0; text-align: center; padding: 15px; font-size: 12px; color: #666;">
                Email ini dikirim otomatis dari <strong>MyCompany Website</strong>.  
            </td>
        </tr>
    </table>
</body>
</html>
