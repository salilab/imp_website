<?php
   include("IMP.inc");
   print_page_header("Download");
?>

<div id="download">

<h2 class="download_title"><img src="images/linux.svg" alt="Linux logo"/>
IMP 2.11.1 Linux packages</h2>

<ul>
<li>RedHat Enterprise Linux (or variants, such as CentOS or Scientific Linux)<br />
These packages also require that you have the
<a href="https://fedoraproject.org/wiki/EPEL">EPEL</a> repository installed.<br />
The easiest way to install these RPMs is to use something like<br /><tt>yum localinstall IMP-*.rpm</tt>
<ul>
<li>RHEL 6 RPMs<ul>
  <li>Base IMP package (needed for all users):
<a href="get.php?pkg=2.11.1/download/IMP-2.11.1-1.el6.i686.rpm">32-bit</a>;
<a href="get.php?pkg=2.11.1/download/IMP-2.11.1-1.el6.x86_64.rpm">x86_64</a>
  </li>
  <li>IMP-mpich package (needed if you want to use the IMP.mpi module):
<a href="get.php?pkg=2.11.1/download/IMP-mpich-2.11.1-1.el6.i686.rpm">32-bit</a>;
<a href="get.php?pkg=2.11.1/download/IMP-mpich-2.11.1-1.el6.x86_64.rpm">x86_64</a>
  </li>
  <li>IMP-devel package (needed to compile C++ code using the IMP libraries):
<a href="get.php?pkg=2.11.1/download/IMP-devel-2.11.1-1.el6.i686.rpm">32-bit</a>;
<a href="get.php?pkg=2.11.1/download/IMP-devel-2.11.1-1.el6.x86_64.rpm">x86_64</a>
  </li>
</ul>
</li>

<li>RHEL 7 RPMs<ul>
  <li>Base IMP package (needed for all users):
<a href="get.php?pkg=2.11.1/download/IMP-2.11.1-1.el7.centos.x86_64.rpm">x86_64</a>
  </li>
  <li>IMP-mpich package (needed if you want to use the IMP.mpi module):
<a href="get.php?pkg=2.11.1/download/IMP-mpich-2.11.1-1.el7.centos.x86_64.rpm">x86_64</a>
  </li>
  <li>IMP-devel package (needed to compile C++ code using the IMP libraries):
<a href="get.php?pkg=2.11.1/download/IMP-devel-2.11.1-1.el7.centos.x86_64.rpm">x86_64</a>
  </li>
</ul>
</li>
</ul>
<p /></li>

<li>Fedora 30 Linux RPMs<br />
The easiest way to install these RPMs is to use something like<br /><tt>dnf localinstall IMP-*.rpm</tt>
<ul>
  <li>Base IMP package (needed for all users):
<a href="get.php?pkg=2.11.1/download/IMP-2.11.1-1.fc30.x86_64.rpm">x86_64</a></li>
  <li>IMP-python3 package (needed if you want to use Python 3 rather than 2):
<a href="get.php?pkg=2.11.1/download/IMP-python3-2.11.1-1.fc30.x86_64.rpm">x86_64</a></li>
  <li>IMP-mpich package (needed if you want to use the IMP.mpi module):
<a href="get.php?pkg=2.11.1/download/IMP-mpich-2.11.1-1.fc30.x86_64.rpm">x86_64</a></li>
  <li>IMP-devel package (needed to compile C++ code using the IMP libraries):
<a href="get.php?pkg=2.11.1/download/IMP-devel-2.11.1-1.fc30.x86_64.rpm">x86_64</a></li>
</ul>
<p /></li>

<li>Ubuntu LTS (18.04, Bionic Beaver; 16.04, Xenial Xerus; 14.04, Trusty Tahr)
.deb packages<ul>
  <li>Just add the following line to your <tt>/etc/apt/sources.list</tt>:<br />
<tt>deb https://integrativemodeling.org/latest/download bionic/</tt>
    (<i>for Ubuntu 18.04, Bionic Beaver</i>)<br/></li>
<tt>deb https://integrativemodeling.org/latest/download xenial/</tt>
    (<i>for Ubuntu 16.04, Xenial Xerus</i>)<br/>
<tt>deb https://integrativemodeling.org/latest/download trusty/</tt>
    (<i>for Ubuntu 14.04, Trusty Tahr</i>)<br/>
  <li>Run <tt>sudo apt-key adv --keyserver keyserver.ubuntu.com --recv-keys 22A3BF2B</tt> to get the signing key.</li>
  <li>Then simply install the <tt>imp</tt> package to get IMP itself
(needed for all users),
the <tt>imp-python3</tt> package if you want Python 3 support,
and the <tt>imp-dev</tt> package if you need to compile C++ code using the IMP libraries. (From the command line, use <tt>sudo apt-get update; sudo apt-get install imp</tt>)</li>
</ul>
</li>
</ul>

<h2>Signature</h2>

<p>All of the RPMs are signed with
<a href="//salilab.org/~ben/pubkey4.asc">this GPG key</a>. We recommend
you check your IMP RPMs for tampering by downloading the key, importing it
(with <tt>sudo rpm --import pubkey4.asc</tt>), then verifying the RPMs
(with <tt>rpm -K IMP*.rpm</tt>).</p>

<h2>Source RPMs</h2>

<p>Source RPMs (to rebuild the package for Linux variants not listed above)
are <a href="2.11.1/download/">also available</a>. See the comments in the
<tt>IMP.spec</tt> file for building details.</p>

<h2>Linuxbrew</h2>

If you are using <a href="http://linuxbrew.sh/">Linuxbrew</a>, you can also
install IMP by following the <a href="download-mac.html#homebrew">Homebrew
instructions</a>. (Note that this package is still experimental; if you run
into issues with it, please <a href="contact.html">let us know<a>.)

</div>

<?php
   print_page_footer();
?>
