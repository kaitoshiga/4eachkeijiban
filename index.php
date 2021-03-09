<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>4eachblog 掲示板</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    
    <body>
        <div class="box1">
            <img src="./4eachblog_logo.jpg">
        </div>
        
        <header>
            <ul>
                <li>トップ</li>
                <li>プロフィール</li>
                <li>4eachについて</li>
                <li>登録フォーム</li>
                <li>問い合わせ</li>
                <li>その他</li><br>
            </ul>
        </header>
        <main>
            <div class="main-container">
                <div class="left">
                    <h1>プログラミングに役立つ掲示板</h1>
                        <form method = "post" action = "insert.php">
                            <h2>入力フォーム</h2>
                            <div>
                                <label>ハンドルネーム</label>
                                <br>
                                <input type = "text" class = "text" size = "35" name = "handlename">
                            </div>
            
                            <div>
                                <label>タイトル</label>
                                <br>
                                <input type = "text" class = "text" size = "35" name = "title">
                            </div>
            
                            <div>
                                <label>コメント</label>
                                <br>
                                <textarea cols = "35" rows = "7" name = "comments"></textarea>
                            </div>
            
                            <div>
                                <input type = "submit" class = "submit" value = "送信する">
                            </div>
                        </form>        
                    
                </div>
                <div class="right">
                    <h2>人気の記事</h2><br>
                    <a href="https://programmer-japan.com/bookforphp/">
                        <p>PHPオススメ本</p>
                    </a>
                    <a href="https://www.dbonline.jp/phpmyadmin/">
                        <p>PHP　MyAdminの使い方</p>
                    </a>
                    <a href="https://www.pasonatech.co.jp/workstyle/column/detail.html?p=2459">
                        <p>今人気のエディタ TOP5</p>
                    </a>
                    <a href="https://developer.mozilla.org/ja/docs/Learn/Getting_started_with_the_web/HTML_basics">
                        <p>HTMLの基礎</p>
                    </a>
                    <h2>オススメリンク</h2><br>
                    <a href="https://www.internous.co.jp/">
                        <p>インターノウス株式会社</p>
                    </a>
                    <a href="https://www.apachefriends.org/jp/index.html">
                        <p>XAMPPのダウンロード</p>
                    </a>
                    <a href="https://www.eclipse.org/">
                        <p>Eclipseのダウンロード</p>
                    </a>
                    <a href="http://brackets.io/">
                        <p>Bracketsのダウンロード</p>
                    </a>
                    <h2>カテゴリ</h2><br>
                    <p>HTML</p>
                    <p>PHP</p>
                    <p>MySQL</p>
                    <p>JavaScript</p>
                </div>                
            </div>
        </main>
        <footer>
             copyright　(c) internous | 4each blog the which provides A to Z programming
        </footer> 
    </body>
</html>