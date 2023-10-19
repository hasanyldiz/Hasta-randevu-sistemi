<!DOCTYPE html>
<html>
<head>
    <title>Oturum Örneği</title>
    <style>
        body {
            background: linear-gradient(135deg, #70dbdb, #69a7a7);
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .login-container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            padding: 30px;
            width: 360px;
            text-align: center;
        }

        .login-header {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .form-input {
            padding: 10px;
            margin-bottom: 15px;
            border: none;
            border-bottom: 2px solid #ddd;
            width: 100%;
            outline: none;
            transition: border-color 0.3s;
        }

        .form-input:focus {
            border-color: #007bff;
        }

        .form-button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 12px 20px;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .form-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-header">Hoş Geldiniz</div>
        <form method="post" action="../index.php?route=Login@Loginuser">
            <input class="form-input" type="text" name="Username" placeholder="Kullanıcı Adı" required>
            <input class="form-input" type="password" name="Userpassword" placeholder="Parola" required>
            <button class="form-button">Giriş Yap</button>
        </form>
        
    </div>
</body>
</html>
