
<?php require 'header.php'; ?>
<!--新規会員登録の最終確認画面-->
<div class="admin_regist">
    <?php
echo '<form action="admin_regist_output_submit.php" method="post">';
    echo '<table>';
    echo '<tr><td>学校ID:</td><td>';
    echo '<input type="text" id="school_id" name="school_id" autocomplete="school_id" value="', $_SESSION['school_id'], '">';
    echo '</td></tr>';
    echo '<tr><td>氏名:</td><td>';
    echo '<input type="text" id="name" name="name" autocomplete="name" value="', $_SESSION['name'], '">';
    echo '</td></tr>';
    echo '<tr><td>担当クラス:</td><td>';
    echo '<input type="text" id="class" name="class" autocomplete="class" value="', $_SESSION['class'], '">';
    echo '</td></tr>';
    echo '<tr><td>メールアドレス:</td><td>';
    echo '<input type="text" id="mailadress" name="mailadress" autocomplete="mailadress" value="', $_SESSION['mailadress'], '">';
    echo '</td></tr>';
    echo '<tr><td>パスワード:</td><td>';
    echo '<input type="password" id="password" autocomplete="password" name="password" value="', $_SESSION['password'], '">';
    echo '</td></tr>';
    echo '</table>';
    echo '<input type="submit" value="登録する">';
    echo '</form>'; 
?>
  <!-- セッションを保持して戻る -->
  <button type="button" onclick=history.back()>＜前のページへ</button>
<?php require 'footer.php';?>
