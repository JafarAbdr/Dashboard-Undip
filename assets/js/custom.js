var mainChartRefrech = null;
var targetFilter = {
  url : "",
  active : "jmlpem",
  angkatan : true,
  prodi : true,
  jenjang : true,
  fakultas : true,
  tahun : true,
  resetFilter : function(){
    targetFilter.url="";
    targetFilter.angkatan=true;
    targetFilter.fakultas=true;
    targetFilter.jenjang=true;
    targetFilter.tahun=true;
    targetFilter.prodi=true;
  }
}
function buildSelectionFromArray(tempArrayS){
  var tempStringS = "";
  if(tempArrayS.all){
    tempStringS = "<option value='' selected>-"+tempArrayS.prefixS+"-</option>";
  }
  for(ii = 0; ii < tempArrayS.arrayS.length; ii++){
    tempStringS += "<option value='"+tempArrayS.arrayS[ii]+"'>"+tempArrayS.arrayS[ii]+"</option>";
  }
  return tempStringS;
}

function refreshFilter(){
  if(targetFilter.url == "") return;
  j("#setAjax").setAjax({
		methode : 'GET',
		url : base_url+"Filter/Syncronize/"+targetFilter.url+"",
		bool : true,
		content : "",
		sucOk : function(a){
      a = JSON.parse(a);
      if(targetFilter.angkatan){
        $('#angkatan-bingkai').css({display : "block"});
        $("#angkatan-select").html(buildSelectionFromArray({
          arrayS : a.angkatan,
          all : true,
          prefixS : "SEMUA ANGKATAN"
        }));
      }else{
        $('#angkatan-bingkai').css({display : "none"});
      }
      if(targetFilter.tahun){
        $('#tahun-bingkai').css({display : "block"});
        $("#tahun-select").html(buildSelectionFromArray({
          arrayS : a.tahun,
          all : true,
          prefixS : "SEMUA PERIODE"
        }));
      }else{
        $('#tahun-bingkai').css({display : "none"});
      }
      if(targetFilter.prodi){
        $('#prodi-bingkai').css({display : "block"});
        $("#prodi-select").html(buildSelectionFromArray({
          arrayS : a.prodi,
          all : true,
          prefixS : "SEMUA PRODI"
        }));
      }else{
        $('#prodi-bingkai').css({display : "none"});
      }
      if(targetFilter.jenjang){
        $('#jenjang-bingkai').css({display : "block"});
        $("#jenjang-select").html(buildSelectionFromArray({
          arrayS : a.jenjang,
          all : true,
          prefixS : "SEMUA JENJANG"
        }));
      }else{
        $('#jenjang-bingkai').css({display : "none"});
      }
      if(targetFilter.fakultas){
        $('#fakultas-bingkai').css({display : "block"});
        $("#fakultas-select").html(buildSelectionFromArray({
          arrayS : a.fakultas,
          all : true,
          prefixS : "SEMUA FAKULTAS"
        }));
      }else{
        $('#fakultas-bingkai').css({display : "none"});
      }
      $('select').material_select();
		}
	});
}

//---------------------------------------------------------
//add event click all menu
function refreshView(tagObject){
  tempInfo = $(tagObject).attr('infovalue');
  targetFilter.resetFilter();
  if( targetFilter.active != tempInfo){
    targetFilter.active = tempInfo;
    if(tempInfo == 'prluun'){
      targetFilter.angkatan = false;
      targetFilter.prodi = false;
      targetFilter.url = "Wisuda";
    }else if(tempInfo == 'beripk'){
      targetFilter.active = tempInfo;
      targetFilter.fakultas = false;
      targetFilter.jenjang = false;
      targetFilter.url = "Wisuda";
    }
  }
  refreshFilter();
}
//end of add event
//---------------------------------------------------------
//graphLayout
var targetGraph = {
  url : "",
  resetGraph : function(){

  }
};
function refreshGraph(){
  if(targetGraph.url == "") return;
  j("#setAjax").setAjax({
		methode : 'GET',
		url : base_url+""+targetGraph.url+"",
		bool : true,
		content : "",
		sucOk : function(a){

    }
  });
}
//end graphLayout




//alert(listOfPage[0][0]);
$( document ).ready(function() {
  $(".font-me-sm a").click(function(){
    $(".font-me-sm a").removeAttr("class");
    $(this).attr("class","active-page");
    refreshView(this);
  });
    // Write your custom Javascript codes here...

    mainChartRefrech = function () {
        var data = [[0, 11], [1, 15], [2, 25], [3, 24], [4, 13], [5, 18]];
        var dataset = [{
            data: data,
            color: "#9575CD"
        }];
        var ticks = [[0, "1"], [1, "2"], [2, "3"], [3, "4"], [4, "5"], [5, "6"]];

        var options = {
            series: {
                bars: {
                    show: true,
                    fill: 1
                }
            },
            bars: {
                align: "center",
                barWidth: 0.3
            },
            xaxis: {
                ticks: ticks,
                tickLength: 0
            },
            legend: {
                show: true
            },
            grid: {
                color: "#AFAFAF",
                hoverable: true,
                borderWidth: 0,
                backgroundColor: '#FFF'
            },
            tooltip: true,
            tooltipOpts: {
                content: "Data: %x<br>value: %y people",
                defaultTheme: false
            }
        };
        $.plot($("#mainchart"), dataset, options);
    };
    mainChartRefrech();
});
