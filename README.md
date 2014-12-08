make it work
=======
**is mysql installed? does it have a DB named "forge"?**

1. clone
2. composer install
3. install gdal stuff
  * apt-add-repository ppa:ubuntugis/ubuntugis-unstable
  * apt-get update
  * apt-get install gdal-bin
4. import shape files into mysql (do this from the project directory)
  * `ogr2ogr -overwrite -progress -f "MySQL" MYSQL:forge,user=root -lco ENGINE=MyISAM tl_2014_53_sldl.shp`
5. install sphinx
  * sudo add-apt-repository ppa:builds/sphinxsearch-rel22
  * sudo apt-get update
  * sudo apt-get install sphinxsearch
5. get json stuff into Sphinx
  * from the json_legs directory: `sudo bash make_tsv.sh`
6. run migrations
  * `php artisan migrate`
7. play!
  * create a new user, login, comment on bills

##next steps##
1. make "following" work (follow comments made by other users)
2. clean up css shit (move it off of the layout blade template into the css file and make sure everything there is necessary)
3. learn more about models, make sure the right code is in the right place (controllers vs. models... gotta figure this shit out)
4. improve style (make it simple as hell)
