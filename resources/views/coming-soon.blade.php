<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ORYAM – Coming Soon</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(135deg, #0f172a, #020617);
            color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            text-align: center;
        }
        .box {
            max-width: 600px;
            padding: 40px;
        }
        h1 {
            font-size: 42px;
            margin-bottom: 10px;
            letter-spacing: 2px;
        }
        h2 {
            font-size: 22px;
            font-weight: normal;
            opacity: 0.9;
            margin-bottom: 30px;
        }
        p {
            font-size: 16px;
            opacity: 0.8;
            line-height: 1.6;
        }
        .badge {
            display: inline-block;
            margin-top: 25px;
            padding: 10px 22px;
            border-radius: 30px;
            background: #22c55e;
            color: #022c22;
            font-weight: bold;
            font-size: 14px;
        }
        footer {
            margin-top: 40px;
            font-size: 13px;
            opacity: 0.6;
        }
    </style>
</head>
<body>

<div class="box">
    <h1>ORYAM</h1>
    <h2>Complete Body Care Kit</h2>

    <p>
        We are preparing something special for your health, wellness,  
        skin care, hair care, and immunity needs.
    </p>

    <div class="badge">🚀 Products Coming Soon</div>

    <footer>
        © {{ date('Y') }} ORYAM. All rights reserved.
    </footer>
</div>

</body>
</html>
