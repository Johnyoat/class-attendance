
function log1()
 {


var cont=document.getElementById('fnom').value;
var pword=document.getElementById('pword').value;


 if (cont!="" && pword!="") 
 {

if (window.XMLHttpRequest)
 {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  }
   else 
   {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function()
   {
    var mares=this.responseText;
    if (this.readyState==4 && this.status==200) 
    {
        var j = document.getElementById("snackbar")
    j.className = "show";
    setTimeout(function(){ j.className = j.className.replace("show", ""); 

 document.getElementById('fnom').value="";
 document.getElementById('pword').value="";

alert(mares);

if (mares=="Administrator") 
{
   window.location="Administrator/home.php";
   
};
if (mares=="Student") 
{
   window.location="Student/home.php";
   
};
if (mares=="Lecturer") 
{

 window.location="Teacher/home.php";

};


    }, 1500);
  

    }
  }
 
   xmlhttp.open("GET", "myscripts/logproc.php?ucont="+cont+"&uepass="+pword, true);
   xmlhttp.send(); 

 }

else
{
  alert("PLEASE FILL ALL FIELDS");
}

  }


