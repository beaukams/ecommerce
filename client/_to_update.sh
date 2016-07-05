if [ ! -z $1 ] ; then
	echo `php app/console cache:clear --env=prod`
	echo `sudo -S rm -rf app/logs/*` < $1; echo "sudo -S rm -rf app/logs/* dans $1"
	echo `sudo -S rm -rf app/cache/*` < $1; echo "sudo -S rm -rf app/cache/* dans $1"
	echo `sudo -S chmod -R g+wrx app/` < $1; echo "sudo chmod -R g+wrx app/ dans $1"
else
	echo "rien"
fi
