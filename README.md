## dependencies
 - mysql
 - php
 - speedtest-cli
 Can be installed on debian systems with:
 ``` sudo apt install speedtest-cli ```

## add to cronjob
if you want the test to run every hour and you are running linux. You can run it as a cronjob.
run the command ```sudo contab -e``` to edit the crontab of your root user
then add ``` @hourly wget localhost/internet-tracker/SpeedTest.php ``` at the bottom of the file
make sure cron is running by running ``` systemctl status cron ``` 
if it is not running you can start it with ``` sudo systemctl start cron ``` or ``` sudo systemctl enable cron ``` to run at startup
