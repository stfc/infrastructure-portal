
try{
  var index=[]
  var i;
  var date;
  var labels=eval(document.getElementsByClassName('view-id-infrastructure_publish_graph')[0].getElementsByClassName('charts-google')[0].dataset.chart);
  for(i=1;i<labels.length;i++){
        if(labels[i][0].length==10){
            index.push(i);
            date = new Date(parseInt(labels[i][0])*1000);
            labels[i][0]=date.getFullYear()+"-"+(date.getMonth()+1);
          }
      }
  document.getElementsByClassName('view-id-infrastructure_publish_graph')[0].getElementsByClassName('charts-google')[0].dataset.chart=JSON.stringify(labels);
  }
catch(error){
  console.log('FAILED')
  console.log(error);
}
try{
  var index=[]
  var i;
  var date;
  var labels=eval(document.getElementsByClassName('block-views-blockrii-revision-chart-block-1')[0].getElementsByClassName('charts-google')[0].dataset.chart);

  for(i=1;i<labels.length;i++){
        if(labels[i][0].length==10){
            index.push(i);
            date = new Date(parseInt(labels[i][0])*1000);
            labels[i][0]=date.getFullYear()+"-"+(date.getMonth()+1);
          }
      }
  document.getElementsByClassName('block-views-blockrii-revision-chart-block-1')[0].getElementsByClassName('charts-google')[0].dataset.chart=JSON.stringify(labels);
  }
catch(error){
  console.log('FAILED')
  console.log(error);
}