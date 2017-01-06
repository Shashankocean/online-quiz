
function showInfo(str,str1,str2) {
	
	var xmlhttp;
    if (str == "" || str1 =="-select-") {
        document.getElementById("display").innerHTML = "**Something went wrong**";
        return;
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
				
                document.getElementById("display").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","connection.php?selcourse="+str+"&semister="+str1+"&selsubject="+str2,true);
        xmlhttp.send();
    }
}

