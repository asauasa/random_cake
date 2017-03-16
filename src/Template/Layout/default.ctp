<!DOCTYPE HTML>
<html>
    <head>
        <title>ランダムランチ</title>
        <!-- Custom Theme files -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <meta name="keywords" content="ランダムランチ, 適当にお店を決める, お店決定, 店が決まらない時" />
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="../js/jquery-1.11.1.min.js"></script>
        <!-- Custom Theme files -->
        <link href="../css/style.css" rel='stylesheet' type='text/css' />
        <script type="text/javascript" src="../js/Chart.js"></script> 
        <!-- Google Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
        <!---tage-script---->
        <!-- start price_bar  -->	
        <link href="../css/jquery.nouislider.css" rel="stylesheet">
        <script src="../js/jquery.nouislider.js"></script>
        <link rel="stylesheet" type="text/css" href="../css/fd-slider.css">
        <script type="text/javascript" src="../js/fd-slider.js"></script>
        <script>

            $(document).ready(function () {
                //-------row1-----//
                $(".tag1").click(function () {
                    $(".tag1").hide();
                });
                $(".toogle2").click(function () {
                    $(".toogle2").hide();
                });
                $(".tag2").click(function () {
                    $(".tag2").hide();
                });

                //-------//row1-----//

            });

        </script>
        <script src="../js/easyResponsiveTabs.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#horizontalTab').easyResponsiveTabs({
                    type: 'default', //Types: default, vertical, accordion           
                    width: 'auto', //auto or any width like 600px
                    fit: true   // 100% fit in a container
                });
            });
        </script>	
        <!----Calender -------->
        <link rel="stylesheet" href="../css/clndr.css" type="text/css" />
        <link rel="stylesheet" href="../css/font-awesome.css" type="text/css" />
        <link rel="stylesheet" href="../css/rl.css" type="text/css" />
        <script src="../js/underscore-min.js" type="text/javascript"></script>
        <script src= "../js/moment-2.2.1.js" type="text/javascript"></script>
        <script src="../js/clndr.js" type="text/javascript"></script>
        <script src="../js/site.js" type="text/javascript"></script>
        <!----End Calender -------->
    </head>
<body>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
</body>
</html>