<?php
   include("IMP.inc");
   print_page_header("About IMP");
?>

<div id="goal">
<div class="pagesection">
<a href="http://salilab.org/40S-eIF1-eIF3">
<img class="rightimg" src="images/40S-eIF1-eIF3.png"
title="40S•eIF1•eIF3 translation initiation complex"
alt="40S•eIF1•eIF3 translation initiation complex" />
</a>
<p>IMP's broad goal is to contribute to a comprehensive structural characterization of biomolecules ranging in size and complexity from small peptides to large macromolecular assemblies. Detailed structural characterization of assemblies is generally impossible by any single existing experimental or computational method. This barrier can be overcome by hybrid approaches that integrate data from diverse biochemical and biophysical experiments (eg, x-ray crystallography, NMR spectroscopy, electron microscopy, immuno-electron microscopy, footprinting, chemical cross-linking, FRET spectroscopy, small angle X-ray scattering, immunoprecipitation, genetic interactions, etc...).</p>
</div>

<p>
We formulate the hybrid approach to structure determination as an optimization problem, the solution of which requires three main components:</p>
<ul>
   <li>the representation of the assembly,</li>
   <li>the scoring function and</li>
   <li>the optimization method.</li>
</ul>

<div class="pagesection">
<a href="http://salilab.org/phoq">
<img class="rightimg" src="images/phoq.png"
title="Model of the PhoQ two-component system"
alt="Model of the PhoQ two-component system" />
</a>
<p>
The ensemble of solutions to the optimization problem embodies the most accurate structural characterization given the available information.</p>

<p>We created IMP, the Integrative Modeling Platform, to make it easier to implement such an integrative approach to structural and dynamics problems. IMP is designed to allow mixing and matching of existing modeling components as well as easy addition of new functionality. We encourage and support contributions from other laboratories through the IMP Community.</p>

<p>See also <a href="talks.html">the talks page</a> for various talks and other
presentations about IMP.</p>
</div>
</div>

<?php
   print_page_footer();
?>
