WEB=${WEBTOP}
TOPDIR=.
INCLUDE=IMP.inc header.txt
SUBDIRS=1.0/tutorial

check: all
	./check-links.py ${WEBTOP}

FILES=${WEB}/groups.html ${WEB}/index.html ${WEB}/imp.css ${WEB}/pygments.css \
      ${WEB}/images ${WEB}/doc.html  ${WEB}/download.html ${WEB}/get.php \
      ${WEB}/download-windows.html ${WEB}/download-mac.html \
      ${WEB}/download-linux.html ${WEB}/about.html ${WEB}/news.html \
      ${WEB}/libTAU.html ${WEB}/contact.html ${WEB}/talks.html \
      ${WEB}/search-imp-users.html ${WEB}/search-imp-dev.html \
      ${WEB}/old-versions.html ${WEB}/download-anaconda.html

include ${TOPDIR}/Makefile.include

${WEB}/get.php: get.php get.php.in IMP.inc header.txt footer.txt
	@if [ ! -d ${WEB} ]; then mkdir -p ${WEB}; fi
	(php get.php.in; cat get.php) > phpout
	@grep -q "</html>" phpout && cp phpout $@ && rm phpout || (echo "Error occurred during production of $@: check phpout for errors"; exit 1)

${WEB}/imp.css: imp.css
	cp $< $@

${WEB}/pygments.css::
	pygmentize -f html -S tango -a .pygments > $@

${WEB}/images: images/*
	@if [ ! -d ${WEB}/images ]; then mkdir -p ${WEB}/images; fi
	cp images/* ${WEB}/images

mathjax::
	@if [ ! -d ${WEB}/mathjax ]; then mkdir -p ${WEB}/mathjax; fi
	tar -C mathjax --exclude .git --exclude .gitignore --exclude test --exclude unpacked --exclude docs -cf - . | tar -C ${WEB}/mathjax -xf -
