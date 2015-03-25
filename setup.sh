# Colors 
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
NC='\033[0m'

_install() {
	if [ ! -e /usr/bin/saathi ];
	then
		ln -s `readlink -f $0` /usr/bin/saathi
		if [ ! $? -eq 0 ];
		then
			echo "${YELLOW}Re-run as sudo to setup this script${NC}"
		fi
		apt-get install lamp-server^ # install the whole goddammed lamp stack 
	fi
}

_check() {
	if [ -f app/config.php ];
	then
		echo "${GREEN}Using config `pwd`/app/config.php${NC}"
	else
		echo "${RED}Config not Found.. Please copy the config file and make changes.${NC}"
		exit 1
	fi
}

_start () {
	_check

	php -S localhost:8000 > /dev/null &
	#Please edit this script if you are not using php development server
	if [ $? -eq 0 ];
	then
		# is never seen; :P
		echo "${GREEN}Start Sucessful${NC}"
	else
		echo "${RED}Start Failed${NC}"
	fi
	echo
}

_stop () {
	killall php # because why not?

	if [ $? -eq 0 ];
	then 
		echo "${GREEN}Stop Sucessful${NC}"
	else
		echo "${RED}Stop Failed${NC}"
	fi
	echo
}

_install

case "$1" in 
	start)
		_start
		;;
	stop)
		_stop
		;;
	status)
		_check
		;;
	install)
		_install
		;;
	restart|reload)
		_stop
		_start
		;;
	*)
		echo "Usage : $0 {start|stop|restart|reload|status|install}"
		exit 1
esac
exit 0 

