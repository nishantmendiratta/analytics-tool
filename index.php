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
	<title></title>
</head>
<body>

<a href="#" onClick="lgm_at.push(x);">push</a>
<a href="#" onClick="lgm_at.track(x);">track</a>

</body>
</html>