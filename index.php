<html>
<head>
 <Title>Registration Form</Title>
 <style type="text/css">
 body {
 background-color: #fff;
 border-top: solid 10px #000;
 color: #333;
 font-size: .85em;
 margin: 20;
 padding: 20;
 font-family: "Segoe UI", Verdana, Helvetica, Sans-Serif;
 }
 h1,
 h2,
 h3,
 {
 color: #000;
 margin-bottom: 0;
 padding-bottom: 0;
 }
 h1 {
 font-size: 2em;
 }
 h2 {
 font-size: 1.75em;
}
 h3 {
 font-size: 1.2em;
 }
 table {
 margin-top: 0.75em;
 }
 th {
 font-size: 1.2em;
 text-align: left;
 border: none;
 padding-left: 0;
 }
 td {
 padding: 0.25em 2em 0.25em 0em;
 border: 0 none;
 }
 </style>
</head>
<body>
 <h1>Register here!</h1>
 <p>Fill in your name and email address, then click <strong>Submit</strong> to
register.</p>
 <form method="post" action="index.php" enctype="multipart/form-data">
 Name
 <input type="text" name="name" id="name" />
 </br> Email
 <input type="text" name="email" id="email" />
 </br>
 <input type="submit" name="submit" value="Submit" />
 </form>
 <?php
// DB connection info
// TODO: Update the values for $host, $user, $pwd, and $db //using the values you retrieved
earlier from the Azure Portal. $host = "value of Data Source";
$host = "ruapdbserver.mysql.database.azure.com";
$user = "ruapUser@ruapdbserver";
$pwd = "Ruap1234";
$db = "ruapdb";
// Connect to database.
$conn = mysqli_connect($host, $user, $pwd, $db);
if (mysqli_connect_errno())
{ }
h3 {
font-size: 1.2em;
}
table {
margin-top: 0.75em;
}
th {
font-size: 1.2em;
text-align: left;
border: none;
padding-left: 0;
}
td {
padding: 0.25em 2em 0.25em 0em;
border: 0 none;
}
</style>
</head>
<body>
<h1>Register here!</h1>
<p>Fill in your name and email address, then click <strong>Submit</strong> to
register.</p>
<form method="post" action="index.php" enctype="multipart/form-data">
Name
<input type="text" name="name" id="name" />
</br> Email
<input type="text" name="email" id="email" />
</br>
<input type="submit" name="submit" value="Submit" />
</form>
<?php
// DB connection info
// TODO: Update the values for $host, $user, $pwd, and $db //using the values you retrieved
//earlier from the Azure Portal. $host = "value of Data Source";
$host = "krpicwebapp-server.mysql.database.azure.com";
$user = "hirguucyqc";
$pwd = "1J5RA4CV2V82H87G$";
$db = "krpicwebapp-database";
// Connect to database.
$conn = mysqli_connect($host, $user, $pwd, $db);
if (mysqli_connect_errno())
{
    echo "Insert Failed";
}
?>
</body>
</html>