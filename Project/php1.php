<?PHP
$SONGS = $_POST[''];//INFORMATION FROM HTML POST
$con = mysqli_connect("localhost","root","","music_data"); 
$q = mysqli_query($con,"select * from student1 where songs = '$songs');
WHILE($ROW = mysqli_fetch_array($q))
{
	ECHO $ROW[0],"<BR>";
}
?>