.PHONY: phpcs

fix:
	docker run --rm \
		--user $(shell id -u):$(shell id -g) \
		--volume $(shell pwd):/project \
		herloct/php-cs-fixer fix plugins/database/index.php