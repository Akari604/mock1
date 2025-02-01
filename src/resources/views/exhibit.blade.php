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
    </header>
    <main?>
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
                        @error('item_image')
                            <span class="input_error">
                                <p class="input_error_message">{{$errors->first('item_condition')}}</p>
                            </span>
                        @enderror 
                    </div>
                </div>
                <div class="products_detail">
                    <h2>商品の詳細</h2>
                    <div class="product_categories">
                        <h3>カテゴリー</h3>
                    </div>
                    <label class="label">商品の状態</label>
                    <select class="condition" placehplder="選択してください" name="item_condition" id="condition">
                        <option disabled selected>選択してください</option>
                    </select>
                    @error('item_condition')
                        <span class="input_error">
                            <p class="input_error_message">{{$errors->first('item_condition')}}</p>
                        </span>
                    @enderror
                    <div class="product-name_description">
                        <h2>商品名と説明</h2>
                    </div>
                    <label class="label">商品名</label>
                    <input type="text" name="item_name" class="text">
                    @error('item_name')
                        <span class="input_error">
                            <p class="input_error_message">{{$errors->first('item_name')}}</p>
                        </span>
                    @enderror
                    <label class="label">商品の説明</label>
                    <textarea cols="30" rows="5" name="item_description" class="textarea"></textarea>
                    @error('item_description')
                        <span class="input_error">
                            <p class="input_error_message">{{$errors->first('item_description')}}</p>
                        </span>
                    @enderror
                    <label class="label">販売価格</label>
                    <input type="text" class="text" placeholder="￥" name="item_price">
                    @error('item_price')
                        <span class="input_error">
                            <p class="input_error_message">{{$errors->first('item_price')}}</p>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
    </main>
</body>
</html>

