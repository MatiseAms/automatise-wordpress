#!/bin/bash

# exit on errors
set -e

cp ./config/production.js ./config/latest.js

export NODE_ENV=production

npm run webpack
