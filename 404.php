
<?php
header("HTTP/1.1 301 Moved Permanently ... Redirections purposes ");
header("Location: ".get_bloginfo('url'));
exit();
?>
