//console log
function c(x){console.log(x);}

//access flag
var a_flag;

function xmlhttprequest(url,callback,data,method){
	var xmlhttp;
	if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	}
	else {// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}

	xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
		   	callback(xmlhttp.responseText);
		}
	}

	if (method=="POST"){
		xmlhttp.open(method,url,true);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send(data);
	}else{
		xmlhttp.open(method,url+"?"+data,true);
		xmlhttp.send();
	}


}

function getIP(){
	/*
	ip (Visitor IP address, or IP address specified as parameter)
	country_code (Two-letter ISO 3166-1 alpha-2 country code)
	country_code3 (Three-letter ISO 3166-1 alpha-3 country code)
	country (Name of the country)
	region_code (Two-letter ISO-3166-2 state / region code)
	region (Name of the region)
	city (Name of the city)
	postal_code (Postal code / Zip code)
	continent_code (Two-letter continent code)
	latitude (Latitude)
	longitude (Longitude)
	dma_code (DMA Code)
	area_code (Area Code)
	asn (Autonomous System Number)
	isp (Internet service provider)
	timezone (Time Zone)
	*/
	var script = document.createElement("script");
	    script.type = "text/javascript";
	    script.async = true;
	    script.src = "http://www.telize.com/geoip?callback=lgm_at.xmlhttpresponse";
	    document.getElementsByTagName("head")[0].appendChild(script);
}


//handle analytics
var lgm_at = {

		init : function(UAID) {
			lgm_at.authenticate(UAID);
			lgm_at.browserinfo();
			lgm_at.getIP();
		},

		authenticate : function(token) {
			xmlhttprequest('authenticate.php',lgm_at.xmlhttpresponse,"UAID="+token,"POST");
		},

		getIP : function(){
			getIP();
		},

		xmlhttpresponse : function(req){
			console.log(req);
		},

		browserinfo : function() {
			xmlhttprequest('browser-info.php',lgm_at.xmlhttpresponse,"function=get_browser_info","GET");
		},

        push : function(arr,a_flag) {
           	if(a_flag){
           		for(i=0;i<arr.length;i++){
			    	c(arr[i]);
			  	}
			}
        },

        track : function(arr,a_flag) {
        	if(a_flag){
            	for(i=0;i<arr.length;i++){
			    	c(arr[i]);
			  	}
        	}
        },

       
};

