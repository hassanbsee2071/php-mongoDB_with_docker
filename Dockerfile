FROM centos:7


RUN yum -y install http://rpms.remirepo.net/enterprise/remi-release-7.rpm
RUN yum -y install yum-utils
# Install Apache
RUN yum -y update

RUN yum-config-manager --enable remi-php72
# Install EPEL Repo
#RUN rpm -Uvh https://dl.fedoraproject.org/pub/epel/epel-release-latest-7.noarch.rpm \
# && rpm -Uvh https://mirror.webtatic.com/yum/el7/webtatic-release.rpm

# Install PHP
RUN yum -y update 
RUN yum -y install vim zlib-dev openssl-devel sqlite-devel bzip2-devel xz-libs gcc g++ build-essential kernel-headers kernel-devel make httpd httpd-tools wget net-tools mlocate epel-release php72 php72-php-fpm php72-php-gd php72-php-json php72-php-mbstring php72-php-mysqlnd php72-php-xml php72-php-xmlrpc php72-php-opcache php php-mcrypt php-cli php-gd php-curl php-mysql php-ldap php-zip php-fileinfo php-devel 
# Update Apache Configuration
RUN sed -E -i -e '/<Directory "\/var\/www\/html">/,/<\/Directory>/s/AllowOverride None/AllowOverride All/' /etc/httpd/conf/httpd.conf
RUN sed -E -i -e 's/DirectoryIndex (.*)$/DirectoryIndex index.php \1/g' /etc/httpd/conf/httpd.conf

EXPOSE 80

# Start Apache
CMD ["/usr/sbin/httpd","-D","FOREGROUND"]

#RUN yum -y install php72 test 2>&1 > /var/log/dockerfile.log || echo "There were failing tests!"
#RUN yum -y install php72-php-fpm php72-php-gd php72-php-json php72-php-mbstring php72-php-mysqlnd php72-php-xml php72-php-xmlrpc php72-php-opcache test 2>&1 > /var/log/dockerfile.log || echo "There were failing tests!"
#RUN yum -y install php php-mcrypt php-cli php-gd php-curl php-mysql php-ldap php-zip php-fileinfo test 2>&1 > /var/log/dockerfile.log || echo "There were failing tests!"
#RUN yum -y install wget test 2>&1 > /var/log/dockerfile.log || echo "There were failing tests!"


RUN wget https://pecl.php.net/get/mongodb-1.8.0.tgz
RUN tar -xvzf mongodb-1.8.0.tgz
#RUN yum -y install php-devel
#RUN yum -y install mlocate
#RUN yum -y install net-tools
RUN cd mongodb-1.8.0/ && phpize && ./configure && make all && make install
RUN sed -i '872i\extension=/usr/lib64/php/modules/mongodb.so' /etc/php.ini
RUN php -i | grep mongo
COPY html/ /var/www/html/

RUN chown -R apache:apache  /var/www/html
