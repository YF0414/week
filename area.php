<?php
include 'define.php';
?>
<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>
<meta name="description" content="" >
<meta name='robots' content='max-image-preview:large' />
<link rel="canonical" href="">
<meta property="og:url" content="">
<meta property="og:type" content="article">
<meta property="og:title" content="">
<meta property="og:description" content="">
<meta property="og:site_name" content="">
<meta property="og:image" content="">
<meta name="twitter:card" content="" />
<meta name="twitter:site" content="" />
<meta name="twitter:title" content="">
<meta name="twitter:description" content="">
<meta name="twitter:image" content="" />
<?php
$loc_href = '.';
$inc_path = $_SERVER["DOCUMENT_ROOT"].'/assets';
$com_href = '/assets';

include $inc_path .'/inc/head.php';
?>
<body>
<div class="container">
  <?php include $inc_path .'/inc/side_left.php';?>
  <div class="content">
    <?php include $inc_path .'/inc/header.php';?>


<div class="prof_cal">
  <div class="prof_item_cal"><img src="https://oil-mafia.com/profile_images/images_one_Y3aXUYwHRLSFDljPeE9y1705943123.jpg" alt=""></div>
  <div class="prof_item_cal"><img src="https://oil-mafia.com/profile_images/images_one_gqUWouLpvvZCTRTaDeYx1706025418.jpg" alt=""></div>
  <div class="prof_item_cal"><img src="https://oil-mafia.com/profile_images/images_one_hiOneWyXfLKNoy6Dbon41706092384.jpg" alt=""></div>
  <div class="prof_item_cal"><img src="https://oil-mafia.com/profile_images/images_one_Y3aXUYwHRLSFDljPeE9y1705943123.jpg" alt=""></div>
  <div class="prof_item_cal"><img src="https://oil-mafia.com/profile_images/images_one_gqUWouLpvvZCTRTaDeYx1706025418.jpg" alt=""></div>
</div>

    <h1 class="big_h2">都道府県エリア名</h1>
    <div class="in_box">
      <!-- in_box -->
      <div class="button-container">
        <button class="material-button push">
          <span class="button-text">ALL</span>
        </button>
        <button class="material-button">
          <span class="button-text">新大阪/十三</span>
        </button>
        <button class="material-button">
          <span class="button-text">梅田/北新地</span>
        </button>
        <button class="material-button">
          <span class="button-text">堺筋本町</span>
        </button>
        <button class="material-button">
          <span class="button-text">長堀橋/心斎橋</span>
        </button>
        <button class="material-button">
          <span class="button-text">日本橋/難波</span>
        </button>
        <button class="material-button">
          <span class="button-text">谷九/天王寺</span>
        </button>
        <button class="material-button">
          <span class="button-text">堺市/その他</span>
        </button>
        <button class="material-button">
          <span class="button-text">出張</span>
        </button>
      </div>
    </div>
    <!-- in_box -->


    <div class="timeline_story">
      <div class="story-container">
        <div class="story-item">
          <a href="shop.php">
            <img src="<?=$com_href?>/img/243.jpg" alt="Story1">
          </a>
          <span class="story-name">店舗名</span>
        </div>
        <div class="story-item">
          <a href="shop.php">
            <img src="<?=$com_href?>/img/Firstclass.jpg" alt="Story3">
          </a>
          <span class="story-name">店舗名</span>
        </div>
        <div class="story-item">
          <a href="shop.php">
            <img src="<?=$com_href?>/img/images_one_Y3aXUYwHRLSFDljPeE9y1705943123.jpg" alt="Story2">
          </a>
          <span class="story-name">店舗名</span>
        </div>
        <div class="story-item">
          <a href="shop.php">
            <img src="<?=$com_href?>/img/flow.jpg" alt="Story4">
          </a>
          <span class="story-name">店舗名</span>
        </div>
        <div class="story-item">
          <a href="shop.php">
            <img src="<?=$com_href?>/img/022823481599.jpg" alt="Story5">
          </a>
          <span class="story-name">店舗名</span>
        </div>
        <div class="story-item">
          <a href="shop.php">
            <img src="<?=$com_href?>/img/nakajyou13.jpg" alt="Story1">
          </a>
          <span class="story-name">店舗名</span>
        </div>
        <div class="story-item">
          <a href="shop.php">
            <img src="<?=$com_href?>/img/1702814316_1471225.jpg" alt="Story3">
          </a>
          <span class="story-name">店舗名</span>
        </div>
        <div class="story-item">
          <a href="shop.php">
            <img src="<?=$com_href?>/img/caca.jpg" alt="Story2">
          </a>
          <span class="story-name">店舗名</span>
        </div>
        <div class="story-item">
          <a href="shop.php">
            <img src="<?=$com_href?>/img/1T1caSjNbkvw.jpg" alt="Story4">
          </a>
          <span class="story-name">店舗名</span>
        </div>
        <div class="story-item">
          <a href="shop.php">
            <img src="<?=$com_href?>/img/cullinan.png" alt="Story5">
          </a>
          <span class="story-name">店舗名</span>
        </div>
        <!-- 追加のアイテムをここに追加 -->
      </div>
    </div>




    <div class="tabs">
      <input id="all" type="radio" name="tab_item" checked>
      <label class="tab_item" for="all">出勤一覧</label>
      <input id="programming" type="radio" name="tab_item">
      <label class="tab_item" for="programming">お知らせ</label>
      <input id="design" type="radio" name="tab_item">
      <label class="tab_item" for="design">店舗一覧</label>
      <div class="tab_content" id="all_content">

        <div class="box-004 box-004_down">
          <p>出勤はAM7:00に切り替わります</p>
        </div>

        <div class="daynavi">
          <button class="day-button current">
            <p><span class="month">4/</span>30<br>
            (火)</p>
          </button>
          <button class="day-button">
            <p><span class="month">5/</span>1<br>
          	(水)</p>
          </button>
          <button class="day-button">
            <p><span class="month">5/</span>2<br>
          	(木)</p>
          </button>
          <button class="day-button">
            <p><span class="month">5/</span>3<br>
          	(金)</p>
          </button>
          <button class="day-button">
            <p><span class="month">5/</span>4<br>
          	<span class="satd">(土)</span></p>
          </button>
          <button class="day-button">
            <p><span class="month">5/</span>5<br>
          	<span class="sund">(日)</span></p>
          </button>
          <button class="day-button">
            <p><span class="month">5/</span>6<br>
          	(月)</p>
          </button>
        	</div>


        <div class="Edit__commonPanelRow">
          <div class="Edit__commonPanelConditions">
            <label class="_checkboxLabel">
              <input class="_checkbox" type="checkbox" @click="changeTimeToAll" :checked="selectTime.includes('ALL')" checked>
              <span>ALL</span>
            </label>
            <label class="_checkboxLabel">
              <input class="_checkbox" type="checkbox" @click="changeTime('s9e18')" :checked="selectTime.includes('s9e18')">
              <span>9:00〜18:00</span>
            </label>
            <label class="_checkboxLabel">
              <input class="_checkbox" type="checkbox" @click="changeTime('s18e24')" :checked="selectTime.includes('s18e24')">
              <span>18:00〜0:00</span>
            </label>
            <label class="_checkboxLabel">
              <input class="_checkbox" type="checkbox" @click="changeTime('s24e29')" :checked="selectTime.includes('s24e29')">
              <span>0:00〜5:00</span>
            </label>
          </div>
        </div>


        <div class="container_photo">
          <div class="grid-item_photo">
            <a data-micromodal-trigger="remodal_prof_modal">
              <img src="<?=$com_href?>/img/samp01.jpg" loading="lazy">
            </a>
            <p>11:00-18:00
            <br>名前 / 年齢
            </p>
          </div>
          <div class="grid-item_photo">
            <a data-micromodal-trigger="remodal_prof_modal">
              <img src="<?=$com_href?>/img/samp02.jpg" oading="lazy">
            </a>
            <p>12:00-19:00
            <br>名前 / 年齢
            </p>
          </div>
          <div class="grid-item_photo">
            <a data-micromodal-trigger="remodal_prof_modal">
              <img src="<?=$com_href?>/img/samp03.jpg" loading="lazy">
            </a>
            <p>13:00-20:00
            <br>名前 / 年齢
            </p>
          </div>
          <div class="grid-item_photo">
            <a data-micromodal-trigger="remodal_prof_modal">
              <img src="<?=$com_href?>/img/samp01.jpg" loading="lazy">
            </a>
            <p>14:00-21:00
            <br>名前 / 年齢
            </p>
          </div>
          <div class="grid-item_photo">
            <a data-micromodal-trigger="remodal_prof_modal">
              <img src="<?=$com_href?>/img/samp02.jpg" oading="lazy">
            </a>
            <p>15:00-22:00
            <br>名前 / 年齢
            </p>
          </div>
          <div class="grid-item_photo">
            <a data-micromodal-trigger="remodal_prof_modal">
              <img src="<?=$com_href?>/img/samp03.jpg" loading="lazy">
            </a>
            <p>16:00-23:00
            <br>名前 / 年齢
            </p>
          </div>
          <div class="grid-item_photo">
            <a data-micromodal-trigger="remodal_prof_modal">
              <img src="<?=$com_href?>/img/samp01.jpg" loading="lazy">
            </a>
            <div class="table_pos_item">
              <p class="out_time">本日終了
              </p>
            </div>
            <p>11:00-16:00
            <br>名前 / 年齢
            </p>
          </div>
          <div class="grid-item_photo">
            <a data-micromodal-trigger="remodal_prof_modal">
              <img src="<?=$com_href?>/img/samp02.jpg" oading="lazy">
            </a>
            <div class="table_pos_item">
              <p class="out_time">本日終了
              </p>
            </div>
            <p>12:00-18:00
            <br>名前 / 年齢
            </p>
          </div>
        </div>

<div id="btn_next_post" class="load_bt_box">
    <button class="load_bt" onclick="nextPagePostByArea()">更に読み込む</button>
</div>

        <p style="text-align:center;">
        <i class="fa-sharp fa-light fa-loader fa-spin fa-3x fa-fw"></i>
        </p>

      </div>
      <!-- tab -->
      <div class="tab_content" id="programming_content">

        <div class="timeline">
          <div class="tweet">
            <div class="profile-card_mp">
              <div class="avatar-container_mp_story">
                <a href="shop.php">
                  <img class="avatar-icon_mp" src="<?=$com_href?>/img/8993466.jpg" loading="lazy" alt="Avatar Icon">
                </a>
              </div>
              <div class="content_mp">
                <h2 class="user-name_mp">
                  <a href="shop.php">店舗名</a>
                </h2>
                <p class="user-bio_mp">エリア名
                <span class="time_txt">1月25日 21:51</span>
                </p>
              </div>
            </div>
            <div class="body_txt">
              <a href="shop.php">
                <p>お店が管理画面から投稿したニューステキストが入る。お店が管理画面から投稿したニューステキストが入る。お店が管理画面から投稿したニューステキストが入る。お店が管理画面から投稿したニューステキストが入る。お店が管理画面から投稿したニューステキストが入る。お店が管理画面から投稿したニューステキストが入る。お店が管理画面から投稿したニューステキストが入る。
                <br>
                <br>お店が管理画面から投稿したニューステキストが入る。お店が管理画面から投稿したニューステキストが入る。
                </p>
                <img src="<?=$com_href?>/img/8993466.jpg">
              </a>
            </div>
          </div>
          <div class="tweet">
            <div class="profile-card_mp">
              <div class="avatar-container_mp_story">
                <a href="shop.php">
                  <img class="avatar-icon_mp" src="<?=$com_href?>/img/8993466.jpg" loading="lazy" alt="Avatar Icon">
                </a>
              </div>
              <div class="content_mp">
                <h2 class="user-name_mp">
                  <a href="shop.php">店舗名</a>
                </h2>
                <p class="user-bio_mp">エリア名
                <span class="time_txt">1月25日 21:51</span>
                </p>
              </div>
            </div>
            <div class="body_txt">
              <a href="shop.php">
                <p>お店が管理画面から投稿したニューステキストが入る。お店が管理画面から投稿したニューステキストが入る。お店が管理画面から投稿したニューステキストが入る。お店が管理画面から投稿したニューステキストが入る。お店が管理画面から投稿したニューステキストが入る。お店が管理画面から投稿したニューステキストが入る。お店が管理画面から投稿したニューステキストが入る。
                <br>
                <br>お店が管理画面から投稿したニューステキストが入る。お店が管理画面から投稿したニューステキストが入る。
                </p>
                <img src="<?=$com_href?>/img/8993466.jpg">
              </a>
            </div>
          </div>
          <div class="tweet">
            <div class="profile-card_mp">
              <div class="avatar-container_mp_story">
                <a href="shop.php">
                  <img class="avatar-icon_mp" src="<?=$com_href?>/img/8993466.jpg" loading="lazy" alt="Avatar Icon">
                </a>
              </div>
              <div class="content_mp">
                <h2 class="user-name_mp">
                  <a href="shop.php">店舗名</a>
                </h2>
                <p class="user-bio_mp">エリア名
                <span class="time_txt">1月25日 21:51</span>
                </p>
              </div>
            </div>
            <div class="body_txt">
              <a href="shop.php">
                <p>お店が管理画面から投稿したニューステキストが入る。お店が管理画面から投稿したニューステキストが入る。お店が管理画面から投稿したニューステキストが入る。お店が管理画面から投稿したニューステキストが入る。お店が管理画面から投稿したニューステキストが入る。お店が管理画面から投稿したニューステキストが入る。お店が管理画面から投稿したニューステキストが入る。
                <br>
                <br>お店が管理画面から投稿したニューステキストが入る。お店が管理画面から投稿したニューステキストが入る。
                </p>
                <img src="<?=$com_href?>/img/8993466.jpg">
              </a>
            </div>
          </div>
          <div class="tweet">
            <div class="profile-card_mp">
              <div class="avatar-container_mp_story">
                <a href="shop.php">
                  <img class="avatar-icon_mp" src="<?=$com_href?>/img/8993466.jpg" loading="lazy" alt="Avatar Icon">
                </a>
              </div>
              <div class="content_mp">
                <h2 class="user-name_mp">
                  <a href="shop.php">店舗名</a>
                </h2>
                <p class="user-bio_mp">エリア名
                <span class="time_txt">1月25日 21:51</span>
                </p>
              </div>
            </div>
            <div class="body_txt">
              <a href="shop.php">
                <p>お店が管理画面から投稿したニューステキストが入る。お店が管理画面から投稿したニューステキストが入る。お店が管理画面から投稿したニューステキストが入る。お店が管理画面から投稿したニューステキストが入る。お店が管理画面から投稿したニューステキストが入る。お店が管理画面から投稿したニューステキストが入る。お店が管理画面から投稿したニューステキストが入る。
                <br>
                <br>お店が管理画面から投稿したニューステキストが入る。お店が管理画面から投稿したニューステキストが入る。
                </p>
                <img src="<?=$com_href?>/img/8993466.jpg">
              </a>
            </div>
          </div>
          <div class="tweet">
            <div class="profile-card_mp">
              <div class="avatar-container_mp_story">
                <a href="shop.php">
                  <img class="avatar-icon_mp" src="<?=$com_href?>/img/8993466.jpg" loading="lazy" alt="Avatar Icon">
                </a>
              </div>
              <div class="content_mp">
                <h2 class="user-name_mp">
                  <a href="shop.php">店舗名</a>
                </h2>
                <p class="user-bio_mp">エリア名
                <span class="time_txt">1月25日 21:51</span>
                </p>
              </div>
            </div>
            <div class="body_txt">
              <a href="shop.php">
                <p>お店が管理画面から投稿したニューステキストが入る。お店が管理画面から投稿したニューステキストが入る。お店が管理画面から投稿したニューステキストが入る。お店が管理画面から投稿したニューステキストが入る。お店が管理画面から投稿したニューステキストが入る。お店が管理画面から投稿したニューステキストが入る。お店が管理画面から投稿したニューステキストが入る。
                <br>
                <br>お店が管理画面から投稿したニューステキストが入る。お店が管理画面から投稿したニューステキストが入る。
                </p>
                <img src="<?=$com_href?>/img/8993466.jpg">
              </a>
            </div>
          </div>
          <div class="tweet">
            <div class="profile-card_mp">
              <div class="avatar-container_mp_story">
                <a href="shop.php">
                  <img class="avatar-icon_mp" src="<?=$com_href?>/img/8993466.jpg" loading="lazy" alt="Avatar Icon">
                </a>
              </div>
              <div class="content_mp">
                <h2 class="user-name_mp">
                  <a href="shop.php">店舗名</a>
                </h2>
                <p class="user-bio_mp">エリア名
                <span class="time_txt">1月25日 21:51</span>
                </p>
              </div>
            </div>
            <div class="body_txt">
              <a href="shop.php">
                <p>お店が管理画面から投稿したニューステキストが入る。お店が管理画面から投稿したニューステキストが入る。お店が管理画面から投稿したニューステキストが入る。お店が管理画面から投稿したニューステキストが入る。お店が管理画面から投稿したニューステキストが入る。お店が管理画面から投稿したニューステキストが入る。お店が管理画面から投稿したニューステキストが入る。
                <br>
                <br>お店が管理画面から投稿したニューステキストが入る。お店が管理画面から投稿したニューステキストが入る。
                </p>
                <img src="<?=$com_href?>/img/8993466.jpg">
              </a>
            </div>
          </div>
          <p style="text-align:center;">
          <i class="fa-sharp fa-light fa-loader fa-spin fa-3x fa-fw"></i>
          </p>

        </div>
        <!-- timeline -->
      </div>
      <!-- tab-->
      <div class="tab_content" id="design_content">

        <ul class="talk-list_search">
        <li class="talk-item">
          <div class="talk-avatar_story">
            <a href="shop.php">
              <img src="<?=$com_href?>/img/8993466.jpg" loading="lazy">
            </a>
          </div>
          <div class="talk-details">
            <h3 class="talk-name">
              <a href="shop.php">店舗名</a>
            </h3>
            <p class="talk-last-message">エリア名
            </p>
            <span class="talk-timestamp">最終更新時間:20:48 </span>
          </div>
        </li>
        <li class="talk-item">
          <div class="talk-avatar_story">
            <a href="shop.php">
              <img src="<?=$com_href?>/img/8993466.jpg" loading="lazy">
            </a>
          </div>
          <div class="talk-details">
            <h3 class="talk-name">
              <a href="shop.php">店舗名</a>
            </h3>
            <p class="talk-last-message">エリア名
            </p>
            <span class="talk-timestamp">最終更新時間:20:48 </span>
          </div>
        </li>
        <li class="talk-item">
          <div class="talk-avatar_story">
            <a href="shop.php">
              <img src="<?=$com_href?>/img/8993466.jpg" loading="lazy">
            </a>
          </div>
          <div class="talk-details">
            <h3 class="talk-name">
              <a href="shop.php">店舗名</a>
            </h3>
            <p class="talk-last-message">エリア名
            </p>
            <span class="talk-timestamp">最終更新時間:20:48 </span>
          </div>
        </li>
        <li class="talk-item">
          <div class="talk-avatar_story">
            <a href="shop.php">
              <img src="<?=$com_href?>/img/8993466.jpg" loading="lazy">
            </a>
          </div>
          <div class="talk-details">
            <h3 class="talk-name">
              <a href="shop.php">店舗名</a>
            </h3>
            <p class="talk-last-message">エリア名
            </p>
            <span class="talk-timestamp">最終更新時間:20:48 </span>
          </div>
        </li>
        <li class="talk-item">
          <div class="talk-avatar_story">
            <a href="shop.php">
              <img src="<?=$com_href?>/img/8993466.jpg" loading="lazy">
            </a>
          </div>
          <div class="talk-details">
            <h3 class="talk-name">
              <a href="shop.php">店舗名</a>
            </h3>
            <p class="talk-last-message">エリア名
            </p>
            <span class="talk-timestamp">最終更新時間:20:48 </span>
          </div>
        </li>
        <li class="talk-item">
          <div class="talk-avatar_story">
            <a href="shop.php">
              <img src="<?=$com_href?>/img/8993466.jpg" loading="lazy">
            </a>
          </div>
          <div class="talk-details">
            <h3 class="talk-name">
              <a href="shop.php">店舗名</a>
            </h3>
            <p class="talk-last-message">エリア名
            </p>
            <span class="talk-timestamp">最終更新時間:20:48 </span>
          </div>
        </li>
        <li class="talk-item">
          <div class="talk-avatar_story">
            <a href="shop.php">
              <img src="<?=$com_href?>/img/8993466.jpg" loading="lazy">
            </a>
          </div>
          <div class="talk-details">
            <h3 class="talk-name">
              <a href="shop.php">店舗名</a>
            </h3>
            <p class="talk-last-message">エリア名
            </p>
            <span class="talk-timestamp">最終更新時間:20:48 </span>
          </div>
        </li>
        <li class="talk-item">
          <div class="talk-avatar_story">
            <a href="shop.php">
              <img src="<?=$com_href?>/img/8993466.jpg" loading="lazy">
            </a>
          </div>
          <div class="talk-details">
            <h3 class="talk-name">
              <a href="shop.php">店舗名</a>
            </h3>
            <p class="talk-last-message">エリア名
            </p>
            <span class="talk-timestamp">最終更新時間:20:48 </span>
          </div>
        </li>
        <li class="talk-item">
          <div class="talk-avatar_story">
            <a href="shop.php">
              <img src="<?=$com_href?>/img/8993466.jpg" loading="lazy">
            </a>
          </div>
          <div class="talk-details">
            <h3 class="talk-name">
              <a href="shop.php">店舗名</a>
            </h3>
            <p class="talk-last-message">エリア名
            </p>
            <span class="talk-timestamp">最終更新時間:20:48 </span>
          </div>
        </li>
        <!-- 他のトークの項目も同様に追加する -->
        </ul>

        <p style="text-align:center;">
        <i class="fa-sharp fa-light fa-loader fa-spin fa-3x fa-fw"></i>
        </p>

      </div>
      <!-- tab-->
    </div>
    <!-- tabs -->

    <p class="box_sub_page2">エリアごとのテキストが入るスペースエリアごとのテキストが入るスペースエリアごとのテキストが入るスペースエリアごとのテキストが入るスペースエリアごとのテキストが入るスペースエリアごとのテキストが入るスペース
    <p>
    <?php include $inc_path .'/inc/footer_menu.php';?>
  </div>
  <!-- content -->
  <?php include $inc_path .'/inc/prof_modal.php';?>
</div>
<!-- container -->
<?php include $inc_path .'/inc/footer.php';?>
