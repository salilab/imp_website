<?php
   include("IMP.inc");
   print_page_header("libTAU support code");
?>

<div id="libTAU">

<a name="stable"></a>

<p>libTAU is a support library needed for MultiFit, provided by
<a href="http://bioinfo3d.cs.tau.ac.il/">Haim Wolfson's group</a> at
<a href="https://www.tau.ac.il">Tel Aviv University</a>. It is not open source,
but we have permission to distribute its binaries with MultiFit and IMP. If you
want to build MultiFit from source code, you will first need to download
libTAU:</p>

<dl>
<dt>For <a href="https://www.anaconda.com/download/">Anaconda Python</a>
users</dt>
<dd>
Simply run:<br/>
<tt>conda config --add channels salilab</tt><br/>
<tt>conda install libTAU</tt>
<p/>
</dd>

<dt>For Mac users</dt>
<dd>We recommend you install the <a
href="https://brew.sh/">homebrew</a> package manager; then you
can install libTAU by simply typing <tt>brew tap salilab/salilab;
brew install libTAU</tt>.<p/>
</dd>

<dt>For Linux users with RPM</dt>
<dd>
We provide RPMs for <a href="libTAU/rhel5/">RedHat Enterprise 5</a>,
<a href="libTAU/rhel6/">RedHat Enterprise 6</a>,
<a href="libTAU/rhel7/">RedHat Enterprise 7</a>,
<a href="libTAU/fedora/">Fedora 20</a>, and
<a href="libTAU/fedora23/">Fedora 23</a>, for both 32-bit (i386) and
64-bit (x86_64) machines. (They may also work on similar systems, such
as Ubuntu.)<p/>
</dd>

<dt>Manual install for Mac, Windows or Linux users</dt>
<dd>
We provide binaries for 32-bit or 64-bit Intel Macs running OS X 10.6 or
later, Apple Silicon Macs running MacOS 11 or later,
32-bit or 64-bit Windows, and 32-bit (i386) or 64-bit (x86_64) Linux.
Download the <a href="libTAU/libTAU-1.0.2.zip">libTAU zipfile</a>, extract it,
then follow the instructions in the <tt>README</tt> file.
(<a href="libTAU/libTAU-1.0.2.zip.asc">GPG signature</a>)<p/>
</dd>

</dl>

<p><i>The zipfile and RPMs are signed with
<a href="//salilab.org/~ben/pubkey4.asc">this GPG key</a>.</i></p>

</div>

<?php
   print_page_footer();
?>
