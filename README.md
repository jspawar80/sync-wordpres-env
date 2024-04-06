# synchronizing a local WordPress development environment with a GitLab repository

### Setting Up SSH Key for GitLab
1. Generate an SSH Key:
Open a terminal and run the following command, replacing your_email@example.com with your email address. This command generates a new SSH key using the ED25519 algorithm.

```
ssh-keygen -t ed25519 -C "your_email@example.com"
```
2. View and Copy the SSH Public Key:
Display and copy your public SSH key to the clipboard.

```
cat ~/.ssh/id_ed25519.pub
```
3. Add SSH Key to GitLab:
- Navigate to your GitLab account settings.
- Locate the SSH key section and paste your public key there.

4. Verify SSH Connection:
Test your SSH connection to GitLab.

```
eval $(ssh-agent -s)
ssh-add  ~/.ssh/id_ed25519.pub
```
5. Configure Git:
Set your Git username and email.

```
git config --global user.email "you@example.com"
git config --global user.name "Username"
```

### Cloning the GitLab Repository and Setting Up Local WordPress

1. Clone the GitLab Repository:
Use the Git clone command to clone the repository to your local machine.

```
git clone git@gitlab.unitedbycloud.com:think-product-group/tpg-main-website.git
```

2. Prepare the Local Repository:
 switch to the development branch.

```
git checkout dev
```
3. Copy the Repository to LocalWP Site:
Synchronize the cloned repository with your LocalWP site's public directory.

```
cp -rf /home/jay/tpg-main-website/* /home/jay/Local\ Sites/final-test/app/public/
```
4. Import Database Backup:

- Access LocalWP and open the site shell.
- Import the database backup.

```
wp db import backup.sql
```
5. Search and Replace URLs:
update the site URLs within the database.

```
wp search-replace 'localhost:10009' 'localhost:10021' --all-tables
```
### Pushing Local Changes to GitLab

1 Backup the Database:

Export the latest database from your LocalWP environment.
- Access LocalWP and open the site shell.
- Export the database backup.

```
wp db export backup.sql
```
  
2. Synchronize LocalWP Files to the GitLab Repo:
Copy updated files from the LocalWP public directory back to the GitLab repository directory.

```
git pull origin dev
cp -rf /home/jay/Local\ Sites/test2/app/public/* /home/jay/tpg-main-website/
```
3. Avoid Uploading Sensitive Files:
Before pushing changes, remove any sensitive files, such as wp-config.php.

```
cd tpg-main-website
rm -rf wp-config.php
```
4. Update the GitLab Repository:

```
git stash or git clean -df
git checkout dev
git checkout -b jay
git pull origin dev
git add .
git commit -m "added development-test site files"
git push -u origin jay
```

sync local with dev
```
wp plugin deactivate --all^C
wp db import bitnami_wordpress.sql 
wp search-replace 'https://dev.thinkproductgroup.com' 'http://localhost:10003' --all-tables
wp search-replace 'dev.thinkproductgroup.com' 'localhost:10003' --all-tables
wp search-replace 'https' 'http' --all-tables
wp search-replace 'thinkproductgroup.com' 'localhost:10003' --all-tables
```



