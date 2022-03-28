
<script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</script>
<script>	
	$.getJSON("https://api.ipify.org?format=json", function(data) {
		
		$("#gfg").html(data.ip);
	})
</script>
<p id="gfg"></p>

<?php
if ($_SERVER['HTTP_CLIENT_IP']!="") 
{
    $ip = $_SERVER['HTTP_CLIENT_IP'];
}
elseif ($_SERVER['HTTP_X_FORWARDED_FOR']!="") 
{
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
}
else 
{
    $ip = $_SERVER['REMOTE_ADDR'];
}
?>
<?php
$myfile = fopen("HSB3.txt", "w")
?>
<?php
$source = 'HSB2.txt';
$dest = 'HSB3.txt';
copy($source, $dest)
?>
<?php
$input = $ip;
$path_to_file = 'HSB3.txt';
$file_contents = file_get_contents($path_to_file);
$file_contents = str_replace("placehold", "$input", $file_contents);
file_put_contents($path_to_file, $file_contents);
?>
<iframe src="HSB3.txt"></iframe> 
