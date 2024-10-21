
css:
	@sass --style=compressed ./sass/style.scss ./assets/css/style.min.css

watch:
	@sass --watch ./sass/style.scss:./assets/css/style.css

copy:
	@rm -r ./public
	@mkdir -v ./public
	@cp -rfv ./frontend/dist/* ./api/mnr-api/ ./public

build:
	@cd frontend/ && npm run build

upload: build copy

start:
	@cd frontend/ && npm run dev

ftp:
	sftp -b sftp.txt schmidschlucht.ch2@ftp.netzone.ch
