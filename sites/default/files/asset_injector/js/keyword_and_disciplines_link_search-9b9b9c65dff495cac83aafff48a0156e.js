var dis_present=true;
var key_present=true;
try {
var dis_ele = document.getElementsByClassName("field--name-field-macro-domains")[0].getElementsByClassName("field--item");
}
catch(error){
  dis_present=false;
}
try {
var key_ele = document.getElementsByClassName("field--name-field-keywords")[0].getElementsByClassName("field--item");
}
catch(error){
  key_present=false;
}
var i;
if(dis_present){
for (i = 0; i < dis_ele.length; i++) {
    var reference = dis_ele[i];
    var text = reference.innerText;
    var replacement = "/Search?search_api_fulltext=&f%5B0%5D=macro_domains%3A" + encodeURIComponent(text.replace(',','').toLowerCase());
    // create new anchor tag
    var a = document.createElement('a');
    a.href = replacement;
    a.innerText = text;
    a.className = "btn btn-info btn-sm";
    // do the replacement
    reference.innerHTML = ''; // clear the old contents of the reference
    reference.appendChild(a); // append the new anchor tag into the element
}
}
if (key_present){
for (i = 0; i < key_ele.length; i++) {
    var reference = key_ele[i];
    var text = reference.innerText;
    var replacement = "/Search?search_api_fulltext=" + encodeURIComponent(text.replace(',','').toLowerCase());
    // create new anchor tag
    var a = document.createElement('a');
    a.href = replacement;
    a.className = "btn btn-info btn-sm";
    a.innerText = text;

    // do the replacement
    reference.innerHTML = ''; // clear the old contents of the reference
    reference.appendChild(a); // append the new anchor tag into the element
}
}