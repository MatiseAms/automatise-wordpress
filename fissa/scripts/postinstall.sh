# install wordpress and plugins
composer install

# link valet to the public folder
cd public
valet link fissa
cd ..

valet secure fissa
valet db create fissa

# start developing
# npm run dev
