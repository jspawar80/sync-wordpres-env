# Define source and destination directories as variables
source_dir="/home/jay/tpg-main-website/"
destination_dir="/home/jay/tpg-main-website/"

# Use rsync with variables
rsync -ru --exclude="wp-config.php" --exclude="script.sh" --exclude="bitnami_wordpress.sql" "$source_dir"* "$destination_dir"
