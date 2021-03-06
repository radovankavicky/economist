<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>The Economist Medal Map</title>

<!-- CSS Files -->
<style type="text/css">
html, body {
    margin:0;
    padding:0;
	font-family: Verdana,Arial,sans-serif;
    font-size: 0.9em;
    text-align: center;
    background-color:#ffffff;
}

input, select {
    font-size:0.9em;
}

table {
/*    margin-top:-10px;
    margin-left:7px;*/
    width: 100%;
}

table td {
}

table.country-legend td {
/*	width: 20%;*/
}
h4 {
    font-size:1.8em;
    text-decoration:none;
    font-weight:bold;
    color: #333;
	line-height: 27px;    
}

h5 {
	font-size: 1.7em;
	margin: 10px 0px;
}

a {
    color:#23A4FF;
}

#container {
    width: 595px;
    margin:0 auto;
    position:relative;
}

#left-container, 
#right-container, 
#center-container {
}

#left-container {
    width:100%;
    color:#686c70;
    text-align: left;
    overflow: auto;
    background-color:#fff;
    background-repeat:no-repeat;
    border-bottom:1px solid #ddd;
}

#left-container {
    
}

#right-container {
    right:0;
    background-position:center left;
    border-right:1px solid #ddd;
}

#right-container h4{
    text-indent:8px;
}

#center-container {
    width:595px;
    background-color:#1a1a1a;
    color:#ccc;
}

.text {
    margin: 7px;
}

#inner-details {
    font-size:0.8em;
    list-style:none;
    margin:7px;
}

#log {
    position:absolute;
    top:10px;
    font-size:1.0em;
    font-weight:bold;
    color:#23A4FF;
}


#infovis {
    position:relative;
    width:595px;
    height:600px;
    margin:auto;
    overflow:hidden;
}

/*TOOLTIPS*/
.tip {
    color: #111;
    width: 139px;
    background-color: white;
    border:1px solid #ccc;
    -moz-box-shadow:#555 2px 2px 8px;
    -webkit-box-shadow:#555 2px 2px 8px;
    -o-box-shadow:#555 2px 2px 8px;
    box-shadow:#555 2px 2px 8px;
    opacity:0.9;
    filter:alpha(opacity=90);
    font-size:10px;
    font-family:Verdana, Geneva, Arial, Helvetica, sans-serif;
    padding:7px;
}

#right-container {
  display: none;
}

#center-container {
  width:595px;
}

#infovis {
  width:595px;
}

.node {
  color:#fff;
  font-size:9px;
  overflow:hidden;
  cursor:pointer;
/*  
  text-shadow:2px 2px 5px #000;
  -o-text-shadow:2px 2px 5px #000;
  -webkit-text-shadow:2px 2px 5px #000;
  -moz-text-shadow:2px 2px 5px #000;
*/
}

/*TOOLTIPS*/
.tip {
    color: #fff;
    width: 139px;
    background-color: black;
    opacity:0.9;
    filter:alpha(opacity=90);
    font-size:10px;
    font-family:Verdana, Geneva, Arial, Helvetica, sans-serif;
    padding:7px;
}

.album {
    width:100px;
    margin:3px;
}

#id-list, #type-list {
	background-color:#EEEEEE;
	border:1px solid #CCCCCC;
/*	margin:10px 20px 10px 20px;*/
	padding:5px;
	text-align:left;
	text-indent:2px;
}

#id-list table, #type-list table {
  margin-top:2px;
}

#back {
/*  margin:10px 40px;*/
	float: right;
	margin-right: 70px;
}

.button {
  display: inline-block;
  outline: none;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  font: 14px / 100% Arial, Helvetica, sans-serif;
  padding: 0.5em 1em 0.55em;
  text-shadow: 0px 1px 1px rgba(0, 0, 0, 0.3);
  -webkit-border-radius: 0.5em;
  -moz-border-radius: 0.5em;
  border-radius: 0.5em;
  -webkit-box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.2);
  -moz-box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.2);
  box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.2);
}

.button:hover {
  text-decoration: none;
}

.button:active {
  position: relative;
  top: 1px;
}

/* white */
.white {
  color: #606060;
  border: solid 1px #b7b7b7;
  background: #fff;
  background: -webkit-gradient(linear, left top, left bottom, from(#fff), to(#ededed));
  background: -moz-linear-gradient(top,  #fff,  #ededed);
  filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#ededed');
}

.white:hover {
  background: #ededed;
  background: -webkit-gradient(linear, left top, left bottom, from(#fff), to(#dcdcdc));
  background: -moz-linear-gradient(top,  #fff,  #dcdcdc);
  filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#dcdcdc');
}

.white:active {
  color: #999;
  background: -webkit-gradient(linear, left top, left bottom, from(#ededed), to(#fff));
  background: -moz-linear-gradient(top,  #ededed,  #fff);
  filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#ededed', endColorstr='#ffffff');
}


</style>

<!--[if IE]><script language="javascript" type="text/javascript" src="excanvas.js"></script><![endif]-->

<!-- JIT Library File -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>    
<script language="javascript" type="text/javascript" src="jit_treemap.js"></script>

<script language="javascript" type="text/javascript">
	var gid = <?php if ($_GET['day'] < 4) echo $_GET['day'] + 6; elseif ($_GET['day'] >= 4) echo $_GET['day'] + 7; else echo 0; ?>;
</script>
<script language="javascript" type="text/javascript" src="medals.js"></script>
</head>

<body onload="init();">
<div id="container">

<div id="left-container">


<div id="type-list">
	<table>
	    <tr>
	        <td style="text-align: left; width: 25%;">
	            <input type="radio" id="v-games" name="viz-type" checked="checked" value="left" />
	        	<label for="v-games">Wins by <strong>event</strong></label>
	        </td>
	         <td rowspan="2" valign="middle"  style="text-align: left; padding-left: 25px;">
	         <a id="back" href="#" class="theme button white">Go back</a>   
	          <b>Left click</b> to zoom to event <br />
	            <b>Right click</b> to go back up<br />         
	      		
	         </td>
	        
		</tr>
		<!--[if !(IE 8) ]><!-->
		<tr>
	         <td style=" width: 25%; text-align: left;">
	            <input type="radio" id="v-country" name="viz-type" value="top" />	         
	         	<label for="v-country">Wins by <strong>country</strong></label>
	         </td>
	    </tr>
	    <![endif]-->
	</table>
<!--	<h5>Country Legend</h5>-->
	<table style="width: 100%;" class="country-legend">
		<tr>
			<td><span style="width: 10px; height: 5px; background: #163c51;">&nbsp;&nbsp;</span> US</td>
			<td><span style="width: 10px; height: 5px; background: #c4191d;">&nbsp;&nbsp;</span> China</td>	
			<td><span style="width: 10px; height: 5px; background: #D1B213;">&nbsp;&nbsp;</span> Russia</td>	
			<td><span style="width: 10px; height: 5px; background: #9AC0CD;">&nbsp;&nbsp;</span> GB</td>
			<td><span style="width: 10px; height: 5px; background: #68FF62;">&nbsp;&nbsp;</span> Germany</td>
			<td><span style="width: 10px; height: 5px; background: #691F01;">&nbsp;&nbsp;</span> Australia</td>
<!--			<td><span style="width: 5px; height: 5px; background: #15CC12;">&nbsp;</span> France</td>		-->	
		</tr>
		<tr>
			<td><span style="width: 10px; height: 5px; background: #B395F3;">&nbsp;&nbsp;</span> Rest of Americas</td>
			<td><span style="width: 10px; height: 5px; background: #621F7F;">&nbsp;&nbsp;</span> Rest of Asia</td>
			<td><span style="width: 10px; height: 5px; background: #477F46;">&nbsp;&nbsp;</span> Rest of Europe</td>			
			<td><span style="width: 10px; height: 5px; background: #C13383;">&nbsp;&nbsp;</span> Africa</td>			
			<td><span style="width: 10px; height: 5px; background: #FFD8FD;">&nbsp;&nbsp;</span> Other</td>
			<td></td>	
		</tr>
	</table>
</div>


	<div id="id-list" style="display: none;">
	<table>
	    <tr>
	        <td>
	            <label for="r-sq">Squarified </label>
	        </td>
	        <td>
	            <input type="radio" id="r-sq" name="layout" checked="checked" value="left" />
	        </td>
	    </tr>
	    <tr>
	         <td>
	            <label for="r-st">Strip </label>
	         </td>
	         <td>
	            <input type="radio" id="r-st" name="layout" value="top" />
	         </td>
	    <tr>
	         <td>
	            <label for="r-sd">SliceAndDice </label>
	          </td>
	          <td>
	            <input type="radio" id="r-sd" name="layout" value="bottom" />
	          </td>
	    </tr>
	</table>
	</div>
</div>

<div id="center-container">
    <div id="infovis"></div>    
</div>

<div id="right-container">

<div id="inner-details"></div>

</div>

<div id="log"></div>
</div>
</body>
</html>
