#!/bin/bash

# exit on errors
set -e

# install wordpress and plugins
composer install

# link valet to the public folder
cd dist
valet link macs
cd ..

valet db create macs

# start developing
# npm run dev