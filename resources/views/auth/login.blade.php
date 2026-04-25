<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In - Sabang Island</title>
    <style>
        /* CSS MANUAL - PASTI JALAN */
        .logo-pojok {
            position: fixed;
            top: 20px;
            left: 20px;
            background: white;
            padding: 10px 20px;
            border-radius: 50px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.2);
            font-family: Arial;
            font-weight: bold;
            z-index: 9999;
        }
        .logo-pojok span {
            font-size: 24px;
            margin-right: 8px;
        }
        body {
            margin: 0;
            min-height: 100vh;
            background: linear-gradient(135deg, #bae6fd, #e0f2fe);
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: Arial, sans-serif;
        }
        .form-box {
            background: white;
            padding: 30px;
            border-radius: 30px;
            max-width: 400px;
            width: 90%;
            box-shadow: 0 20px 40px rgba(0,0,0,0.2);
            text-align: center;
        }
        input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 20px;
            box-sizing: border-box;
        }
        button {
            background: #0f172a;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 40px;
            width: 100%;
            font-weight: bold;
            margin-top: 10px;
            cursor: pointer;
        }
        a {
            color: #0284c7;
            text-decoration: none;
            font-size: 12px;
        }
        .links {
            display: flex;
            justify-content: space-between;
            margin-top: 15px;
        }
        h1 {
            margin-bottom: 5px;
        }
    </style>
</head>
<body>

    <!-- LOGO DI POJOK KIRI ATAS - PASTI MUNCUL -->
    <div class="logo-pojok">
        <span>🏝️</span>
        Sabang Island | Weh
    </div>

    <div class="form-box">
        <h1>SIGN IN</h1>
        <p style="color: gray;">Welcome back to Sabang Island</p>

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <input type="text" name="email" placeholder="Username or Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <div style="text-align: left; margin: 10px 0;">
                <input type="checkbox" name="remember" id="remember">
                <label for="remember">Keep me logged in</label>
            </div>
            <button type="submit">Sign in</button>
            <div class="links">
                <a href="#">Forgot username?</a>
                <a href="#">Create account</a>
                <a href="#">Forgot password?</a>
            </div>
        </form>
    </div>

</body>
</html>