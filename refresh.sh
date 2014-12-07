#!/bin/bash
rm -rf app/cache/* app/logs/*
app/console assets:install
app/console assets:install --env=dev
app/console assetic:dump
app/console assetic:dump --env=dev
app/console cache:clear
app/console cache:clear --env=dev