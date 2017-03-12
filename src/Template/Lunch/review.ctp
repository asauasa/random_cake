
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
            レビュー記入
        </div>

        <div id="contents">
            <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                <div class="resp-tabs-container" style="margin-top:0">
                    <div class="tab-1 resp-tab-content resp-tab-content-active" aria-labelledby="tab_item-0" style="display:block">
                        <h2 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-2"><span class="resp-arrow"></span>レビューを記入してください。</h2>
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
                        <script type="text/javascript">
                            $(document).ready(function () {
                                $('.star_list').on('touchstart', onTouch); //指が触れたか検知
                                $('.star_list').on('touchmove', onTouch); //指が動いたか検知
                                $('.star_list').on('touchend', onTouch); //指が離れたか検知
                                var direction, position;
                                
                                function onTouch(event) {
                                    event.preventDefault()
                                    var touch = event.originalEvent.changedTouches[0];                // ページが動くのを止める
                                    pageX = touch.pageX; // X 座標の位置
                                    var diff   = $(this).find('i:nth-child(2)').offset().left - $(this).find('i:first-child').offset().left;
                                    var startX = $(this).find('i:first-child').offset().left;
                                    var currentX = (pageX - startX);
                                    var length   = (diff * 5);
                                    var result = Math.round(currentX / length * 10) / 2;
                                    var star_result = Math.floor(result) + '.0';
                                    if (Math.floor(result) > 5) {
                                        $($(this).find('i')).css('class', 'fa fa-star');
                                        star_result = '5.0';
                                    } else {
                                        for(i = 1; i <= 5; i++) {
                                            if (Math.floor(result) >= i) {
                                                $($(this).find('i')[i - 1]).attr('class', 'fa fa-star');
                                            } else {
                                                $($(this).find('i')[i - 1]).attr('class', 'fa fa-star-o');
                                            }
                                        }
                                        if (result - Math.floor(result) > 0 && Math.floor(result) < 5) {
                                            $($(this).find('i')[Math.floor(result)]).attr('class', 'fa fa-star-half-o');
                                            star_result = Math.floor(star_result) + 0.5;
                                        }
                                        if (star_result < 0) {
                                            star_result = '0.0';
                                        }
                                    }
                                    $(this).next('div').text(star_result);
                                }
                            });
                        </script>
                        <div class="facts">
                            <div style="font-size:26px;font-family: Roboto">
                                <div class="float" style="width:100px">味</div>
                                <div class="float star_list" style="text-align: center;font-size:26px;width:180px">
                                    <i class="fa fa-star" style="font-size:30px" aria-hidden="true"></i>
                                    <i class="fa fa-star" style="font-size:30px" aria-hidden="true"></i>
                                    <i class="fa fa-star" style="font-size:30px" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" style="font-size:30px;" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" style="font-size:30px;" aria-hidden="true"></i>
                                </div>
                                <div class="overflow" style="text-align: right;width:40px">3.0</div>
                            </div>

                            <div class="clear"></div>
                            <div style="font-size:26px;font-family: Roboto">
                                <div class="float" style="width:100px">量</div>
                                <div class="float star_list" style="text-align: center;font-size:26px;width:180px">
                                    <i class="fa fa-star" style="font-size:30px" aria-hidden="true"></i>
                                    <i class="fa fa-star" style="font-size:30px" aria-hidden="true"></i>
                                    <i class="fa fa-star" style="font-size:30px" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" style="font-size:30px;" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" style="font-size:30px;" aria-hidden="true"></i>
                                </div>
                                <div class="overflow" style="text-align: right;width:40px">3.0</div>
                            </div>

                            <div class="clear"></div>
                            <div style="font-size:26px;font-family: Roboto">
                                <div class="float" style="width:100px">コスパ</div>
                                <div class="float star_list" style="text-align: center;font-size:26px;width:180px">
                                    <i class="fa fa-star" style="font-size:30px" aria-hidden="true"></i>
                                    <i class="fa fa-star" style="font-size:30px" aria-hidden="true"></i>
                                    <i class="fa fa-star" style="font-size:30px" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" style="font-size:30px;" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" style="font-size:30px;" aria-hidden="true"></i>
                                </div>
                                <div class="overflow" style="text-align: right;width:40px">3.0</div>
                            </div>

                            <div class="clear"></div>
                            <div style="font-size:26px;font-family: Roboto">
                                <div class="float" style="width:100px">混雑度</div>
                                <div class="float star_list" style="text-align: center;font-size:26px;width:180px">
                                    <i class="fa fa-star" style="font-size:30px" aria-hidden="true"></i>
                                    <i class="fa fa-star" style="font-size:30px" aria-hidden="true"></i>
                                    <i class="fa fa-star" style="font-size:30px" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" style="font-size:30px;" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" style="font-size:30px;" aria-hidden="true"></i>
                                </div>
                                <div class="overflow" style="text-align: right;width:40px">3.0</div>
                            </div>

                            <div class="clear"></div>
                            <div style="font-size:26px;font-family: Roboto;">
                                <div class="float" style="width:100px">接客</div>
                                <div class="float star_list" style="text-align: center;font-size:26px;width:180px">
                                    <i class="fa fa-star" style="font-size:30px" aria-hidden="true"></i>
                                    <i class="fa fa-star" style="font-size:30px" aria-hidden="true"></i>
                                    <i class="fa fa-star" style="font-size:30px" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" style="font-size:30px;" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" style="font-size:30px;" aria-hidden="true"></i>
                                </div>
                                <div class="overflow" style="text-align: right;width:40px">3.0</div>
                            </div>

                            <div class="clear"></div>
                            <div class="compose_twit">
                                <h3>感想</h3>
                                <textarea value="Message" onfocus="this.value = '';" onblur="if (this.value == '') {
                                    this.value = 'Message';
                                }"></textarea>
                            </div>
                        </div>
                    </div>  

                <a style="margin-top: 10px;font-family: Roboto" href="top.html" class="push_button push_button_blue">
                    レビュー登録
                </a>
                </div>  
            </div>
            <br>
        </div>
        <div id="footer" class="copy">
            <p>&copy; 2016 <a href="http://www.sorich.jp/" target="_blank">SORICH.ltd</a></p>
        </div>