<?php
   include("IMP.inc");
   print_page_header("Download");
?>

<div id="download">

<h2 class="download_title"><img src="images/linux.svg" alt="Linux logo"/>
IMP 2.22.0 Linux packages</h2>

<ul>
<li>RPM packages for currently supported versions of RedHat Enterprise Linux
(RHEL) (or variants, such as Alma or Rocky Linux) and Fedora, for both 64-bit
Intel (x86_64) and 64-bit ARM (aarch64), provided by the
<a href="https://copr.fedorainfracloud.org/coprs/salilab/salilab/">COPR project</a>:

<ul>
  <li>To set up, run<br />
<tt>dnf copr enable salilab/salilab</tt></li>
  <li>Then simply install the <tt>IMP</tt> package to get IMP itself
(from the command line, use <tt>dnf install IMP</tt>); this will install the
IMP command line tools and the Python 3 library.</li>
  <li>Also install the <tt>IMP-devel</tt> package if you need to compile C++
code using the IMP libraries; or the <tt>IMP-mpich</tt> package
if you want to use the IMP.mpi module.
  <li>(Note that on RHEL systems you will first need to activate the
<a href="https://fedoraproject.org/wiki/EPEL">EPEL</a> repository, e.g.
with <tt>dnf install epel-release</tt>.)</li>
</ul>

<p /></li>

<li>Ubuntu LTS (24.04, Noble Numbat; 22.04, Jammy Jellyfish; 20.04, Focal Fossa)
.deb packages for 64-bit Intel (x86_64) and 64-bit ARM (aarch64), provided by
<a href="https://launchpad.net/~salilab/+archive/ubuntu/ppa">Ubuntu PPA</a>:

<ul>
  <li>To set up, run<br />
<tt>sudo apt install software-properties-common; sudo add-apt-repository ppa:salilab/ppa</tt></li>
  <li>Then simply install the <tt>imp</tt> package to get IMP itself
(needed for all users), the <tt>imp-openmpi</tt> package
if you want to use the IMP.mpi module,
and the <tt>imp-dev</tt> package if you need to compile C++ code using the
IMP libraries. (From the command line, use <tt>sudo apt-get update;
sudo apt-get install imp</tt>)</li>
  <li>(If you previously installed a version of IMP using our own packages,
we recommend you first remove them and edit <tt>/etc/apt/sources.list</tt>
to remove any references to <tt>https://integrativemodeling.org</tt>.)</li>
</ul>
</ul>

<h2>Individual file downloads</h2>

Each of the RPM and .deb files is <a href="2.22.0/download/">also available</a>,
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
