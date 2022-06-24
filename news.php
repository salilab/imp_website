<?php
   include("IMP.inc");
   print_page_header("News");
?>

<div id="news">

<dl class="newslist">
<dt>Jun 23, 2022</dt>

<dd>The <a href="download.html">IMP 2.17.0 release</a> contains
<a href="https://github.com/salilab/imp/releases/tag/2.17.0">minor updates</a>,
with a number of performance improvements and support for newer C++ standards.
</dd>

<dt>Dec 16, 2021</dt>

<dd>The <a href="download.html">IMP 2.16.0 release</a> contains
<a href="https://github.com/salilab/imp/releases/tag/2.16.0">major updates</a>,
most notably improved NumPy integration, support for Python 3.10, and a faster
scoring function for Monte Carlo sampling.
</dd>

<dt>Jun 02, 2021</dt>

<dd>The <a href="download.html">IMP 2.15.0 release</a> contains
<a href="https://github.com/salilab/imp/releases/tag/2.15.0">minor updates</a>,
most notably improved handling of MRC files, a new scoring function for
cryo-EM data, and support for Apple Silicon.
</dd>

<dt>Dec 02, 2020</dt>

<dd>The <a href="download.html">IMP 2.14.0 release</a> contains
<a href="https://github.com/salilab/imp/releases/tag/2.14.0">minor updates</a>,
most notably an overhaul of the IMP::kinematics and IMP::parallel modules,
and support for Python 3.9.
</dd>

<dt>May 14, 2020</dt>

<dd>The <a href="download.html">IMP 2.13.0 release</a> contains
<a href="https://github.com/salilab/imp/releases/tag/2.13.0">major updates</a>,
most notably support for Ubuntu 20.04, Focal Fossa, and a new IMP::sampcon
module to estimate the highest precision at which the sampling is exhaustive.
</dd>

<dt>Dec 06, 2019</dt>

<dd>The <a href="download.html">IMP 2.12.0 release</a> contains
<a href="https://github.com/salilab/imp/releases/tag/2.12.0">major updates</a>,
most notably support for Python 3.8 and RHEL/CentOS 8, and a new IMP::bayesianem
module for Bayesian handling of cryo-electron microscopy density map data.
</dd>

<dt>Jul 18, 2019</dt>

<dd>The <a href="download.html">IMP 2.11.1 release</a> contains
<a href="https://github.com/salilab/imp/releases/tag/2.11.1">bug
fixes</a>, most notably fixing some issues with the build system, failures
to read RMF files, and cloning of molecular hierarchies.
</dd>

<dt>Jun 25, 2019</dt>

<dd>The <a href="download.html">IMP 2.11.0 release</a> contains
<a href="https://github.com/salilab/imp/releases/tag/2.11.0">bug
fixes and major updates</a>, most notably updates to the build system and
a new set of tutorials.
</dd>

<dt>Feb 26, 2019</dt>

<dd>The <a href="download.html">IMP 2.10.1 release</a> contains
<a href="https://github.com/salilab/imp/releases/tag/2.10.1">minor bug
fixes</a>.
</dd>

<dt>Jan 08, 2019</dt>

<dd>The <a href="download.html">IMP 2.10.0 release</a> contains
<a href="https://github.com/salilab/imp/releases/tag/2.10.0">bug fixes and
major updates</a>, most notably an overhaul of the IMP::pmi module.
</dd>

<dt>Jul 02, 2018</dt>

<dd>The <a href="download.html">IMP 2.9.0 release</a> contains
<a href="https://github.com/salilab/imp/releases/tag/2.9.0">bug fixes and
major updates</a>, including elucidation of the structure of the entire yeast
nuclear pore complex.
</dd>

<dt>Aug 16, 2017</dt>

<dd>The <a href="download.html">IMP 2.8.0 release</a> contains
<a href="https://github.com/salilab/imp/releases/tag/2.8.0">bug fixes and
minor updates</a>, including two new applications of IMP, and the Anaconda and
Windows pre-built binary packages are now MPI-enabled. This release also
includes a number of bug fixes and performance improvements. Note that this
will be the last release that includes packages for Ubuntu 12.04
(Precise Pangolin) since it has reached end of life.
</dd>

<dt>Apr 13, 2017</dt>

<dd>The <a href="download.html">IMP 2.7.0 release</a> contains
<a href="https://github.com/salilab/imp/releases/tag/2.7.0">bug fixes and
major updates</a>, including a preview of mmCIF support for deposition of
integrative models in <a href="https://pdb-dev.wwpdb.org/">PDB-Dev</a>.
See the <a href="https://integrativemodeling.org/2.7.0/doc/ref/namespaceIMP_1_1pmi_1_1mmcif.html">IMP::pmi::mmcif</a>
module for more details. This release also includes a number of bug fixes
and performance improvements. Note that this will be the last release that
includes packages for RedHat Enterprise Linux 5 (and variants, such as
CentOS 5), since RHEL 5 has reached end of life.
</dd>

<dt>May 25, 2016</dt>

<dd>The <a href="download.html">IMP 2.6.2 release</a> contains
<a href="https://github.com/salilab/imp/releases/tag/2.6.2">minor bug and
documentation fixes</a>, including support for Ubuntu 16.04 (Xenial Xerus).
</dd>

<dt>Apr 14, 2016</dt>

<dd>The <a href="download.html">IMP 2.6.1 release</a> contains
<a href="https://github.com/salilab/imp/releases/tag/2.6.1">minor bug and
documentation fixes</a>.
</dd>

<dt>Mar 28, 2016</dt>

<dd>The <a href="download.html">IMP 2.6.0 release</a> contains
<a href="https://github.com/salilab/imp/releases/tag/2.6.0">bug fixes and
minor updates</a>. Most notably we include most of the functionality of PMI2.
This is an improved version of PMI that is faster than PMI1, more modular,
and easier to use. See
<a href="https://integrativemodeling.org/2.6.0/doc/ref/namespaceIMP_1_1pmi.html">IMP::pmi</a>
for more information. This release also includes a number of bug fixes,
most notably in the creation of sampled electron microscopy density maps.
</dd>

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
<a href="https://www.ncbi.nlm.nih.gov/pubmed/22198700">more...</a>
</dd>

<dt>Jan 2011</dt>
<dd>IMP has been used by researchers at the Centro de Investigación Príncipe
Felipe in Spain, in combination with chromosome conformation capture carbon
copy (5C) technology, to generate high-resolution three-dimensional models
of chromatin at the megabase scale.
<a href="https://www.ncbi.nlm.nih.gov/pubmed/21131981">[publication 1]</a>
&nbsp;
<a href="https://www.ncbi.nlm.nih.gov/pubmed/23657480">[publication 2]</a>
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
