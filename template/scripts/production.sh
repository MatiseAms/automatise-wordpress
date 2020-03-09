#!/bin/bash

# exit on errors
set -e

cp ./wpconfig/local-config.production.php ./dist/local-config.php

cp ./config/production.js ./config/latest.js

export NODE_ENV=production

npm run webpack
