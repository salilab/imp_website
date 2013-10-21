<?php
   include("IMP.inc");
   print_page_header("Download");
?>

<div id="download">

<h2>IMP 2.0.1 Mac installer</h2>

<p>
IMP is currently supported on 64-bit Intel Macs running OS X 10.6
(Snow Leopard) or above.
</p>

<p><a href="get.php?pkg=2.0.1/download/IMP-2.0.1-10.6.dmg">Download the installer</a></p>

<p>(Newer Macs may complain that the installer is from an unknown developer.
This is expected; simply right click on the installer, and select "Open"
from the menu, rather than double-clicking on it.)</p>

<h2>Signature</h2>

<p>Please check the installer package against the
<a href="2.0.1/download/MD5SUM">MD5SUM</a> file
to make sure it has not been tampered with (open a Terminal window, change
into the directory where you downloaded the .dmg file, run
"<tt>md5 foo.dmg</tt>" where <tt>foo.dmg</tt> is the name of the file
you downloaded, and compare the output to the content of the MD5SUM file.)

<p>
The MD5SUM file in turn
<a href="2.0.1/download/MD5SUM.asc">is signed</a> with
<a href="http://salilab.org/~ben/pubkey.asc">this GPG key</a>; you can check
to make sure this has also not been tampered with using the
<a href="http://macgpg.sourceforge.net/">GnuPG</a> software.
</p>

<h2>Installation and getting started</h2>

<p>The installer will install IMP in the <tt>/usr/local/</tt> directory
on your Mac.</p>

<p>The IMP Python libraries are automatically set up to run with the default
version of Python on your Mac. To run an IMP Python script called
<tt>foo.py</tt>, simply run <tt>python foo.py</tt> from a Terminal window
in the directory containing the script. (If you have multiple versions of
Python installed on your system, you may need to force use of the default
system version by typing <tt>/usr/bin/python</tt> rather than just
<tt>python</tt>.)</p>

</div>

<?php
   print_page_footer();
?>