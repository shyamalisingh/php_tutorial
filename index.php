<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>PHP Demo</title>
<link rel="stylesheet" href="css/bootstrap.css">
<!-- Optional theme -->
<link rel="stylesheet" href="css/bootstrap-theme.css">
<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap.js"></script>
</head>
<body>
<div class="container">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>#</th>
        <th> Topic </th>
        <th> Definition </th>
        <th> Usuage </th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td> PHP </td>
        <td> PHP is a web scripting language, It is used for making webpages dynamic </td>
        <td></td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td> Array </td>
        <td> Array is a container of similar objects,It can be indexed,associative and multi dimensional.
          They are used to work with group of objects together </td>
        <td><a href="array.php">Array Demo</a> </td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td> Version </td>
        <td> I have used PHP 5.X currently PHP 7.X is in the market </td>
        <td></td>
      </tr>
      <tr>
        <th scope="row">4</th>
        <td> Development Enviroment </td>
        <td> Apache Web Server
          PHP scripting server
          MySQL database
          WAMP (Combination of above 3) </td>
        <td></td>
      </tr>
	  <tr>
        <th scope="row">5</th>
        <td> Embeding PHP code in HTML page </td>
        <td> <pre>In HTML page php code can be embedded by using &lt;?php This is where you write PHP Code?&gt;
Single line comment //
Multiline comment /* This is a comment */
Each line should end in semicolon (;)
Variable names start with $
			</pre>
		 </td>
        <td></td>
      </tr>
	  <tr>
	   <th scope="row">6</th>
        <td> Echo and Print example </td>
        <td> Apache Web Server
          PHP scripting server
          MySQL database
          WAMP (Combination of above 3) </td>
        <td><a href="variables/echo_print.php">Echo print</a></td>
		</tr>
		<tr>
	   <th scope="row">7</th>
        <td> Classes and Objects </td>
        <td> 
			<ol>
				<li>Class acts a container for group of related variables and functions.</li>
				<li>Objects are instance of a Class , All Objects created from same class will have the same set of variables and functions.</li>
				<li>Objects are created from Class using new keyword e.g $lineaCar = new Car;</li>
				<li>Objects can use constructor to initialize its properties e.g $lineaCar = new Car("Linea","Compact");</li>
				<li>Constructor is a special function which starts with ___construct</li>
			 </ol>
		</td>
        <td><a href="oops/obj_demo.php">Class and Objects</a></td>
		</tr>
		<tr>
	   <th scope="row">8</th>
        <td> Forms </td>
        <td> 
			<ol>
				<li>Forms are used to get information from user.</li>
				<li>Forms are created in html using form tag.</li>
				<li>Form tag will have method: GET/POST and action will be submit.php</li>
				<li>From fields are encolsed in div form-group for proper alignment</li>
				<li>Form fields could be textfield,select-option(dropdown),checkbox,radio</li>
			 </ol>
		</td>
        <td><a href="oops/obj_demo.php">Class and Objects</a></td>
		</tr>
    </tbody>
  </table>
</div>
</body>
</html>
 