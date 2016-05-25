<?php
   include("IMP.inc");
   print_page_header("Download");
?>

<div id="download">

<a name="stable"></a>
<h2>IMP 2.6.2 stable release</h2>

<p>This release is recommended for beginners, and should be stable.
(For the very latest features, use the
<a href="#develop">development version</a> instead.)</p>

<h3>Binary installers</h3>

<ul class="bininst_list">
<li><img src="images/anaconda.png" alt="Anaconda logo"/>
    <a href="download-anaconda.html">Anaconda Python ("conda")</a></li>
<li><img src="images/windows.svg" alt="Windows logo"/>
    <a href="download-windows.html">Windows</a></li>
<li><img src="images/apple.svg" alt="Apple logo"/>
    <a href="download-mac.html">Mac</a></li>
<li><img src="images/linux.svg" alt="Linux logo"/>
    <a href="download-linux.html">Linux</a></li>
</ul>

<h3>Documentation</h3>

<p>Please refer to the
<a href="2.6.2/doc/manual/">online documentation</a>.
You can also <a href="2.6.2/download/imp-doc-2.6.2.tar.gz">download the documentation</a>.</p>

<a name="source"></a>
<h3>Source code</h3>

<ul>
<li><a href="get.php?pkg=2.6.2/download/imp-2.6.2.tar.gz">Source code tarball</a></li>
</ul>

<p>To build IMP from source code, please refer to the
<a href="2.6.2/doc/manual/installation.html">installation guide</a>.
</p>

<h3>Signatures</h3>

<p>Please check the
<a href="2.6.2/download/SHA256SUM">SHA256SUM</a> and
<a href="2.6.2/download/SHA256SUM.asc">its signature</a>.
</p>

<hr />

<a name="develop"></a>
<h2>Development version</h2>

<p>The latest development version of the IMP source code is hosted <a
href="http://github.com/salilab/imp/">at github</a>. Note that this may not
always work, but does include new functionality not in the 
<a href="#stable">stable release</a>. This
version is tested every night; please check out the
<a href="nightly/results/">nightly builds results
page</a> to see if the code is currently stable enough for your purposes.</p>

<p>Binary installers for Windows, Linux (Fedora 23, RHEL 5/6/7,
Ubuntu 12.04 LTS/14.04 LTS/16.04 LTS), and Mac OS X 10.6 or later
<a href="nightly/download/">are also available</a>
for the most recent nightly build that compiled successfully.</p>

<h3>Documentation</h3>

<p>Please refer to the
<a href="nightly/doc/manual/">online documentation</a>.
</p>

<hr />

<a name="old"></a>
<h2>Old releases</h2>

For reference, old versions of IMP
<a href="old-versions.html">are archived</a>.

</div>

<?php
   print_page_footer();
?>
