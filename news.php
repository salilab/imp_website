<?php
   include("IMP.inc");
   print_page_header("News");
?>

<div id="news">

<dl class="newslist">
<dt>Jun 30, 2015</dt>

<dd>The <a href="download.html">IMP 2.5.0 release</a> contains
<a href="https://github.com/salilab/imp/releases/tag/2.5.0">bug fixes and
minor updates</a>. Most notably the documentation has been revised and updated;
we now provide binary packages for Ubuntu 12.04 (Precise Pangolin) in addition
to 14.04 (Trusty Tahr); a lot of obsolete and deprecated functionality has
been removed; support for OpenMP and MPI is improved; and the IMP::base and
IMP::kernel namespaces are now deprecated in favor of the top-level "IMP"
namespace.
</dd>

<dt>Feb 27, 2015</dt>

<dd>The <a href="download.html">IMP 2.4.0 release</a> contains
<a href="https://github.com/salilab/imp/releases/tag/2.4.0">bug fixes and
updates</a>. Most notably Python 3 is now supported, and a
<a href="2.4.0/doc/tutorial/rnapolii_stalk.html">new tutorial example</a>
that determines the structure of part of RNA Polymerase II, using the
<a href="2.4.0/doc/html/namespaceIMP_1_1pmi.html">IMP::pmi module</a>, is
now available.
</dd>

<dt>Dec 01, 2014</dt>

<dd>The <a href="download.html">IMP 2.3.1 release</a> is
<a href="https://github.com/salilab/imp/releases/tag/2.3.1">a bug fix
and minor update release</a>. Most notably two complete modeling examples
that use the
<a href="2.3.1/doc/html/namespaceIMP_1_1pmi.html">IMP::pmi module</a>
are now fully functional: modeling of the
<a href="//salilab.org/nup84/">Nup84 subcomplex of the nuclear pore
complex</a>
and of
<a href="https://github.com/salilab/imp_tutorial/">RNA Polymerase II</a>.
</dd>

<dt>Oct 24, 2014</dt>

<dd>The <a href="download.html">IMP 2.3.0 release</a> contains
<a href="https://github.com/salilab/imp/releases/tag/2.3.0">bug fixes and
updates</a>. Most notably the experimental
<a href="2.3.0/doc/html/namespaceIMP_1_1pmi.html">IMP::pmi module</a> is
now available. This provides a variety of high-level Python classes to
simplify the construction of a modeling protocol in IMP. One recent use
of PMI is the modeling of the <a href="//salilab.org/nup84/">Nup84
subcomplex of the nuclear pore complex</a>. We also now provide binary packages
for Ubuntu LTS and 64-bit Windows.
</dd>

<dt>Aug 11, 2014</dt>

<dd>The <a href="download.html">IMP 2.2.1 release</a> contains
<a href="https://github.com/salilab/imp/releases/tag/2.2.1">minor updates
to 2.2.0</a>, including build and documentation fixes and a fix for the
ligand_score application.</dd>

<dt>Apr 9, 2014</dt>

<dd>The <a href="download.html">IMP 2.2.0 release</a> contains
<a href="https://github.com/salilab/imp/releases/tag/2.2.0">a number of new
features</a>, notably support for <a href="//salilab.org/SOAP/">SOAP
scoring</a> and a more reliable RMF file format.
</dd>

<dt>Nov 4, 2013</dt>

<dd>The <a href="download.html">IMP 2.1.1 release</a> contains
minor updates to 2.1.0, most notably support for the new Mac OS X release
(Mavericks).
</dd>

<dt>Oct 24, 2013</dt>

<dd>The <a href="download.html">IMP 2.1.0 release</a> contains
<a href="https://github.com/salilab/imp/releases/tag/2.1.0">bug fixes and
updates</a>. We now provide several <a href="systems/">fully worked examples</a>
of biological systems that were investigated with IMP, from our own
publications.
</dd>

<dt>May 02, 2013</dt>

<dd>The <a href="download.html">IMP 2.0.1 release</a> contains several new
applications to tackle certain modeling problems, including
<ul>
<li><a href="2.0.1/doc/html/IMP_EMageFit_overview.html">EMageFit</a> to build
assembly models using electron microscopy images (class averages)</li>

<li><a href="2.0.1/doc/html/IMP_multifit_tools_overview.html">multifit</a>
and
<a href="2.0.1/doc/html/IMP_cnmultifit_tools_overview.html">cnmultifit</a>
to build assembly models using electron microscopy density maps</li>

<li><a href="2.0.1/doc/html/IMP_integrative_docking_overview.html">Integrative
docking</a> to improve pairwise docking using a variety of additional
experimental information sources</li>

<li><a href="2.0.1/doc/html/IMP_saxs_merge_overview.html">saxs_merge</a>,
a fully automated statistical method for merging small-angle X-ray (SAXS)
profiles using Gaussian processes</li>

</ul>
</dd>

<dt>Dec 2011</dt>
<dd>IMP has been employed to translate tethered conformation capture (TCC) data
into physical chromatin contacts in a population of three-dimensional
genome structures. Statistical analysis of the resulting population
demonstrates that the indiscriminate properties of interchromosomal
interactions are consistent with the well-known architectural features of
the human genome.
<a href="http://www.ncbi.nlm.nih.gov/pubmed/22198700">more...</a>
</dd>

<dt>Jan 2011</dt>
<dd>IMP has been used by researchers at the Centro de Investigación Príncipe
Felipe in Spain, in combination with chromosome conformation capture carbon
copy (5C) technology, to generate high-resolution three-dimensional models
of chromatin at the megabase scale.
<a href="http://www.ncbi.nlm.nih.gov/pubmed/21131981">[publication 1]</a>
&nbsp;
<a href="http://www.ncbi.nlm.nih.gov/pubmed/23657480">[publication 2]</a>
</dd>

<dt>2007</dt>
<dd>
Researchers from UCSF and the Rockefeller University have used IMP for modeling the Nuclear Pore Complex.
<a href="//salilab.org/npc.html">more...</a>
</dd>

</dl>

</div>

<?php
   print_page_footer();
?>
