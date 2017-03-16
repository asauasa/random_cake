
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
                            <li style="z-index: 100"><a href="edit">Profile</a></li>
                            <li class="last_menu" style="z-index: 100"><a href="index">Logout</a></li>
                        </ul>
                    </div>
                    <!-- Menu-1 -->
                </div>
            </div>
            
        <div id="contents">
            <a href="countdown" class="push_button_white">
                いつもの場所で<br>
                ランダムランチ！
            </a>
            <br>
            <div style="">
                
            <a href="countdown" class="push_button push_button_red">
                いまいる場所で<br>
                ランダムランチ！
            </a>
            <br>
                
            </div>
            <div class="list">
                <ul>
                    <li><input class="green-tag tag4" type="button" onclick="window.location.href='review'" style="width:160px;" value="レビューを書く"> </li>
                    <li><input class="tag6" type="button" onclick="window.location.href='review_list'" style="width:160px;" value="ランチヒストリー"> </li>
                </ul>
            </div>
            <br>
        </div>
        </div>
        <div id="footer" class="copy">
            <p>&copy; 2016 <a href="http://www.sorich.jp/" target="_blank">SORICH.ltd</a></p>
        </div>
        <!--- start circle --->
        <script src="js/jquery.circliful.min.js"></script>
        <script>
                                                                    $(document).ready(function () {
                                                                        $('#myStat2').circliful();
                                                                    });
        </script>
        <link href="css/flexslider.css" rel='stylesheet' type='text/css' />
        <script defer src="js/jquery.flexslider.js"></script>
        <script type="text/javascript">
          $(function () {
          });
          $(window).load(function () {
              $('.flexslider').flexslider({
                  animation: "slide",
                  start: function (slider) {
                      $('body').removeClass('loading');
                  }
              });
          });
        </script>