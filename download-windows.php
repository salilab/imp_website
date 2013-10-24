<?php
   include("IMP.inc");
   print_page_header("Download");
?>

<div id="download">

<h2>IMP 2.1.0 Windows installer</h2>

<p>
<a href="get.php?pkg=2.1.0/download/IMP-2.1.0.exe">Download</a>
</p>

<h2>Signature</h2>

<p>Please check the installer package against the
<a href="2.1.0/download/MD5SUM">MD5SUM</a> file
to make sure it has not been tampered with.
(One way to do this is to download the
<a href="http://www.colonywest.us/index.php?option=com_content&view=article&id=46&Itemid=56">digestIT</a>
software, right click on the IMP installer package, select "digestIT 2004",
then "Verify MD5 Hash" and paste in the line for the IMP .exe file from the
MD5SUM file.)</p>

<p>
The MD5SUM file in turn
<a href="2.1.0/download/MD5SUM.asc">is signed</a> with
<a href="http://salilab.org/~ben/pubkey.asc">this GPG key</a>; you can check
to make sure this has also not been tampered with using the
<a href="http://www.gnupg.org/download/">GnuPG</a> software.
</p>

<h2>Installation and getting started</h2>

<p>The installer will install the IMP libraries and their Python interfaces
in a directory of your choosing on your Windows machine.</p>

<p>If you want to use the Python interface (e.g. if you want to run any
of the example Python scripts) you will need to install 32-bit Python 2.4, 2.5,
2.6, or 2.7 from <a href="http://www.python.org/">the Python website</a>.
Note that IMP <b>does not work</b> with Python 3 or 64-bit Python.
One way to use an IMP Python script is to open it
in the Python 'IDLE' frontend and hit F5 to run it.</p>

</div>

<?php
   print_page_footer();
?>
