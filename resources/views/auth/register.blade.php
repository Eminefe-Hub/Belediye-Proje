<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bandle City Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f7e8d0;
            font-family: 'Comic Sans MS', cursive, sans-serif;
        }
        .register-container {
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            background: #fff9ec;
            border: 2px solid #dbbe7c;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }
        .register-container h1 {
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
<div class="register-container">
    <h1>Bandle Şehri Kayıt Sayfası</h1>
    <form method="POST" action="{{ route('register') }}">
        <!-- CSRF Token -->
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <!-- Name -->
        <div class="mb-3">
            <label for="name" class="form-label">İsim</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required autofocus>
            @if ($errors->has('name'))
                <div class="text-danger small">{{ $errors->first('name') }}</div>
            @endif
        </div>

        <!-- Email Address -->
        <div class="mb-3">
            <label for="email" class="form-label">E-posta</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
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

        <!-- Confirm Password -->
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Şifreyi Doğrula</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
            @if ($errors->has('password_confirmation'))
                <div class="text-danger small">{{ $errors->first('password_confirmation') }}</div>
            @endif
        </div>

        <!-- Register Button -->
        <div class="d-flex justify-content-between align-items-center">
            <a href="{{ route('login') }}" class="link">Zaten Kayıtlı Mısın?</a>
            <button type="submit" class="btn btn-primary">Kayıt Ol</button>
        </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
