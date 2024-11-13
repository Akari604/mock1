<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品詳細画面</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/detail.css') }}" />
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
        <div class="main-content_detail">
            <div class="main-content_img">
                <img src="" alt="商品画像">
            </div>
            <div class="main-content_text">
                <div class="product_name">
                    <h2>商品名</h2>
                </div>
            
</body>
</html>