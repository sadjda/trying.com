function validation(form1)
{
	var A=window.document.form1.nom.value;
	var B=window.document.form1.age.value;
	var C=window.document.form1.adresse.value;
	var D=window.document.form1.code1.value;
	var E=window.document.form1.code2.value;
	
if (isNaN (A)){ window.alert("vous devez ecrire votre nom");} 

if (B<18 || B >23 || isNaN (B)){
   window.alert("vous devez entrez un age entre 18 et 23 ans "); }
 
if ((C== ' ')|| (A==' ' )){
 window.alert ("vous devez entrez votre adresse "); }

if (( D== ' ')&& (E==' ' )|| (length.D<8)|| (length.D!=length.E)
{ window.alert("erreur"); }
          
}; 
