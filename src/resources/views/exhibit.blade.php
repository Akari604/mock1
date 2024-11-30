<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>プロフィール画面</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/exhibit.css') }}" />
</head>
<body>
    <header class="header">
        <div class="header-content">
            <div class="header-ttl">
                <img src="{{ asset('storage/images/logo.png') }}" alt="COACHTECH" width="300px">
            </div>
            <form class="header-search_form">
                <input type="search" id="site-search" name="search" value="なにをお探しですか？">
            </form>
            <div class="header-button">
                <a href="/login" class="top_button">
                    ログイン
                </a>
                <a href="/mylist" class="top_button">
                    マイリスト
                </a>
                <a href="/exhibit" class="product_exhibit">
                    出品
                </a>
            </div>
        </div>
    </header>
    <main>
        <div class="main_content">
            <div class="main_content-heading">
                <h1>商品の出品</h1>
            </div>
            <div class="main-content_image">
                <h3>商品画像</h3>
                <div class="main-img_select">
                    <div class="profile_image">
                        <img src="" alt="プロフィール画像" class="img-content">
                    </div>
                    <div class="file-content">
                        画像を選択する
                        <output id="list" class="image_output"></output>
                        <input type="file" id="item_image" name="image" accept="image/png, image/jpeg" value="画像を選択する"/> 
                    </div>
                </div>
                <div class="products_detail">
                    <h2>商品の詳細</h2>
                    <div class="product_categories">
                        <h3>カテゴリー</h3>
