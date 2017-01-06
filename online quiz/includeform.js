alert('pause');
  var xhttp = new XMLHttpRequest();
 
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
    
      document.getElementById("display").innerHTML = "fff";
	  
    }
  };
      xmlhttp.open("GET","loginform.php",true);
      xmlhttp.send();   
