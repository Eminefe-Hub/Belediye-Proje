<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bandle City Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f7e8d0;
            font-family: 'Comic Sans MS', cursive, sans-serif;
        }
        .login-container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background: #fff9ec;
            border: 2px solid #dbbe7c;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }
        .login-container h1 {
            font-size: 2rem;
            color: #6e4f28;
            text-align: center;
        }
        .btn-primary {
            background-color: #a86c37;
            border-color: #845029;
        }
        .btn-primary:hover {
            background-color: #845029;
            border-color: #6e4f28;
        }
        .link {
            color: #6e4f28;
        }
        .link:hover {
            color: #a86c37;
        }
    </style>
</head>
<body>
<div class="login-container">
    <h1>Bandle Şehri Girişi</h1>
    <form method="POST" action="{{ route('login') }}">
        <!-- CSRF Token -->
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <!-- Email Address -->
        <div class="mb-3">
            <label for="email" class="form-label">E-posta</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required autofocus>
            @if ($errors->has('email'))
                <div class="text-danger small">{{ $errors->first('email') }}</div>
            @endif
        </div>

        <!-- Password -->
        <div class="mb-3">
            <label for="password" class="form-label">Şifre</label>
            <input type="password" class="form-control" id="password" name="password" required>
            @if ($errors->has('password'))
                <div class="text-danger small">{{ $errors->first('password') }}</div>
            @endif
        </div>

        <!-- Remember Me -->
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="remember_me" name="remember">
            <label class="form-check-label" for="remember_me">Beni Hatırla</label>
        </div>

        <!-- Forgot Password & Submit -->
        <div class="d-flex justify-content-between align-items-center">
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="link">Şifreni mi unuttun?</a>
            @endif
            <button type="submit" class="btn btn-primary">Giriş Yap</button>
        </div>
    </form>
    <div class="text-center mt-3">
        <p>Kayıtlı değil misiniz? <a href="{{ route('register') }}" class="link">Kayıt Ol</a></p>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
