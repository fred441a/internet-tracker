## setup

### raspberry pi
if you have a raspberry pi 4 you can use this sdcard image i have made for my raspberry pi

[Download](https://mega.nz/file/ahJhXY6R#cbc_UOvZmL6-UwzJy4G-QG-O64hVrVQ_88GAyv8wVlE)

every password has been set to "password"

follow [this](https://randomnerdtutorials.com/raspberry-pi-apache-mysql-php-lamp-server/) guide to setup a LAMP server on your raspberry pi

install the speedtest cli dependency

```$ sudo apt install speedtest-cli ```

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
 - composer
 Can be installed on debian systems with:
 ```$ sudo apt install speedtest-cli ```

## add to cronjob
replace ```path-to-internet-tracker``` with your path to internet tracker
``` @hourly /bin/php path-to-internet-tracker/SpeedTest.php ```
you can add cronnjobs by running ``` contab -e```

## add to apache
add this repositories to you /var/www/html folder by running ```sudo ln -s /path/to/internet-tracker/* /var/www/html/```

or just add replace the html folder with this repo (remember to rename it html or change it in apache config)

IT IS IMPORTANT THAT THE ROOT FOLDER OF THIS REPOSITORY IS THE ROOT FOLDER OF YOUR APACHE CONFIG.

## composer install

you need to run ``` composer install  ``` in the internet-tracker folder
