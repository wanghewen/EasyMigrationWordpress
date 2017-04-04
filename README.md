# Behappydoll

This repo is meant to provide easy migration support for **Wordpress** users for establishing their own websites.  

## Requirements

 - Docker

##Instructions

 1. Install docker: If using Ubuntu, you can refer https://docs.docker.com/engine/installation/linux/ubuntu/#install-using-the-repository
 2. Instal docker-compose: https://docs.docker.com/compose/install/#alternative-install-options (can consider using pip install docker-compose)
 3. git clone this repo
 4. Edit docker-compose file: 
  - change the value of `WP_HOME` and `WP_SITEURL` for `php_config_db`
  - Change your `db` configurations like user name and password
  - Change your `wordpress` configurations in order to connect to `db`
 5. Copy mysql_data folder into the repo directory, if you want to do migration from previous website
 6. Change working directory to this repo, then:
     docker-compose up --build --remove-orphans
     (You can ignore remove-orphans if you don't have any installation of this repo before.)


## Notes
 1. Please try not to use absolute url in your articles or pages, since they won't be changed if you do migrations.