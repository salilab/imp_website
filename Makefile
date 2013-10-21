WEB=${WEBTOP}
TOPDIR=.
INCLUDE=IMP.inc header.txt
SUBDIRS=1.0/tutorial

include ${TOPDIR}/Makefile.include

all: ${WEB}/groups.html ${WEB}/index.html ${WEB}/imp.css ${WEB}/pygments.css \
     ${WEB}/images ${WEB}/doc.html  ${WEB}/download.html ${WEB}/get.php \
     ${WEB}/download-windows.html ${WEB}/download-mac.html \
     ${WEB}/download-linux.html ${WEB}/about.html ${WEB}/news.html \
     ${WEB}/libTAU.html ${WEB}/contact.html ${SUBDIRS}

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
