# wordpress-5.2.2-sqlite3
Wordpres 5.2.2 sqlite3 flat database

Its possible to run Wordpress without MySQL or MariaDB.

Latest version of Wordpress Agust 2019

Pls read:
Its based https://darryldias.me/12/experience-wordpress-sqlite/

Read: https://wordpress.org/plugins/sqlite-integration/

To run:

Go to your Apache2 Document root and 

Example:

cd /var/www/html

git clone https://github.com/magadan/wordpress-5.2.2-sqlite3.git

chown www-data -R *<br>
chgrp www-data -R *<br>
chmod 775 -R *  (pls read about wordpress file persmissions on ofificial website of wordpress)<br>
apt-get update<br>
apt-get install php-sqlite3<br><br>

Go to your http://ip

After install process, go to plugins sqlite-integration and activate it !

Enjoy

Note: This project is for lab pourposes, using at production enviroment at your own risk. No garantee.

