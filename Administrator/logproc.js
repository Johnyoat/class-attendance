$('.datepicker').datepicker();

function log0() 
{
alert("logging out");
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
    if (this.readyState==4 && this.status==200) 
    {
alert(this.responseText);
var logstats=this.responseText;
if (logstats=="YOU HAVE BEEN LOGGED OUT SUCCESSFULLY.") 
{
  window.location="../login.php";
};
    }
  }
   xmlhttp.open("GET", "apis/logoutz.php", true);
   xmlhttp.send(); 
  }


  function catfetch() {
 
 if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
   
      document.getElementById('catz').innerHTML=this.responseText;
   classfetch();  
coursefetch();
    }
  }
 
   xmlhttp.open("GET", "apis/catfetch.php", true);
   xmlhttp.send(); 

  }


 function teachnamefetch() {
 
 if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
   
      document.getElementById('namz').innerHTML=this.responseText;
  
    }
  }
 
   xmlhttp.open("GET", "apis/teachnamefetch.php", true);
   xmlhttp.send(); 

  }


function teachemailfetch() {
 
 if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
   
      document.getElementById('emz').innerHTML=this.responseText;
  
    }
  }
 
   xmlhttp.open("GET", "apis/teachemailfetch.php", true);
   xmlhttp.send(); 

  }


  function coursefetch() 
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
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) 
    {
      document.getElementById('coursez').innerHTML=this.responseText;
    }
  }
   xmlhttp.open("GET", "apis/coursefetch.php", true);
   xmlhttp.send();
  }


function calladdpprog() 
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
    
    if (this.readyState==4 && this.status==200) 
    {
    
document.getElementById('fillme').innerHTML=this.responseText;

    }
  }
  xmlhttp.open("GET", "apis/progadd.php", true);
   xmlhttp.send(); 
}


function progaddproc() 
{
  var ucont=document.getElementById('catz').value;
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
    if (this.readyState==4 && this.status==200) 
    {
     
alert(this.responseText);

    }
  }
  xmlhttp.open("GET", "apis/progaddproc.php?ucont="+ucont, true);
   xmlhttp.send(); 
}


function callremoveprog() 
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
    
    if (this.readyState==4 && this.status==200) 
    {
    
document.getElementById('fillme').innerHTML=this.responseText;
catfetch();
    }
  }
  xmlhttp.open("GET", "apis/callremoveprog.php", true);
   xmlhttp.send(); 
}


function progremoveproc() 
{
  var ucont=document.getElementById('catz').value;
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
    if (this.readyState==4 && this.status==200) 
    {
     
alert(this.responseText);

    }
  }
  xmlhttp.open("GET", "apis/progremoveproc.php?ucont="+ucont, true);
   xmlhttp.send(); 
}



function calladdcourse() 
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
    
    if (this.readyState==4 && this.status==200) 
    {
    
document.getElementById('fillme').innerHTML=this.responseText;
catfetch();
    }
  }
  xmlhttp.open("GET", "apis/courseadd.php", true);
   xmlhttp.send(); 
}


function courseaddproc() 
{
  var ucont=document.getElementById('coursez').value;
    var uconta=document.getElementById('catz').value;
     var studlev=document.getElementById('studlev').value;
    var studper=document.getElementById('studper').value;
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
    if (this.readyState==4 && this.status==200) 
    {
     
alert(this.responseText);

    }
  }
  xmlhttp.open("GET", "apis/courseaddproc.php?ucont="+ucont+"&uconta="+uconta+"&studlev="+studlev+"&studper="+studper, true);
   xmlhttp.send(); 
}



function callremovecourse() 
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
    if (this.readyState==4 && this.status==200) 
    {
      
document.getElementById('fillme').innerHTML=this.responseText;
catfetch();
coursefetch();
    }
  }
  xmlhttp.open("GET", "apis/courseremove.php", true);
   xmlhttp.send(); 
}



function courseremoveproc() 
{
 var ucontcat=document.getElementById('coursez').value;
var ucont=document.getElementById('catz').value;
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
    if (this.readyState==4 && this.status==200) 
    {

alert(this.responseText);

    }
  }
  xmlhttp.open("GET", "apis/courseremoveproc.php?ucont="+ucont +"&ucontcat=" + ucontcat, true);
   xmlhttp.send(); 
}



function callteacheadd() 
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
    if (this.readyState==4 && this.status==200) 
    {
   
document.getElementById('fillme').innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET", "apis/teachadd.php", true);
   xmlhttp.send(); 
}



function teachaddproc() 
{
  
  var teachidz=document.getElementById('teachidz').value;

  var teachz=document.getElementById('teachz').value;
  var emz=document.getElementById('emz').value;
  
    var phonz=document.getElementById('phonz').value;
     var pwdz=document.getElementById('pwdz').value;
      var priviz=document.getElementById('priviz').value;
if (teachz==""|| emz==""|| phonz==""|| pwdz==""|| priviz=="" || teachidz=="") 
  {
 alert("PLEASE COMPLETE ALL ENTRIES");
}
else
{
document.getElementById("form1").submit();

  }

}




function callteachview() 
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
    if (this.readyState==4 && this.status==200) 
    {
   
document.getElementById('fillme').innerHTML=this.responseText;
teachemailfetch();
teachnamefetch();


    }
  }
  xmlhttp.open("GET", "apis/teachview.php", true);
   xmlhttp.send(); 
}


function teachviewadmin() 
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
    if (this.readyState==4 && this.status==200) 
    {
   
document.getElementById('fillbooks').innerHTML=this.responseText;


    }
  }
  xmlhttp.open("GET", "apis/teachviewget.php", true);
   xmlhttp.send(); 
}




function serachbytmail() 
{
  var ucont=document.getElementById('emz').value;
  
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
    if (this.readyState==4 && this.status==200) 
    {
   
document.getElementById('fillbooks').innerHTML=this.responseText;


    }
  }
  xmlhttp.open("GET", "apis/serachbytmail.php?ucont="+ucont, true);
   xmlhttp.send(); 
}


function serachbytname() 
{
  var ucont=document.getElementById('namz').value;
  
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
    if (this.readyState==4 && this.status==200) 
    {
   
document.getElementById('fillbooks').innerHTML=this.responseText;


    }
  }
  xmlhttp.open("GET", "apis/serachbytname.php?ucont="+ucont, true);
   xmlhttp.send(); 
}


function deletebytem() 
{
  var ucont=document.getElementById('delem').value;
  
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
    if (this.readyState==4 && this.status==200) 
    {
   
alert(this.responseText);


    }
  }
  xmlhttp.open("GET", "apis/deletebytem.php?ucont="+ucont, true);
   xmlhttp.send(); 
}


function editteachs(x) 
{
  var ucont=x;
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
    if (this.readyState==4 && this.status==200) 
    {
   
document.getElementById('hoseditfill').innerHTML=this.responseText;

catfetch();
coursefetch();
    }
  }
  xmlhttp.open("GET", "apis/editteachs.php?ucont="+ucont, true);
   xmlhttp.send(); 
}


function courseteachaddproc() 
{
   var ucontcat=document.getElementById('emt').textContent;
   var ucontz=document.getElementById('catz').value;
  var ucont=document.getElementById('coursez').value;

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
    if (this.readyState==4 && this.status==200) 
    {

alert(this.responseText);

    }
  }
  xmlhttp.open("GET", "apis/courseteachaddproc.php?ucont=" + ucont+ "&ucontz=" + ucontz + "&ucontcat=" + ucontcat, true);
   xmlhttp.send(); 
} 



function studupd() 
{
   var ucontcat=document.getElementById('studidz').textContent;
   var ucontz=document.getElementById('studlev').value;
  var ucont=document.getElementById('studper').value;
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
    if (this.readyState==4 && this.status==200) 
    {

alert(this.responseText);

    }
  }
  xmlhttp.open("GET", "apis/studupd.php?ucont=" + ucont+ "&ucontz=" + ucontz + "&ucontcat=" + ucontcat, true);
   xmlhttp.send(); 
} 




function studadd() 
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
    if (this.readyState==4 && this.status==200) 
    {
   
document.getElementById('fillme').innerHTML=this.responseText;
catfetch();

    }
  }
  xmlhttp.open("GET", "apis/studadd.php", true);
   xmlhttp.send(); 
}



function stuaddproc() 
{
  var studidz=document.getElementById('studidz').value;
  var studz=document.getElementById('studz').value;
  var phonz=document.getElementById('phonz').value;
     var catz=document.getElementById('catz').value;

       var ygrup=document.getElementById('ygrup').value;
  var studlev=document.getElementById('studlev').value;
     var studper=document.getElementById('studper').value;

if (studidz==""|| studz==""|| phonz==""|| catz=="" || ygrup=="" || studlev==""|| studper=="") 
  {
 alert("PLEASE COMPLETE ALL ENTRIES");
}
else
{
document.getElementById("form1").submit();

  }

}



function studview() 
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
    if (this.readyState==4 && this.status==200) 
    {
   
document.getElementById('fillme').innerHTML=this.responseText;



    }
  }
  xmlhttp.open("GET", "apis/stuview.php", true);
   xmlhttp.send(); 
}


function studviewadmin() 
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
    if (this.readyState==4 && this.status==200) 
    {
   
document.getElementById('fillbooks').innerHTML=this.responseText;


    }
  }
  xmlhttp.open("GET", "apis/studviewget.php", true);
   xmlhttp.send(); 
}


function editstuds(x) 
{
  var ucont=x;
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
    if (this.readyState==4 && this.status==200) 
    {
   
document.getElementById('hoseditfill').innerHTML=this.responseText;


    }
  }
  xmlhttp.open("GET", "apis/editstuds.php?ucont="+ucont, true);
   xmlhttp.send(); 
}


function deletebysid() 
{
  var ucont=document.getElementById('delem').value;
  
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
    if (this.readyState==4 && this.status==200) 
    {
   
alert(this.responseText);


    }
  }
  xmlhttp.open("GET", "apis/deletebysid.php?ucont="+ucont, true);
   xmlhttp.send(); 
}


function serachbysid() 
{
  var ucont=document.getElementById('suid').value;
  
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
    if (this.readyState==4 && this.status==200) 
    {
   
document.getElementById('fillbooks').innerHTML=this.responseText;


    }
  }
  xmlhttp.open("GET", "apis/serachbysid.php?ucont="+ucont, true);
   xmlhttp.send(); 
}


function Toastz(t,e,n){var o=t,s=e,i=n;$.toaster({priority:o,title:s,message:i})}
function call_into_elements(t,e){var n=t,o=e;window.XMLHttpRequest?xmlhttp=new XMLHttpRequest:xmlhttp=new ActiveXObject("Microsoft.XMLHTTP"),xmlhttp.onreadystatechange=function(){4==this.readyState&&200==this.status&&(document.getElementById(o).innerHTML=this.responseText)},xmlhttp.open("GET",n,!0),xmlhttp.send()}
function crud_operations(t){var e=t;window.XMLHttpRequest?xmlhttp=new XMLHttpRequest:xmlhttp=new ActiveXObject("Microsoft.XMLHTTP"),xmlhttp.onreadystatechange=function(){if(4==this.readyState&&200==this.status){var t=this.responseText;alert(t)}},xmlhttp.open("GET",e,!0),xmlhttp.send()}
function log1(t){var e=t;window.XMLHttpRequest?xmlhttp=new XMLHttpRequest:xmlhttp=new ActiveXObject("Microsoft.XMLHTTP"),xmlhttp.onreadystatechange=function(){if(4==this.readyState&&200==this.status){var t=this.responseText;"Success"==t?window.location="admin/adminhome.php":alert(t)}},xmlhttp.open("GET",e,!0),xmlhttp.send()}function log0(){1==confirm("Do you want to log out?")&&(window.XMLHttpRequest?xmlhttp=new XMLHttpRequest:xmlhttp=new ActiveXObject("Microsoft.XMLHTTP"),xmlhttp.onreadystatechange=function(){4==this.readyState&&200==this.status&&("YOU HAVE BEEN LOGGED OUT SUCCESSFULLY."==this.responseText&&(window.location="../index.php"))},xmlhttp.open("GET","../Apis/logoutz.php",!0),xmlhttp.send())}function formsubmit(t){loadiz();var e=t;document.getElementById(e).submit(),stoploadiz()}function loadiz(){document.getElementById("loadz").style.display="block"}
function stoploadiz(){document.getElementById("loadz").style.display="none"}