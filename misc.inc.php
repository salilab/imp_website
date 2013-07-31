<?php
   function PrintFile($f, $title='') {
      $co = GetContentsFile('./' . $f);
      $lines = preg_split("/\n/",$co);
      $topdir = $_GET['TOPDIR'];
      if ($topdir == '.' || $topdir == '') {
        $topdir = '';
      } else {
        $topdir = $topdir . '/';
      }
      foreach ($lines as $ln_num => $line) {
         $rline = str_replace('$title', $title, $line);
         $rline = str_replace('@TOPDIR@', $topdir, $rline);
         echo $rline . "\n";
      }
   }
   
   function GetContentsFile($f) {
      $fd = fopen($f,"r");
      if (!$fd) {
        print "can't open file ";
        error_log("Can't open file");
      }
      if (filesize($f) > 0) {
        $co = fread($fd,filesize($f));
      } else {
        $co="";
      }
      fclose($fd);
      return($co);
   }

   function print_page_header($title) {
      PrintFile($_GET['TOPDIR'] . "/header.txt", $title);
      print <<<END
  <div id="container">
   <h1>$title</h1>
END;
   }

   function print_page_footer() {
      print "</div>\n\n";
      print "<div id=\"footer\">\n";
      PrintFile($_GET['TOPDIR'] . "/footer.txt");
      print <<<END
</div>

</body>
</html>
END;
   }

function example_file($dir, $file) {
  if (!file_exists("$dir/$file")) {
    die("File $dir/$file does not exist");
  }
  $handle = popen("pygmentize -f html -O cssclass=pygments $dir/$file", "r");
  while(!feof($handle)) {
    print fread($handle, 1024);
    flush();
  }
  pclose($handle);
}

?>
