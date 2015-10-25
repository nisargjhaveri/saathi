> Unmaintained

# saathi
A simple disaster management system

## How to run
To run the app  run `setup.sh` with appropriate arguments.

The same script can also be used for setting up the project and install dependencies for the first time. It is target for default Ubuntu-like installations. Might or might not work as it is on some other variances.

**Warning: The script might involve some changes to some root owned directories apart from installing some dependencies**

## Setting Up the Config
To set up the config, go to app folder and copy the _**config_example.php**_ file as _**config.php**_. Use the following command to do so:


	cp config_example.php config.php


Once that is done, open the _**config.php**_ file, and change the `DB_HOST`, `DB_USER`, `DB_PASS` and `DB_NAME` as per ypur local system information.

	define('DB_HOST', 'localhost');
	define('DB_USER', '<Database User>');
	define('DB_PASS', '<Database Password>');
	define('DB_NAME', '<Database Name>');

Now, open your application and you should see a simple page with _**Project Saathi** A disaster Management System_ written on it.

## Database Setup
Once your done with the above, you need to create your database. For this, use the _**saathi.sql**_ file. Use the import feature of **phpMyAdmin** for this.

## Other dependencies
The project requires [`mysqlnd`](http://php.net/manual/en/book.mysqlnd.php) driver for some functinalities. You can install it with following command in Ubuntu.

    sudo apt-get install php5-mysqlnd

## Issues
If you come across any problems, please mention it on the issues page. The concerned people will try to help you as soon as possible.
