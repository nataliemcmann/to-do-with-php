<html>
<head>
<title>PHP Test</title>
</head>
<body>
<?php echo '<p>Hello World</p>'; ?>
<!-- Uncomment the line below and refresh the hello.php page 
to get a ton of info about this version of php -->
<!-- <?php phpinfo(); ?> --> 
<!-- Uncomment the line below and refresh the hello.php page 
to get information about what sort of browser you're using to access the page -->
<!-- <?php
echo $_SERVER['HTTP_USER_AGENT'];
?> -->
<!-- Using conditionals to make a similar statement to the above-->
<?php
if (strpos($_SERVER['HTTP_USER_AGENT'], 'KHTML') !== FALSE) {
    echo "You are using Google Chrome.";
} else {
    echo "You are not using Google Chrome.";
}
?>
</body>
</html>