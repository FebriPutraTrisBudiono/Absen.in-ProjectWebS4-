// function getLocation() {
//   var x = document.getElementById("nama").value ;
//     document.getElementById("demo").innerHTML = "<b>" + x +"</b>";
// }
    
var x = document.getElementById("demo");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.watchPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}
    
function showPosition(position) {
    x.value= position.coords.latitude + 
    ", " + position.coords.longitude;
    //console.log(x.value);
}