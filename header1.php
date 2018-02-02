<html>


<?php 
include("connect.php");
?>
<!-- begin snippet: js hide: false console: true babel: false -->

<!-- language: lang-js -->
<script>
    $(document).ready(function() {
      $("#txtpname").autocomplete({
        source: [
          "ActionScript",
          "AppleScript",
          "Asp",
          "BASIC",
          "C",
          "C++",
          "Clojure",
          "COBOL",
          "ColdFusion",
          "Erlang",
          "Fortran",
          "Groovy",
          "Haskell",
          "Java",
          "JavaScript",
          "Lisp",
          "Perl",
          "PHP",
          "Python",
          "Ruby",
          "Scala",
          "Scheme"
        ],
        minLength: 1
      });
    });
</script>
<!-- language: lang-html -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" type="text/css" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.css" />
<body>
<select name="problem" id="problem" required>
                            <option value="">Please Select Main Defect</option>
                            <?php
                            $cntry = mysql_query("SELECT `mainsection` FROM `section`  ORDER BY `mainsection` ASC");
                            while ($row = mysql_fetch_assoc($cntry)) {
                                echo '<option value="' .  $row['mainsection'] . '">' . $row['mainsection'] . '</option>';
                            }
                            ?>
                        </select>
</body>
<!-- end snippet -->

</html>