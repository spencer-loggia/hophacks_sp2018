THESE ARE INSTRACTIONS FOR SEETING UP YOU LOCAL DEV ENVIROMENT!!


sudo apachectl start

#check to see if worked
curl http://localhost
#should see: 'It Works!' in html container

cd ~/; mkdir Sites #capital S is important!

cd ../../../; cd etc/apache2/users/
sudo emacs <yourUserName>.conf

in this file put:

<Directory "Users/<yourUserName>/Sites/">
Options Indexes MultiViews FollowSymLinks
Require all granted
</Directory>

and save

change file permissions with

sudo chmod 644 <yourUsername>.conf

cd ../
sudo emacs /httpd.conf

uncomment following lines (or leave if already are)

LoadModule authz_core_module libexec/apache2/mod_authz_core.so

LoadModule authz_host_module libexec/apache2/mod_authz_host.so

LoadModule userdir_module libexec/apache2/mod_userdir.so

LoadModule include_module libexec/apache2/mod_include.so

LoadModule rewrite_module libexec/apache2/mod_rewrite.so

LoadModule php5_module libexec/apache2/libphp5.so

save file

sudo emacs extra/httpd-userdir.conf

uncomment line:

Include /private/etc/apache2/extra/httpd-userdir.conf

save file

check if works!!! navigate to http://localhost/~<username>/ in browser


Download mySQL, this is used for long term data storage

get from mySQL site:http://dev.mysql.com/downloads/mysql/

get the latest .dmg installer

run installer, do default installation, RECORD DEFAULT PASSWORD

ADD SQL to system path:
emacs ~/.bash_profile

add following code:
export ARCHFLAGS="arch x86_64"
export PATH=/usr/local/mysql/bin:$PATH
test -f ~/bash && source ~/.bashrc

save, restart terminal windows

RESET SQL Pass
sudo /usr/local/mysql/support-files/mysql.server stop
sudo mysql_safe --skip-grant-tables

New terminal window

mysql -u root
FLUSH PRIVILEGES;
ALTER USER 'root'@'localhost' IDENTIFIED BY 'enteryournewpassword';
\q

SQL can now be started / stopped from command line or system preferences

FIX SOCKET ERROR:
sudo mkdir /var/mysql
sudo ln -s /tmp/mysql.sock /var/mysql/mysql.sock

right now database is setup, but only acessable through commd line. phpMyAdmin supplies GUI, though unessesary rn.

CLONE REPO:
clone the git repo into the sites folder, then run
sudo chmod -R a+w ~/Sites/hophacks_sp2018

test:
browse to http://localhost/~<username>/hophacks_sp2018/bin/index.php
