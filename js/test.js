var map;
var geocode;

function initMap() {
  var Australia = {lat: -33.861034  , lng: 151.171936};
  map = new google.maps.Map(document.getElementById('map'), {
    zoom: 12,
    center: Australia
  });
  var marker = new google.maps.Marker({
    position: Australia,
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
      var address =  data.address;
      geocoder.geocode( { 'address': address}, function(results, status) {
        if (status == 'OK') {
          map.setCenter(results[0].geometry.location);
          var points = {};
          points.id = data.EducatorID;
          points.lat = map.getCenter().lat();
          points.lng = map.getCenter().lng();
          updateTableWithLatLng(points);
        } else {
          alert('Geocode was not successful for the following reason: ' + status);
        }
      });
  });

  }

  function showAllData(cdata) {

      var infoWind = new google.maps.InfoWindow;

      Array.prototype.forEach.call(cdata , function (data) {

        var content = document.createElement('div');
        var strong = document.createElement('strong');
        strong.textContent = data.firstname + " " + data.lastname + " " + "; "+ data.address;
        content.appendChild(strong);

        var img = document.createElement('img');
        img.src = 'images/'+data.avatar;
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
