<?php
   include("IMP.inc");
   print_page_header("RMF-commits");
?>

<div id="contact">

<p>The RMF-commits mailing list is provided for <i>developers</i> of
<a href="https://integrativemodeling.org/rmf/">RMF</a>.
It sends out an email every time code is changed in the RMF git repository.
</p>

<p>To subscribe to the list, send an email to
<span class="e-mail">listserv at listsrv.ucsf.edu | listserv@listsrv.ucsf.edu</span>.
Leave the Subject field blank and remove your signature from the email.
In the body of the message, enter just:
<tt>SUBSCRIBE rmf-commits firstname lastname</tt> where <tt>firstname</tt>
is your first name and <tt>lastname</tt> your last name.</p>

<p>Other listserv commands can be sent in the same way to the same email
address. For example, <tt>SIGNOFF rmf-commits</tt> will cancel your
subscription to the list.
See the <a href="https://www.lsoft.com/manuals/16.0/htmlhelp/list%20subscribers/LSCommands.html">LISTSERV manual</a> for more information.</p>

</div>

<?php
   print_page_footer();
?>
