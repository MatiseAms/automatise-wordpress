#!/bin/bash

# exit on errors
set -e

# copy dev config to the latest.js (which is used in nuxt.config.js)
rm -rf ./dist/content/themes
mkdir -p dist
cp -R ./wpconfig/default/ ./dist/
cp -R ./wpconfig/dev/ ./dist/
cp ./config/dev.js ./config/latest.js


export NODE_ENV=development
# check port and export port
port="3000"
while true; do
	if lsof -Pi :$port -sTCP:LISTEN -t >/dev/null ; then
		port=$[$port+1]
		echo "$port"
	else
		export PORT=$port
		break
	fi
done

npm run webpack:watch