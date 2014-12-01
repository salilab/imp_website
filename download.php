<?php
   include("IMP.inc");
   print_page_header("Download");
?>

<div id="download">

<a name="stable"></a>
<h2>IMP 2.3.1 stable release</h2>

<p>This release is recommended for beginners, and should be stable.
(For the very latest features, use the
<a href="#develop">development version</a> instead.)</p>

<h3>Binary installers</h3>

<ul>
<li><a href="download-windows.html">Windows</a></li>
<li><a href="download-mac.html">Mac</a></li>
<li><a href="download-linux.html">Linux</a></li>
</ul>

<h3>Documentation</h3>

<p>Please refer to the
<a href="2.3.1/doc/html/">online documentation</a>.
You can also <a href="2.3.1/download/imp-doc-2.3.1.tar.gz">download the documentation</a>.</p>

<a name="source"></a>
<h3>Source code</h3>

<ul>
<li><a href="get.php?pkg=2.3.1/download/imp-2.3.1.tar.gz">Source code tarball</a></li>
</ul>

<p>To build IMP from source code, please refer to the
<a href="2.3.1/doc/html/installation.html">installation guide</a>.
</p>

<h3>Signatures</h3>

<p>Please check the
<a href="2.3.1/download/SHA256SUM">SHA256SUM</a> and
<a href="2.3.1/download/SHA256SUM.asc">its signature</a>.
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

<p>Binary installers for Windows, Linux (Fedora 20, RHEL 5, RHEL 6, RHEL 7),
and Mac OS X 10.6 or later
<a href="nightly/download/">are also available</a>
for the most recent nightly build that compiled successfully.</p>

<h3>Documentation</h3>

<p>Please refer to the
<a href="nightly/doc/html/">online documentation</a>.
</p>

<hr />

<a name="old"></a>
<h2>Old releases</h2>

<ul>
<li><a href="2.3.0/download/">2.3.0</a></li>
<li><a href="2.2.1/download/">2.2.1</a></li>
<li><a href="2.2.0/download/">2.2.0</a></li>
<li><a href="2.1.1/download/">2.1.1</a></li>
<li><a href="2.1.0/download/">2.1.0</a></li>
<li><a href="2.0.1/download/">2.0.1</a></li>
<li><a href="2.0.0/download/">2.0.0</a></li>
<li><a href="1.0/download/">1.0</a></li>
</ul>

</div>

<?php
   print_page_footer();
?>
