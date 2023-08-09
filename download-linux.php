<?php
   include("IMP.inc");
   print_page_header("Download");
?>

<div id="download">

<h2 class="download_title"><img src="images/linux.svg" alt="Linux logo"/>
IMP 2.19.0 Linux packages</h2>

<ul>
<li>RPM packages are provided for currently supported versions of
RedHat Enterprise Linux (RHEL) (or variants, such as CentOS or Rocky Linux)
and Fedora, for both 64-bit Intel (x86_64) and 64-bit ARM (aarch64), by the
<a href="https://copr.fedorainfracloud.org/coprs/salilab/salilab/">COPR project</a>.

<ul>
  <li>To set up, run<br />
<tt>dnf copr enable salilab/salilab</tt></li>
  <li>Then simply install the <tt>IMP</tt> package to get IMP itself
(needed for all users),
the <tt>IMP-python2</tt> package if you want Python 2 support,
the <tt>IMP-mpich</tt> package if you want to use the IMP.mpi module,
and the <tt>IMP-devel</tt> package if you need to compile C++ code using the IMP libraries. (From the command line, use <tt>dnf install IMP</tt>)</li>
  <li>(Note that on RHEL systems you will first need to activate the
<a href="https://fedoraproject.org/wiki/EPEL">EPEL</a> repository, e.g.
with <tt>dnf install epel-release</tt>.)</li>
  <li>(On RHEL 7, use <tt>yum</tt> rather than <tt>dnf</tt>.)</li>
</ul>

<p /></li>

<li>Ubuntu LTS (22.04, Jammy Jellyfish; 20.04, Focal Fossa; 18.04, Bionic Beaver)
.deb packages<ul>
  <li>Just add the following line to your <tt>/etc/apt/sources.list</tt>:<br />
<tt>deb https://integrativemodeling.org/latest/download jammy/</tt>
    (<i>for Ubuntu 22.04, Jammy Jellyfish</i>)<br/>
<tt>deb https://integrativemodeling.org/latest/download focal/</tt>
    (<i>for Ubuntu 20.04, Focal Fossa</i>)<br/>
<tt>deb https://integrativemodeling.org/latest/download bionic/</tt>
    (<i>for Ubuntu 18.04, Bionic Beaver</i>)<br/></li>
  <li>Run <tt>sudo wget -O /etc/apt/trusted.gpg.d/salilab.asc https://salilab.org/~ben/pubkey256.asc</tt> to get the signing key (note this is a different key from that used for older IMP versions).</li>
  <li>Then simply install the <tt>imp</tt> package to get IMP itself
(needed for all users),
the <tt>imp-python2</tt> package if you want Python 2 support,
and the <tt>imp-dev</tt> package if you need to compile C++ code using the IMP libraries. (From the command line, use <tt>sudo apt-get update; sudo apt-get install imp</tt>)</li>
</ul>
</li>
</ul>

<h2>Individual file downloads</h2>

Each of the RPM and .deb files is <a href="2.19.0/download/">also available</a>,
as are the source RPMs (to rebuild the package for Linux variants not listed
above). See the comments in the <tt>IMP.spec</tt> file for building details.
All of the RPMs are signed with
<a href="//salilab.org/~ben/pubkey256.asc">this GPG key</a>.
</p>

<h2>Linuxbrew</h2>

If you are using <a href="http://linuxbrew.sh/">Linuxbrew</a>, you can also
install IMP by following the <a href="download-mac.html#homebrew">Homebrew
instructions</a>. (Note that this package is still experimental; if you run
into issues with it, please <a href="contact.html">let us know<a>.)

</div>

<?php
   print_page_footer();
?>
