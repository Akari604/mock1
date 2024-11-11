<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン画面</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
</head>
<body>
    <header class="header">
        <div class="header-content">
            <div class="header-ttl">
                <img src="{{ asset('logo.png') }}" alt="COACHTECH">
            </div>
        </div>
    </header>
    <main>
        <div class="login_content">
            <div class="login_content-heading">
                <h2>ログイン</h2>
            </div>
            <form class="form">
                <div class="form_group">
                    <div class="form_group-ttl">
                        <span class="form_group-label">
                            ユーザー名/メールアドレス
                        </span>
                    </div>
                    <div class="form_group-content">
                        <div class="form_input-text">
                            <input type="email" name="email" value="{{ old('email') }}" />
                        </div>
                        <div class="form__error">
                            @error('email')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form_group">
                    <div class="form_group-title">
                        <span class="form_group-label">パスワード</span>
                    </div>
                    <div class="form_group-content">
                        <div class="form_input-text">
                            <input type="password" name="password" />
                        </div>
                        <div class="form__error">
                            @error('password')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form_button">
                    <button class="form_button-submit" type="submit">ログインする</button>
                </div>
            </form>
            <div class="register_link">
                <a class="register_button-submit" href="/register">会員登録はこちら</a>
            </div>
        </div>
    </main>
</body>
</html>