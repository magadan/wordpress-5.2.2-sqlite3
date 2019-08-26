# wordpress-5.2.2-sqlite3
Wordpres 5.2.2 sqlite3 flat database

Its possible to run Wordpress without MySQL or MariaDB.

Latest version of Wordpress Agust 2019

Pls read:
Its based https://darryldias.me/12/experience-wordpress-sqlite/

To run:

Go to your Apache2 Document root and 

Example:

cd /var/www/html

git clone https://github.com/magadan/wordpress-5.2.2-sqlite3.git

chown www-data -R *
chgrp www-data -R *
chmod 775 -R *  (pls read about wordpress file persmissions on ofificial website of wordpress)
apt-get update
apt-get install php-sqlite3

Go to your http://ip

Enjoy

