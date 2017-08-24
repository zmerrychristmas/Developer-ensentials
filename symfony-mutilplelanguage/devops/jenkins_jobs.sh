#!/usr/bin/env bash
composer install -n
#bin/console doctrine:database:create
bin/console doctrine:schema:update --force
bin/console cache:clear --env=prod --no-warmup
sudo cp -a $WORKSPACE/* /working/mookeen/mookeen
sudo chown -hR www-data:www-data /working/mookeen/mookeen