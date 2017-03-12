
        <div id="header" class="wrap">
            <div class="top_grid ">
                <!-- menus starts here -->
                <div class="column_left">
                    <!-- Menu-1 -->
                    <div class="menu_1">
                        <div class="menu_1-box">
                            <span class="menu_1_left" style="visibility: hidden"></span>
                            <h2>ランダムランチ！</h2>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <!-- Menu-1 -->
                </div>
            </div>

        </div>
        
            <div id="contents">
                あなたのプロフィールを入力してください
                <form action="top">
                    <div class="various-grid accout-login">
                        <label>ニックネーム</label>
                        <input type="text" class="ac-pass" value="ニックネームを入力する" onfocus="this.value = '';" onblur="if (this.value == '') {
                                    this.value = 'ニックネームを入力する';
                                }">
                    </div>
                    <div class="strip_1">
                        <i class="point"> </i>
                        <h4 class="head-1">いつもの場所をえらぶ
                        </h4>
                        <div class="clear"> </div>
                    </div>
                    
    <script src="//maps.google.com/maps/api/js?key=AIzaSyAui-AdpYilenx-izhd4Lkt-5GpK7jL6Ng"></script>
    <script src="js/gmaps.js"></script>
    <script>
        $(document).ready(function(){
            $('#map').height(250);
            var geocoder = new google.maps.Geocoder();
            var marker = null;
            var infowindow = new google.maps.InfoWindow();
            var gmaps = new GMaps({
                div: "#map",
                lat: 35.67121267303759,
                lng: 139.76488766922,
                zoom: 15,
            });
            gmaps.setOptions({streetViewControl: false});
            
            var getAddress = function() {
                var pos = gmaps.getCenter();
                var lat = pos.lat();
                var lng = pos.lng();
                var latlng = new google.maps.LatLng(lat, lng);
                if (geocoder) {
                    geocoder.geocode({'latLng': latlng}, function(results, status) {
                        if (status == google.maps.GeocoderStatus.OK && results[1]) {
                            infowindow.setContent(results[1].formatted_address);
                            gmaps.removeMarker(marker);
                            marker = gmaps.addMarker({
                                lat: lat,
                                lng: lng,
                                icon: "images/red-map-icon.png",
                            });
                            infowindow.setContent('<div style="max-width:180px;font-size:10px">' + results[1].formatted_address + '</div>');
                            infowindow.open(gmaps.maps, marker);
                        }
                    });
                }
            }
            
            var changeCenter = function() {
                var pos = gmaps.getCenter();
                var lat = pos.lat();
                var lng = pos.lng();
                $('#lat').val(lat);
                $('#lng').val(lng);
                gmaps.removeMarker(marker);
                marker = gmaps.addMarker({
                    lat: lat,
                    lng: lng,
                    icon: "images/red-map-icon.png",
                });
            };
            var changeCenterEnd = function() {
                changeCenter();
                getAddress();
            }
            
            google.maps.event.addListener(gmaps.map, "drag", changeCenter);
            google.maps.event.addListener(gmaps.map, "dragend", changeCenterEnd);
            google.maps.event.addListener(gmaps.map, "zoom_changed", changeCenterEnd);
            changeCenter();

//            GMaps.geolocate({
//                success: function(position) {
//                  console.log(position);
//                  map.setCenter(position.coords.latitude, position.coords.longitude);
//
//                  map.addMarker({
//                      lat: position.coords.latitude,
//                      lng: position.coords.longitude,
//                      title:"場所",
//                          infoWindow: {
//                            content: '<p style="width:200px">現在地</p>'
//                          }       
//                  });
//
//                },
//                error: function(error) {
//                    console.log(error);
//                },
//                not_supported: function() {
//                  alert("ジオロケーションサポートしてないある。");
//                },
//              });
            });
    </script>
                    <div class="facts" id="map">
                    </div>
                    <div class="input-box-grid-white-search">
                        <div class="input-box-grid-white-search1 accout-login">
                            <label style="font-family: Roboto">緯度</label>
                            <input type="text" id="lat" readonly="readonly">
                        </div>
                        <div class="input-box-grid-white-search1 accout-login">
                            <label style="font-family: Roboto">経度</label>
                            <input type="text" id="lng" readonly="readonly">
                        </div>
                    </div>
                    <div class="but_4">
                        <div class="submit">
                            <input type="submit" onclick="myFunction()" value="登録">
                        </div>	
                    </div>
                        <br>
                </form>
                <br>
            </div>
        <div id="footer" class="copy">
            <p>&copy; 2016 <a href="http://www.sorich.jp/" target="_blank">SORICH.ltd</a></p>
        </div>
