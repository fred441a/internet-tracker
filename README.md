## setup

### raspberry pi
follow [this](https://randomnerdtutorials.com/raspberry-pi-apache-mysql-php-lamp-server/) guide to setup a LAMP server on your raspberry pi
clone the repository to your pi directory
```
$ cd /home/pi
$ git clone https://github.com/fred441a/internet-tracker
```
make a link symlink to the folder your apache server is running from

```$ sudo ln -s /home/pi/internet-tacker /var/www/html/internet-tracker ```

### other
setup a LAMP server
clone this repository into the folder apache is serving


## dependencies
 - mysql
 - php
 - speedtest-cli
 Can be installed on debian systems with:
 ``` sudo apt install speedtest-cli ```

## add to cronjob
if you want the test to run every hour and you are running linux. You can run it as a cronjob.
run the command ```$ sudo contab -e``` to edit the crontab of your root user
then add ``` @hourly wget localhost/internet-tracker/SpeedTest.php ``` at the bottom of the file
make sure cron is running by running ```$ systemctl status cron ``` 
if it is not running you can start it with ```$ sudo systemctl start cron ``` or ```$ sudo systemctl enable cron ``` to run at startup
