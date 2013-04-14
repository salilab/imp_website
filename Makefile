WEB=${WEBTOP}
TOPDIR=.
SUBDIRS=1.0/tutorial

include ${TOPDIR}/Makefile.include

all: ${WEB}/groups.html ${WEB}/index.html ${WEB}/imp.css ${WEB}/pygments.css \
     ${WEB}/images ${WEB}/doc.html  ${WEB}/download.html ${WEB}/get.php \
     ${WEB}/download-windows.html ${WEB}/download-mac.html \
     ${WEB}/libTAU.html ${SUBDIRS}

${WEB}/groups.html::
	@if [ ! -d ${WEB} ]; then mkdir -p ${WEB}; fi
	(cat make-get.php index.php | php -- page=groups TOPDIR="${TOPDIR}") > phpout
	@grep -q "</html>" phpout && cp phpout $@ && rm phpout || (echo "Error occurred during production of $@: check phpout for errors"; exit 1)

${WEB}/index.html::
	@if [ ! -d ${WEB} ]; then mkdir -p ${WEB}; fi
	(cat make-get.php index.php | php -- page=home TOPDIR="${TOPDIR}") > phpout
	@grep -q "</html>" phpout && cp phpout $@ && rm phpout || (echo "Error occurred during production of $@: check phpout for errors"; exit 1)

${WEB}/pubs.html::
	@if [ ! -d ${WEB} ]; then mkdir -p ${WEB}; fi
	(cat make-get.php index.php | php -- page=pubs TOPDIR="${TOPDIR}") > phpout
	@grep -q "</html>" phpout && cp phpout $@ && rm phpout || (echo "Error occurred during production of $@: check phpout for errors"; exit 1)

${WEB}/doc.html::
	@if [ ! -d ${WEB} ]; then mkdir -p ${WEB}; fi
	(cat make-get.php index.php | php -- page=doc TOPDIR="${TOPDIR}") > phpout
	@grep -q "</html>" phpout && cp phpout $@ && rm phpout || (echo "Error occurred during production of $@: check phpout for errors"; exit 1)


${WEB}/download.html::
	@if [ ! -d ${WEB} ]; then mkdir -p ${WEB}; fi
	(cat make-get.php index.php | php -- page=download TOPDIR="${TOPDIR}") > phpout
	@grep -q "</html>" phpout && cp phpout $@ && rm phpout || (echo "Error occurred during production of $@: check phpout for errors"; exit 1)

${WEB}/download-windows.html::
	@if [ ! -d ${WEB} ]; then mkdir -p ${WEB}; fi
	(cat make-get.php index.php | php -- page=download-windows TOPDIR="${TOPDIR}") > phpout
	@grep -q "</html>" phpout && cp phpout $@ && rm phpout || (echo "Error occurred during production of $@: check phpout for errors"; exit 1)

${WEB}/download-mac.html::
	@if [ ! -d ${WEB} ]; then mkdir -p ${WEB}; fi
	(cat make-get.php index.php | php -- page=download-mac TOPDIR="${TOPDIR}") > phpout
	@grep -q "</html>" phpout && cp phpout $@ && rm phpout || (echo "Error occurred during production of $@: check phpout for errors"; exit 1)

${WEB}/get.php: get.php get.php.in misc.inc.php header.txt footer.txt
	@if [ ! -d ${WEB} ]; then mkdir -p ${WEB}; fi
	(php get.php.in; cat get.php) > phpout
	@grep -q "</html>" phpout && cp phpout $@ && rm phpout || (echo "Error occurred during production of $@: check phpout for errors"; exit 1)

${WEB}/libTAU.html::
	@if [ ! -d ${WEB} ]; then mkdir -p ${WEB}; fi
	(cat make-get.php index.php | php -- page=libTAU TOPDIR="${TOPDIR}") > phpout
	@grep -q "</html>" phpout && cp phpout $@ && rm phpout || (echo "Error occurred during production of $@: check phpout for errors"; exit 1)

${WEB}/imp.css: imp.css
	cp $< $@

${WEB}/pygments.css::
	pygmentize -f html -S tango -a .pygments > $@

${WEB}/images: images/*
	@if [ ! -d ${WEB}/images ]; then mkdir -p ${WEB}/images; fi
	cp images/* ${WEB}/images
