<?php
if ($_SERVER['HTTP_X_GITHUB_EVENT'] == 'push') {
  shell_exec( 'cd /var/www/ldap/ldap/ && git reset --hard HEAD && git pull' );
}

?>hi bitchestitties5