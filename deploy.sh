#!/bin/sh
cd /home/collecta/deployer; /usr/bin/git fetch --all; /usr/bin/git reset --hard origin/master; /usr/local/rvm/gems/ruby-2.0.0-p247/bin/jekyll build -d ../site/