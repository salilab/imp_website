<?php
  include '/guitar3/home/www/imp/mysql_connect.php';

  function get_hostname() {
    return gethostbyaddr($_SERVER["REMOTE_ADDR"]);
  }
  function pkg_url($pkg) {
    return "https://integrativemodeling.org/$pkg";
  }
  function redirect($pkg) {
    header("HTTP/1.1 307 Temporary Redirect");
    header("Location: " . pkg_url($pkg));
    exit(0);
  }
  function get_db_details($db, $host) {
    $query = "SELECT name,institution FROM addresses WHERE hostname = '"
             . $db->real_escape_string($host) . "'";
    $result = $db->query($query);
    if (!$result) { return NULL; }
    $line = $result->fetch_array(MYSQLI_ASSOC);
    $result->close();
    return $line;
  }

  function missing_details($details) {
    if (!$details) {
      return true;
    } else {
      return (!$details['name'] and !$details['institution']);
    }
  }
  
  function add_db_details($db, $host, $details, $known) {
    if (missing_details($details)) {
      return false;
    }

    if ($known) {
      $query = "UPDATE addresses SET name='"
               . $db->real_escape_string($details['name']) . "', " .
               "institution='"
               . $db->real_escape_string($details['institution']) .
               "' WHERE hostname='"
               . $db->real_escape_string($host) . "'";
    } else {
      $query = "INSERT INTO addresses SET name='"
               . $db->real_escape_string($details['name']) . "', " .
               "institution='"
               . $db->real_escape_string($details['institution']) .
               "', hostname='"
               . $db->real_escape_string($host) . "', " .
               "first_download_utc=UTC_TIMESTAMP()";
    }
    $db->query($query);
    return true;
  }

  function print_form($pkg) {
    print "<h1>Download</h1>\n";
    print <<<END
<div id="download">
<p>
Please provide us with your name and institution or company.
</p>

<p>
The development of IMP relies on funding agencies, and we need accurate
information on the usage of IMP in order to secure future funding. This
information will not be used for any other purpose, and we will try only to
ask you for this information once per unique IP address.
</p>
END;

    print "<form method=\"get\" action=\"" . $_SERVER['REQUEST_URI'] .
          "\" enctype=\"multipart/form-data\">\n";
    print "<table>\n<tr>\n";
    print "<td>Name:</td>\n";
    print "<td><input type=\"text\" name=\"name\" size=\"50\" /></td></tr>\n";
    print "<tr><td>Institution/company:</td>\n";
    print "<td><input type=\"text\" name=\"institution\" size=\"50\" />";
    print "</td></tr></table>\n";
    print "<input type=\"hidden\" name=\"pkg\" value=\"$pkg\" />\n";
    print "<p><input type=\"submit\" value=\"DOWNLOAD\" /></p>\n";
    print "</form>\n\n";

    print "<p><a class=\"directdownload\" href=\""
          . pkg_url($pkg)
          . "\">Download without providing this information</a></p>\n";
    print "</div>\n";
  }

  if (!array_key_exists('pkg', $_GET) || !$_GET['pkg']) {
    print_page_header();
    print "<p>Missing 'pkg' parameter.</p>\n";
    print_page_footer();
    exit(0);
  }

  $db = connect_db();
  $host = get_hostname();
  $known = get_db_details($db, $host);
  if (!add_db_details($db, $host, $_GET, $known) and missing_details($known)) {
    print_page_header();
    print_form($_GET['pkg']);
    print_page_footer();
    exit(0);
  }
  if ($_GET['pkg']) {
    redirect($_GET['pkg']);
  }
?>
