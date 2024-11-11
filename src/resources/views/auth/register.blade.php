<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>会員登録画面</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/register.css') }}" />
</head>
<body>
    <header class="header">
        <div class="header-content">
            <div class="header-ttl">
                <h1 class="header-ttl_name">COACHTECH</h1>
            </div>
        </div>
    </header>
    <main>
        <div class="register_content">
            <div class="register_content-heading">
                <h2>会員登録</h2>
            </div>
            <form class="form">
                <div class="form_group">
                    <div class="form_group-ttl">
                        <span class="form_group-label">
                            ユーザー名
                        </span>
                    </div>
                    <div class="form__group-content">
                        <div class="form_input-text">
                            <input type="text" name="name" value="{{ old('name') }}" />
                        </div>
                        <div class="form__error">
                            @error('name')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form_group">
                    <div class="form_group-ttl">
                        <span class="form_group-label">
                            メールアドレス
                        </span>
                    </div>
                    <div class="form__group-content">
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
                    <div class="form_group-ttl">
                        <span class="form_group-label">
                            パスワード
                        </span>
                    </div>
                    <div class="form__group-content">
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
                <div class="form_group">
                    <div class="form_group-ttl">
                        <span class="form_group-label">
                            確認用パスワード
                        </span>
                    </div>
                    <div class="form__group-content">
                        <div class="form_input-text">
                            <input type="password" name="password_confirmation" />
                        </div>
                    </div>
                </div>
                <div class="form_button">
                    <button class="form_button-submit" type="submit">登録する</button>
                </div>
            </form>
            <div class="login_link">
                <a class="login_button-submit" href="/login">ログインはこちら</a>
            </div>
        </div>
    </main>   
</body>
</html>