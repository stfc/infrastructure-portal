try{
document.getElementById("edit-field-rii-logo-0--description").innerHTML=document.getElementById("edit-field-rii-logo-0--description").innerHTML.replaceAll('<br>','');
}
catch(error){
//console.log('no logo');
}
try{
document.getElementById("edit-field-assistive-image-0--description").innerHTML=document.getElementById("edit-field-assistive-image-0--description").innerHTML.replaceAll('<br>','');
}
catch(error){
//console.log('no image');
}
try{
var domaindescription = document.getElementById('edit-field-macro-domains--wrapper--description');
var domainnode = domaindescription.parentNode;
domaindescription.classList.add('help-block');
domainnode.insertBefore(domaindescription, domainnode.firstChild);
}
catch(error){
//console.log('no domain');
}
try{
var domaindescription = document.getElementById('edit-field-q-19--wrapper--description');
var domainnode = domaindescription.parentNode;
domaindescription.classList.add('help-block');
domainnode.insertBefore(domaindescription, domainnode.firstChild);
}
catch(error){
//console.log('no economic sector');
}
try{
var domaindescription = document.getElementById('edit-field-q-21--wrapper--description');
var domainnode = domaindescription.parentNode;
domaindescription.classList.add('help-block');
domainnode.insertBefore(domaindescription, domainnode.firstChild);
}
catch(error){
//console.log('no scope');
}
try{
var domaindescription = document.getElementById('edit-field-q-22a--wrapper--description');
var domainnode = domaindescription.parentNode;
domaindescription.classList.add('help-block');
domainnode.insertBefore(domaindescription, domainnode.firstChild);
}
catch(error){
//console.log('no access');
}
try{
  document.getElementsByClassName('js-form-item-field-q-22a')[0].style.display="none";
}
catch(error){
 //console.log('failed to remove na'); 
}
try{
  document.getElementsByClassName('js-form-item-field-q-21')[0].style.display="none";
}
catch(error){
 //console.log('failed to remove na'); 
}

//console.log('replaced')