<?php
   include("IMP.inc");
   print_page_header("PMI-commits");
?>

<div id="contact">

<p>The PMI-commits mailing list is provided for <i>developers</i> of
<a href="https://github.com/salilab/pmi">PMI</a>.
It sends out an email every time code is changed in the PMI git repository.
</p>

<p>To subscribe to the list, send an email to
<span class="e-mail">listserv at listsrv.ucsf.edu | listserv@listsrv.ucsf.edu</span>.
Leave the Subject field blank and remove your signature from the email.
In the body of the message, enter just:
<tt>subscribe pmi-commits firstname lastname</tt> where <tt>firstname</tt>
is your first name and <tt>lastname</tt> your last name.</p>

<p>Other listserv commands can be sent in the same way to the same email
address. For example, <tt>SIGNOFF pmi-commits</tt> will cancel your
subscription to the list.
See the <a href="https://www.lsoft.com/manuals/16.0/htmlhelp/list%20subscribers/LSCommands.html">LISTSERV manual</a> for more information.</p>

</div>

<?php
   print_page_footer();
?>
