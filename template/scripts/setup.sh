#!/bin/bash

# exit on errors
set -e

mkdir -m777 dist
mkdir -m777 dist/content
mkdir -m777 dist/content/themes

cp ./wpconfig/default/.htaccess ./dist/.htaccess
cp ./wpconfig/default/index.php ./dist/index.php
cp ./wpconfig/default/wp-config.php ./dist/wp-config.php

