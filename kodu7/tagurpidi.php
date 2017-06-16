/* <?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<head>
    <style type="text/css">
    </style>
    <meta charset="UTF-8">
    <title>tagurpidi tekstid</title>
</head>
<body>
<?php
// prints e.g. 'Current PHP version: 4.1.1'
echo 'Current PHP version: ' . phpversion();
// prints e.g. '2.0' or nothing if the extension isn't enabled
echo phpversion('tidy');
?>

<h2>Tagurpidilugeja</h2>

<?php
$text = 'Seda teksti loetakse allreas tagurpidi';
mb_internal_encoding( "UTF-8" );
mb_http_output( "UTF-8" );
ob_start("mb_output_handler");
$textLength = strlen($text);
$revText = "";
for ($i=strlen($text); $i>0; $i--){
    $revText .= $text[$i-1];
};
echo $text;
echo '<br> </br>';
echo $revText
?>
</body>