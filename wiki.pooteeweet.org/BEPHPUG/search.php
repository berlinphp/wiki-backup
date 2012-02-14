

<?xml version="1.0" encoding="iso-8859-1" ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
		
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

	<head>
		<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
		<title>Search</title>
		<link rel="alternate" type="application/rss+xml" title="RSS feed" href="http://wiki.pooteeweet.org/rss.php?area=Main&page=HomePage" />
		        <style>
			body, p, br, td, th {
				font-family: Verdana, Arial, Geneva;
				font-size: 9pt;
				color: black;
			}
			
			blockquote {
				border: 1px solid silver;
				background: #eee;
				margin: 4px;
				padding: 4px 12px;
			}
			
			table.admin {
				border: 2px solid #039;
				border-spacing: 0px;
				padding: 0px;
			}
			
			th.admin {
				padding: 4px;
				background: #039;
				color: white;
				font-weight: bold;
				vertical-align: bottom;
			}
			
			td.admin {
				border: 1px solid white;
				padding: 4px;
				background: #eee;
				vertical-align: top;
			}
			
			h1 { font-size: 24pt; }
			h2 { font-size: 20pt; }
			h3 { font-size: 18pt; }
			h4 { font-size: 16pt; }
			h5 { font-size: 14pt; }
			h6 { font-size: 12pt; }
			
			a:link, a:active, a:visited {
				color: blue;
				text-decoration: none;
				border-bottom: 1px solid blue;
			}
			
			a:hover {
				color: blue;
				text-decoration: none;
				border-bottom: 1px dotted blue;
			}
			
			li {
				margin-top: 3pt;
				margin-bottom: 3pt;
			}
			
			pre {
				border: 1px dashed #036;
				background: #eee;
				padding: 6pt;
				font-family: ProFont, Monaco, Courier, "Andale Mono", monotype;
				font-size: 9pt;
				line-height: 140%;
			}
			
			input[type="text"], input[type="password"], textarea {
				font-family: ProFont, Monaco, Courier, "Andale Mono", monotype;
				font-size: 9pt;
			}
			
			table.nav_table {
				width: 100%;
			}
			
			td.tabs_marginal {
				background: white;
				border-bottom: 1px solid black;
			}
			
			td.tabs_unselect {
				background: #aaa;
				border-top: 1px solid black;
				border-left: 1px solid black;
				border-right: 1px solid black;
				border-bottom: 1px solid black;
				text-align: center;
			}
			
			td.tabs_selected {
				background: #ddd;
				border-top: 1px solid black;
				border-left: 1px solid black;
				border-right: 1px solid black;
				border-bottom: none;
				text-align: center;
				font-weight: bold;
			}
			
			td.wide_marginal {
				background: #ddd;
				border-bottom: 1px solid black;
			}
			
			td.wide_unselect {
				background: #ddd;
				border-bottom: 1px solid black;
				text-align: center;
			}
			
			td.wide_selected {
				background: #ddd;
				border-bottom: 1px solid black;
				text-align: center;
				font-weight: bold;
			}
			
			td.tall_unselect {
				font-weight: normal;
			}
			
			td.tall_selected {
				font-weight: normal;
			}
			
			table.yawiki {
				border-spacing: 0px;
				border: 1px solid gray;
			}
			
			tr.yawiki {
			}
			
			th.yawiki {
				margin: 1px;
				border: 1px solid silver;
				padding: 4px;
				font-weight: bold;
			}
			
			td.yawiki {
				margin: 1px;
				border: 1px solid silver;
				padding: 4px;
			}
			
			th.yawiki-form {
				text-align: right;
				padding: 4px;
			}
			
			td.yawiki-form {
				text-align: left;
				padding: 4px;
			}
			
			legend.yawiki-form {
				font-size: 120%;
			}
			
			label.yawiki-form {
				font-weight: bold;
			}
			
			div.toc_list {
				border: 1px solid #ccc;
				background-color: #eee;
				padding: 1em;
			}
			
			div.toc_item {
				font-size: 90%;
				margin-top: 0.5em;
			}
			
				
			
		</style>
		</head>
	
	<body>
		
		<!-- top span: title section -->
		<table width="100%" border="0" cellspacing="4" cellpadding="4">
			<tr>
				<td valign="top" align="left">
					<h1>Lukas's OSS Wiki</h1>
					<p><em>Lukas's OSS Wiki</em></p>
				</td>
				<td valign="top" align="right">
					<p>[&nbsp;<a href="search.php">AdvancedSearch</a>&nbsp;|&nbsp;<a href="http://wiki.pooteeweet.org/Main/AreaMap">AreaMap</a>&nbsp;]</p>
					<p>
<form action="search.php" method="get">
	<input type="hidden" name="qtype" value="any" />	<input type="hidden" name="op" value="Search" /> 
	Search: <input type="text" name="qword" value="" size="10" />	<input type="submit" name="" value="Go!" /></form></p>
				</td>
			</tr>
		</table>
		
		<!-- top span: nav section -->
				
		<!-- main body -->
		<table width="100%" border="0" cellspacing="12" cellpadding="0">
			<tr>
			
				<!-- left span -->
				<td valign="top" width="15%" align="center">
				
					<div style="padding: 4px; border: 1px dotted gray;">
<script language="JavaScript">
function createNewPage(link) {
	var newpage = prompt("New page name?");
	if (newpage == null || newpage == "") return false;
	link.href = "edit.php?area=Main&page="+newpage;
	return true;
}
</script>


	
		<form method="post" action="/BEPHPUG/search.php">
			<input type="hidden" name="LOGIN" />
			<p>Username:<br /><input type="text" name="username" size="10" /></p>
			<p>Password:<br /><input type="password" name="password" size="10" /></p>
			<p><input type="submit" value="Sign In" /></p>
			
					</form>

		




</div><br />					
										<div style="padding: 4px; border: 1px dotted gray;">
						<p><b>Areas In<br />This Wiki</b></p>
						
						<p><a href="http://wiki.pooteeweet.org/BEPHPUG/">BEPHPUG</a></p>
<p><a href="http://wiki.pooteeweet.org/Conferences/">Conferences</a></p>
<p><a href="http://wiki.pooteeweet.org/emPHPower/">emPHPower</a></p>
<p><a href="http://wiki.pooteeweet.org/LiveUser/">LiveUser</a></p>
<p><a href="http://wiki.pooteeweet.org/Main/">Main</a></p>
<p><a href="http://wiki.pooteeweet.org/MDB2/">MDB2</a></p>
<p><a href="http://wiki.pooteeweet.org/PDO/">PDO</a></p>
<p><a href="http://wiki.pooteeweet.org/PHPSVN/">PHPSVN</a></p>
<p><a href="http://wiki.pooteeweet.org/PHPTODO/">PHPTODO</a></p>
<p><a href="http://wiki.pooteeweet.org/RDBMS/">RDBMS</a></p>
<p><a href="http://wiki.pooteeweet.org/WebBuilder2/">WebBuilder2</a></p>
					</div>
										
				</td>
				
				<!-- middle span -->
				<td valign="top" width="70%">

<h1>Search</h1>


<form action="/search.php" method="get" name="" id="">
<div>
<table border="0">

	<tr>
		<td align="right" valign="top"><span style="color: #ff0000">*</span><b>Look for:</b></td>
		<td valign="top" align="left"><input name="qword" type="text" /></td>
	</tr>
	<tr>
		<td align="right" valign="top"><b></b></td>
		<td valign="top" align="left"><select name="qtype">
	<option value="any">Any of the words</option>
	<option value="exact">The exact phrase</option>
	<option value="all">All of the words</option>
</select></td>
	</tr>
	<tr>
		<td align="right" valign="top"><b>In areas:</b></td>
		<td valign="top" align="left"><select multiple="multiple" size="9" name="qarea[]">
	<option value="BEPHPUG">BEPHPUG</option>
	<option value="Conferences">Conferences</option>
	<option value="emPHPower">emPHPower</option>
	<option value="LiveUser">LiveUser</option>
	<option value="Main">Main</option>
	<option value="MDB2">MDB2</option>
	<option value="PDO">PDO</option>
	<option value="PHPSVN">PHPSVN</option>
	<option value="PHPTODO">PHPTODO</option>
	<option value="RDBMS">RDBMS</option>
	<option value="WebBuilder2">WebBuilder2</option>
</select></td>
	</tr>
	<tr>
		<td align="right" valign="top"><b></b></td>
		<td valign="top" align="left"><input name="op" value="Search" type="submit" /></td>
	</tr>
	<tr>
		<td></td>
	<td align="left" valign="top"><span style="font-size:80%; color:#ff0000;">*</span><span style="font-size:80%;"> denotes required field</span></td>
	</tr>
</table>
</div>
</form>


				</td>
				<td valign="top" width="15%">
									</td>
			</tr>
		</table>
	</body>
</html>