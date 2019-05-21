$("#fs4").hide();
$("#next1").click(function(){
   
    
    var typeOfBusiness = document.getElementById('establishmenttype').value;
    var mpw = document.getElementById('mealsperweek').value;

     
    if(mpw>=1 && mpw<=100 && typeOfBusiness!='ps1'){
    $("#fs1").hide("slow", function(){
      
    });
    $("#fs2").fadeIn();
    $("#fs3").hide();
    $("#fs4").hide();
    
    $("#progressbar li").eq(1).addClass("active");
	
    }
    else if(typeOfBusiness=='ps1')
    {
        
        alert("Please select Establishment type");
    }
    else if(mpw<1 || mpw>100 ){
        alert("Enter No of meals between 1-100");
    }
    
   
    
	
});


$("#next2").click(function(){
    var vof = document.getElementById('valueoffood').value;
    var PeroidOfMeasurement = document.getElementById('periodofmeasurement').value;
    
    
    if(vof>=1 && vof<=10000 && PeroidOfMeasurement!='ps2'){
     
    $("#fs1").hide();
     $("#fs2").hide("slow", function(){
      
    });
    $("#fs3").fadeIn(500);
    $("#fs4").hide();

	$("#progressbar li").eq(2).addClass("active");
    }
	
    else if(vof<1 || vof>10000 ){
        alert("Enter Value between 1-10000");
    }
	  else if(PeroidOfMeasurement=='ps2')
    {
        
        alert("Please select Peroid Of Measurement");
    }
});
    


$("#previous2").click(function(){

     $("#fs1").fadeIn(500);
     $("#fs2").hide("slow", function(){
      
    });
    $("#fs3").hide();
    $("#fs4").hide();
    $("#progressbar li").eq(1).removeClass("active");
});

$("#previous3").click(function(){

     $("#fs1").hide();
   $("#fs2").fadeIn(500);
//    $("#fs3").hide();
     $("#fs3").hide("slow", function(){
      
    });
    $("#fs4").hide();
    $("#progressbar li").eq(2).removeClass("active");
});

$("#next3").click(function(){
    var pdos = document.getElementById('prepdoneonsite').value;
    var sites = document.getElementById('howmanysites').value;
    var mpw = document.getElementById('mealsperweek').value;
    if(sites>=1 && sites<=100 && pdos!='ps3' ){
    
    
    
        
    switch(pdos){
        case 'None':
            pdos = 0;
            break;
        case 'Little-25%':
            pdos = 0.25;
            break;
        case 'Most-75%':
            pdos = 0.50;
            break;
        case 'All-100%':
            pdos = 1;
            break;
    }
    var hms =document.getElementById('howmanysites').value;
    
    var totalMealServedPYear = mpw*50*pdos*hms;
    var avoidablefoodwaste;
    var CostOfFood;
   
    var typeOfBusiness = document.getElementById('establishmenttype').value;
    switch(typeOfBusiness){
            
        case 'Restaurants':
        avoidablefoodwaste =201;
        CostOfFood = 28;
        break;
            
        case 'Quick Service Restaurant (QSR)':
        avoidablefoodwaste =3;
        CostOfFood = 3;    
        break;
            
        case 'Pubs':
        avoidablefoodwaste =141;
        CostOfFood = 2;    
        break;
            
        case 'Hotels':
        avoidablefoodwaste =8;
        CostOfFood = 46;    
        break;
        
        case 'Staff Catering':
        avoidablefoodwaste = 122;
        CostOfFood = 25;    
        break;
            
        case 'Healthcare':
        avoidablefoodwaste = 122;
        CostOfFood = 25;    
        break;    
            
        case 'Education':
        avoidablefoodwaste = 122;
        CostOfFood = 25;    
        break;    
            
        case 'Services':
        avoidablefoodwaste = 215;
        CostOfFood = 15;    
        break;    
    }
    
     
    var totalFoodWasteInKgPerYear = totalMealServedPYear*avoidablefoodwaste;
    
    var foodWasteInKgPerYearPerSite = totalFoodWasteInKgPerYear / hms;
    
    var totalFoodWasteInPoundPerYear = totalFoodWasteInKgPerYear*CostOfFood;
    
    var totalFoodWasteInPoundPerYearPerSite = totalFoodWasteInPoundPerYear/hms;
    
    var CO2 = totalFoodWasteInKgPerYear*190;
    
    document.getElementById('d1').innerHTML = totalFoodWasteInKgPerYear+' kg';
    
    document.getElementById('d2').innerHTML = foodWasteInKgPerYearPerSite+' kg';
    
    document.getElementById('d3').innerHTML = totalFoodWasteInPoundPerYear+' € ';
    document.getElementById('d4').innerHTML = totalFoodWasteInPoundPerYearPerSite+' € ';
    document.getElementById('d5').innerHTML = CO2+' kg CO2';


    $("#fs1").hide();

     $("#fs2").hide();
        
    $("#fs3 ,#progressbar ").hide("slow", function(){
      
    });
   
    
    $("#fs4").fadeIn(500);
    
    }
     else if(pdos=='ps3')
    {
        
        alert("Please select Food Prep done on site");
    }
    else if(sites<1 || sites>100 ){
        alert("Enter No of sites between 1-100");
    }
   
    
         });

