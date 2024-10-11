
css:
	@sass --style=compressed ./sass/style.scss ./assets/css/style.min.css

watch:
	@sass --watch ./sass/style.scss:./assets/css/style.css