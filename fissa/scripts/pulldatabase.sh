ssh staging@matise.nl -- 'mysqldump [stagingdbname] > backup.sql'
echo 'dumped database'
rsync -v -e ssh staging@matise.nl:~/backup.sql ./
echo 'downloaded database'
ssh staging@matise.nl -- 'rm backup.sql'
echo 'removed backup from server'
vagrant ssh  -- 'mysql --user=root --password=root -Nse "show tables" scotchbox | while read table; do mysql --user=root --password=root -e "drop table $table" scotchbox; done'
echo 'dropped all local tables'
vagrant ssh -- 'mysql --user=root --password=root scotchbox < /var/www/backup.sql'
echo 'restored downloaded database'
vagrant ssh -- 'rm /var/www/backup.sql'
echo 'removed local database file'
rsync -avz -e ssh staging@matise.nl:/home/staging/mati.se/httpdocs/[stagingprojectfolder]/content/uploads/ ./public/content/uploads
echo 'Uploaded content from server is in sync!'
