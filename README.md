noisedevblog
============


Apache Setup
============

<VirtualHost *:80>
	ServerName local.domain.com

	SetEnv CLEARDB_DATABASE_URL "mysql://username:password@hostname/database?args"

	DocumentRoot "/var/www/xyz"

	<Directory "/var/www/xyz">
		Options All
		AllowOverride All
	</Directory>

</VirtualHost>