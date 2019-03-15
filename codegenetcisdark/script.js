

	

var put=document.getElementById('seeMoreText1').innerHTML;
		var putWapas= document.getElementById('seeMoreTextArea1').innerHTML;
		var count=0;
		var count1=0;
		function f1(e){
			if(count%2==0){
				document.getElementById('seeMoreTextArea1').innerHTML=put;
				e.innerHTML="See Less..";
			}
			else{
				document.getElementById('seeMoreTextArea1').innerHTML=putWapas;
				e.innerHTML="Quick View";
}
			count++;
		}
		
		var put2=document.getElementById('seeMoreText2').innerHTML;
		var putWapas2= document.getElementById('seeMoreTextArea2').innerHTML;
		
		function f2(e){
			if(count1%2==0){
				document.getElementById('seeMoreTextArea2').innerHTML=put2;
				e.innerHTML="See Less..";
			}
			else{
				document.getElementById('seeMoreTextArea2').innerHTML=putWapas2;
				e.innerHTML="Quick View";
}
			count1++;
		}
		




	function f3(){
	
	
	
    var elmnt = document.getElementById("list1");
			
    elmnt.scrollIntoView({ behavior:'smooth'});
   

}


function f4(){
window.scrollBy({ 
  top: -5000, // could be negative value
  left: 0, 
  behavior: 'smooth' 
});}



function f5(){
	  var elmnt = document.getElementById("list2");
			
    elmnt.scrollIntoView({ behavior:'smooth'});
   
}
function f6(){
	  var elmnt = document.getElementById("list3");
			
    elmnt.scrollIntoView({ behavior:'smooth'});
   
}
function f7(){
	  var elmnt = document.getElementById("list4");
			
    elmnt.scrollIntoView({ behavior:'smooth'});
   
}


	$(window).scroll(function(event){
 			var y=$(this).scrollTop();
			
				
			if(y>450){
				
				$('#list11').addClass('trans1');
				$('#list11').removeClass('trans');
				$('#list21').addClass('trans2');
				$('#list21').removeClass('trans');
                $('#list41').addClass('trans2');
				$('#list41').removeClass('trans');
                
				$('#list31').addClass('trans3');
				$('#list31').removeClass('trans');

				
}
	
		});
