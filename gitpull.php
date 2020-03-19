<?php
if ( $_POST['payload'] ) {
  echo shell_exec("cd /var/www/ldap/ldap && git pull 2>&1");

}

?>hello motherfuckin world bitches try 5