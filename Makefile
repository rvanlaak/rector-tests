DIR := ${CURDIR}
QA_IMAGE := jakzal/phpqa:alpine

upgrade-php:
	docker run --rm -v $(DIR):/project -w /project jakzal/phpqa:alpine composer install
	docker run --rm -v $(DIR):/project -w /project jakzal/phpqa:alpine rector process src \
		--set php74 \
		--set symfony50
