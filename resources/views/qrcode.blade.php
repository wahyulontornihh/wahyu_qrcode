<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code Signature</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 100%;
            max-width: 500px;
        }
        h2 {
            color: #333;
            margin-bottom: 20px;
        }
        p {
            font-size: 16px;
            color: #555;
            margin-bottom: 20px;
        }
        strong {
            color: #333;
        }
        img {
            margin-top: 20px;
            max-width: 100%;
            height: auto;
        }
        a {
            display: inline-block;
            margin-top: 30px;
            padding: 10px 20px;
            text-decoration: none;
            background-color: #007bff;
            color: #fff;
            border-radius: 5px;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>QR Code untuk {{ $request->name }}</h2>
        <p><strong>Email:</strong> {{ $request->email }}</p>
        <img src="data:image/png;base64,{{ $qrCode }}" alt="QR Code">
        <br>
        <a href="/signature/form">Buat QR Code Lain</a>
    </div>
</body>
</html>
