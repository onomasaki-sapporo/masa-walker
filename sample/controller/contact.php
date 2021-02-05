<?php
class Contact {
  public $name;
  public $error;
  public $success;

  function __construct() {
    require_once(CONTROLLER_DIR . '/database.php');
    require_once(MODEL_DIR . '/mTop.php');
    require_once(MODEL_DIR . '/common.php');
  }

}

$main = new Contact();

$main->name = "contact";

$post = $_POST;
if (!empty($post)) {
  if (empty($post['type']) || ($post['type'] != 1 && $post['type'] != 2 && $post['type'] != 3)) {
    $main->error[] = "[Live2D] [イラスト] [お問い合わせ]をチェックしてください。";
  }
  if (empty($post['type']) || ($post['format'] != 1 && $post['format'] != 2)) {
    $main->error[] = "個人または法人を選択してください。";
  }
  if (empty($post['name'])) {
    $main->error[] = "お名前を入力してください。";
  }
  if (empty($post['email'])) {
    $main->error[] = "E-Mailを入力してください。";
  }
  if (empty($post['contents'])) {
    $main->error[] = "お問い合わせ内容を入力してください。";
  }

  if (empty($main->error)) {
    $type = "";
    if ($post['type'] == 1) {
      $type = "Live2D";
    } else if ($post['type'] == 2) {
      $type = "イラスト";
    } else if ($post['type'] == 3) {
      $type = "お問い合わせ";
    }

    $format = "";
    if ($post['format'] == 1) {
      $format = "個人";
    } else if ($post['format'] == 2) {
      $format = "法人";
    }

    $body = '[お名前] ' . $post['name'] . "\n"
          . '[お名前(かな)] ' . $post['name_kana'] . "\n"
          . '[事業形態] ' . $format . "\n"
          . '[お問い合わせ内容]' . "\n" . $post['contents'];

    mail('*************','[' . $type . '] お問い合わせメール', $body, 'From: Shirasawa@web.jp' . "\r\n" .
    'Reply-To: Shirasawa@web.jp' . "\r\n" .
    'X-Mailer: PHP/' . phpversion());
    $main->success = true;
  }
}
require_once(VIEW_DIR . '/header.html');
require_once(VIEW_DIR . '/contact.html');
require_once(VIEW_DIR . '/footer.html');
