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
                <img src="{{ asset('storage/images/logo.png') }}" alt="COACHTECH" width="300px">
            </div>
            <form class="header-search_form">
                <input type="search" id="site-search" name="search" value="なにをお探しですか？">
            </form>
            <div class="header-button">
                @if (Auth::check())
                <form class="top_button" action="/logout" method="post">
                    @csrf
                    <button class="top_button">ログアウト</button>
                </form>
                <a href="/login" class="top_button">
                    ログイン
                </a>
                @endif
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
        <form>
            <div class="main-content_detail">
                <div class="main-content_img">
                    <img src="{{ asset($item->img_url) }}" alt="商品画像" class="img-content">
                </div>
                <div class="main-content_text">
                    <div class="product_content">
                        <h2>{{ $item->product_name }}</h2>
                        <p class="brand_name">ブランド名</p>
                        <p class="item_price"><span>￥</span>{{ $item->price }}<span>(税込)</span></p>
                    </div>
                    <div class="tap_button">
                        <button type="button" class="like-btn" id="likeButton">
                            <img src="{{ asset('/storage/images/star-regular.png') }}" class="star-regular">
                        </button>
                        <div class="like-count" id="likeCount">0</div>
                        <button type="button" class="comment-btn" id="commentButton">
                            <img src="{{ asset('/storage/images/comment-regular.png') }}" class="comment-regular">
                        </button>
                        <div class="comment-count" id="commentCount">0</div>
                    </div>
                    <div class="main-content_btn">
                        <button class="purchase-btn">購入手続きへ</button>
                    </div>
                    <div class="product_detail">
                        <h3>商品説明</h3>
                        <p class="product_description">{{ $item->description }}</p>

                    
      <script>
      </script>
</body>
</html>