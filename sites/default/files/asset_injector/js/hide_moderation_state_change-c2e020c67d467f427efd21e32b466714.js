hidevalues=['save_draft','more_info_needed','denied_delete_','requires_form_completer_approval','out_of_date_needs_updating']
modstate=document.getElementById('edit-moderation-state-0-state');

try{
if(modstate.querySelector('[selected="selected"]')!=null){
if(!hidevalues.includes(modstate.querySelector('[selected="selected"]').value)){
  document.getElementById('edit-moderation-state-0').style.display='none';
}
}
else{
  if(modstate.options[0].value=='save_draft' && modstate.options[1].value=='draft'){
    //document.getElementById('edit-moderation-state-0-current').style.display='none';
  }
  else{
    document.getElementById('edit-moderation-state-0').style.display='none';
  }
}
}
catch(error){
  document.getElementById('edit-moderation-state-0').style.display='none';
}