var can_btn=true;
var can_btn2=true;
var cantxt=true;
try {
var btnele = document.getElementById("edit-delete")
document.getElementById("edit-delete").innerHTML=btnele.innerHTML.replace('Cancel','Delete');
}
catch(error){
  can_btn=false;
}
try {
var btnele2 = document.getElementById("edit-submit")
document.getElementById("edit-submit").innerHTML=btnele2.innerHTML.replace('Cancel','Delete');
}
catch(error){
  can_btn2=false;
}
try {
var cantitle = document.getElementsByClassName("page-header")[0];
document.getElementsByClassName("page-header")[0].innerHTML=cantitle.innerHTML.replace('cancel','delete');
}
catch(error){
  cantxt=false;
}
try{
 document.getElementById('user-cancel-form').innerHTML=document.getElementById('user-cancel-form').innerHTML.replace("Your account will be blocked and you will no longer be able to log in. All of your content will remain attributed to your username. Groups that were created by you will still list you as the owner. This action cannot be undone.","<p><b>Please note: This action can not be undone.</b></p> Your account will be deleted and you will no longer be able to log in. All of your content will remain attributed to your username including groups that you created still listing you as the owner. If you would like for your data to be removed completed, please contact the InfraPortal team: <a href='mailto:infraportal@ukri.org'>infraportal@ukri.org</a><p>&nbsp;</p>");
}
catch(error){
  cantxt=false;
}

