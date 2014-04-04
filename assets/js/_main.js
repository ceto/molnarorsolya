/* Author:

*/

function initialize() {
  // Create an array of styles.
  var styles = [
    {
      stylers: [
        { hue: "#aacfec" },
        { saturation: -95 }
      ]
    }
  ];

  var placem = new google.maps.LatLng(47.433733853169215, 19.10593271255493);
  var mapOptions = {
     zoom: 12,
     center: placem,
     mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  var helyszin_map = new google.maps.Map(document.getElementById('gmap'), mapOptions);
  helyszin_map.setOptions({styles: styles});
  

  var flag = {
          url: 'http://molnarorsolya.hu/wp-content/themes/molnarorsolya/assets/img/flag.png',
          size: new google.maps.Size(124, 127),
          origin: new google.maps.Point(0,0),
          anchor: new google.maps.Point(10, 120)
        };
  
  var flagshadow = {
          url: 'http://molnarorsolya.hu/wp-content/themes/molnarorsolya/assets/img/flag-shadow.png',
          size: new google.maps.Size(124, 127),
          origin: new google.maps.Point(0,0),
          anchor: new google.maps.Point(10, 100)
        };
        
 var markimark = new google.maps.Marker({
    position: placem,
    map: helyszin_map,
    title:"Molnar Orsolya",
    shadow:flagshadow,
    icon:flag,

 });
}
google.maps.event.addDomListener(window, 'load', initialize);

$(document).ready(function(){

  $('.kommentnyito').click(function(e){
    e.preventDefault();
    $('.cucu').toggleClass('nyitva');
    return false;
  });

});

function fbs_click(mi, width, height) {
    var leftPosition, topPosition;
    //Allow for borders.
    leftPosition = (window.screen.width / 2) - ((width / 2) + 10);
    //Allow for title and status bars.
    topPosition = (window.screen.height / 2) - ((height / 2) + 50);
    var windowFeatures = "status=no,height=" + height + ",width=" + width + ",resizable=yes,left=" + leftPosition + ",top=" + topPosition + ",screenX=" + leftPosition + ",screenY=" + topPosition + ",toolbar=no,menubar=no,scrollbars=no,location=no,directories=no";
    var u=location.href;
    var t=document.title;
    if (mi==='fb') {
      window.open('http://www.facebook.com/sharer.php?u='+encodeURIComponent(u)+'&t='+encodeURIComponent(t),'sharer', windowFeatures);
    } else {
      window.open('https://plus.google.com/share?url='+encodeURIComponent(u)+'&t='+encodeURIComponent(t),'sharer', windowFeatures);
    }
    return false;
}
