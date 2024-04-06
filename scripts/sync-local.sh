  # Define source and destination directories as variables
source_dir="/home/jay/tpg-main-website/"

# replace url with localwp site url or change the port 
replace_url="http://localhost:10018"

# Delete all files except wp-config.php
#find . -type f ! -name 'wp-config.php' -delete
find . -type f ! \( -name 'wp-config.php' -o -name 'script.sh' \) -delete


# Delete empty directories (if any)
find . -type d -empty -delete

# Use rsync with variables
rsync -ru "$source_dir"* .

sed -i 's/127.0.0.1/localhost/g; s/bitnami_wordpress/local/g' bitnami_wordpress.sql

# Import the Dev SQL Database to LocalWP database
wp db import bitnami_wordpress.sql 

# disable all the plugins
wp plugin deactivate --all

wp search-replace 'https://dev.thinkproductgroup.com' "$replace_url" --all-tables
