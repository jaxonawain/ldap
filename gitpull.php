<?php
if ($_SERVER['HTTP_X_GITHUB_EVENT'] == 'push')  {
    shell_exec("cd /var/www/git-repo && /full/path/to/bin/git pull");

}

?>hello motherfuckin world bitches try 5