<?PHP
   include("conf.inc.php");
   include("site.inc.php");
   include("misc.inc.php");
   $page = $_GET['page'];
   if (!$page) { $page = "home"; }
?>


<?PHP
               if ($page == "home") {
                  print_page_header("IMP, the Integrative Modeling Platform");
                  PrintFile("home.txt");    
               } elseif ($page == "about") {
                  print_page_header("About IMP");
                  PrintFile("about.txt");
               } elseif ($page == "news") {
                  print_page_header("News");
                  PrintFile("news.txt");
               } elseif ($page == "contact") {
                  print_page_header("Contact us");
                  PrintFile("contact.txt");
               } elseif ($page == "groups") {
                  print_page_header("Participating groups");
                  echo "<div id=\"groups\">";
                  PrintFile("groups.txt");              
                  echo "</div>"; 
               } elseif ($page == "doc") {
                  print_page_header("Documentation");
                  echo "<div id=\"docs\">";
                  GetDocumentation();              
                  echo "</div>"; 
               } elseif (substr($page, 0, 8) == "download") {
                  print_page_header("Download");
                  echo "<div id=\"download\">";
                  PrintFile($page . ".txt");
                  echo "</div>"; 
               } elseif ($page == "libTAU") {
                  print_page_header("libTAU support code");
                  echo "<div id=\"libTAU\">";
                  PrintFile($page . ".txt");
                  echo "</div>"; 
               } else {
                  error_log("Invalid page snuck through"+$page);
               }
            ?>
         </td>
      </tr>
   <?PHP
   print_page_footer();
   ?>
