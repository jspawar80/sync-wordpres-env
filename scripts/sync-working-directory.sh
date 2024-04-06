# Define source and destination directories as variables
source_dir="/home/jay/tpg-main-website/"
destination_dir="/home/jay/tpg-main-website/"
replace_url="http://localhost:10018"

rm -rf bitnami_wordpress.sql

wp search-replace  "$replace_url" 'https://dev.thinkproductgroup.com' --all-tables

wp db export bitnami_wordpress.sql

# Use rsync with variables
rsync -ru --exclude="wp-config.php" --exclude="script.sh" "$source_dir"* "$destination_dir"
