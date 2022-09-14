#!/usr/bin/python3

import os
import sys
import subprocess

# Disable linkchecker; it takes forever and needs Python 2
# todo: replace with new Python 3 linkchecker from
# https://github.com/linkchecker/linkchecker
print("linkchecker is temporarily disabled")
sys.exit(0)

dir_to_check = sys.argv[1]
os.chdir(dir_to_check)

args = ['linkchecker', '--no-warnings', '-r', '1']

files = []
for dirpath, dirnames, filenames in os.walk('.'):
    for d in ('doc', 'tutorial'):
        if d in dirnames:
            dirnames.remove(d)
    for f in filenames:
        if f.endswith('.html') \
           and (f != 'tests.html' or dirpath != './nightly'):
            files.append(os.path.join(dirpath, f)[1:])

for urltop in ['http://integrativemodeling.org', 'http://salilab.org/imp']:
    all_args = args + [urltop + x for x in files]
    subprocess.check_call(all_args)
