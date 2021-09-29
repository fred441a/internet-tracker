## dependencies
 - mysql
 - php
 - speedtest-cli
 - composer
 Can be installed on debian systems with:
 ``` sudo apt install speedtest-cli ```

## add to cronjob
replace ```path-to-internet-tracker``` with your path to internet tracker
``` @hourly /bin/php path-to-internet-tracker/SpeedTest.php ```
you can add cronnjobs by running ``` contab -e```

## add to apache
add this repositories to you /var/www/html folder by running ´´´sudo ln -s /path/to/internet-tracker/* /var/www/html/```

or just add replace the html folder with this repo (remember to rename it html or change it in apache config)

IT IS IMPORTANT THAT THE ROOT FOLDER OF THIS REPOSITORY IS THE ROOT FOLDER OF YOUR APACHE CONFIG.

## composer install

you need to run ´´´ composer install  ´´´ in the internet-tracker folder