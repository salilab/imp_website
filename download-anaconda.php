<?php
   include("IMP.inc");
   print_page_header("Download");
?>

<div id="download">

<h2 class="download_title"><img src="images/anaconda-symbol.svg" alt="Anaconda logo"/>
IMP 2.12.0 Anaconda Python installer</h2>

<p>IMP is packaged to use with the
<a href="https://www.anaconda.com/download/">Anaconda scientific
Python distribution</a> for Windows, Linux and Mac.</p>

<p>
To install IMP using the 'conda' package manager, simply run from a command
line</p>

<p><tt>conda config --add channels salilab</tt><br />
<tt>conda install imp</tt></p>

<p>We currently support both Anaconda 2 (Python 2.7) and Anaconda 3
(Python 3.7).</p>

<p>The Anaconda packages are MPI-enabled (but do not <b>require</b> MPI).
This allows IMP parallel jobs that use the IMP.mpi or IMP.spb modules to
be run via <tt>mpirun</tt> or <tt>mpiexec</tt>. On Mac and Linux this uses
the <tt>openmpi</tt> and <tt>mpich</tt> Anaconda packages, respectively.
On Windows, this uses Microsoft MPI, which needs to be
<a href="https://msdn.microsoft.com/en-us/library/bb524831.aspx">installed
separately</a>.</p>

</div>

<?php
   print_page_footer();
?>
