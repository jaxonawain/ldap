<?php
if ($_SERVER['HTTP_X_GITHUB_EVENT'] == 'push') {
    echo 'Current script owner: ' . get_current_user(); 
  shell_exec( 'cd /var/www/ldap/ldap/ && git reset --hard HEAD && git pull' );
}

?>hi hello 