<?php
   include("IMP.inc");
   print_page_header("Download");
?>

<div id="download">

<h2 class="download_title"><img src="images/apple.svg" alt="Apple logo"/>
IMP 2.6.2 Mac installer</h2>

<p><i>Homebrew users, <a href="#homebrew">see below</a>.</i></p>

<p>
IMP is currently supported on 64-bit Intel Macs running OS X 10.6
(Snow Leopard) or above.
</p>

<p><a href="get.php?pkg=2.6.2/download/IMP-2.6.2-10.6.dmg">Download the installer</a></p>

<p>(Newer Macs may complain that the installer is from an unknown developer.
This is expected; simply right click or Ctrl-click on the installer, and
select "Open" from the menu, rather than double-clicking on it.)</p>

<h2>Signature</h2>

<p>Please check the installer package against the
<a href="2.6.2/download/SHA256SUM">SHA256SUM</a> file
to make sure it has not been tampered with (open a Terminal window, change
into the directory where you downloaded the .dmg file, run
"<tt>shasum -a 256 foo.dmg</tt>" where <tt>foo.dmg</tt> is the name of the
file you downloaded, and compare the output to the content of the SHA256SUM
file.)

<p>
The SHA256SUM file in turn
<a href="2.6.2/download/SHA256SUM.asc">is signed</a> with
<a href="//salilab.org/~ben/pubkey.asc">this GPG key</a>; you can check
to make sure this has also not been tampered with using the
<a href="https://gpgtools.org/">GPGtools</a> software.
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

<a name="homebrew"></a>
<h2>Homebrew</h2>

<p>
If you use the <a href="http://brew.sh/">Homebrew</a> package manager
you can install IMP by running<br/>
<tt>brew tap salilab/salilab; brew install imp</tt>
</p>

</div>

<?php
   print_page_footer();
?>
