function initialize(id,left,right) {
  var mapOptions = {  
    zoom: 8,
    center: new google.maps.LatLng(left,right),
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  map = new google.maps.Map(document.getElementById(id),
      mapOptions);

};

function   validation(){

if($('input[id=uname]').val() == '' ){
alert("Please Enter the name");
 return;
}
if($('input[id=email]').val() == '' ){
alert("Please enter the email");
 return;
 
}
if($('input[id=mobile]').val() == '' ){
alert("Please enter the mobileNo");
 return;
 
}
$("#quickform").submit();
};


