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
							</ul>
					</NAV>
        <div id = "pop-up">
        <div class = "container">
<?PHP
$SONGS = $_POST['song'];
$GENRE = $_POST['genre'];
$ARTIST = $_POST['artist'];
$ALBUM = $_POST['album'];
$BIO = $_POST['bio'];
$con = mysqli_connect("localhost","root","","music_data");
if(($SONGS==NULL)||($GENRE==NULL)||($ARTIST==NULL)||($ALBUM==NULL))
{
    echo "fail!";
}
else
{
    mysqli_query($con,"INSERT INTO musics(songs,genre,artist,album,bio)VALUES ('".$SONGS."','".$GENRE."','".$ARTIST."','".$ALBUM."','".$BIO."')");
    ECHO "Results Updated!";
    ECHO "<BR><a href = 'update.html'>Want To Update More? Click Here!</a>";
}
?>
</div>
</div>
		<footer id = "footx">
				<center>Made With love By Team 1</center>
		</footer>
</BODY>
</HEAD>
</html>
