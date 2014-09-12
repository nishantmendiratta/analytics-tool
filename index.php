<html>
<head>
	<script type="text/javascript">
	  (function() {
	  	r = false;
	    var n = document.createElement('script'); n.type = 'text/javascript'; n.async = true;
	    n.src = 'analytics-tool.js';
	    n.onload = n.onreadystatechange = function() {
	    //console.log( this.readyState ); //uncomment this line to see which ready states are called.
	    if ( !r && (!this.readyState || this.readyState == 'complete') )
	    {
	      r = true;
	      lgm_at.init("UA-XXX-YY");
	    }};
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(n, s);
	  })();

	</script>

	<script type="text/javascript">
	
	</script>
	
	<LINK rel="stylesheet" href="style.css" type="text/css" />
	<title></title>
</head>
<body>

<script type="text/javascript">
	for (var i = 0; i < 25; i++) {

		var obj = [{'category':'items','code':i}];
		var anchor = document.createElement("a");
		anchor.setAttribute('href','#');
		anchor.setAttribute('onClick','lgm_at.push('+obj[0].code+')');

		var oImg=document.createElement("img");
		oImg.setAttribute('src', 'sample-graphic.gif');
		oImg.setAttribute('id','sample_img');
		oImg.setAttribute('alt', 'na');
		anchor.appendChild(oImg);

		document.body.appendChild(anchor);
	}
</script>

</body>
</html>