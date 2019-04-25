function envoyer(){



nom=document.getElementById("name").value;

if(nom.length==0)
{

	alert("Veuillez mettre votre nom");
}

if(document.getElementById('num').value == "")
{
	alert("Vous avez oublie de mettre votre numero");
}

 var chkZ = 1;
 for(i=0;i<document.getElementById('num').value.length;++i)
   if(document.getElementById('num').value.charAt(i) < "0"
   || document.getElementById('num').value.charAt(i) > "9")
     chkZ = -1;
 if(chkZ == -1) {
   alert("Le numero de telephone doit etre un nombre!");
   document.getElementById('num').focus();
  }

if(document.getElementById('adr').value == "")
{
	alert("Vous devez mettre votre adresse");
}


}