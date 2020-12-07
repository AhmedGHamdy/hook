<?php

    //echo "THis is a test file on a test repo for testing the deploy functionality using github webhooks!!!!";
    echo exec('whoami');
    echo exec('sh -x /opt/tomcat7_addtest/webapps/Add-Pluses/hook/shell.sh');

?>
