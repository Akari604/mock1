<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品一覧画面</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>
<body>
    <header class="header">
        <div class="header-content">
            <div class="header-ttl">
                <img src="{{ asset('storage/images/logo.png') }}" alt="COACHTECH" width="300px">
            </div>
            <form class="header-search_form" action="/" method="get">
            @csrf
                <input type="text" id="keyword" name="keyword" placeholder="なにをお探しですか？" value="{{ $keyword }}">
            </form>
            <div class="header-button">
                @auth
                    <form class="top_button" action="/logout" method="post">
                    @csrf
                        <button class="top_button">ログアウト</button>
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
    </header>
    <main>
        <div class="main-content">
            <div class="main-content_heading">
                <p class="recomend-button">おすすめ</p>
                <p class="mylist-button">マイリスト</p>
            </div>
            <div class="product_contents">
                @foreach($items as $item)
                    <div class="product_content">
                        <a href="/item/{{ $item->id }}" class="product-link">
                            <img src="{{ asset($item->img_url) }}" alt="商品画像" class="product-img">
                            <div class="detail-content">
                                <p>{{ $item->product_name }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
</body>
</html>