#!/bin/sh
echo "removing swp files\n"
./rmswp.sh
echo "making DB dump\n"
rm ./dump.sql
mysqldump -uroot -proot db002 > ./dump.sql
echo "making tags file\n"
./c.sh
echo "adding to git repo\n"
git add .
git commit -m "$1"
git push
