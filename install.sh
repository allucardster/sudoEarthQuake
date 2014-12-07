#!/bin/bash

if [ ! -f composer.phar ]
    then
        echo 'Download the composer.phar file'
        wget 'https://getcomposer.org/composer.phar'
fi

php composer.phar --self-update
php composer.phar install --no-interaction
echo 'Set permissions on cache and logs directories'
rm -rf app/cache/* app/logs/*
HTTPDUSER=`ps aux | grep -E '[a]pache|[h]ttpd|[_]www|[w]ww-data|[n]ginx' | grep -v root | head -1 | cut -d\  -f1`
setfacl -R -m u:"$HTTPDUSER":rwX -m u:`whoami`:rwX app/cache app/logs
setfacl -dR -m u:"$HTTPDUSER":rwX -m u:`whoami`:rwX app/cache app/logs
