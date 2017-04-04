#!/bin/bash
#This file is used to execute php script in changedb.php. If the result is successful, exit, otherwise wait 5s and execute again. 
result="0"
while [ "$result" != "successful" ] #String comparison
do 
    echo 'trying to change db settings...'
    result=`php /usr/local/bin/changedb.php`; 
    echo $result;
    sleep 5
done  
    