function displayerror(str) {
	display=str+"error";
	value =  document.getElementById(str).value;
	alert('hllo');
	var xmlhttp;
    if (str == "") {
        
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
           xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
           xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
				
                document.getElementById(display).innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","displayerror.php?check="+str+"&value="+value,true);
        xmlhttp.send();
    }
}

