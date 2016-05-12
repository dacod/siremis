## SIREMIS

### Web Management Interface for Kamailio SIP Server

v4.2.0, Feb 02, 2015

Web: http://siremis.asipto.com/

Compatible with Kamailio: v4.2.x, v4.3.x

### Licensing

  * code and modules developed by ASIPTO are released under GPLv2 license, or (at your option) any later version
  * for the licenses of the content of the PHPOpenBiz and Cubi frameworks included in SIREMIS tarball visit http://www.openbiz.me
  * OFC library used to build charts is licensed under GPLv2

### Install

  * http://siremis.asipto.com/install/

### Resources

Mailing lists

  * use Kamailio (OpenSER) mailing lists to ask questions about SIREMIS
    * Kamailio Users Mailing List: <sr-users@lists.sip-router.org>
    * Kamailio Devel Mailing List: <sr-dev@lists.sip-router.org>

IRC Channel:

  * #kamailio on irc.freenode.net

Github Project:

  * https://github.com/asipto/siremis

Paid support or development extensions for SIREMIS:

  * Asipto - http://www.asipto.com

Project Management:

  * Elena-Ramona Modroiu - http://www.asipto.com

For install from GIT execute the commands bellow:


  make apache24-conf
  vim /etc/apache2/sites-enabled/000-default.conf 
  service apache2 restart
  mkdir -p /var/www/html/siremis/siremis/cache/metadata
  cd /var/www/html/siremis/ ; make chown
  mkdir /var/www/html/siremis/siremis/themes/default/template/cpl
  make chown

