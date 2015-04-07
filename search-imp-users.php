<?php
   include("IMP.inc");
   print_page_header("Search imp-users");
?>

<form method="get" action="//salilab.org/imp/search/htsearch">
<font size="-1">
<input type="hidden" name="config" value="htdig-imp-users">
<input type="hidden" name="restrict" value="">
<input type="hidden" name="exclude" value="">
Match: <select name="method">
<option value="and" selected>All
<option value="or">Any
<option value="boolean">Boolean

</select>

Format: <select name="format">
<option value="builtin-long">Long
<option value="builtin-short">Short
</select>

Sort by: <select name="sort">
<option value="score" selected>Score
<option value="time">Time
<option value="title">Title
<option value="revscore">Reverse Score
<option value="revtime">Reverse Time
<option value="revtitle">Reverse Title
</select>

<br>
Search terms:
<input type="text" size="30" name="words" value="">
<input type="submit" value="Search">
</font>
</form>

<?php
   print_page_footer();
?>
