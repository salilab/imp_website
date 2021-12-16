<?php
   include("IMP.inc");
   print_page_header("Download");
?>

<div id="download">

<h2 class="download_title"><img src="images/anaconda-symbol.svg" alt="Anaconda logo"/>
IMP 2.16.0 Anaconda Python installer</h2>

<p>IMP is packaged to use with the
<a href="https://www.anaconda.com/download/">Anaconda scientific
Python distribution</a> for 64-bit Windows, x86_64 Linux, and Mac (both
Intel and Apple Silicon). It uses dependencies provided by
<a href="https://conda-forge.org/">conda-forge</a>
(unlike previous releases of IMP).</p>

<p>
To install IMP using the 'conda' package manager, simply run from a command
line</p>

<p><tt>conda config --add channels conda-forge</tt><br />
<tt>conda install imp</tt></p>

<p>We support recent versions of Python 3 (Python 3.7 through to 3.10 on most
platforms). For compatibility with old workflows, we also provide
a Python 2.7 package for Linux in the <tt>salilab</tt> channel
(add <tt>conda config --add channels salilab</tt>). Note though that this is
deprecated and will be removed in a future release; we encourage you to
move your workflows to Python 3.

<p>(We no longer provide Python 2 Anaconda packages for 64-bit Windows, or any
conda packages for 32-bit Windows, as these platforms have been dropped
upstream. For these, use the <a href="download-windows.html">standalone
installer</a> instead.)</p>

<p>The Anaconda packages are MPI-enabled (but will also run serially).
This allows IMP parallel jobs that use the IMP.mpi or IMP.spb modules to
be run via <tt>mpirun</tt> or <tt>mpiexec</tt>. On Mac and Linux this uses
the <a href="https://www.mpich.org/">mpich</a> conda-forge package,
while on Windows
<a href="https://msdn.microsoft.com/en-us/library/bb524831.aspx">msmpi</a>
is used instead.</p>

<p>Note that most Anaconda packages only include open-source IMP modules.
The closed-source <a href="https://integrativemodeling.org/nightly/doc/ref/namespaceIMP_1_1cnmultifit.html">IMP.cnmultifit</a>
module is not included. If you need this with Anaconda, please
<a href="contact.html">contact us</a>.</p>
</div>

<?php
   print_page_footer();
?>
