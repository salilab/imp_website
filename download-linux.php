<?php
   include("IMP.inc");
   print_page_header("Download");
?>

<div id="download">

<h2>IMP 2.3.1 Linux packages</h2>

<ul>
<li>RedHat Enterprise Linux 5 RPMs (needs Python 2.6 from EPEL)<ul>
  <li>Base IMP package (needed for all users):
<a href="get.php?pkg=2.3.1/download/IMP-2.3.1-1.el5.centos.i386.rpm">32-bit</a>;
<a href="get.php?pkg=2.3.1/download/IMP-2.3.1-1.el5.centos.x86_64.rpm">x86_64</a>
  </li>
  <li>IMP-devel package (needed to compile C++ code using the IMP libraries):
<a href="get.php?pkg=2.3.1/download/IMP-devel-2.3.1-1.el5.centos.i386.rpm">32-bit</a>;
<a href="get.php?pkg=2.3.1/download/IMP-devel-2.3.1-1.el5.centos.x86_64.rpm">x86_64</a>
  </li>
  <li><b>Note</b> that you will also need a newer version of HDF5 than ships
with RHEL5. We provide this for
<a href="nightly/download/hdf518-1.8.11-2.el5.centos.i386.rpm">32-bit</a> and
<a href="nightly/download/hdf518-1.8.11-2.el5.centos.x86_64.rpm">64-bit</a>.</li>
</ul>
</li>

<li>RedHat Enterprise Linux 6 RPMs<ul>
  <li>Base IMP package (needed for all users):
<a href="get.php?pkg=2.3.1/download/IMP-2.3.1-1.el6.i686.rpm">32-bit</a>;
<a href="get.php?pkg=2.3.1/download/IMP-2.3.1-1.el6.x86_64.rpm">x86_64</a>
  </li>
  <li>IMP-devel package (needed to compile C++ code using the IMP libraries):
<a href="get.php?pkg=2.3.1/download/IMP-devel-2.3.1-1.el6.i686.rpm">32-bit</a>;
<a href="get.php?pkg=2.3.1/download/IMP-devel-2.3.1-1.el6.x86_64.rpm">x86_64</a>
  </li>
</ul>
</li>

<li>RedHat Enterprise Linux 7 RPMs<ul>
  <li>Base IMP package (needed for all users):
<a href="get.php?pkg=2.3.1/download/IMP-2.3.1-1.el6.x86_64.rpm">x86_64</a>
  </li>
  <li>IMP-devel package (needed to compile C++ code using the IMP libraries):
<a href="get.php?pkg=2.3.1/download/IMP-devel-2.3.1-1.el6.x86_64.rpm">x86_64</a>
  </li>
</ul>
</li>

<li>Fedora 20 Linux RPMs (with CGAL):<ul>
  <li>Base IMP package (needed for all users):
<a href="get.php?pkg=2.3.1/download/IMP-2.3.1-1.fc20.x86_64.rpm">x86_64</a></li>
  <li>IMP-devel package (needed to compile C++ code using the IMP libraries):
<a href="get.php?pkg=2.3.1/download/IMP-devel-2.3.1-1.fc20.x86_64.rpm">x86_64</a></li>
</ul>
</li>

<li>Ubuntu LTS (14.04, Trusty Tahr) .deb packages<ul>
  <li>Just add the following line to your <tt>/etc/apt/sources.list</tt>:<br />
<tt>deb http://integrativemodeling.org/latest/download trusty/</tt></li>
  <li>Run <tt>sudo apt-key adv --keyserver keyserver.ubuntu.com --recv-keys 745E6093</tt> to get the signing key.
  <li>Then simply install the <tt>imp</tt> package to get IMP itself
(needed for all users) or the <tt>imp-dev</tt> package if you need to compile C++ code using the IMP libraries. (From the command line, use <tt>sudo apt-get update; sudo apt-get install imp</tt>)</li>
</ul>
</li>
</ul>

<h2>Signature</h2>

<p>All of the RPMs are signed with
<a href="http://salilab.org/~ben/pubkey.asc">this GPG key</a>. We recommend
you check your IMP RPMs for tampering by downloading the key, importing it
(with <tt>sudo rpm --import pubkey.asc</tt>), then verifying the RPMs
(with <tt>rpm -K IMP*.rpm</tt>).</p>

<h2>Source RPMs</h2>

<p>Source RPMs (to rebuild the package for Linux variants not listed above)
are <a href="2.3.1/download/">also available</a>.</p>

</div>

<?php
   print_page_footer();
?>
