
 var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-18945716-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

  /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Follows: sauvegarde de l'adresse mail à travers la newsletter (function)
 * Original name: 
 *  * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
	function save_mail(pLogin, page) {
	
		if(document.all) 
			var XhrObj = new ActiveXObject("Microsoft.XMLHTTP") ;
		else
			var XhrObj = new XMLHttpRequest();

		var Msg=document.getElementById("errmsg");		
		
		XhrObj.open("POST.html", page);
		
		XhrObj.onreadystatechange = function() {		    
			if (XhrObj.readyState == 4 && XhrObj.status == 200)
			var	rst = XhrObj.responseText.split(":");
			Msg.innerHTML="<img src='images/ajax-loader.gif' align='middle'> Sauvegarde...";
			
			if(parseInt(rst[0])) {
			  Msg.innerHTML="<font color='#008000'>"+rst[1]+"</font>";
			  document.getElementById("email").value = 'entrer votre email';
			}
			else
			  Msg.innerHTML="<font color='#FF0000'>"+rst[1]+"</font>";
		}
		XhrObj.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
		XhrObj.send(pLogin);
	}//fin fonction save_mail
