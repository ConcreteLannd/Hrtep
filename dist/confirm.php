<?php
session_start();

if($_POST) {
  $company_name = isset( $_POST[ 'company_name' ] ) ? $_POST[ 'company_name' ] : NULL;
  // $interested_str = implode(', ', $interested_name);
  $name = isset( $_POST[ 'name' ] ) ? $_POST[ 'name' ] : NULL;
  $address = isset( $_POST[ 'address' ] ) ? $_POST[ 'address' ] : NULL;
  $phone = isset( $_POST[ 'phone' ] ) ? $_POST[ 'phone' ] : NULL;
  $name_charge = isset( $_POST[ 'name_charge' ] ) ? $_POST[ 'name_charge' ] : NULL;
  $email = isset( $_POST[ 'email' ] ) ? $_POST[ 'email' ] : NULL;
  $department_name = isset( $_POST[ 'department_name' ] ) ? $_POST[ 'department_name' ] : NULL;
  $position = isset( $_POST[ 'position' ] ) ? $_POST[ 'position' ] : NULL;
  $home_url = isset( $_POST[ 'home_url' ] ) ? $_POST[ 'home_url' ] : NULL;

  $noti_receipt_number = isset( $_POST[ 'noti_receipt_number' ] ) ? $_POST[ 'noti_receipt_number' ] : NULL;
  $registration_number = isset( $_POST[ 'registration_number' ] ) ? $_POST[ 'registration_number' ] : NULL;
  $permission_number = isset( $_POST[ 'permission_number' ] ) ? $_POST[ 'permission_number' ] : NULL;

  $license_registration = '';
  $license_registration_arr = array();

  foreach($_POST['license_registration_number'] as $value) {
    if ($value == '職業紹介事業者') {
      $license_registration1 = "許可番号:" . $noti_receipt_number;
    } else if ($value == '登録支援機関') {
      $license_registration2 = "許可番号:" . $registration_number;
    } else {
      $license_registration3 = "許可番号:" . $permission_number;
    }
  }

  $license_registration_arr = [$license_registration1, $license_registration2, $license_registration3];

  $desired_registration_detail = isset( $_POST[ 'desired_registration_detail' ] ) ? $_POST[ 'desired_registration_detail' ] : NULL;
  $desired_registration_detail_arr = implode(', ', $desired_registration_detail);
}

function h($string) {
  global $encode;
  return htmlspecialchars($string, ENT_QUOTES,$encode);
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>外国人採用マッチングシステム｜HRtep株式会社</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <link rel="shortcut icon" href="/assets/images/common/favicon.ico">
  <link rel="canonical" href="">
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-WFW7JF4');</script>
  <!-- End Google Tag Manager -->
  <!-- Open Graph Protocol -->
  <meta property="og:type" content="article">
  <meta property="og:locale" content="ja_JP">
  <meta property="og:title" content="">
  <meta property="og:url" content="">
  <meta property="og:description" content="">
  <meta property="og:site_name" content="">
  <meta property="og:image" content="">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.typekit.net/bcu2eoa.css">
  <!-- font notosan cjk -->
  <script>
    (function(d) {
      var config = {
        kitId: 'fih7zgt',
        scriptTimeout: 3000,
        async: true
      },
      h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
    })(document);
  </script>
  <link rel="stylesheet" href="https://use.typekit.net/euo4udl.css">
  <link rel="stylesheet" href="assets/css/app.css" />
</head>

<body>
  <div class="p-top">
  <header class="p-header">
      <div class="p-header_logo">
        <a href="./"><img src="./assets/images/logo.svg" alt="外構工事ならガーデンワークス"></a>
      </div>
      <ul class="p-header_menu u-pc">
        <li>
          <a href="#flow">マッチングの流れ</a>
        </li>
        <li>
          <a href="#feature">機能の特徴</a>
        </li>
        <li>
          <a href="#voice">お客様の声</a>
        </li>
        <li>
          <a href="#service">付属サービス</a>
        </li>
      </ul>
      <div class="p-header_contact u-pc">
        <p>新規導入に関するお問合せ</p>
        <p class="phone-number">
          <a href="tel:+0120-186-517"><img src="./assets/images/icon_phone.svg" alt="0120-186-517">0120-186-517</a>
        </p>
      </div>

      <div class="right-header u-sp">
        <a href="tel:+0120-186-517"><img class="phone-header_sp" src="./assets/images/icon_phone.svg" alt="0120-186-517"></a>
        <div id="nav_toggle">
          <div>
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
        <nav class="menu-sp">
          <ul>
            <li>
              <a href="#flow">マッチングの流れ</a>
            </li>
            <li>
              <a href="#feature">機能の特徴</a>
            </li>
            <li>
              <a href="#voice">お客様の声</a>
            </li>
            <li>
              <a href="#service">付属サービス</a>
            </li>
            <li>
              <a href="./contact.html">資料請求はこちら</a>
            </li>
            <li>
              <a href="./download-form.html">求人・求職者登録申し込みはコチラ</a>
            </li>
          </ul>

          <p class="contact">
            <a href="tel:+0120-186-517"><img src="./assets/images/call-sp.png" alt="0120-186-517"></a>
          </p>

          <div class="button-form">
            <a class="btn_call u-sp" href="tel:+0120-186-517">
              <img class="rimg" src="./assets/images/btn-call.png" alt="tel">
            </a>
            <a class="btn01" href="./download-form.html">
              <img class="rimg" src="./assets/images/btn-form01_pc.png" alt="contact">
            </a>
            <a class="btn02" href="./contact.html">
              <img class="rimg" src="./assets/images/btn-form02_pc.png" alt="contact">
            </a>
          </div>
        </nav>
      </div>
    </header>
    <main class="p-pageMain">
      <div class="l-contents">
        <article class="p-contactPage">
          <div class="l-container">
            <div class="l-content">
              <div class="c-topMedia">
                <h1 class="c-topMedia_title">
                  <span class="c-topMedia_title_main">まずは登録から</span><br>
                  <span class="c-topMedia_title_sub">無料登録申込み</span>
                </h1>
                <figure class="c-topMedia_image">
                  <img src="./assets/images/contact_avatar.png" alt="まずは登録から">
                </figure>
              </div>
              <section class="p-contactPage_formWrap p-contact">
                <form method="POST" class="p-contact_form c-form" id="contactForm" name="contactForm" action="./mail.php" enctype="multipart/form-data">
                  <input type="hidden" name="企業名" value="<?php echo h($company_name); ?>">
                  <input type="hidden" name="代表者名" value="<?php echo h($name); ?>">
                  <input type="hidden" name="本社所在地" value="<?php echo h($address); ?>">
                  <input type="hidden" name="ご連絡の付く電話番号" value="<?php echo h($phone); ?>">
                  <input type="hidden" name="ご担当者名" value="<?php echo h($name_charge); ?>">
                  <input type="hidden" name="ご担当者様メールアドレス" value="<?php echo h($email); ?>">
                  <input type="hidden" name="所属部署名" value="<?php echo h($department_name); ?>">
                  <input type="hidden" name="役職" value="<?php echo h($position); ?>">
                  <input type="hidden" name="ホームページURL" value="<?php echo h($home_url); ?>">
                  <input type="hidden" name="各事業者の許可/登録番号をご記入ください。" value="">
                  <input type="hidden" name="職業紹介事業者" value="<?php echo h($license_registration1); ?>">
                  <input type="hidden" name="登録支援機関" value="<?php echo h($license_registration2); ?>">
                  <input type="hidden" name="監理団体" value="<?php echo h($license_registration3); ?>">
                  <input type="hidden" name="希望する登録内容をご記入ください。" value="<?php echo h($desired_registration_detail_arr); ?>">
                  <div class="c-form_group -first">
                    <div class="c-form_group_label">
                      <label>企業名</label> <span class="c-starReq">*</span>
                    </div>
                    <div class="c-form_group_input">
                      <p class="c-form_group_input_text"><?php echo h($company_name); ?></p>
                    </div>
                  </div>
                  <div class="c-form_group">
                    <div class="c-form_group_label">
                      <label>代表者名</label> <span class="c-starReq">*</span>
                    </div>
                    <div class="c-form_group_input">
                      <p class="c-form_group_input_text"><?php echo h($name); ?></p>
                    </div>
                  </div>
                  <div class="c-form_group">
                    <div class="c-form_group_label">
                      <label>本社所在地</label> <span class="c-starReq">*</span>
                    </div>
                    <div class="c-form_group_input">
                      <p class="c-form_group_input_text"><?php echo h($address); ?></p>
                    </div>
                  </div>
                  <div class="c-form_group">
                    <div class="c-form_group_label">
                      <label>ご連絡の付く電話番号</label> <span class="c-starReq">*</span>
                    </div>
                    <div class="c-form_group_input">
                      <p class="c-form_group_input_text"><?php echo h($phone); ?></p>
                    </div>
                  </div>
                  <div class="c-form_group">
                    <div class="c-form_group_label">
                      <label>ご担当者名</label> <span class="c-starReq">*</span>
                    </div>
                    <div class="c-form_group_input">
                      <p class="c-form_group_input_text"><?php echo h($name_charge); ?></p>
                    </div>
                  </div>
                  <div class="c-form_group">
                    <div class="c-form_group_label">
                      <label>ご担当者様メールアドレス</label> <span class="c-starReq">*</span>
                    </div>
                    <div class="c-form_group_input">
                      <p class="c-form_group_input_text"><?php echo h($email_charge); ?></p>
                    </div>
                  </div>
                  <div class="c-form_group">
                    <div class="c-form_group_label">
                      <label>所属部署名</label>
                    </div>
                    <div class="c-form_group_input">
                      <p class="c-form_group_input_text"><?php echo h($department_name); ?></p>
                    </div>
                  </div>
                  <div class="c-form_group">
                    <div class="c-form_group_label">
                      <label>役職</label>
                    </div>
                    <div class="c-form_group_input">
                      <p class="c-form_group_input_text"><?php echo h($position); ?></p>
                    </div>
                  </div>
                  <div class="c-form_group">
                    <div class="c-form_group_label">
                      <label>ホームページURL</label>
                    </div>
                    <div class="c-form_group_input">
                      <p class="c-form_group_input_text"><?php echo h($home_url); ?></p>
                    </div>
                  </div>
                  <div class="c-form_group">
                    <div class="c-form_group_label">
                      <label>各事業者の許可/登録番号をご記入ください。</label> <span class="c-starReq">*</span>
                    </div>
                    <div class="c-form_group_input">
                      <div class="c-licenseNumber">
                        <?php
                        foreach ($license_registration_arr as $item) {
                          echo '<li>' . $item . '</li>';
                        }
                        ?>
                      </div>
                    </div>
                  </div>
                  <div class="c-form_group">
                    <div class="c-form_group_label">
                      <label>希望する登録内容をご記入ください。</label>
                    </div>
                    <div class="c-form_group_input">
                      <p class="c-form_group_input_text"><?php echo h($desired_registration_detail_arr); ?></p>
                    </div>
                  </div>
                  <div class="c-form_btnBox c-form_group -last">
                    <div class="c-form_group_label"></div>
                    <div class="c-form_group_input">
                      <button type="submit" class="c-form_btnBox_btn c-button" id="submitForm" name="submitForm">送信</button>
                    </div>
                  </div>
                </form>
              </section>
            </div>
          </div>
        </article>
      </div>
    </main>
    <!-- End Main -->

    <footer class="p-footer">
      <div class="l-container">
        <div class="p-footer_copyright">
          <span>©2022 ＨＲｔｅｐ株式会社</span>
        </div>
      </div>
    </footer>
  </div>
  <script src="./assets/js/jquery-2.2.4.min.js"></script>
  <script src="./assets/js/jquery.validate.min.js"></script>
  <script src="./assets/js/wow.min.js" ></script>
  <script src="./assets/js/slick.min.js"></script>
  <script src="./assets/js/form.js" ></script>
  <script src="./assets/js/main.js" ></script>
</body>

</html>
