<?php
// load config
require ('/home/www/public_html/bedit/conf.php');

// form submitted
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    // link values
    $bed_login = $_POST['bed_login'];

    // check values
    if ($bed_login == $bed_pass) {

        // pass file to editor
        header('Location: ' . $bed_edit . 
               '?f=' . $_SERVER['QUERY_STRING']);

    // invalid login
    } else {
        echo '<p>' . $bed_lang['auth'] . '</p>';
    }
}
?>
<form action="" method="POST">
    <input name="bed_login" id="bed_login" 
           size="12" maxlength="32" 
           title="<?php echo $bed_lang['pass']; ?>" 
           type="password">
    <input value="<?php echo $bed_lang['ok']; ?>" 
           title="<?php echo $bed_lang['post']; ?>" 
           type="submit">
</form>
<?php echo $bed_file; ?>
