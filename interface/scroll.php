<!DOCTYPE HTML><html><head><meta charset="UTF-8">
<title>CSS Scroller 7 Demo</title>
<style type="text/css">
* {
margin:0;
padding:0;
outline:0;
}
body {
text-align:center;
}
#scroll {
width: 320px;
    height: 220px;
background:white;
overflow:auto;
box-shadow:0 0 10px #000;
}
#scroll ul {
float:left;
margin-right:-999em;
white-space:nowrap;
list-style:none;
}
#scroll li {
margin:15px;
text-align:center;
float:left;
display:inline;           
}
#scroll img {
border:0;
display:block;
border:5px solid black;
width: 100px;
height: 100px;
}
#scroll a:active img, #scroll a:focus img, #scroll a:hover img {
border:white;
}
#scroll a {
text-decoration:none;
font-weight:bold;
color:#000;
}
#scroll a:active, #scroll a:focus, #scroll a:hover {
color:#FFF;
}
#scroll span {
padding:5px 0 0;
display:block;
font-family: sans-serif;
color: black;
}
/* ------------- Flexcroll CSS ------------ */
.scrollgeneric {
line-height:1px;
font-size:1px;
position:absolute;
top:0;left:0;
}
.hscrollerbase {
height:17px;
background:#aaa;
}
.hscrollerbar {
height:12px;
background:#000;
cursor:e-resize;
padding:3px;
border:1px solid white;
}
.hscrollerbar:hover {
background:#222;
border:1px solid #222;
}
</style>
<!--[if IE 6]>
<style type="text/css">
#scroll{position:relative;}
#scroll a{position:relative;}
</style>
<![endif]-->
<script type="text/javascript" src="../javascript/flexcroll.js"></script>
</head>
<body>


<div id="scroll" class="flexcroll">
<ul>
    <BR><BR>
<li><a href="#"><img src="placeholder.png" alt=""><span>App Name</span></a></li>
<li><a href="#"><img src="placeholder.png"" alt=""><span>App Name</span></a></li>
<li><a href="#"><img src="placeholder.png"" alt=""><span>App Name</span></a></li>
<li><a href="#"><img src="placeholder.png"" alt=""><span>App Name</span></a></li>
<li><a href="#"><img src="placeholder.png"" alt=""><span>App Name</span></a></li>

</ul>
</div>

</body>
</html>