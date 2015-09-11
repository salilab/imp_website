<?php
   include("IMP.inc");
   print_page_header("Download");
?>

<div id="download">

<h2 class="download_title"><img src="images/windows.svg" alt="Windows logo"/>
IMP 2.5.0 Windows installer</h2>

<ul>
<li><a href="get.php?pkg=2.5.0/download/IMP-2.5.0-32bit.exe">For 32 bit</a></li>
<li><a href="get.php?pkg=2.5.0/download/IMP-2.5.0-64bit.exe">For 64 bit</a></li>
</ul>

<h2>Signature</h2>

<p>Please check the installer package against the
<a href="2.5.0/download/SHA256SUM">SHA256SUM</a> file
to make sure it has not been tampered with.
(One way to do this is
<a href="http://bhoover.com/how-to-verify-checksum-windows/">detailed here</a>.)
</p>

<p>
The SHA256SUM file in turn
<a href="2.5.0/download/SHA256SUM.asc">is signed</a> with
<a href="//salilab.org/~ben/pubkey.asc">this GPG key</a>; you can check
to make sure this has also not been tampered with using the
<a href="http://www.gnupg.org/download/">GnuPG</a> software.
</p>

<h2>Installation and getting started</h2>

<p>The installer will install the IMP libraries and their Python interfaces
in a directory of your choosing on your Windows machine.</p>

<p>If you want to use the Python interface (e.g. if you want to run any
of the example Python scripts) you will need to install Python 2.6, 2.7, 3.3,
or 3.4
from <a href="http://www.python.org/">the Python website</a> (if you installed
the 32-bit version of IMP, you'll need the 32-bit version of Python, and
likewise for the 64-bit version).
One way to use an IMP Python script is to open it
in the Python 'IDLE' frontend and hit F5 to run it.</p>

</div>

<?php
   print_page_footer();
?>
