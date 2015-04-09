WEB=${WEBTOP}/js
TOPDIR=..
FILES=${WEB}/MathJax.js
SUBDIRS=

include ${TOPDIR}/Makefile.include

${WEB}/%.js: %.js
	@if [ ! -d ${WEB} ]; then mkdir -p ${WEB}; fi
	cp $< $@
