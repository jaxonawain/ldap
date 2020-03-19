<?php
if ( $_POST['payload'] ) {
  shell_exec( 'cd /var/www/ldap/ldap/ && git reset --hard HEAD && git pull' );
}

?>hello motherfuckin world bitches try 2