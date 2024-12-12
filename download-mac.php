<?php
   include("IMP.inc");
   print_page_header("Download");
?>

<div id="download">

<h2 class="download_title"><img src="images/apple.svg" alt="Apple logo"/>
IMP 2.22.0 Mac installer</h2>

<p>
On the Mac we provide packages using either
<a href="https://brew.sh/">Homebrew</a>
or <a href="download-anaconda.html">Anaconda</a>.
If using Homebrew, you can install IMP by running<br/>
<tt>brew tap salilab/salilab; brew install imp</tt>
</p>

<p>Next, to run an IMP Python script called
<tt>foo.py</tt>, simply run <tt>python3 foo.py</tt> from a Terminal window
in the directory containing the script. (Note that Homebrew no longer
supports Python 2.)</p>

<p>The Homebrew package supports recent macOS releases on both Intel and
Apple Silicon hardware.</p>

</div>

<?php
   print_page_footer();
?>
