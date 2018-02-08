var map;
var geocode;

function initMap() {
  var lagos = {lat: 6.4926317  , lng: 3.3489671};
  map = new google.maps.Map(document.getElementById('map'), {
    zoom: 14,
    center: lagos
  });
  var marker = new google.maps.Marker({
    position: lagos,
    map: map
  });

  var cdata = document.getElementById('data').innerHTML;
  cdata = JSON.parse(cdata);
  geocoder = new google.maps.Geocoder();
  codeAddress(cdata);

  var allData = document.getElementById('allData').innerHTML;
  allData = JSON.parse(allData);
  showAllData(allData);

}


function codeAddress(cdata) {
  Array.prototype.forEach.call(cdata , function (data) {
      var address = data.name + ' ' + data.address;
      geocoder.geocode( { 'address': address}, function(results, status) {
        if (status == 'OK') {
          map.setCenter(results[0].geometry.location);
          var points = {};
          points.id = data.id;
          points.lat = map.getCenter().lat();
          points.lng = map.getCenter().lng();
          updateTableWithLatLng(points);
        } else {
          alert('Geocode was not successful for the following reason: ' + status);
        }
      });
  });

  }

  function showAllData(allData) {

      Array.prototype.forEach.call(allData , function (data) {
        var infoWind = new google.maps.InfoWindow;
        var content = document.createElement('div');
        var strong = document.createElement('strong');
        strong.textContent = data.name +"; " + data.address;
        content.appendChild(strong);

        var img = document.createElement('img');
        img.src = 'images/man.jpg';
        img.style.width = '50px';
        content.appendChild(img);

        var marker = new google.maps.Marker({
          position: new google.maps.LatLng(data.lat , data.lng),
          map: map
        });

        marker.addListener('click' , function () {
            infoWind.setContent(content);
            infoWind.open(map, marker);
        })

      })
  }

  function updateTableWithLatLng(points) {
      $.ajax({
          url: 'action.php',
          method: 'post',
          data: points,
          success: function (res) {
              console.log(res)
          }
      })
  }
