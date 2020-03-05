# install wordpress and plugins
composer install

# link valet to the public folder
cd dist
valet link <%= packageName %>
cd ..

valet db create <%= packageName %>

# start developing
# npm run dev