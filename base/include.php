<?php
// Warning : File not exists
include 'link-test.php';
include_once 'link-test.php';


// Fatal error : File not exists
require 'link-test.php';
require_once('link-test.php');
?>

<html>
<body>
<?php include 'home-page-link.php' ?>
<div>
    sldkajfasldkjflsakdjflkadsjfsdf
</div>

<?php include 'home-page-link.php' ?>

</body>