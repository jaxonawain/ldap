<?php
if ( $_POST['payload'] ) {
  echo shell_exec("cd /var/www/git-repo && /full/path/to/bin/git pull 2>&1");

}

?>hello motherfuckin world bitches try 4