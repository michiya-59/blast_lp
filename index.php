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
    <section class="mail_visual">
      <div class="container">
        <div class="top_visual">
          <div class="left_visual">
            <h3>〜 人生の知識に彩りを 〜</h3>
            <p>お金の知識を高める<br>個人事業主又は事業者様限定のコミュニティ</p>
            <div class="free_consultation">
              <?php foreach ($menu_items as $item): ?>
                <a href="<?php echo $item->url; ?>" class="consultation_btn">
                  <span class="consultation_sub_msg">簡単1分で完了</span>
                  <span class="consultation_main_msg">今すぐ無料で相談する</span>
                </a>
              <?php endforeach; ?>
            </div>
          </div>

          <div class="right_visual">
            <img src="<?php echo get_template_directory_uri(); ?>/img/pc_mock.png" alt="システムのモック写真">
          </div>
        </div>

        <div class="under_visual">
          <div class="choose_three_reason">
            <div class="section_title">
              <h2>コミュスタ BLASTが選ばれる理由</h2>
            </div>

            <ol class="choose_lists">
              <li class="choose_lists_item">
                <span>01</span>
                <div class="choose_lists_item_img">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/study.png">
                </div>
                <div class="choose_lists_item_part">
                  <h3 class="choose_lists_item_title">教育方針</h3>
                  <p class="choose_lists_item_msg">どんな人でもお金の知識を学びたいと思う・どんな人でも学べるような教育方針</p>
                </div>
              </li>

              <li class="choose_lists_item">
                <span>02</span>
                <div class="choose_lists_item_img">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/level_up.png">
                </div>
                <div class="choose_lists_item_part">
                  <h3 class="choose_lists_item_title">成長意欲の重視</h3>
                  <p class="choose_lists_item_msg">成功するのはセンスよりも成長意欲のある人。<br>努力する人が成果を出せる環境を提供します。</p>
                </div>
              </li>

              <li class="choose_lists_item">
                <span>03</span>
                <div class="choose_lists_item_img">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/system_up.png">
                </div>
                <div class="choose_lists_item_part">
                  <h3 class="choose_lists_item_title">常に進化するシステム</h3>
                  <p class="choose_lists_item_msg">最新情報を取り入れ続けるBLASTのシステムは、未完成であり続け、常に進化しています</p>
                </div>
              </li>
            </ol>
          </div>
        </div>
      </div>
      <img src="<?php echo get_template_directory_uri(); ?>/img/circle.png" class="circle">
    </section>

    <section class="blast_about">
      <div class="container">
        <div class="blast_about_title">
          <div class="section_title">
            <h2>コミュスタ BLASTとは？</h2>
            <p>※コミュニティスタディの略</p>
          </div>
        </div>

        <div class="blast_about_content">
          <div class="blast_about_left">
            <p>
              お金の知識を高めていく個人事業主又は事業者様限定のコミュニティです<br>
              一人一人がお金の知識を付けることによって人生に彩りをもたせていく場所になればと思い、本コミュニティを設立しました。<br><br>
              本コミュニティでは主に<br>
              『株式取引』『為替取引』『保険』『不動産投資』『投資信託（ NISAなど）』『動画編集』<br>
              の６つを学ぶことができます。<br><br>
              また、その前に『支出の見直し』『毎月可能な貯金額』『税金の見直し』の３つを初めに必ず実施します。<br>
              <b>※税金の見直しは税理士事務所さんと提携しており、LINE@でBLASTの会員様限定の個別無料相談なども行ってます。</b>
            </p>
          </div>
          <div class="blast_about_right">
            <img src="<?php echo get_template_directory_uri(); ?>/img/blast_about.png">
          </div>
        </div>
      </div>
    </section>

    <section class="blast_three_features">
      <div class="container">
        <div class="section_title">
          <h2>コミュスタ BLAST3つの特徴</h2>
        </div>

        <div class="first_features">
          <ol class="blast_three_feature_lists">
            <li class="blast_three_feature_items">
              <h3 class="blast_three_feature_items_title">
                特徴<span>1</span>
              </h3>
              <h4 class="blast_three_feature_items_sub_title">授業のカリキュラムと教科書を用いて効率よく学習</h4>
              <p class="blast_three_feature_items_msg">
                BLASTの授業体型では、基本的に40分×レッスン10を採用しています。<br>
                (※授業によっては前後します。)<br><br>
                オリジナルの教科書を作成してある他に講師がまとめた補助資料もあります。<br>
                授業の最初には必ずその授業の目的が話されるのでより頭に入ってきやすい教育方針となっています。<br>
                学べる６つについての詳細は以下の通りです。
              </p>

              <div class="table_container">
                <div class="table_header">授業内容の詳細</div>
                <div class="table_row" onclick="toggleContent(this)">
                  <div class="table_cell">1. <b>株式投資</b></div>
                  <div class="arrow_cell">∨</div>
                </div>
                <div class="content">
                  <div class="content_inner">
                    <p><span>レッスン1</span>： 株式の仕組み</p>
                    <p><span>レッスン2</span>： 株式の注文方法</p>
                    <p><span>レッスン3</span>： 配当金</p>
                    <p><span>レッスン4</span>： 決算書を見る利点</p>
                    <p><span>レッスン5</span>： 株価の変動要因</p>
                    <p><span>レッスン6</span>： 財務諸表を読む利点</p>
                    <p><span>レッスン7</span>： 財務諸表の分析法</p>
                    <p><span>レッスン8</span>： 株価が上がるタイミング</p>
                    <p><span>レッスン9</span>： テクニカル分析概要</p>
                    <p><span>レッスン10</span>： テクニカル分析法</p>
                    <p><span>レッスン11</span>： リスク管理</p>
                  </div>
                </div>
                <div class="table_row" onclick="toggleContent(this)">
                  <div class="table_cell">2. <b>為替取引</b></div>
                  <div class="arrow_cell">∨</div>
                </div>
                <div class="content">
                  <div class="content_inner">
                    <p><span>レッスン1</span>： 投資について</p>
                    <p><span>レッスン2</span>： デリバティブ取引とは</p>
                    <p><span>レッスン3</span>： デリバティブ取引の種類</p>
                    <p><span>レッスン4</span>： 為替とは</p>
                    <p><span>レッスン5</span>： 為替相場が動く訳</p>
                    <p><span>レッスン6</span>： 為替取引を行うための知識</p>
                    <p><span>レッスン7</span>： ボリンジャーバンド、レンジトレンドについて</p>
                    <p><span>レッスン8</span>： テクニカル分析</p>
                    <p><span>レッスン9</span>： ファンダメンタル分析</p>
                    <p><span>レッスン10</span>： 総まとめ</p>
                  </div>
                </div>
                <div class="table_row" onclick="toggleContent(this)">
                  <div class="table_cell">3. <b>保険</b></div>
                  <div class="arrow_cell">∨</div>
                </div>
                <div class="content">
                  <div class="content_inner">
                    <p><span>レッスン1</span>： 保険ってどんなもの</p>
                    <p><span>レッスン2</span>： なぜ保険は必要なのか？</p>
                    <p><span>レッスン3</span>： 保険にはどんな種類があるのか？</p>
                    <p><span>レッスン4</span>： 保険って貯蓄じゃだめなの？</p>
                    <p><span>レッスン5</span>： 保険料と配当金の仕組み</p>
                    <p><span>レッスン6</span>： 保険会社って何をしているの？</p>
                    <p><span>レッスン7</span>： 保険商品の見方とは？</p>
                    <p><span>レッスン8</span>： 自分に合った保険会社の選び方・見直しのコツ</p>
                    <p><span>レッスン9</span>： 保険に関わる税金</p>
                    <p><span>レッスン10</span>： 保険をもう一度振り返ってみよう</p>
                  </div>
                </div>
                <div class="table_row" onclick="toggleContent(this)">
                  <div class="table_cell">4. <b>不動産投資</b></div>
                  <div class="arrow_cell">∨</div>
                </div>
                <div class="content">
                  <div class="content_inner">
                    <p><span>レッスン1</span>： 不動産の基本</p>
                    <p><span>レッスン2</span>： 不動産のメリット・デメリット</p>
                    <p><span>レッスン3</span>： 不動産にかかるお金と融資の受け方</p>
                    <p><span>レッスン4</span>： 物件の良し悪しの見分け方</p>
                    <p><span>レッスン5</span>： 改めて不動産投資で得られるものとは？</p>
                    <p><span>レッスン6</span>： 信頼できる不動産会社の見極め方</p>
                    <p><span>レッスン7</span>： 物件管理について</p>
                    <p><span>レッスン8</span>： 不動産投資の出口戦略</p>
                    <p><span>レッスン9</span>： アーリーリタイアをするためには</p>
                    <p><span>レッスン10</span>： 不動産投資の始め方・手順</p>
                  </div>
                </div>
                <div class="table_row" onclick="toggleContent(this)">
                    <div class="table_cell">5. <b>投資信託</b></div>
                    <div class="arrow_cell">∨</div>
                </div>
                <div class="content">
                  <div class="content_inner">
                    <p><span>レッスン1</span>： NISAとは</p>
                    <p><span>レッスン2</span>： おすすめの証券口座</p>
                    <p><span>レッスン3</span>： 銘柄選びとメリットとリスク</p>
                  </div>
                </div>
                <div class="table_row" onclick="toggleContent(this)">
                  <div class="table_cell">6. <b>動画編集</b></div>
                  <div class="arrow_cell">∨</div>
                </div>
                <div class="content">
                  <div class="content_inner">
                    <p><span>レッスン1</span>： 動画編集とは</p>
                    <p><span>レッスン2</span>： カット、テロップ入れ</p>
                    <p><span>レッスン3</span>： カットテロップ実践編</p>
                    <p><span>レッスン4</span>： エフェクトBGM</p>
                    <p><span>レッスン5</span>： 著作権</p>
                    <p><span>レッスン6</span>： サンプル動画制作</p>
                    <p><span>レッスン7</span>： サンプル動画制作</p>
                  </div>
                </div>
              </div>
            </li>
          </ol>
        </div>

        <div class="second_features">
          <ol class="blast_three_feature_lists">
            <li class="blast_three_feature_items">
              <h3 class="blast_three_feature_items_title">
                特徴<span>2</span>
              </h3>
              <h4 class="blast_three_feature_items_sub_title">個人事業主同士の有益な情報交換の場</h4>
              <div class="second_features_msg">
                <p class="blast_three_feature_items_msg">
                  BLASTは、個人事業主が集まり、それぞれの得意分野や知識を共有する場でもあります。<br>
                  各メンバーが専門的なスキルや知識を持っているため、自然と仲良くなり、有益な情報交換ができます。<br>
                  この環境は、個人事業主にとって理想的な学びと成長の場です。<br>
                </p>

                <div class="second_features_img">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/second_feature.png" alt="">
                </div>
              </div>
            </li>
          </ol>
        </div>

        <div class="three_features">
          <ol class="blast_three_feature_lists">
            <li class="blast_three_feature_items">
              <h3 class="blast_three_feature_items_title">
                特徴<span>3</span>
              </h3>
              <h4 class="blast_three_feature_items_sub_title">受講生同士の楽しい交流がある</h4>
              <div class="three_features_msg">
                <p class="blast_three_feature_items_msg">
                  BLASTでは毎月イベントが開かれてます。<br>
                  コロナという状況化において人と関わるということが減ってしまった今、人と沢山関わって遊ぶというのはとても大事な刺激になると考えております。<br>
                  また、お互いが刺激し合って、やる気が出るという相乗効果もあると考えているため、毎月交流していく方針にしました。<br>
                </p>

                <div class="three_features_img">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/three_feature.png" alt="">
                </div>
              </div>
            </li>
          </ol>
        </div>
      </div>
    </section>

    <section class="study_vocies">
      <div class="container">
        <div class="section_title">
          <h2>受講生の声</h2>
        </div>

        <ol class="study_voices_lists">
          <li class="study_voices_item">
            <span>Voice：1</span>
            <div class="voice_item_content">
              <div class="voice_user">28歳の看護師兼個人事業主の女性</div>
              <div class="voice_user_message">
                投資を初めてやった年代が20代と30代が多いことに驚きました。<br>
                試しに周りの人に投資をやってるか聞いてみたら、やっているという人が多かったので20代のうちに始めれてよかったと思いました。 <br>
                積立の講義も聞いてNISAをやろうかと思ってます。<br>
              </div>
            </div>
          </li>

          <li class="study_voices_item">
            <span>Voice：2</span>
            <div class="voice_item_content">
              <div class="voice_user">25歳エンジニア兼個人事業主の男性</div>
              <div class="voice_user_message">
                税金の種類がたくさんあり、把握してなかった税金もたくさんありました。<br>
                しっかりと節税方法を身に着けていないと知らず知らずのうちに損をしてしまうと思いました。 <br>
                確定申告会に参加して節税の知識を身に着けようと思います。<br>
              </div>
            </div>
          </li>

          <li class="study_voices_item">
            <span>Voice：3</span>
            <div class="voice_item_content">
              <div class="voice_user">31歳の介護士兼個人事業主の女性</div>
              <div class="voice_user_message">
                投資は怪しいという印象でしたが、やったことない人向けにたくさんの面白くて楽しい知識を教えていただけるのでとても充実して学んでます！<br>
                このコミュニティにチャレンジしてとても良かったです。 <br>
                これからもこのコミュニティで沢山の知識をつけていきたいと思います。<br>
              </div>
            </div>
          </li>

          <li class="study_voices_item">
            <span>Voice：4</span>
            <div class="voice_item_content">
              <div class="voice_user">35歳のサービス業兼個人事業主の女性</div>
              <div class="voice_user_message">
                投資の目的は資産の増加と保全の為であり、今までの収入を計算し貯金額と比較してみましたが、確実な出費は致し方ないとしても、だいぶ無駄遣いをしてきたと後悔しました。 <br>
                せっかく勉強できているので、使い道等を考えて、今後も講義を受けて頑張っていきたいと思います。 <br>
              </div>
            </div>
          </li>
        </ol>
      </div>
    </section>

    <section class="usage_flow">
      <div class="container">
        <div class="section_title">
          <h2>ご利用までの流れ</h2>
        </div>

        <div class="usage_flow_list">
          <div class="usage_flow_item">
            <h4 class="usage_flow_title">STEP 1</h4>
            <p class="usage_flow_msg">問い合わせ</p>
            <div class="usage_flow_img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/mail.svg">
            </div>
          </div>

          <div class="usage_flow_arrow_img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/flow_arrow.png">
          </div>

          <div class="usage_flow_item">
            <h4 class="usage_flow_title">STEP 2</h4>
            <p class="usage_flow_msg">個別相談</p>
            <div class="usage_flow_img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/talk.svg">
            </div>
          </div>

          <div class="usage_flow_arrow_img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/flow_arrow.png">
          </div>

          <div class="usage_flow_item">
            <h4 class="usage_flow_title">STEP 3</h4>
            <p class="usage_flow_msg">ご利用開始</p>
            <div class="usage_flow_img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/good.svg">
            </div>
          </div>
        </div>

        <p class="usage_flow_support_msg">個別相談にて目的・やりたいこと・悩みをしっかりお聞きした上で最適なプランが提供いたします。</p>
      </div>
    </section>

    <section class="faq">
      <div class="container">
        <div class="section_title">
          <h2>よくあるお問い合わせ</h2>
        </div>

        <ol class="faq_lists">
          <li class="faq_lists_item">
            <div class="faq_top faq_common">
              <div class="faq_q_img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/q&a_q.png">
              </div>
              <p class="faq_question_msg">
                投資をやったことない人でも授業のスピードについてこれますか？
              </p>
            </div>
            <div class="faq_under faq_common">
              <div class="faq_q_img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/q&a_a.png">
              </div>
              <p class="faq_answer_msg">
                はい。可能です。投資を始めたことがない、知識が0という方向けの環境となっているので、楽しく、深く学ぶことが出来ます。
              </p>
            </div>
          </li>

          <li class="faq_lists_item">
            <div class="faq_top faq_common">
              <div class="faq_q_img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/q&a_q.png">
              </div>
              <p class="faq_question_msg">
                投資を既に始めてる方でも学ぶ必要はありますか？
              </p>
            </div>
            <div class="faq_under faq_common">
              <div class="faq_q_img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/q&a_a.png">
              </div>
              <p class="faq_answer_msg">
                はい。あります。経験してる方にも学ぶことをおすすめします。理由としまして、自分の今持ってる知識の確かめをすることによって次の投資のステップにいくきっかけとしておすすめしてます。
              </p>
            </div>
          </li>

          <li class="faq_lists_item">
            <div class="faq_top faq_common">
              <div class="faq_q_img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/q&a_q.png">
              </div>
              <p class="faq_question_msg">
                毎日どのくらいの勉強時間を受講生はしていますか？
              </p>
            </div>
            <div class="faq_under faq_common">
              <div class="faq_q_img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/q&a_a.png">
              </div>
              <p class="faq_answer_msg">
                1週間単位で見ると約180分となってます。なので1日約25分です。無理なくスキマ時間での学習が出来ます。<br>
                自分の環境に合わせて学べる学習スタイルです。
              </p>
            </div>
          </li>

          <li class="faq_lists_item">
            <div class="faq_top faq_common">
              <div class="faq_q_img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/q&a_q.png">
              </div>
              <p class="faq_question_msg">
                投資のリスク管理方法についての学びはありますか？
              </p>
            </div>
            <div class="faq_under faq_common">
              <div class="faq_q_img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/q&a_a.png">
              </div>
              <p class="faq_answer_msg">
                もちろんあります。投資は短期的に増やすと言うよりも長期的に資産をゆっくりと増やしていくものです。<br>
                リスク管理や為替取引、株式取引、不動産投資など全てに対して教えていきます。
              </p>
            </div>
          </li>

          <li class="faq_lists_item">
            <div class="faq_top faq_common">
              <div class="faq_q_img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/q&a_q.png">
              </div>
              <p class="faq_question_msg">
                投資の目標の立て方が分からない人にはどのように教えてますか？
              </p>
            </div>
            <div class="faq_under faq_common">
              <div class="faq_q_img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/q&a_a.png">
              </div>
              <p class="faq_answer_msg">
                目標達成に向けてどのような投資が適しているのかをリサーチし、計画を立てます。<br>
                株式、不動産、債券など、目標に応じた投資先を選んでいきましょう。
              </p>
            </div>
          </li>
        </ol>
      </div>
    </section>

    <section class="finish_msg">
      <div class="section_title">
        <h2>最後に</h2>
      </div>

      <div class="finish_msg_content">
        <div class="container">
          <p class="msg">
            コミュスタ BLASTでは、1番にマネーリテラシーを学び、自分自身の今現在や将来に向けて豊かになる環境を作り上げていくコミュニティです。<br><br>
            マネーリテラシーを学べる環境が世の中に出回っている中でもblastの魅力は『株式・積立・不動産・保険・為替・動画編集』等コンテンツの豊富さです。<br><br>
            ですが、実際に活動している方々の声を聞くと、得られるものは金融知識だけではないという意見も多数上がっています。<br><br>
            その感じ方は人により様々ですが、コミュニケーション力が上がったり、自信がついて周りからの評価が変わったり、友人が増え楽しむ幅が広がることで人脈の広がりを感じる方もいらっしゃいます。<br><br>
            是非、皆様にも知識や経験を広げ、自分にしか出せない色を見つけ、そして変化を肌で感じてください。
          </p>
        </div>
      </div>
    </section>

  </main>
  <footer>
    <div class="footer">
      <p>Copyright ©︎ コミュスタBLAST all rights reserved.</p>
    </div>
  </footer>
  <?php get_footer(); ?>
</body>
</html>