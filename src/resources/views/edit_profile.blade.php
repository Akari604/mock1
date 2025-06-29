<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>プロフィール設定画面</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/edit_profile.css') }}" />
</head>
<body>
    <header class="header">
        <div class="header-content">
            <div class="header-top">
                <div class="header-ttl">
                    <img src="{{ asset('storage/images/logo.png') }}" alt="COACHTECH" width="300px">
                </div>
                <form class="header-search_form">
                    <input type="search" id="site-search" name="search" value="なにをお探しですか？">
                </form>
                <div class="header-button">
                    @auth
                    <form class="logout_button" action="/logout" method="post">
                    @csrf
                        <button class="logout_button">ログアウト</button>
                    </form>
                    @endauth
                    @guest
                    <a href="/login" class="top_button">
                        ログイン
                    </a>
                    @endguest
                    <a href="/mypage" class="top_button">
                        マイリスト
                    </a>
                    <a href="/sell" class="product_exhibit">
                        出品
                    </a>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="main-content">
            <div class="main-content_title">
                <h2>プロフィール設定</h2>
            </div>
            <form class="main-content_form" action="/mypage/profile" method="post" enctype="multipart/form-data">
                @csrf
                <div class="main-content_image">
                    <div class="profile_image">
                        <img src="" alt="プロフィール画像" class="img-content">
                    </div>
                    <div class="file-content">
                        画像を選択する
                        <input type="file" id="image" name="image" accept="image/png, image/jpeg" value="画像を選択する"/> 
                    </div>
                </div>
                <div class="form_group">
                    <div class="form_group-ttl">
                        <span class="form_group-label">
                            ユーザー名
                        </span>
                    </div>
                    <div class="form__group-content">
                        <div class="form_input-text">
                            <input type="text" name="name" />
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
                            郵便番号
                        </span>
                    </div>
                    <div class="form__group-content">
                        <div class="form_input-text">
                            <input type="text" name="number" />
                        </div>
                        <div class="form__error">
                            @error('number')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form_group">
                    <div class="form_group-ttl">
                        <span class="form_group-label">
                            住所
                        </span>
                    </div>
                    <div class="form__group-content">
                        <div class="form_input-text">
                            <input type="text" name="address" />
                        </div>
                        <div class="form__error">
                            @error('address')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form_group">
                    <div class="form_group-ttl">
                        <span class="form_group-label">
                            建物名
                        </span>
                    </div>
                    <div class="form__group-content">                 
                        <div class="form_input-text">
                            <input type="text" name="building" />
                        </div>
                        <div class="form__error">
                            @error('building')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form_button">
                    <button class="form_button-submit" type="submit">更新する</button>
                </div>
            </form>
        </div>
    </main>               
</body>
</html>