<?

	date_default_timezone_set('America/New_York');

	$title_tag = 'Media';

	try
	{
		//production DB setup
		$db = new PDO("mysql:dbname=myberean;host=myberean.ipowermysql.com", "myberean_sa2", "BBCbbc1965!!!" );
    	//$db = new PDO("mysql:dbname=njracing;host=localhost", "njracing", "goracing2k14!" );
    }
	catch(PDOException $e)
    {
    	//echo $e->getMessage();
    }

	try
	{
		$sql = "SELECT messages.series_id, series_image, MAX(messages.message_date) as maxdate FROM messages INNER JOIN speakers ON messages.speaker_id = speakers.speaker_id INNER JOIN series ON messages.series_id = series.series_id WHERE messages.active = 1 GROUP BY messages.series_id,series_image ORDER BY MAX(messages.message_date) DESC";

		//$sql = "SELECT message_id, message_title, messages.speaker_id, message_mp3_file, message_date, messages.active, keywords, messages.series_id, speaker_name, series_name, series_image FROM messages INNER JOIN speakers ON messages.speaker_id = speakers.speaker_id INNER JOIN series ON messages.series_id = series.series_id WHERE messages.active = 1 ORDER BY series_name, message_date DESC";

	}
	catch(PDOException $e)
	{
		//echo $e->getMessage();
	}



?>

<?php include '_header.php'; ?>

<style>
body {
    background:url(img/bkg_listen.jpg);
    background-position: center center;
    background-position: top;
}
</style>

<div class="main_container">

	<div id="sidebar2">
		<h2>To listen to the messages just click on the message title.  For more player control, right-click (mp3) and select "open in new window/tab".  To download select "save target/link as".</h2>
	</div>

<div id="mess_con">
	<div id="mess_text">
	<div id="ubaplayer"></div>
	<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="mess_acr">
	<?

	$last_series_id = 0;
	$last_speaker_id = 0;
	$first = 0;

	foreach ($db->query($sql) as $row)
	{

		//var_dump ( $row );

		if ($row["series_id"] != $last_series_id) {
			if ($first == 1) {
		?>


		<? }

			$msql = "SELECT message_id, message_title, messages.speaker_id, message_mp3_file, message_date, messages.active, keywords, messages.series_id, speaker_name, series_name, series_image, YEAR(message_date) as m_date FROM messages INNER JOIN speakers ON messages.speaker_id = speakers.speaker_id INNER JOIN series ON messages.series_id = series.series_id
					 WHERE messages.active = 1 AND messages.series_id = " . $row["series_id"] . " ORDER BY series_name, message_date DESC";
		?>

		<tr>
	    	<td class="mess_acr"><img src="http://www.myberean.com/img/mess/<?=$row["series_image"]; ?>" width="200"></td>
	    	<td class="mess_acr" valign="top"><ul class="ubaplayer-controls">

		<?
		}

		foreach ($db->query($msql) as $mrow)
		{
			$mdate = date_create($mrow["message_date"]);

		?>
			<li><?=date_format($mdate,"m/d/y"); ?> &ndash;  <a class="ubaplayer-button" href="http://www.myberean.com/audio/Sermons/<?=$mrow["m_date"]; ?>/<?=$mrow["message_mp3_file"]; ?>">  <?=$mrow["message_title"]; ?> &ndash; <a href="http://www.myberean.com/audio/Sermons/<?=$mrow["m_date"]; ?>/<?=$mrow["message_mp3_file"];?>">(mp3)</a>
			<!---<br />&nbsp;&nbsp;&nbsp;&nbsp;- <?=$mrow["speaker_name"]; ?>---></li>
			<?
			if ($row["speaker_id"] != $last_speaker_id) {
			?>

			<?
			}
		}
		?>

		<?
		$first = 1;
		$last_series_id = $row["series_id"];
		$last_speaker_id = $row["speaker_id"];
	}
	?>

	</table>

	</div>
</div>




<?php include '_footer.php'; ?>
