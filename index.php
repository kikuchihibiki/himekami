<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/modern-css-reset/dist/reset.min.css" />
    <link rel="stylesheet" href="css/style.css">
    <title>h.k smile office</title>
</head>
<body>
    <header>
        <h1><span>工藤晴香</span> h.k smile office</h1>
        <div>
            <a href="">セミナー依頼</a>
            <a href="">お問い合わせ</a>
        </div>
        <ul>
            <li><a href="">セミナーについて</a></li>
            <li><a href="">セミナー開始までの流れ</a></li>
            <li><a href="">セミナーの感想</a></li>
            <li><a href="">スマイルトレーナーとは</a></li>
            <li><a href="">講師紹介</a></li>
        </ul>
    </header>

    <section>
        <!-- https://kodocode.net/design-css-carousel/ -->
        <div id="carousel">
            <figure id="spinner">
                <img src="img/slide_img4.jpg" alt>
                <img src="img/slide_img1.jpg" alt>
                <img src="img/slide_img2.jpg" alt>
                <img src="img/slide_img3.jpg" alt>
                <img src="img/slide_img4.jpg" alt>
                <img src="img/slide_img1.jpg" alt>
                <img src="img/slide_img2.jpg" alt>
                <img src="img/slide_img3.jpg" alt>
            </figure>
        </div>
        <span style="float:left" class="ss-icon" onclick="galleryspin('-')">&lt;</span>
        <span style="float:right" class="ss-icon" onclick="galleryspin('')">&gt;</span>
    </section>

    <section>
        <p class="">キャッチコピー</p>
        <div class="">
            <p>いつでもどこでもだれにでも自然な笑顔</p>
            <p>そこにホスピタリティマインドと<br>ビジネスマナー研修で好印象</p>
            <p>自分の容姿に自信がない<br>人付き合いに自信がない<br>かつての私もそうでした</p>
            <p>最高の好印象笑顔で自信を持ってチャンスをつかむ</p>
        </div>
    </section>

    <section>
        <h2>スマイルトレーナーとは？</h2>
        <p>
            笑顔あふれる人々を一気に広げたいという美有姫がスタートした独自の資格認定講座を合格した人達です。<br>
            美有姫たった一人の力では、世界中を笑顔にするトレーニングの手が足りないことをきっかけに、トレーナーとして一緒に笑顔あふれる世の中に貢献しています。<br>
            受講した人達がポジティブで幸せな生活を送る手助けをすることを目指す、それがスマイルトレーナーです。
        </p>
    </section>

    <section class="seminar" id = "detail">
        <h2>セミナーについて</h2>
        <div class="tabs">
            <input id="employee_training" type="radio" name="tab_item" checked/>
            <label class="tab_item" for="employee_training">新人研修</label>
            <input id="smile_training" type="radio" name="tab_item"  />
            <label class="tab_item" for="smile_training">スマイルトレーニング</label>
            <input id="hospitality" type="radio" name="tab_item" />
            <label class="tab_item" for="hospitality">ホスピタリティ</label>

            <div class="tab_content" id="training_content">
              <div class="tab_content_description">
                <img src="img/detail_1.jpg" alt="新人研修" />
            
                <p class="c-txtsp">第一印象は一度きり！
                印象の良い笑顔のやり方を知って、会って0.5秒でステキと思われたくないですか？
                どんな時でもできるように自分の顔のクセを発見して、一緒にトレーニングを積み重ねて改善しましょう。
                自分が笑っていると相手も笑ってくれます。
              </div>
        </div>
        <div class="tab_content" id="smile_content">
          <div class="tab_content_description">
            <p class="c-txtsp">プログラミングの内容がここに入ります</p>
          </div>
        </div>
        <div class="tab_content" id="hospitality_content">
          <div class="tab_content_description">
            <p class="c-txtsp">デザインの内容がここに入ります</p>
          </div>
        </div>
      </div>
    </section>
    
    <section>
        <h2>セミナーの感想</h2>
        <div>
            <p>従業員が楽しそうだった、最近忙しかったからあんなに笑っている顔を見ることができて嬉しいのでリフレッシュのために続けたい。</p>
        </div>
        <div>
            <p>印象は0.5秒という短い時間で決まるということなので、相手の方に良い印象を持っていただけるように心がけたいと思いました。</p>
        </div>
        <div>
            <p>先生がずっと笑顔で楽しそうに話していて、それを見ていたら楽しい気分になった。</p>
        </div>
        <div>
            <p>従業員が明るくなり、社内の雰囲気が良くなった。</p>
        </div>
    </section>

    <section>
        <h2>セミナー開始までの流れ</h2>
        <div class="scroll">
            <div>
                <p>STEP1</p>
                テストテキスト１<br>
                テストテキスト１<br>
                テストテキスト１<br>
                テストテキスト１<br>
                テストテキスト１<br>
                テストテキスト１<br>
            </div>
            <div>
                <p>STEP2</p>
                テストテキスト２<br>
                テストテキスト２<br>
                テストテキスト２<br>
                テストテキスト２<br>
                テストテキスト２<br>
                テストテキスト２<br>
            </div>
            <div>
                <p>STEP3</p>
                テストテキスト３<br>
                テストテキスト３<br>
                テストテキスト３<br>
                テストテキスト３<br>
                テストテキスト３<br>
                テストテキスト３<br>
            </div>
        </div>
        <p>SCROLL</p>
    </section>
    
    <footer>
        <p>工藤晴香 h.k smile office</p>
        <p>hksmileoffice@gmail.com</p>
        <p>000-0000-0000</p>
        <a href="">インスタ</a>
        <a href="">Facebook</a>
    </footer>
    <script src="js/script.js"></script>
</body>
</html>

