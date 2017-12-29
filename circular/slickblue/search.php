<?php
include("header.php");
include("connect.php");
 //This is only displayed if they have submitted the form
 if($_POST){
     $find =  $_POST['find'];
     $field =  $_POST['field'];
     $searching= $_POST['searching'];
 if ($searching =="yes")
 {
 echo "<div id='content_main'><h2>Results</h2><p>";

 //If they did not enter a search term we give them an error
 if ($find == "")
 {
 echo "<p>You forgot to enter a search term";
 exit;
 }

 // Otherwise we connect to our Database
 mysql_connect("localhost", "root", "") or die(mysql_error());
 mysql_select_db("ticket") or die(mysql_error());

 // We preform a bit of filtering
 $find = strtoupper($find);
 $find = strip_tags($find);
 $find = trim ($find);

 //Now we search for our search term, in the field the user specified
 //echo "SELECT * FROM ticketmaster WHERE upper($field) LIKE'%$find%'";
  echo $qry="SELECT * FROM ticketmaster left join
       ticketremarks on ticketmaster.ticketid=ticketremarks.ticketid
       WHERE upper(ticketmaster.$field) LIKE '%$find%'
       OR upper(ticketremarks.$field) LIKE '%$find%'";
 $data = mysql_query($qry);

 //And we display the results
 while($result = mysql_fetch_array( $data ))
 {
 echo   "<a href='view.php?ticketid=$result[ticketid]'>".$result['ticketid']."</a>";
 echo " ";
 echo "<a href='view.php?ticketid=$result[ticketid]'>".$result['problem']."</a>";
 echo "<br>";
 echo "<a href='view.php?ticketid=$result[ticketid]'>".$result['remark']."</a>";
 echo "<br>";
 echo "<br>";
 }

 //This counts the number or results - and if there wasn't any it gives them a little message explaining that
 $anymatches=mysql_num_rows($data);
 if ($anymatches == 0)
 {
 echo "Sorry, but we can not find an entry to match your query<br><br>";
 }

 //And we remind them what they searched for
 echo "<b>Searched For:</b> " .$find."</div>";
 }
  } else{
?>

<form name="search" method="post" action="<?php echo $PHP_SELF; ?>">
  <div id="content_main">
         Seach for: <input type="text" name="find" /> in
 <Select NAME="field">
 <Option VALUE="ticketid">ticketid</option>
 <Option VALUE="problem">problem</option>
 <Option VALUE="remark">remark</option>
 </Select>
 <input type="hidden" name="searching" value="yes" />
 <input type="submit" name="search" value="Search" />

        </div>


</form>
<?php } include("footer.php");  ?>