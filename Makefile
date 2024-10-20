
css:
	@sass --style=compressed ./sass/style.scss ./assets/css/style.min.css

watch:
	@sass --watch ./sass/style.scss:./assets/css/style.css

build:
	rm -rv ./public
	mkdir -v ./public
	cp -rfv ./frontend/dist/* ./api/mnr-api/ ./public