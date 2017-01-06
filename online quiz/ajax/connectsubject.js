function load_subject()
  {
	  course=document.getElementById("selcourse").value;
		
		semister=document.getElementById("semister").value;	
				
        if (semister ==="-select-") {
        document.getElementById("").innerHTML = "**Something went wrong**";
        return;
        } 
        else { 
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
                    document.getElementById("selsubject").innerHTML = xmlhttp.responseText;
                }
            };
            xmlhttp.open("GET","connectsubject.php?course="+course+"&semister="+semister,true);
            xmlhttp.send();
        }

}