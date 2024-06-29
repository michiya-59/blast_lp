<!DOCTYPE html>
<html lang="ja">
<head>
  <?php get_header(); ?>
</head>
<body>
  <?php
    // メニューIDを取得
    $menu_name = 'global_nav';
    $locations = get_nav_menu_locations();
    $menu = wp_get_nav_menu_object($locations[$menu_name]);
    $menu_items = wp_get_nav_menu_items($menu->term_id);
  ?>
  <header>
    <div class="common_header top_header">
      <p>お金の知識を高めるコミュニティ</p>
    </div>

    <div class="common_header header">
      <div class="header_left">
        <h1>コミュスタ BLAST</h1>
      </div>

      <div class="header_right">
        <?php foreach ($menu_items as $item): ?>
          <a href="<?php echo $item->url; ?>" target="_blank"><?php echo $item->title; ?></a>
        <?php endforeach; ?>
      </div>
    </div>
  </header>

  <main>
    <div class="contact_header">
      <h1>お問い合わせフォーム</h1>
    </div>

    <div class="container">
      <div class="pankuzu_menu">
        <a href="index.html">コミュスタBLAST</a>
        <span>＞</span>
        <p>お問い合わせフォーム</p>
      </div>

      <div class="contact_container">
        <div class="contact_left">
          <div class="contact_support_msg">
            <h2>コミュスタBLASTへの無料相談</h2>
            <p>①フォームより必要情報のご入力をお願いいたします。</p>
            <p>②お問い合わせ後、弊社より１営業日以内にご連絡させていただきます。</p>
            <span>※ 年末年始・夏季休業期間などはお時間をいただくこともございます。</span>
  
            <div class="contact_content">
              <h3>お問い合わせ後のサポート内容</h3>
              <p>
                ・無料相談会の実施<br>
                ・システムのデモ画面をお見せしながらの運用説明<br>
                ・自分に合っている投資推奨<br>
              </p>
            </div>
          </div>
        </div>
        <div class="contact_right">
          <form class="contact_form">
            <div class="form_group">
                <label for="name">テストお名前 <span class="required">必須</span></label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form_group">
                <label for="email">メールアドレス <span class="required">必須</span></label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form_group">
                <label for="phone">電話番号 <span class="required">必須</span></label>
                <input type="tel" id="phone" name="phone" required>
            </div>
            <div class="form_group">
                <label for="course">気になるコース <span class="required">必須</span></label>
                <select id="course" name="course" required>
                    <option value="normal">ノーマルコース</option>
                    <option value="advanced">アドバンスコース</option>
                    <option value="expert">エキスパートコース</option>
                </select>
            </div>
            <div class="form_group">
                <label for="message">お問い合わせ内容（簡単に内容をご記入ください。） <span class="required">必須</span></label>
                <textarea id="message" name="message" rows="5" required></textarea>
            </div>
            <button type="submit" class="submit_button">問い合せをする</button>
          </form>
        </div>
      </div>
    </div>
  </main>
  <footer>
    <div class="footer">
      <p>Copyright ©︎ コミュスタBLAST all rights reserved.</p>
    </div>
  </footer>
  <?php get_footer(); ?>
</body>
</html>