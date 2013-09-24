#!/bin/sh
cd /home/collecta/deployer; /usr/bin/git fetch --all; /usr/bin/git reset --hard origin/master; jekyll build -s /home/collecta/deployer -d /home/collecta/site