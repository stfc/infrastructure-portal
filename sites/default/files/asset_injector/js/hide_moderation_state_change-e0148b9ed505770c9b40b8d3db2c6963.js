hidevalues=['save_draft','more_info_needed','denied_delete_','requires_form_completer_approval','out_of_date_needs_updating']
modstate=document.getElementById('edit-moderation-state-0-state');

try{
if(modstate.querySelector('[selected="selected"]')!=null){
if(!hidevalues.includes(modstate.querySelector('[selected="selected"]').value)){
  document.getElementById('edit-moderation-state-0').style.display='none';
}
}
else{
  document.getElementById('edit-moderation-state-0').style.display='none';
}
}
catch(error){
  //document.getElementById('edit-moderation-state-0').style.display='none';
}