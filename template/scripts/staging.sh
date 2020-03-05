# copy dev config to the latest.js (which is used in nuxt.config.js)
rm -rf ./dist/content/themes
mkdir -p dist
cp -R ./wpconfig/default/ ./dist/
cp -R ./wpconfig/staging/ ./dist/
cp ./config/staging.js ./config/latest.js


export NODE_ENV=production

npm run webpack