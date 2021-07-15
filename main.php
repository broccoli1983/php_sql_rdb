<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- main.cssファイルの読み込み -->
    <link rel="stylesheet" href="css/main.css">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <title>8COLOGY</title>
</head>

<body>
    <div>
        <nav>
            <ul>
                <li class="menu_top h6">
                    <a href="#section_top">TOP</a>
                </li>
                <li class="about h6">
                    <a href="#section_about">ABOUT</a>
                </li>
                <li class="infogra h6">
                    <a href="＃section_inf">INFOGRAPHICS</a>
                </li>
                <li class="activities h6">
                    <a href="#section_act">ACTIVITIES</a>
                </li>
                <li class="access h6">
                    <a href="#section_access">ACCESS</a>
                </li>
                <li class="contact h6">
                    <a href="#section_contact">CONTACT</a>
                </li>
            </ul>
        </nav>
    </div>
    <!-- <figure class="relative"> -->
    <div class="background">
        <img src="img/logo.png" alt="main">
    </div>
    <div class="login text-center">
        <button class="btn btn-success btn-block">
            <a href="todo_login.php" class="btn" style="color:forestgreen;">
                <span style="color: white;">LOGIN</span>
            </a>
        </button>
    </div>
    <div class="account text-center">
        <a href="todo_input.php">新規アカウント登録はこちら</a>
    </div>
    <!-- </figure> -->
    <div class="about">
        <section id="section_about">
            <h3 class=”text_title”><span style="color:forestgreen;">ABOUT</span></h3>
            <div class=”text_subtitle_about”>8COLOGYについて</div>
            <div class="text_title_details_about">
                <dl>
                    <dt>8COLOGYは、廃プラスチック削減を推進するサービスです。</dt>
                    <dd>世の中のもったいないをなくしたい。</dd>
                    <dd>ごみが少ない世界を作りたい。</dd>
                    <dd>大きな時代の変化の中で、廃プラスチックの再生資源化を推進していきたい。</dd>
                    <dd>そんな思いから、「8COLOGY」は歩みを始めています。</dd>
                    <dd>廃プラスチックの再生資源化はもちろんのこと、</dd>
                    <dd>エコ活動を推進するためのサービスを提供していきます。</dd>
                </dl>
            </div>
        </section>
    </div>
    <div class="infog">
        <section id="section_inf">
            <h3 class=”text_title”><span style="color:forestgreen;">INFOGRAPHICS</span></h3>
            <p>数字でみる8COLOGYの活動</p>
            <p>これまでに回収したプラスチック容器の重さは…</p>
            <h3><span style="color:forestgreen;" class="count">12345</span>kg</h3>
        </section>
    </div>
    <!-- <div class="act">
        <section id="section_act">
            <h3 class=”text_title”><span style="color: green;">ACTIVITIES</span></h3>
            <div class="text_title_details_act">
                <dl>
                    <dt>準備中</dt>
                </dl>
            </div>
        </section>
    </div> -->
    <!-- 数字のカウントアップjs -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $('.count').each(function() {
            $(this).prop('c', 0).animate({
                c: $(this).text()
            }, {
                duration: 3000,
                easing: 'linear',
                step: function(now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });
    </script>

</html>