<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>プロフィール画面</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}" />
</head>
<body>
    <header class="header">
        <div class="header-content">
            <div class="header-ttl">
                <img src="{{ asset('storage/img/logo.png') }}" alt="COACHTECH" width="300px">
            </div>
            <form class="header-search_form">
                <input type="search" id="site-search" name="search" value="なにをお探しですか？">
            </form>
            <div class="header-button">
                <a href="/login" alt="ログイン" class="top_button">
                    ログイン
                </a>
                <a href="/mylist" alt="マイリスト" class="top_button">
                    マイリスト
                </a>
                <a href="/exhibit" alt="出品" class="product_exhibit">
                    出品
                </a>
            </div>
        </div>
    </header>
    <main>
        <div class="main-content">
            <div class="main-content_heading">
                <img src="" alt="プロフィール画像" class="img-content">
                <p class="login-user_name">ユーザー名</p>
            </div>
            <a href="/mypage/profile" class="profile-edit_button">
                プロフィールを編集
            </a>
            <div class="main-products">
                <p class="exhibit-product">出品した商品</p>
                <p class="purchase-product">購入した商品</p>
            </div>
            <form>
                <div class="product_contents">
                    <div class="product_content">
                        <a href="/item" class="product-link">
                            <img src="" alt="商品画像" class="product-img">
                            <div class="detail-content">
                                <p>商品名</p>
                            </div>
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </main>
</body>
</html>

