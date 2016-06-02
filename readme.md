# SLUG 2016 WEB PLATFORM

### configuring mongodb
you should have mongodb installed first

```
sudo apt-get install php5-mongo
sudo service apache2 restart
```

**windows**
```
use the driver .dll file in  php_mongo-1.6.14-5.5-ts-vc11-x86 folder (according to the system this will be changed)
copy php_mongo.dll file to php/ext directory
edit php.ini file with extension=php_mongo.dll
restart the apache server
```
### installation
```
git clone https://github.com/moraspirit/msp-web.git
cd msp-web
composer install or composer update
php artisan serve
```

then navigate to `localhost:8000`

![moraspirit logo](http://moraspirit.com/sites/default/files/msp_text_logo_300.png)  
baked with ♥♥ in UOM.
