init:
	# Install PHP CS Fixer
	mkdir --parents tools/php-cs-fixer
	composer require --working-dir=tools/php-cs-fixer friendsofphp/php-cs-fixer

analyse:
	./vendor/bin/phpstan analyse

lint:
	tools/php-cs-fixer/vendor/bin/php-cs-fixer fix --config .php-cs-fixer.dist.php
