FROM php:5.6-apache
#Activate mysqli plugins
RUN docker-php-ext-install mysqli

#Pass env variables into php and modify db configs
ARG WP_HOME
ARG WP_SITEURL
ARG WP_FOLDER
ENV WP_HOME=$WP_HOME
ENV WP_SITEURL=$WP_SITEURL
ENV WP_FOLDER=$WP_FOLDER
COPY docker-entrypoint.sh /usr/local/bin/
RUN chmod 777 /usr/local/bin/docker-entrypoint.sh
RUN chmod -R 777 $WP_FOLDER
COPY changedb.php /usr/local/bin/
