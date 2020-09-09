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
catfetch();
coursefetch();
    }
  }
  xmlhttp.open("GET", "apis/teachadd.php", true);
   xmlhttp.send(); 
}



function teachaddproc() 
{
  var teachIDz=document.getElementById('teachIDz').value;
  var teachz=document.getElementById('teachz').value;
  var emz=document.getElementById('emz').value;
  
    var phonz=document.getElementById('phonz').value;
     var pwdz=document.getElementById('pwdz').value;
      var priviz=document.getElementById('priviz').value;
if (teachz==""|| emz==""|| phonz==""|| pwdz==""|| priviz=="" || teachIDz=="") 
  {
 alert("PLEASE COMPLETE ALL ENTRIES");
}
else
{
document.getElementById("form1").submit();

  }

}



function attacktime(a,b,c) 
{

  var catz=document.getElementById('catzs').value;
  var levelz=document.getElementById('studlevs').value;
  var periodz=document.getElementById('studpers').value;
  var coursez=document.getElementById('coursezs').value;
  var dateofatz=document.getElementById('attdats').value;
var studidz=a;
var studz=b;
var studattz=c;
if (studidz=="" || studz=="" || catz==""|| levelz==""|| periodz=="" || coursez==""|| dateofatz=="" || studattz=="" ) 
  {
 alert("PLEASE COMPLETE ALL ENTRIES");
}
else
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
   
alert(this.responseText);
document.getElementById('attzs').value="";
    }
  }
  xmlhttp.open("GET", "apis/atacktime.php?studidz="+studidz+"&studz="+studz+"&catz="+catz+"&levelz="+levelz+"&periodz="+periodz+"&coursez="+coursez+"&dateofatz="+dateofatz+"&studattz="+studattz, true);
   xmlhttp.send(); 
  }

}


function showUser(a) 
{

  var valz=a;
document.getElementById('attzs').value=valz;

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

catfetch();
coursefetch();

    }
  }
  xmlhttp.open("GET", "apis/teachview.php", true);
   xmlhttp.send(); 
}


function teachviewadmin() 
{
  
  var catz=document.getElementById('catz').value;
  var coursez=document.getElementById('coursez').value;
  var studlev=document.getElementById('studlev').value;
  var studper=document.getElementById('studper').value;
  var attdats=document.getElementById('attdats').value;

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
  xmlhttp.open("GET", "apis/teachviewget.php?catz="+catz+"&coursez="+coursez+"&studlev="+studlev+"&studper="+studper+"&attdats="+attdats, true);
   xmlhttp.send(); 
}




function serachbytmail() 
{
  var catz=document.getElementById('catz').value;
  var coursez=document.getElementById('coursez').value;
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
   
document.getElementById('fillbooks').innerHTML=this.responseText;


    }
  }
  xmlhttp.open("GET", "apis/serachbytmail.php?catz="+catz+"&coursez="+coursez+"&studlev="+studlev+"&studper="+studper, true);
   xmlhttp.send(); 
}



function editteachs(x,y) 
{
  var ucont=x;
  var ucontz=y;

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
  xmlhttp.open("GET", "apis/editteachs.php?ucont="+ucont+"&ucontz="+ucontz, true);
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



