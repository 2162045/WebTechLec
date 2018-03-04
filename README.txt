*This repository is for webtech lecture where you can add and commit your work.

Apache configurations
1.Copy the website folder to "C:\wamp64\www"
2.Open wamp under the task bar and configure "httpd-vhosts.conf" under Apache
3.copy and paste this configuration to the text file

# Virtual Hosts
#
<VirtualHost 192.168.1.4:80>
  ServerName localhost
  ServerAlias localhost
  DocumentRoot "${INSTALL_DIR}/www/website"
  <Directory "${INSTALL_DIR}/www/website">
    Options +Indexes +Includes +FollowSymLinks +MultiViews
    AllowOverride All
    Require all granted
  </Directory>
</VirtualHost>

4.Save configurations
5.restart the wamp server
6.input localhost or the provided IP "192.168.1.4" to web browser
