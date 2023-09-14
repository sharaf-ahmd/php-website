
//validation.js
function checkPatientId(id){
	
var patientid=document.getElementById(id).value;
var pattern=new RegExp("^[0-9]{4}$");
if(!pattern.test(patientid)|| patientid.length==0)
	window.alert("Invalid characters or no patientId")

}	
//---------------------------------------------------------------
function checkName(id,pattern){
	
var name=document.getElementById(id).value;
var pattern=new RegExp(pattern);
if(!pattern.test(name)|| name.length==0)
	window.alert("Invalid characters or no Name given")

}
//---------------------------------------------------------------
function checkAge(id){
	
var name=document.getElementById(id).value;
var pattern=new RegExp("^[0-9]{1,2}$");
if(!pattern.test(name)|| name.length==0)
	window.alert("Age must be between 1 and 99")

}
//---------------------------------------------------------------
function checkCity(id){
	
var name=document.getElementById(id).value;
var pattern=new RegExp("^[a-zA-Z]+$");
if(!pattern.test(name)|| name.length==0)
	window.alert("Invalid characters or no city given")

}
//---------------------------------------------------------------
function checkDisease(){
	
var name=document.getElementById('disease').value;
var pattern=new RegExp("^[a-zA-Z]+$");
if(!pattern.test(name)|| name.length==0){
	window.alert("Invalid characters or no Disease given")
	return false;
}else
	return true;	

}







	