.PHONY: phpcs

fix:
	docker run --rm \
		--user $(shell id -u):$(shell id -g) \
		--volume $(shell pwd)/plugins/gif_not_found:/project \
		herloct/php-cs-fixer fix /project