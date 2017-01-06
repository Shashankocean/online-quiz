function showInfo(str,str1,str2) {
    if (str == "") {
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
        xmlhttp.open("GET","connection.php?q="+str+"&se="+str1+"&su="+str2,true);
        xmlhttp.send();
    }
}

 function select_course(str)
  {
	  document.getElementById("dropdownMenuCourse").innerHTML = str +"<span class='caret'></span>";
	  
  }

function load_subject()
  {
	  
	  course=document.getElementById("selcourse").value;
		semister=document.getElementById("semister").value;
	 alert('hello');
	  if(semister!="-select-" || course!="-select-" ){
		
		
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
			
				
                document.getElementById("selsubject").innerHTML = xmlhttp.responseText;
            
        };
        xmlhttp.open("GET","connectsubject.php?course="+course"&semister="+semister,true);
        xmlhttp.send();
	  }
}