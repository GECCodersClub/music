<!DOCTYPE html>
<link rel = "stylesheet" type ="text/css" href="css/style.css">
<html>
<HEAD>
	<BODY class = "pop-up">
					<NAV ID = "navig">
							<ul>
									<li><a href="index.html">Home</a></li>
									<li><a href="contacts.html">Contacts</a></li>
									<li><a href="about.html">About Us</a></li>
									<li><a href="admin.html">Admin</a></li>
							</ul>
					</NAV>
		<div id = "pop-up">
		<div class = "container">
<?PHP
$SONGS = $_POST['song'];
$GENRE = $_POST['genre'];
$ARTIST = $_POST['artist'];
$ALBUM = $_POST['album'];
$con = mysqli_connect("localhost","root","","music_data");
if($SONGS!=NULL)
{
    $q = mysqli_query($con,"SELECT * FROM musics WHERE songs = '$SONGS'");
    WHILE($ROW = mysqli_fetch_array($q))
    {
	   ECHO "Song - ".$ROW[0]."<BR>"."Singer - ".$ROW[1]."<BR>"."Album - ".$ROW[2]."<BR>"."Genre - ".$ROW[3]."<BR><BR>";
    }
}
else if($GENRE!=NULL)
{
    $q = mysqli_query($con,"SELECT * FROM musics WHERE genre = '$GENRE'");
    WHILE($ROW = mysqli_fetch_array($q))
    {
	   ECHO "Song - ".$ROW[0]."<BR>"."Singer - ".$ROW[1]."<BR>"."Album - ".$ROW[2]."<BR>"."Genre - ".$ROW[3]."<BR><BR>";
    }
}
else if($ARTIST!=NULL)
{
    $q = mysqli_query($con,"SELECT * FROM musics WHERE artist = '$ARTIST'");
    WHILE($ROW = mysqli_fetch_array($q))
    {
	   ECHO "Song - ".$ROW[0]."<BR>"."Singer - ".$ROW[1]."<BR>"."Album - ".$ROW[2]."<BR>"."Genre - ".$ROW[3]."<BR><BR>";
    }
}
else
{
    $q = mysqli_query($con,"SELECT * FROM musics WHERE album = '$ALBUM'");
    WHILE($ROW = mysqli_fetch_array($q))
    {
	   ECHO "Song - ".$ROW[0]."<BR>"."Singer - ".$ROW[1]."<BR>"."Album - ".$ROW[2]."<BR>"."Genre - ".$ROW[3]."<BR><BR>";
    }
}
?>
</div>
</div>
</BODY>
</HEAD>
</html>
