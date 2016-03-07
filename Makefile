CSS_DIR = www/views/pets/css
CSS_FILES = bootstrap.min.css main.css body.css header.css owl.carousel.css owl.transitions.css banner.css footer.css

JS_DIR = www/views/pets/js
JS_FILES = vendor/modernizr-2.8.3.min.js vendor/jquery-1.12.0.min.js vendor/bootstrap.min.js vendor/owl.carousel.min.js plugins.js main.js

TARGETS = $(CSS_DIR)/main.combined.css $(JS_DIR)/main.combined.js

all: $(TARGETS)

clean:
	rm -f $(TARGETS)

$(CSS_DIR)/main.combined.css: $(addprefix $(CSS_DIR)/,$(CSS_FILES))
	cat $? >$@

$(JS_DIR)/main.combined.js: $(addprefix $(JS_DIR)/,$(JS_FILES))
	cat $? >$@


install: $(TARGETS)
	if [ -e /var/www/db/pets.sqlite ]; then chattr -i /var/www/db/pets.sqlite; fi
	cp --no-preserve=ownership -rf www /var
	chattr +i /var/www/db/pets.sqlite

	chown -R www-data:www-data /var/www/uploads/contato

	cp --no-preserve=ownership conf/default.conf /etc/nginx/conf.d/
