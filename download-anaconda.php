<?php
   include("IMP.inc");
   print_page_header("Download");
?>

<div id="download">

<h2 class="download_title"><img src="images/anaconda-symbol.svg" alt="Anaconda logo"/>
IMP 2.6.2 Anaconda Python installer</h2>

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

<p>Note that on Windows Anaconda is currently buggy. IMP will install, but
will fail at runtime with an error ending in "<tt>IMP is not 
installed or set up correctly</tt>" mentioning a path containing lots of
"<tt>placehold_placehold</tt>". A workaround for now is to run</p>
<p><tt>conda uninstall imp</tt><br />
<tt>conda install conda=4.2.9</tt><br />
<tt>conda install imp conda=4.2.9</tt></p>

</div>

<?php
   print_page_footer();
?>
