<?php
   include("IMP.inc");
   print_page_header("IMP, the Integrative Modeling Platform");
?>

<div id="home">

<div class="pagesection">
<a href="//salilab.org/npc">
<img class="leftimg" src="images/nucleopore.gif"
title="Model of the nuclear pore complex"
alt="Model of the nuclear pore complex" />
</a>
<p>
IMP's broad goal is to contribute to a comprehensive structural characterization of biomolecules ranging in size and complexity from small peptides to large macromolecular assemblies, by integrating data from diverse biochemical and biophysical experiments.
IMP provides an open source C++ and Python toolbox for solving complex
modeling problems, and a number of applications for tackling some common
problems in a user-friendly way. IMP can also be used from the 
<a href="http://www.cgl.ucsf.edu/chimera/">Chimera</a> molecular modeling
system, or via one of several web applications.
</p>
</div>

<div class="pagesection">
<a href="//salilab.org/pde6">
<img class="rightimg" src="images/pde6.png"
title="Model of the phosphodiesterase (PDE6)"
alt="Model of the phosphodiesterase (PDE6)" />
</a>
<p>
IMP is open source software, mostly available under the terms of the
<a href="https://www.gnu.org/licenses/lgpl.html">GNU Lesser General Public
License (LGPL)</a>. (Some IMP modules are available under the 
<a href="https://www.gnu.org/licenses/gpl.html">GNU GPL</a> instead.)
</p>

<p>
<b>Please note:</b> <i>While IMP currently supports both Python 2 and Python 3,
Python 2 was officially retired several years ago, and we plan to drop support
for Python 2 in the next IMP stable release after June 30th, 2024.
If this would cause a lot of issues with your own workflows and for some reason
you cannot move to Python 3, please <a href="contact.html">let us know</a> or update the relevant <a href="https://github.com/salilab/imp/issues/1092">GitHub issue</a></i>.
</p>

<p>
Get started with IMP by <a href="download.html">downloading it</a> and
checking out the <a href="doc.html">documentation</a>.</p>
</div>

<div class="pagesection">
<a href="http://www.ncdir.org/">
<img src="images/NCDIR.png" class="ncdir" alt="NCDIR logo" />
</a>
<p class="ncdir">The IMP software is used as part of the
<a href="http://www.ncdir.org/">National Center for Dynamic Interactome Research</a> (NCDIR).
</p>
</div>

<div class="pagesection">
<a href="//salilab.org/sea">
<img class="rightimg" src="images/sea.png"
title="Model of the SEA complex"
alt="Model of the SEA complex" />
</a>
<p>
If you use IMP, please cite
<a href="https://www.ncbi.nlm.nih.gov/pubmed/22272186">D. Russel, K. Lasker,
B. Webb, D. Schneidman, J. Velázquez-Muriel, A. Sali, "Putting the pieces
together: integrative structure determination of macromolecular assemblies",
PLoS Biology, 2012</a>.
The main page of each IMP module in the <a href="doc.html">documentation</a>
also lists publications relevant to that module.</p>
</div>

</div>

<?php
   print_page_footer();
?>
