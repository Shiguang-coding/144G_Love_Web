<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
  <?php include("plugin/config.php"); ?>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>个人网页制作_<?php echo htmlspecialchars(urldecode($title)); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="<?php echo htmlspecialchars(urldecode($title)); ?>是一款全自动在线网页制作工具，使用144G核心技术，国内顶尖自动化网页制作系统，只需选择模板一键生成即可。可制作一系列个人网页、表白网页、HTML5网页等等，人人都能做网页。" />
  <meta name="keywords" content="在线网页制作,个人网页制作,表白网页制作,祝福网页制作,免费网页制作,网页一键生成" />
  <!-- Animate.css -->
  <link rel="stylesheet" href="css/animate.css">
  <!-- Flexslider -->
  <link rel="stylesheet" href="css/flexslider.css">
  <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="css/icomoon.css">
  <!-- Magnific Popup -->
  <link rel="stylesheet" href="css/magnific-popup.css">
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <!-- Styleswitcher ( This style is for demo purposes only, you may delete this anytime. ) -->
  <link rel="stylesheet" id="theme-switch" href="css/style.css">
  <!-- End demo purposes only -->
  <!-- Modernizr JS -->
  <script src="js/modernizr-2.6.2.min.js"></script>
</head>

<body>
  <!-- Loader -->
  <div class="fh5co-loader"></div>
  <!--Baidu display logo-->
  <div class="dnone"><img width="121" src="images/nav-geren.jpg" alt="logo" /></div>
  <!--Baidu display logo END-->
  <div id="fh5co-page">
    <section id="fh5co-header">
      <div class="container">
        <nav role="navigation">
          <ul class="pull-left left-menu">
            <li><a href="biaobai.php">表白网页</a></li>
            <li class="active"><a href="geren.php">个人网页</a></li>
            <li><a href="quwei.php">趣味网页</a></li>
          </ul>
          <h1 id="fh5co-logo"><a href="./"><?php echo htmlspecialchars(urldecode($logo)); ?><span>.</span></a></h1>
          <ul class="pull-right right-menu">
            <li><a href="<?php echo htmlspecialchars(urldecode($right_top_url_1)); ?>"><?php echo htmlspecialchars(urldecode($right_top_title_1)); ?></a></li>
            <li class="fh5co-cta-btn"><a id="login" href="#" data-toggle="modal" data-target="#myModal">贵宾登录</a></li>
          </ul>
          <ul class="zhong dnone">
            <li><a href="./">返回首页</a></li>
          </ul>
        </nav>
      </div>
    </section>
    <!-- #fh5co-header -->
    <section id="fh5co-hero" class="no-js-fullheight" style="background-image: url(images/nav-geren.jpg);" data-next="yes">
      <div class="fh5co-overlay"></div>
      <div class="container">
        <div class="fh5co-intro no-js-fullheight">
          <div class="fh5co-intro-text">
            <div class="fh5co-center-position">
              <h2 class="animate-box">个人网页制作</h2>
              <h3 class="animate-box">Personal web page making</h3>
            </div>
          </div>
        </div>
      </div>
      <div class="fh5co-learn-more animate-box"> <a href="#" class="scroll-btn"> <span class="text">选择网页模板</span> <span class="arrow"><i class="icon-chevron-down"></i></span> </a> </div>
    </section>
    <!-- END #fh5co-hero -->
    <?php include("plugin/pd.php"); ?>
    <section id="fh5co-projects">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-6 col-xs-6 animate-box"><?php if (pdviptem('geren', 'geren_xingkongzhuye', $viptem)) echo '<a class="vippng" href="geren_xingkongzhuye/" target="_blank"></a>'; ?><a href="geren_xingkongzhuye/" class="fh5co-project-item" target="_blank"> <img src="images/loading.png" data-original="geren_xingkongzhuye/logo.png" alt="个人星空特效主页" class="img-responsive lazy">
              <div class="fh5co-text">
                <h2>个人星空特效主页</h2>
                <p>个人网页制作</p>
              </div>
            </a> </div>
          <div class="col-md-4 col-sm-6 col-xs-6 animate-box"><?php if (pdviptem('geren', 'geren_fazhanliucheng', $viptem)) echo '<a class="vippng" href="geren_fazhanliucheng/" target="_blank"></a>'; ?><a href="geren_fazhanliucheng/" class="fh5co-project-item" target="_blank"> <img src="images/loading.png" data-original="geren_fazhanliucheng/logo.png" alt="网站发展流程页面" class="img-responsive lazy">
              <div class="fh5co-text">
                <h2>网站发展流程页面</h2>
                <p>个人网页制作</p>
              </div>
            </a> </div>
          <div class="col-md-4 col-sm-6 col-xs-6 animate-box"> <?php if (pdviptem('geren', 'geren_chengxuyuanjs', $viptem)) echo '<a class="vippng" href="geren_chengxuyuanjs/" target="_blank"></a>'; ?><a href="geren_chengxuyuanjs/" class="fh5co-project-item" target="_blank"><img src="images/loading.png" data-original="geren_chengxuyuanjs/logo.png" alt="程序猿滚动介绍页" class="img-responsive lazy">
              <div class="fh5co-text">
                <h2>程序猿滚动介绍页</h2>
                <p>个人网页制作</p>
              </div>
            </a> </div>
          <div class="col-md-4 col-sm-6 col-xs-6 animate-box"> <?php if (pdviptem('geren', 'geren_liuxingzhuye', $viptem)) echo '<a class="vippng" href="geren_liuxingzhuye/" target="_blank"></a>'; ?><a href="geren_liuxingzhuye/" class="fh5co-project-item" target="_blank"><img src="images/loading.png" data-original="geren_liuxingzhuye/logo.png" alt="流星个人主页" class="img-responsive lazy">
              <div class="fh5co-text">
                <h2>流星个人主页</h2>
                <p>个人网页制作</p>
              </div>
            </a> </div>
          <div class="col-md-4 col-sm-6 col-xs-6 animate-box"> <?php if (pdviptem('geren', 'geren_jianyuejieshao', $viptem)) echo '<a class="vippng" href="geren_jianyuejieshao/" target="_blank"></a>'; ?><a href="geren_jianyuejieshao/" class="fh5co-project-item" target="_blank"><img src="images/loading.png" data-original="geren_jianyuejieshao/logo.png" alt="简约个人介绍页" class="img-responsive lazy">
              <div class="fh5co-text">
                <h2>简约个人介绍页</h2>
                <p>个人网页制作</p>
              </div>
            </a> </div>
          <div class="col-md-4 col-sm-6 col-xs-6 animate-box"><?php if (pdviptem('geren', 'geren_litikongjian', $viptem)) echo '<a class="vippng" href="geren_litikongjian/" target="_blank"></a>'; ?><a href="geren_litikongjian/" class="fh5co-project-item" target="_blank"><img src="images/loading.png" data-original="geren_litikongjian/logo.png" alt="炫酷立体空间主页" class="img-responsive lazy">
              <div class="fh5co-text">
                <h2>炫酷立体空间主页</h2>
                <p>个人网页制作</p>
              </div>
            </a> </div>
          <div class="col-md-4 col-sm-6 col-xs-6 animate-box"><?php if (pdviptem('geren', 'geren_wenzijianxian', $viptem)) echo '<a class="vippng" href="geren_wenzijianxian/" target="_blank"></a>'; ?><a href="geren_wenzijianxian/" class="fh5co-project-item" target="_blank"><img src="images/loading.png" data-original="geren_wenzijianxian/logo.png" alt="文字渐显主页" class="img-responsive lazy">
              <div class="fh5co-text">
                <h2>文字渐显主页</h2>
                <p>个人网页制作</p>
              </div>
            </a> </div>
          <div class="col-md-4 col-sm-6 col-xs-6 animate-box"><?php if (pdviptem('geren', 'geren_jianyuexingkong', $viptem)) echo '<a class="vippng" href="geren_jianyuexingkong/" target="_blank"></a>'; ?><a href="geren_jianyuexingkong/" class="fh5co-project-item" target="_blank"><img src="images/loading.png" data-original="geren_jianyuexingkong/logo.png" alt="简约星空主页" class="img-responsive lazy">
              <div class="fh5co-text">
                <h2>简约星空主页</h2>
                <p>个人网页制作</p>
              </div>
            </a> </div>
          <div class="col-md-4 col-sm-6 col-xs-6 animate-box"><?php if (pdviptem('geren', 'geren_fensepiaoye', $viptem)) echo '<a class="vippng" href="geren_fensepiaoye/" target="_blank"></a>'; ?><a href="geren_fensepiaoye/" class="fh5co-project-item" target="_blank"><img src="images/loading.png" data-original="geren_fensepiaoye/logo.png" alt="粉色飘叶个人主页" class="img-responsive lazy">
              <div class="fh5co-text">
                <h2>粉色飘叶个人主页</h2>
                <p>个人网页制作</p>
              </div>
            </a> </div>
          <div class="col-md-4 col-sm-6 col-xs-6 animate-box"><?php if (pdviptem('geren', 'geren_guangxian', $viptem)) echo '<a class="vippng" href="geren_guangxian/" target="_blank"></a>'; ?><a href="geren_guangxian/" class="fh5co-project-item" target="_blank"> <img src="images/loading.png" data-original="geren_guangxian/logo.png" alt="炫酷滑动光线主页" class="img-responsive lazy">
              <div class="fh5co-text">
                <h2>炫酷滑动光线主页</h2>
                <p>个人网页制作</p>
              </div>
            </a> </div>
          <div class="col-md-4 col-sm-6 col-xs-6 animate-box"><?php if (pdviptem('geren', 'geren_yindaoye', $viptem)) echo '<a class="vippng" href="geren_yindaoye/" target="_blank"></a>'; ?><a href="geren_yindaoye/" class="fh5co-project-item" target="_blank"> <img src="images/loading.png" data-original="geren_yindaoye/logo.png" alt="个性引导页" class="img-responsive lazy">
              <div class="fh5co-text">
                <h2>个性引导页</h2>
                <p>个人网页制作</p>
              </div>
            </a> </div>
          <div class="col-md-4 col-sm-6 col-xs-6 animate-box"><?php if (pdviptem('geren', 'geren_yewuwang', $viptem)) echo '<a class="vippng" href="geren_yewuwang/" target="_blank"></a>'; ?><a href="geren_yewuwang/" class="fh5co-project-item" target="_blank"> <img src="images/loading.png" data-original="geren_yewuwang/logo.png" alt="个人业务网" class="img-responsive lazy">
              <div class="fh5co-text">
                <h2>个人业务网</h2>
                <p>个人网页制作</p>
              </div>
            </a> </div>
          <div class="col-md-4 col-sm-6 col-xs-6 animate-box"><?php if (pdviptem('geren', 'geren_dianyayewu', $viptem)) echo '<a class="vippng" href="geren_dianyayewu/" target="_blank"></a>'; ?><a href="geren_dianyayewu/" class="fh5co-project-item" target="_blank"> <img src="images/loading.png" data-original="geren_dianyayewu/logo.png" alt="典雅业务网" class="img-responsive lazy">
              <div class="fh5co-text">
                <h2>典雅业务网</h2>
                <p>个人网页制作</p>
              </div>
            </a> </div>
          <div class="col-md-4 col-sm-6 col-xs-6 animate-box"><?php if (pdviptem('geren', 'geren_dontaibeijing', $viptem)) echo '<a class="vippng" href="geren_dontaibeijing/" target="_blank"></a>'; ?><a href="geren_dontaibeijing/" class="fh5co-project-item" target="_blank"> <img src="images/loading.png" data-original="geren_dontaibeijing/logo.png" alt="炫酷动态背景主页" class="img-responsive lazy">
              <div class="fh5co-text">
                <h2>炫酷动态背景主页</h2>
                <p>个人网页制作</p>
              </div>
            </a> </div>
          <div class="col-md-4 col-sm-6 col-xs-6 animate-box"><?php if (pdviptem('geren', 'geren_xinkejizhuye', $viptem)) echo '<a class="vippng" href="geren_xinkejizhuye/" target="_blank"></a>'; ?><a href="geren_xinkejizhuye/" class="fh5co-project-item" target="_blank"> <img src="images/loading.png" data-original="geren_xinkejizhuye/logo.png" alt="新科技个人主页" class="img-responsive lazy">
              <div class="fh5co-text">
                <h2>新科技个人主页</h2>
                <p>个人网页制作</p>
              </div>
            </a> </div>
          <div class="col-md-4 col-sm-6 col-xs-6 animate-box"><?php if (pdviptem('geren', 'geren_jianyueshoutu', $viptem)) echo '<a class="vippng" href="geren_jianyueshoutu/" target="_blank"></a>'; ?><a href="geren_jianyueshoutu/" class="fh5co-project-item" target="_blank"> <img src="images/loading.png" data-original="geren_jianyueshoutu/logo.png" alt="简约个人收徒网" class="img-responsive lazy">
              <div class="fh5co-text">
                <h2>简约个人收徒网</h2>
                <p>个人网页制作</p>
              </div>
            </a> </div>
          <div class="col-md-4 col-sm-6 col-xs-6 animate-box"><?php if (pdviptem('geren', 'geren_shoutuwang', $viptem)) echo '<a class="vippng" href="geren_shoutuwang/" target="_blank"></a>'; ?><a href="geren_shoutuwang/" class="fh5co-project-item" target="_blank"> <img src="images/loading.png" data-original="geren_shoutuwang/logo.png" alt="个人收徒网页" class="img-responsive lazy">
              <div class="fh5co-text">
                <h2>个人收徒网页</h2>
                <p>个人网页制作</p>
              </div>
            </a> </div>
          <div class="col-md-4 col-sm-6 col-xs-6 animate-box"><?php if (pdviptem('geren', 'geren_jianyuewangye', $viptem)) echo '<a class="vippng" href="geren_jianyuewangye/" target="_blank"></a>'; ?><a href="geren_jianyuewangye/" class="fh5co-project-item" target="_blank"> <img src="images/loading.png" data-original="geren_jianyuewangye/logo.png" alt="简约个人网页" class="img-responsive lazy">
              <div class="fh5co-text">
                <h2>简约个人网页</h2>
                <p>个人网页制作</p>
              </div>
            </a> </div>
          <div class="col-md-4 col-sm-6 col-xs-6 animate-box"><?php if (pdviptem('geren', 'geren_heikezhuye', $viptem)) echo '<a class="vippng" href="geren_heikezhuye/" target="_blank"></a>'; ?><a href="geren_heikezhuye/" class="fh5co-project-item" target="_blank"> <img src="images/loading.png" data-original="geren_heikezhuye/logo.png" alt="个人黑客主页" class="img-responsive lazy">
              <div class="fh5co-text">
                <h2>个人黑客主页</h2>
                <p>个人网页制作</p>
              </div>
            </a> </div>
          <div class="col-md-4 col-sm-6 col-xs-6 animate-box"><?php if (pdviptem('geren', 'geren_heikelizizhuye', $viptem)) echo '<a class="vippng" href="geren_heikelizizhuye/" target="_blank"></a>'; ?><a href="geren_heikelizizhuye/" class="fh5co-project-item" target="_blank"> <img src="images/loading.png" data-original="geren_heikelizizhuye/logo.png" alt="粒子特效黑客主页" class="img-responsive lazy">
              <div class="fh5co-text">
                <h2>粒子特效黑客主页</h2>
                <p>个人网页制作</p>
              </div>
            </a> </div>
          <div class="col-md-4 col-sm-6 col-xs-6 animate-box"><?php if (pdviptem('geren', 'geren_heiketouying', $viptem)) echo '<a class="vippng" href="geren_heiketouying/" target="_blank"></a>'; ?><a href="geren_heiketouying/" class="fh5co-project-item" target="_blank"> <img src="images/loading.png" data-original="geren_heiketouying/logo.png" alt="黑客投影个人主页" class="img-responsive lazy">
              <div class="fh5co-text">
                <h2>黑客投影个人主页</h2>
                <p>个人网页制作</p>
              </div>
            </a> </div>
          <div class="col-md-4 col-sm-6 col-xs-6 animate-box"> <?php if (pdviptem('geren', 'geren_huisejianyue', $viptem)) echo '<a class="vippng" href="geren_huisejianyue/" target="_blank"></a>'; ?><a href="geren_huisejianyue/" class="fh5co-project-item" target="_blank"><img src="images/loading.png" data-original="geren_huisejianyue/logo.png" alt="灰色简约主页" class="img-responsive lazy">
              <div class="fh5co-text">
                <h2>灰色简约主页</h2>
                <p>个人网页制作</p>
              </div>
            </a> </div>
          <div class="col-md-4 col-sm-6 col-xs-6 animate-box"><?php if (pdviptem('geren', 'geren_huoyanzi', $viptem)) echo '<a class="vippng" href="geren_huoyanzi/" target="_blank"></a>'; ?><a href="geren_huoyanzi/" class="fh5co-project-item" target="_blank"><img src="images/loading.png" data-original="geren_huoyanzi/logo.png" alt="简约星空主页" class="img-responsive lazy">
              <div class="fh5co-text">
                <h2>火焰字引导页</h2>
                <p>个人网页制作</p>
              </div>
            </a> </div>
          <div class="col-md-4 col-sm-6 col-xs-6 animate-box"><?php if (pdviptem('geren', 'geren_kulutouzhuye', $viptem)) echo '<a class="vippng" href="geren_kulutouzhuye/" target="_blank"></a>'; ?><a href="geren_kulutouzhuye/" class="fh5co-project-item" target="_blank"> <img src="images/loading.png" data-original="geren_kulutouzhuye/logo.png" alt="骷髅头个人主页" class="img-responsive lazy">
              <div class="fh5co-text">
                <h2>骷髅头个人主页</h2>
                <p>个人网页制作</p>
              </div>
            </a> </div>
          <div class="col-md-4 col-sm-6 col-xs-6 animate-box"><?php if (pdviptem('geren', 'geren_kongjianyindao', $viptem)) echo '<a class="vippng" href="geren_kongjianyindao/" target="_blank"></a>'; ?><a href="geren_kongjianyindao/" class="fh5co-project-item" target="_blank"> <img src="images/loading.png" data-original="geren_kongjianyindao/logo.png" alt="炫酷空间引导页" class="img-responsive lazy">
              <div class="fh5co-text">
                <h2>炫酷空间引导页</h2>
                <p>个人网页制作</p>
              </div>
            </a> </div>
          <div class="col-md-4 col-sm-6 col-xs-6 animate-box"><?php if (pdviptem('geren', 'geren_tuanduijieshao', $viptem)) echo '<a class="vippng" href="geren_tuanduijieshao/" target="_blank"></a>'; ?><a href="geren_tuanduijieshao/" class="fh5co-project-item" target="_blank"> <img src="images/loading.png" data-original="geren_tuanduijieshao/logo.png" alt="工作室团队介绍" class="img-responsive lazy">
              <div class="fh5co-text">
                <h2>工作室团队介绍</h2>
                <p>个人网页制作</p>
              </div>
            </a> </div>
          <div class="col-md-4 col-sm-6 col-xs-6 animate-box"><?php if (pdviptem('geren', 'geren_yinyuewang', $viptem)) echo '<a class="vippng" href="geren_yinyuewang/" target="_blank"></a>'; ?><a href="geren_yinyuewang/" class="fh5co-project-item" target="_blank"> <img src="images/loading.png" data-original="geren_yinyuewang/logo.png" alt="个性音乐网" class="img-responsive lazy">
              <div class="fh5co-text">
                <h2>个性音乐网</h2>
                <p>个人网页制作</p>
              </div>
            </a> </div>
        </div>
      </div>
    </section>
    <!-- END #fh5co-projects -->
    <footer id="fh5co-footer">
      <div class="container">
        <div class="row row-bottom-padded-md">
          <div class="col-md-3 col-sm-6 col-xs-12 animate-box">
            <div class="fh5co-footer-widget">
              <h3>模板分类</h3>
              <ul class="fh5co-links">
                <li><a href="biaobai.php" target="_blank">表白网页制作</a></li>
                <li><a href="geren.php" target="_blank">个人网页制作</a></li>
                <li><a href="quwei.php" target="_blank">趣味网页制作</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12 animate-box">
            <div class="fh5co-footer-widget">
              <h3>技术支持</h3>
              <ul class="fh5co-links">
                <li><a href="tupian.php" target="_blank">图片外链</a></li>
                <li><a href="yinyue.php" target="_blank">音乐外链</a></li>
                <li><a href="liuyan.php" target="_blank">留言反馈</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12 animate-box">
            <div class="fh5co-footer-widget">
              <h3>友情连接</h3>
              <ul class="fh5co-links">
                <?php if ($friend_1 == 'true') echo '<li><a href="' . htmlspecialchars(urldecode($friend_url_1)) . '" target="_blank">' . htmlspecialchars(urldecode($friend_name_1)) . '</a></li>'; ?>
                <?php if ($friend_2 == 'true') echo '<li><a href="' . htmlspecialchars(urldecode($friend_url_2)) . '" target="_blank">' . htmlspecialchars(urldecode($friend_name_2)) . '</a></li>'; ?>
                <?php if ($friend_3 == 'true') echo '<li><a href="' . htmlspecialchars(urldecode($friend_url_3)) . '" target="_blank">' . htmlspecialchars(urldecode($friend_name_3)) . '</a></li>'; ?>
              </ul>
            </div>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-12 animate-box">
            <div class="fh5co-footer-widget">
              <h3>关于我们</h3>
              <ul class="fh5co-links">
                <li>QQ: <a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo htmlspecialchars(urldecode($qq)); ?>&site=qq&menu=yes" target="_blank" title="QQ：<?php echo htmlspecialchars(urldecode($qq)); ?>"><?php echo htmlspecialchars(urldecode($qq)); ?></a></li>
                <li>E-mail: <a href="mailto:<?php echo htmlspecialchars(urldecode($email)); ?>" target="_blank" title="E-mail：<?php echo htmlspecialchars(urldecode($email)); ?>"><?php echo htmlspecialchars(urldecode($email)); ?></a></li>
                <li>Github: <a href="https://github.com/<?php echo htmlspecialchars(urldecode($github)); ?>" target="_blank" title="Github: https://github.com/<?php echo htmlspecialchars(urldecode($github)); ?>"><?php echo htmlspecialchars(urldecode($github)); ?></a></li>
              </ul>

              <!--  
            QQ：<a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo htmlspecialchars(urldecode($qq)); ?>&site=qq&menu=yes" target="_blank" title="QQ号：<?php echo htmlspecialchars(urldecode($qq)); ?>"><?php echo htmlspecialchars(urldecode($qq)); ?></a><br><br>
            E-mail：<a href="mailto:<?php echo htmlspecialchars(urldecode($email)); ?>"><?php echo htmlspecialchars(urldecode($email)); ?></a>
            -->

            </div>
          </div>
          <!-- 二维码 
        <div class="col-md-3 col-sm-6 col-xs-12 animate-box">
          <div class="fh5co-footer-widget">
            <h3>二维码</h3>
            <div class="col-md-8 col-sm-6 col-xs-4">
            	<img src="<?php echo htmlspecialchars(urldecode($footewm)); ?>" class="img-thumbnail img-responsive">
            </div>
          </div>
        </div>
        -->
        </div>
      </div>
      <div class="fh5co-copyright animate-box">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <p class="fh5co-left"><small>&copy; 2024 <a href="./" target="_blank"><?php echo htmlspecialchars(urldecode($title)); ?></a> Corporation.&nbsp;<?php echo urldecode($tonji); ?></small></p>
              <p class="fh5co-right"><small class="fh5co-right"><a><?php echo htmlspecialchars(urldecode($right_foot)); ?></a></small></p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- END #fh5co-footer -->
  </div>
  <!-- END #fh5co-page -->
  <!-- End demo purposes only -->
  <!-- VIP membership system -->
  <script src="js/vip.js"></script>
  <!-- jQuery -->
  <script src="js/jquery.min.js"></script>
  <!-- jQuery Easing -->
  <script src="js/jquery.easing.1.3.js"></script>
  <!-- jQuery lazyload -->
  <script src="js/jquery.lazyload.js"></script>
  <script type="text/javascript">
    $(function() {
      $("img.lazy").lazyload();
    });
  </script>
  <!-- Bootstrap -->
  <script src="js/bootstrap.min.js"></script>
  <!-- Waypoints -->
  <script src="js/jquery.waypoints.min.js"></script>
  <!-- Flexslider -->
  <script src="js/jquery.flexslider-min.js"></script>
  <!-- Magnific Popup -->
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/magnific-popup-options.js"></script>
  <!-- For demo purposes only styleswitcher ( You may delete this anytime ) -->
  <script src="js/jquery.style.switcher.js"></script>
  <!-- Main JS (Do not remove) -->
  <script src="js/main.js"></script>
  <script src="js/jquery.cookie.js"></script>
  <script>
    $(function() {

      if ($.cookie('layoutCookie') != '') {
        $('body').addClass($.cookie('layoutCookie'));
      }

      $('a[data-layout="boxed"]').click(function(event) {
        event.preventDefault();
        $.cookie('layoutCookie', 'boxed', {
          expires: 7,
          path: '/'
        });
        $('body').addClass($.cookie('layoutCookie')); // the value is boxed.
      });

      $('a[data-layout="wide"]').click(function(event) {
        event.preventDefault();
        $('body').removeClass($.cookie('layoutCookie')); // the value is boxed.
        $.removeCookie('layoutCookie', {
          path: '/'
        }); // remove the value of our cookie 'layoutCookie'
      });
    });
  </script>
  <!-- 模态框（Modal） -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content logintc">
        <ul id="myTab" class="nav nav-tabs">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
          <li class="active"> <a href="#gblogin" data-toggle="tab"><span class="glyphicon glyphicon-user"></span>贵宾登录</a> </li>
          <li><a href="#update" data-toggle="tab"><span class="glyphicon glyphicon-cog"></span>修改密码</a></li>
        </ul>
        <div id="myTabContent" class="tab-content">
          <div class="tab-pane fade in active" id="gblogin">
            <div class="modal-body">
              <div class="row">
                <form method="post" action="plugin/vip.php">
                  <input type="hidden" name="login" value="1" />
                  <div class="col-md-12">
                    <div class="form-group">
                      <input id="username" name="username" type="text" class="form-control" maxlength="20" placeholder="请输入登录账号" required />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <input id="password" name="password" type="password" class="form-control" placeholder="请输入登录密码" maxlength="30" required />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="baoliu">
                        <input type="checkbox" name="loginbl">登入保留一星期
                      </label>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <input type="button" class="btn btn-default" onclick="window.open('zhuce.php','_blank')" value="注册账户" />
                      <input type="submit" class="btn btn-primary" value="立即登录" />
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="update">
            <div class="modal-body">
              <div class="row">
                <form method="post" action="plugin/vip.php">
                  <input type="hidden" name="update" value="1" />
                  <div class="col-md-12">
                    <div class="form-group">
                      <input id="username" name="username" type="text" class="form-control" maxlength="20" placeholder="请输入账号" required />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <input id="password" name="password" type="password" class="form-control" placeholder="请输入旧密码" maxlength="30" required />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <input id="newpassword" name="newpassword" type="password" class="form-control" placeholder="请输入新密码" maxlength="30" required />
                      <span class="help-block text-center">（小提示：密码忘记将无法找回，请慎重设置。）</span>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <input type="submit" class="btn btn-primary" value="立即修改" />
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">关闭窗口</button>
        </div>
      </div>
    </div>
  </div>
</body>

</html>