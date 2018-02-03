all = $(shell ./getfiles)

.PHONY: build clean test

build: /zbp/pools/ $(all)

/zbp/pools/:
	sudo mkdir -p $@

clean:
	rm -r build/*

test:
	@echo $(all)


build/%.js: src/%.js
	cp	$< $@
build/%.php: src/%.php
	cp	$< $@
build/%.css: src/%.css
	cp	$< $@
build/%.json: src/%.json
	cp	$< $@
build/%.py: src/%.py
	cp $< $@


build/%.css: src/%.less colours.less
	lessc	$< $@


build/favicon.ico: src/favicon.ico
	cp	$< $@
build/.htaccess: src/.htaccess
	cp	$< $@
build/%/.htaccess: src/%/.htaccess
	cp	$< $@
	



build/:
	mkdir	$@
build/%/:
	mkdir	$@

