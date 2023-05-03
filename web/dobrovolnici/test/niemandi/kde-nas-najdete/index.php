<?php
include "../head.php";
include "../header.php";
?>
<body onload="start()">
<main>
    <div class="container">
        <div class="container mb-5">
            <div class="btn-group">
                <button type="button" id="switch1" class="btn btn-secondary" style="border-right: black; border-style: solid;" onclick="switchMode('seznam','kalendar','switch1')">Seznam</button>
                <button type="button" id="switch2" class="btn btn-secondary" onclick="switchMode('kalendar','seznam','switch2')">Kalendář</button>
            </div>
        </div>

        <div class="container" id="seznam">
            <?php
            $file = fopen("feed.csv", "r");
            while (($line = fgetcsv($file)) !== FALSE) {
                $events[] = $line;
            }
            fclose($file);
            unset($events[0]);

            foreach ( $events as $event) {
                echo '<div class="card text-left">
                <h5 class="card-header">';
                    echo $event[1] . '
                </h5>
                <div class="card-body">
                    <h5 class="card-title">'; echo $event[0] . '</h5>
                    <p class="card-text">'; echo $event[2] . '</p>';
                    if($event[3] != ""){ echo '<a class="btn btn-primary" style="background-color: #3b5998;" href="https://facebook.com" role="button"><i class="me-2"></i>Facebook</a>';}
                    echo '</div>
            </div>';
            }
            ?>
        </div>
    </div>
    <div class="container" id="kalendar" style="position:absolute; top: 20vh; left: 0;padding: 0;margin-top: 20px">

    </div>
</main>
<script>
    function start(){
        setActiveSection();
        loadCal('cal');
    }
    function loadCal(type){
        if(screen.width > 1365){
            document.getElementById('kalendar').innerHTML += "<iframe src=\"https://calendar.google.com/calendar/embed?height=600&wkst=2&bgcolor=%23ffffff&ctz=Europe%2FPrague&showTitle=0&showDate=1&showPrint=0&showTz=0&showCalendars=0&mode=AGENDA&src=bWZ0cnAxNGMwZzNqNjl2N2hpcnRncmYzYjBAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&color=%23D81B60\" style=\"border:solid 1px #777\" width=\"600\" height=\"400\" frameborder=\"0\" scrolling=\"no\"></iframe>"
            document.getElementById('kalendar').style.margin = "auto";
            document.getElementById('kalendar').style.left = "";
        }
        else {
            document.getElementById('kalendar').innerHTML += "<iframe src=\"https://calendar.google.com/calendar/embed?height=600&wkst=2&bgcolor=%23ffffff&ctz=Europe%2FPrague&showTitle=0&showDate=1&showPrint=0&showTz=0&showCalendars=0&mode=AGENDA&src=bWZ0cnAxNGMwZzNqNjl2N2hpcnRncmYzYjBAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&color=%23D81B60\" style=\"border:solid 1px #777\" width=\"360\" height=\"400\" frameborder=\"0\" scrolling=\"no\"></iframe>"
        }
        if(type == 'cal'){
            document.getElementById('seznam').style.visibility = 'hidden';
            document.getElementById('switch2').classList.add('btn-dark');document.getElementById('switch2').classList.remove('btn-secondary');
        }
        else {
            document.getElementById('calendar').style.visibility = 'hidden';
            document.getElementById('switch1').classList.add('btn-dark');document.getElementById('switch1').classList.remove('btn-secondary');
        }
    }
    function switchMode(show, hide, op){
        document.getElementById(hide).style.visibility = "hidden";
        document.getElementById(show).style.visibility = "visible";
        if(op == 'switch1'){
            document.getElementById(op).classList.remove('btn-secondary');document.getElementById(op).classList.add('btn-dark');
            document.getElementById('switch2').classList.remove('btn-dark');document.getElementById(op).classList.add('btn-secondary');
        }
        else{
            document.getElementById(op).classList.remove('btn-secondary');document.getElementById(op).classList.add('btn-dark');
            document.getElementById('switch1').classList.remove('btn-dark');document.getElementById(op).classList.add('btn-secondary');
        }
    }
    function setActiveSection(){
        document.querySelector("a[href=" + CSS.escape(window.location.href) + "]").parentElement.classList.add('active-link');
    }

</script>
<style>
    /*OBECNE NASTAVENI*/
    .logo{
        top: 5px;
        height: 40px;
    }
    main{
        padding-top: 65px;
    }
    .navbar{
        z-index: 1;
    }
    .myButton{
        background-color: dimgrey; /* Green */
        border: none;
        color: white;
        border-radius: 10px;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        font-weight: bold;
    }

    /*FOOTER IKONY*/
    .fa {
        padding: 10px;
        width: 50px;
        height: 50px;
        text-align: center;
        text-decoration: none;
        margin:  15px;
        border-radius: 40px;
    }

    .fa:hover {
        opacity: 0.7;
        text-decoration: none;
        color: white;
    }

    .fa-facebook {
        background: white;
        color: black;
    }
    .fa-facebook:hover{
        color: white;
        background-color: #3b5998;
    }
    .fa-instagram {
        background: white;
        color: black;
    }
    .fa-instagram:hover{
        color: white;
        background: linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%);

    }


    /*SPLASHSCREEN*/
    .title_img{
        position:relative;
        top: 20%;
        width:350px;
    }
    .splash{
        z-index: 4;
        cursor : pointer;
        position : fixed;
        top : 0;
        left : 0;
        height : 100%;
        width : 100%;
        background-color: rgba(0,0,0);
        transition : all ease-in-out 450ms;
    }
    .hidden{
        transition : 0.5s;
        display : none;
    }
    .splash-header {
        height : 90%;
        color : white;
        font-family : consolas;
        font-size : 30px;
        display : flex;
        justify-content: center;
        align-items : center;
    }

    body {
        background-color: rgba(200,200,170);
        background-image: url('https://horem-dolem.cz/dobrovolnici/test/niemandi/resources/bg_image.png');
    }

    /*MUSICBAR*/
    * {
        margin: 0;
        padding: 0;
        border: 0;
        box-sizing: border-box;
    }
    body {
        font-family: "Lato", sans-serif;
        font-weight: 100;
        font-size: 16px;
        text-align: center;
        background: #eee;
    }
    .playing {
        position: fixed;
        top: 65%;
        left: 50%;
        width: auto;
        transform: translateX(-50%) translateY(-50%);
    }
    .playing:after {
        display: block;
        width: 100%;
        margin-top: 10px;
    }
    .now.playing .bar {
        display: inline-block;
        position: relative;
        margin-right: 1px;
        width: 10px;
        height: 1px;
        overflow: hidden;
        background: white;
        color: transparent;
        animation-name: pulse;
        animation-duration: 1s;
        animation-iteration-count: infinite;
    }
    .paused.playing .bar {
        animation-iteration-count: 1;
    }
    .paused.playing:after {
        content: "Paused (Lame)"
    }
    .n1 {
        animation-delay: 0.1s;
    }
    .n2 {
        animation-delay: 0.2s;
    }
    .n3 {
        animation-delay: 0.3s;
    }
    .n4 {
        animation-delay: 0.4s;
    }
    .n5 {
        animation-delay: 0.5s;
    }
    .n6 {
        animation-delay: 0.4s;
    }
    .n7 {
        animation-delay: 0.3s;
    }
    .n8 {
        animation-delay: 0.2s;
    }
    @keyframes pulse {
        0% {
            height: 1px;
            margin-top: 0;
        }
        10% {
            height: 40px;
            margin-top: -40px;
        }
        50% {
            height: 20px;
            margin-top: -20px;
        }
        60% {
            height: 30px;
            margin-top: -30px;
        }
        80% {
            height: 60px;
            margin-top: -60px;
        }
        100% {
            height: 1px;
            margin-top: 0;
        }
    }
    /*FACEBOOK PRO UDALOSTI*/
    body { padding: 2em; }


    /* Shared */
    .loginBtn {
        box-sizing: border-box;
        position: relative;
        /* width: 13em;  - apply for fixed size */
        margin: 0.2em;
        padding: 0 15px 0 46px;
        border: none;
        text-align: left;
        line-height: 34px;
        white-space: nowrap;
        border-radius: 0.2em;
        font-size: 16px;
        color: #FFF;
    }
    .loginBtn:before {
        content: "";
        box-sizing: border-box;
        position: absolute;
        top: 0;
        left: 0;
        width: 34px;
        height: 100%;
    }
    .loginBtn:focus {
        outline: none;
    }
    .loginBtn:active {
        box-shadow: inset 0 0 0 32px rgba(0,0,0,0.1);
    }


    /*NAVBAR UNDERLINE*/
    @media screen and (min-width: 1366px) {
        a {
            outline: none;
        }
        .carousel{
            margin-left: 50px;
            max-width: 600px;
        }
        .carousel-item > img{
            border-radius: 25px;
        }

        .navbar-container {
            text-align: center;
            background-color: #009688;
            box-shadow: 0px -20px 5px 20px #333333;
            padding: 10px;
            font-size: 0;
        }

        .navbar-container ul {
            margin: 0;
            padding: 0;
            text-align: right;
            display: inline-block;
            vertical-align: middle;
        }

        .navbar-container ul li {
            display: inline-block;
            font-size: 16px;
        }

        .navbar-container ul li a {
            color: #ffffff;
            text-decoration: none;
            display: inline-block;
            padding: 10px;
            transition: color 0.5s;
        }

        .navbar-collapse ul li .underline {
            height: 3px;
            background-color: transparent;
            width: 0%;
            transition: width 0.2s, background-color 0.5s;
            margin: 0 auto;
        }

        .navbar-collapse ul li.active-link .underline {
            width: 100%;
            background-color: white;
        }

        .navbar-collapse ul li:hover .underline {
            background-color: white;
            width: 100%;
        }

        .navbar-collapse ul li:hover a {
        }

        .navbar-collapse ul li:active a {
            transition: none;
            color: rgba(255,255,255,0.76);
        }

        .navbar-collapse ul li:active .underline {
            transition: none;
            background-color: rgba(255,255,255,0.76);
        }



    }
    /*MOBIL*/
    @media screen and (max-width: 1365px) {
        .logo{
            position: fixed;
            left: calc((50vw) - 40px);
            z-index: 100000;
            height: 40px;
        }
    }

</style>
</body>
<?php
include "../footer.php";
?>
