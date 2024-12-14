<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品詳細画面</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/detail.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/detail.css') }}" />
    <script src="https://kit.fontawesome.com/4db26844c1.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> 
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
                        @auth
                            @if(!$item->isLikedBy(Auth::user()))
                                <span class="favorites">
                                    <i class="fa-regular fa-star like-Btn" data-item-id="{{ $item->id }}"></i>
                                </span><!-- /.likes -->
                            @else
                                <span class="favorites">
                                    <i class="fa-regular fa-star like-Btn liked" data-item-id="{{ $item->id }}"></i>
                                </span><!-- /.likes -->
                            @endif                    
                        @endauth
                        <div class="like-count" id="likeCount">0</div>
                        <button type="button" class="comment-btn" id="commentButton">
                            <i class="fa-regular fa-comment" data-item-id="{{ $item->id }}"></i>
                        </button>
                        <div class="comment-count" id="commentCount">0</div>
                    </div>
                    <div class="main-content_btn">
                        <a href="/purchase/{{ $item->id }}" class="purchase-btn">購入手続きへ</a>
                    </div>
                    <div class="product_detail">
                        <h3>商品説明</h3>
                        <p class="product_description">{{ $item->description }}</p>
                    </div>
                    <div class="product_information">
                        <h3>商品の情報</h3>
                        <div class="product_information-content">
                            <p class="product_category">カテゴリー<span></span></p>
                            <p class="product_condition">商品の状態<span></span></p>
                        </div>
                    </div>
                    <div class="product_comment">
                        <p class="comment">コメント<span>()</span></p>
                        <div class="user-display">
                            <div class="user_img">
                                <img src="" alt="ユーザー画像" class="img-user">
                            </div>
                            <div class="user_name">
                                <p class="name"></p>
                            </div>
                        </div>
                        <div class="user_comment">
                            <P class="text_comment"></p>
                        </div>
                        <div class="product_message">
                            <textarea cols="20" rows="5" name="message_comment" class="message-comment"></textarea>
                        </div>
                        <div class="button-content">
                            <button type="submit" class="submit-button">コメントを送信する</button>
                        </div>
                    </div>
                </div>
            </div>
        </form> 
    </main>  
    <script>
    
    </script>       
</body>
</html>