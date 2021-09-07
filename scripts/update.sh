git stage -A && git commit -m "$(date '+%d/%m/%Y %H:%M:%S')" ; git push ; \
ssh tintafresca.net "cd /var/www/tintafresca/wp-content/themes/m.tintafresca.net && git pull"
