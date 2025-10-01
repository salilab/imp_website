<?php
   include("IMP.inc");
   print_page_header("IMP-build");
?>

<div id="contact">

<p>The IMP-build mailing list sends out an email every morning with the
results of the nightly builds of
<a href="https://integrativemodeling.org/">IMP</a>. All developers are
encouraged to subscribe to this list, so they can be notified if they
break the build.</p>

<p>To subscribe to the list, send an email to
<span class="e-mail">listserv at listsrv.ucsf.edu | listserv@listsrv.ucsf.edu</span>.
Leave the Subject field blank and remove your signature from the email.
In the body of the message, enter just:
<tt>SUBSCRIBE imp-build firstname lastname</tt> where <tt>firstname</tt>
is your first name and <tt>lastname</tt> your last name.</p>

<p>Other listserv commands can be sent in the same way to the same email
address. For example, <tt>SIGNOFF imp-build</tt> will cancel your
subscription to the list.
See the <a href="https://www.lsoft.com/manuals/16.0/htmlhelp/list%20subscribers/LSCommands.html">LISTSERV manual</a> for more information.</p>

</div>

<?php
   print_page_footer();
?>
