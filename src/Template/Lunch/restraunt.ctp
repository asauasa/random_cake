        <div id="header" class="wrap">
            <div class="top_grid ">
                <!-- menus starts here -->
                <div class="column_left">
                    <!-- Menu-1 -->
                    <div class="menu_1">
                        <div class="menu_1-box">
                            <span class="menu_1_left"></span>
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
                            <li><a href="edit.html">Profile</a></li>
                            <li class="last_menu" style="z-index: 100"><a href="index.html">Logout</a></li>
                        </ul>
                    </div>
                    <!-- Menu-1 -->
                </div>
            </div>
            今日のランチはこちらでいかが？
        </div>
        <div id="contents">
            <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                <div class="resp-tabs-container" style="margin-top:0">
                    <div class="tab-1 resp-tab-content resp-tab-content-active" aria-labelledby="tab_item-0" style="display:block">
                        <div class="facts">
                            <div class="tab_left">
                                <img src="https://tabelog.ssl.k-img.com/restaurant/images/Rvw/25833/150x150_square_25833088.jpg" class="img-responsive" alt="">
                            </div>	
                            <div class="tab_right">
                                <h3><a target="_blank" href="http://tabelog.com/tokyo/A1313/A131302/13029946/">トラットリア イル・サロット</a></h3>
                                食べログ上の点数
                                <p>スコア：<i class="fa fa-star" style="color:gold" aria-hidden="true"></i>
                                    <i class="fa fa-star" style="color:gold" aria-hidden="true"></i>
                                    <i class="fa fa-star" style="color:gold" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    3.00
                                </p>
                                <p>ランチ：<i class="fa fa-star" style="color:gold" aria-hidden="true"></i>
                                    <i class="fa fa-star" style="color:gold" aria-hidden="true"></i>
                                    <i class="fa fa-star" style="color:gold" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    3.00
                                </p>
                                <p>夜　　：<i class="fa fa-star" style="color:gold" aria-hidden="true"></i>
                                    <i class="fa fa-star" style="color:gold" aria-hidden="true"></i>
                                    <i class="fa fa-star" style="color:gold" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    3.00
                                </p>
                                <p style="margin-top: 13px"><i class="fa fa-jpy" aria-hidden="true"></i>ランチ：～￥999 / <i class="fa fa-jpy" aria-hidden="true"></i>夜　：￥5,000～￥5,999
                                </p>
                            </div>
                            <div class="clear"> </div>
                        </div>
                    </div>
                </div>
                
    <script src="//maps.google.com/maps/api/js?sensor=true"></script>
    <script src="js/gmaps.js"></script>
    <script>
        $(document).ready(function(){
            $('#map').height(250);
            var geocoder = new google.maps.Geocoder();
            var marker = null;
            var infowindow = new google.maps.InfoWindow();
            var gmaps = new GMaps({
                div: "#map",
                lat: 35.672402452690676,
                lng: 139.77727853393117,
                zoom: 16,
            });
            gmaps.setOptions({
                streetViewControl: false,
                draggable: false
            });
            
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
            
            google.maps.event.addListener(gmaps.map, "zoom_changed", changeCenterEnd);
            changeCenterEnd();
        });
    </script>
                <div id="map">
                </div>
            </div>
            
            <a href="review.html" class="push_button push_button_blue">
                このお店に決定
            </a>
            <br>
            <a href="countdown.html" class="push_button_white">
                もう一回ランダムランチ
            </a>
            <br>
            <br>
        </div>
        <div id="footer" class="copy">
            <p>&copy; 2016 <a href="http://www.sorich.jp/" target="_blank">SORICH.ltd</a></p>
        </div>
