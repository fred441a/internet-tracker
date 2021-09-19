## dependencies
 - mysql
 - php
 - speedtest-cli
 Can be installed on debian systems with:
 ``` sudo apt install speedtest-cli ```

## add to cronjob
replace ```path-to-internet-tracker``` with your path to internet tracker
``` @hourly /bin/php path-to-internet-tracker/SpeedTest.php ```
you can add cronnjobs by running ``` contab -e```