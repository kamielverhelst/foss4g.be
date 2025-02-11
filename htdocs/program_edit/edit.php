<?php
include_once("../mysql.php");

/** handle the uploaded form **/


if(!empty($_POST['submit']) && $_POST['submit'] == "save changes" && !empty($_POST['id'])) 
{
	$sql = "UPDATE presentations set presenter=?, email=?, 
		affiliation=?,url=?,title=?,abstract=?,language=?,presentation_url=? where guid=?";
	$upd = mysqli_prepare ($link, $sql);
	mysqli_stmt_bind_param($upd,"ssssssiss",$_POST['presenter'],$_POST['email'],$_POST['affiliation'],$_POST['url'],$_POST['title'],$_POST['abstract'],$_POST['language'],$_POST['presentation_url'],$_POST['id']);

	mysqli_stmt_execute($upd) or die(mysqli_error($link));;
	/* note that for invalid ID's nothing will happen */
}
?>
<html>
<head>
<!-- Google Fonts -->
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">

<!-- CSS Reset -->
<link rel="stylesheet" href="//cdn.rawgit.com/necolas/normalize.css/master/normalize.css">

<!-- Milligram CSS minified -->
<link rel="stylesheet" href="//cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">

<!-- You should properly set the path from the main file. -->
<style>
 textarea { height: 10em;}
</style>
</head>
<body>
<?php
/** render the page **/
$guid = ($_GET['id']);
$id = $guid;
$query="select * FROM presentations where guid='$id'";
$result = mysqli_query($link,$query);
if (mysqli_num_rows($result) == 0)
{
    echo "id not found";
    exit();
}
$row = mysqli_fetch_array($result);
?>
<h1>Presenter submission</h1>
<div>This form enables presenters at FOSS4G.be to update the details of their presentation. Please do not share the link as anyone with the link can update all records. Note that start time, end time and track can not be changed using this form.
</div>
<form method="post">
<fieldset>
<label for="start">Start Time (hhmm):</label> <?php echo $row["start"]?>
<label for="end">End Time (hhmm):</label> <?php echo $row["end"]?>
<label for="track">Track:</label> <?php echo $row["track"]?>

<input type="hidden" name="id" id="id" value="<?php echo htmlentities($row["guid"])?>" />
<label for="presenter">Presenter:</label><input type="text" name="presenter" id="presenter" value="<?php echo htmlentities($row["presenter"])?>" />
<label for="email">E-mail:</label><input type="text" name="email" id="email" value="<?php echo htmlentities($row["email"])?>" />
<label for="affiliation">Affiliation:</label><input type="text" name="affiliation" id="affiliation" value="<?php echo htmlentities($row["affiliation"])?>" />
<label for="url">URL (eg twitter link):</label><input type="text" name="url" id="url" value="<?php echo htmlentities($row["url"])?>" />
<label for="title">Presentation Title:</label>
<input type="text" name="title" value="<?php echo htmlentities($row['title'])?>" />
<label for="abstract">Abstract:</label>
<textarea name="abstract" id="abstract" rows="5">
<?php echo htmlentities ($row['abstract'])?></textarea>
<label for="language">Language:</label><span>Note that for track 1 we provide translations (<b>NL->FR</b>) and (<b>FR->NL</b>). <br />For other tracks we prefer presentations in English (for our international audience), but presenters can choose the language they prefer.</span>
<select id="language" name="language">
    <option value="0"<?php if (!in_array($row['language'],array(1,2,3))) echo ' selected="selected"'; ?>> </option>

	<option value="1"<?php if ($row['language'] == '1') echo ' selected="selected"'; ?>>nl</option>
	<option value="2"<?php if ($row['language'] == '2') echo ' selected="selected"'; ?>>fr</option>
	<option value="3"<?php if ($row['language'] == '3') echo ' selected="selected"'; ?>>en</option>
</select>
<label for="presentation_url">Link to slides</label>
<input type="text" id="presentation_url" name="presentation_url" value="<?php echo htmlentities($row['presentation_url'])?>" />


<input type="submit" name="submit" value="save changes"/>

</fieldset>
</form>

<?php

mysqli_close($link);

?>
</body>
</html>
