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
                <a href="/{{ $item->param }}" class="top_button">
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
                        <p class="brand_name">{{ $item->brand_name }}</p>
                        <p class="item_price"><span>￥</span>{{ $item->price }}<span>(税込)</span></p>
                    </div>
                    <div class="like-tap_button">
                        @if($item->users()->where('user_id', Auth::id())->exists())
                            <a href="/item/{{ $item->id }}/unlike">
                                <i class="fa-regular fa-star like-Btn liked"></i>
                            </a>
                        @else
                            <a href="/item/{{ $item->id }}/like">
                                <i class="fa-regular fa-star like-Btn"></i>
                            </a>
                        @endif
                        <div class="like-count">
                            <p>{{ $item->users()->count() }}</p>
                        </div>
                    </div>
                    <div class="comment-mark">
                        <i class="fa-regular fa-comment"></i>
                        <div class="comment-count">
                            <p>{{ $item->users()->count() }}</p>
                        </div>
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
                            @foreach($users as $user)
                                <div class="user_img">
                                    <img src="" alt="ユーザー画像" class="img-user">
                                </div>
                                <div class="user_name">
                                    <p class="name">{{ $user->name }}</p>
                                </div>
                                @foreach($user->comments as $body)
                                <div class="user_comment">
                                    <P class="text_comment">{{ $body->pivot->body }}</p>
                                </div>
                                @endforeach
                            @endforeach
                        </div>
                        <form class="comment-form" action="/item/{{ $item->id }}/comment" method="get">
                            @csrf
                            <div class="product_message">
                                <textarea cols="20" rows="5" name="body" value="{{ old('body') }}" id="body" class="message-comment"></textarea>
                            </div>
                            <div class="contact-form__error-message">
                                @error('body')
                                {{ $message }}
                                @enderror
                            </div>
                            <div class="button-content">
                                <button class="submit-button">コメントを送信する</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </form> 
    </main>  
    <script>

    </script>       
</body>
</html>