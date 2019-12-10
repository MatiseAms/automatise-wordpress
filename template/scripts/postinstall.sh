# install wordpress and plugins
composer install

# link valet to the public folder
cd public
valet link <%= packageName %>
cd ..

valet secure <%= packageName %>
valet db create <%= packageName %>

# start developing
# npm run dev
