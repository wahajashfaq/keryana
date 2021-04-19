    <br>
    <div style="height:400px;width:100%;display:block" id="map1"></div>
    <button id="btn_first" style="width:100%;background-color:#A1DB09;color:#fff;border:none;height:50px;font-size:20px;font-weight:700">Get My Location</button>
    <script>
      function initMap() {
          console.log('hello loc');
        var uluru = {lat: 31.5546, lng: 74.3572};
        var map = new google.maps.Map(document.getElementById('map1'), {
          zoom: 15,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script>
        function onPositionReceived(position){
            console.log(position);
            var uluru = {lat: position.coords.latitude, lng: position.coords.longitude};
            var map = new google.maps.Map(document.getElementById('map1'), {
                zoom: 15,
                center: uluru
            });
            var marker = new google.maps.Marker({
                position: uluru,
                map: map
            });
        }
      jQuery( document ).ready(function() {
          $("#btn_first").click(function(event) {
                    if(navigator.geolocation)
                    {
                        navigator.geolocation.getCurrentPosition(onPositionReceived);
                    }
                    else
                    {
                        alert('Your browser do not support location');
                    }
        });
      });
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDOaoVqktFyh0AocODts3nbwNaHnqfDK-M&callback=initMap">
    </script>