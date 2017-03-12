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
                        
                        <script>
                                            $("span.menu_1_left").click(function () {
                                                $("ul.menu_1_left_nav").slideToggle("slow", function () {
                                                    // Animation complete.
                                                });
                                            });
                        </script>
                        <ul class="menu_1_left_nav" style="z-index: 100">
                            <li><a href="top.html">Top</a></li>
                            <li class="last_menu" style="z-index: 100"><a href="index.html">Logout</a></li>
                        </ul>
                    </div>
                    <!-- Menu-1 -->
                </div>
            </div>

        </div>
        
            <div id="contents">
                あなたのプロフィールを入力してください
                <form action="top.html">
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
                    
    <script src="//maps.google.com/maps/api/js?sensor=true&key=AIzaSyAKj3g2YL_4urC2ci56GTxmg9dfzfhaO9w"></script>
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
                            <input type="button" id="updateButton" value="更新">
                        </div>	
                    </div>
                        <br>
                </form>
                <br>
            </div>
        <div id="footer" class="copy">
            <p>&copy; 2016 <a href="http://www.sorich.jp/" target="_blank">SORICH.ltd</a></p>
        </div>
        <script>
            $(document).ready(function(){
                $('#updateButton').click(function(){
                    console.log(123);
                    $('#background_opacyty').css('height', 20000);
                    $('#background_opacyty').css('top', 0);
                    $('#message').css('top', ($(window).height() + $(window).scrollTop()) / 2.5); 
                    no_scroll();
                    $('#background_opacyty').fadeIn("normal");
                    $('#message').fadeIn("normal");
                    setTimeout(function(){
                        $('#background_opacyty').fadeOut("normal");
                        $('#message').fadeOut("normal");
                        return_scroll();
                    }, 1500);
                });
                
                //スクロール禁止用関数
                function no_scroll(){
                    //PC用
                    var scroll_event = 'onwheel' in document ? 'wheel' : 'onmousewheel' in document ? 'mousewheel' : 'DOMMouseScroll';
                    $(document).on(scroll_event,function(e){e.preventDefault();});
                    //SP用
                    $(document).on('touchmove.noScroll', function(e) {e.preventDefault();});
                }
 
                function return_scroll(){
                    //PC用
                    var scroll_event = 'onwheel' in document ? 'wheel' : 'onmousewheel' in document ? 'mousewheel' : 'DOMMouseScroll';
                    $(document).off(scroll_event);
                    //SP用
                    $(document).off('.noScroll');
                }  
            });
        </script>
        <div id="background_opacyty" style="display:none;top:0;background-color: #000;position: absolute;;width: 100%;opacity: 0.6">
        
            
        </div>
        <div id="message" style="display:none;font-size:20px;top:100px;left:0;width: 100%; height: 30px; padding:20px 0; z-index: 100; position:absolute;background-color: #F27141;text-align: center;font-family: Robot;font-weight: bold">更新しました</div>