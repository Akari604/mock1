<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品詳細画面</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/purchase.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/purchase.css') }}" />
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
        <div class="main-product_content">
            <div class="form-product_content">
                <div class="detail-product_content">
                    <div class="product_content">
                        <div class="product_img">
                            <img src="{{ asset($item->img_url) }}" alt="商品画像" class="img-content">
                        </div>
                        <div class="product_name">
                            <h2>{{ $item->product_name }}</h2>
                            <p class="item_price"><span>￥</span>{{ $item->price }}</p>
                        </div>
                    </div>
                    <div class="form-product_detail">
                        <div class="purchase_content">
                            <div class="product_detail-ttl">
                                <p class="product_ttl">
                                    商品代金
                                </p>
                                <p class="payment_ttl">
                                    支払い方法
                                </p>
                            </div>
                            <div class="product_detail-content">
                                <p class="detail-item_price"><span>￥</span>{{ $item->price }}</p>
                                <p class="detail-item_payment"></p>
                            </div>
                        </div>
                        <div class="purchase-button">
                            <button class="purchase-button_push">
                                購入する
                            </button>
                        </div>
                    </div>
                </div>
                <div class="select-payment_method">
                    <h3 class="payment_method">支払い方法</h3>
                    <select class="payment_method-form" name="payment_id" id="">
                        <option value="" disabled selected="selected">選択してください</option>
                        <option value="1">コンビニ払い</option>
                        <option value="2">カード払い</option>
                    </select>
                </div>
                <p class="contact-form__error-message">
                    @error('payment_id')
                    {{ $message }}
                    @enderror
                </p>
                <div class="form-send_direction">
                    <div class="send_direction-content">
                        <div class="send_direction-button">
                            <h3 class="send_direction">配送先</h3>
                            @foreach($users as $user)
                                <p class="myself_address">
                                    {{ $user->address }}
                                </p>
                            @endforeach
                        </div>
                        <div class="send_direction-change">
                            <a href="/purchase/address/{{ $item->id }}" class="change-button">変更する</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://js.stripe.com/v3/"></script>
</body>
</html>