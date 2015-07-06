function loadExternalPage(link, paramProj){
  //if (typeof(divId)==='undefined') divId = '#divLoadExternalPage';
  $('#divLoadPage').load(link+'.php?id='+paramProj);
}
$( "#accordion" ).accordion({ heightStyle: "content"});
