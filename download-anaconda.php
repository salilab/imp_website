<?php
   include("IMP.inc");
   print_page_header("Download");
?>

<div id="download">

<h2 class="download_title"><img src="images/anaconda.png" alt="Anaconda logo"/>
IMP 2.6.1 Anaconda Python installer</h2>

<p>IMP is packaged to use with the
<a href="https://store.continuum.io/cshop/anaconda/">Anaconda scientific
Python distribution</a> for Windows, Linux and Mac.</p>

<p>
To install IMP using the 'conda' package manager, simply run from a command
line</p>

<p><tt>conda config --add channels salilab</tt><br />
<tt>conda install imp</tt></p>

<p>We currently support both Anaconda 2 (Python 2.7) and Anaconda 3
(Python 3.5).</p>

</div>

<?php
   print_page_footer();
?>
