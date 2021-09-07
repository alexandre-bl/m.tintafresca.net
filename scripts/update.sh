git stage -A && git commit -m "$(date '+%d/%m/%Y %H:%M:%S')" ; git push ; \
ssh root@149.28.232.37 "cd /var/www/tintafresca/wp-content/themes/m.tintafresca.net && git pull"
