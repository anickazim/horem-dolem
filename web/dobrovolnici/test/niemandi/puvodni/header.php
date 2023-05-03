<div id="header">
    <img id="header_img" src="https://www.tesarjakub.cz/niemandi/resource/header_title.png">


    <div class="topnav">
        <a id="burger" href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
        <div id="myLinks" style="display: block; width: 0vw;" >
            <?php

            if(empty(glob("../niemandi/*", GLOB_ONLYDIR))){
                $dirs = glob("../../niemandi/*", GLOB_ONLYDIR);
            }
            else{
                $dirs = glob("../niemandi/*", GLOB_ONLYDIR);
            }

            foreach($dirs as $dir){

                $nameFile = fopen($dir . "/name.txt", "r");
                if ($nameFile) {
                    while (($line = fgets($nameFile)) !== false) {
                        $names[] = array(utf8_decode($line), utf8_encode($dir));

                    }

                    fclose($nameFile);
                }

            }
            $names[] = array("1_Home","https://www.tesarjakub.cz/niemandi/");
            sort($names);

            foreach ($names as $name){
                $line = substr($name[0],2);
                $directory = $name[1];
                echo '<a href="'. $directory .'" style="font-size: 30px; padding-top: 3vh;">'. utf8_encode($line).'</a><br>';
            }
            ?>
        </div>

    </div>
    <!--AREA BREADCRUMBS-->
    <nav aria-label="breadcrumb" id="breadcrumbs" style="margin-top: 100vh">
        <ol class="breadcrumb" style="background-color: black ;font-size: 25px;">

            <!--AREA ZJISTĚNÍ NÁZVŮ KATEGORIÍ Z TEXTOVÉHO SOUBORU, STEJNĚ JAKO U BOČNÍHO MENU. ULOŽENÍ NÁZVŮ DO PROMĚNNÉ $crumbnames-->
            <?php $crumbs = explode("/",$_SERVER['REQUEST_URI']);
            $src = "";
            for ($i = 1; $i <= count($crumbs)-2; $i++) {

                $myFile = $src . "name.txt";
                $lines = file($myFile);
                $crumbNames[]  = substr($lines[0],2);

                $src .= "../";
            }
            $crumbNames = array_reverse($crumbNames);
            //KONEC AREA ZJISTĚNÍ NÁZVŮ KATEGORIÍ Z TEXTOVÉHO SOUBORU

            $crumbs[1] = "Home";
            unset($crumbs[0]);

            if($_GET["type"] == "gallery"){

                $myFile = $_GET["post"] . "/" . $_GET["post"] . ".txt";
                $lines = file($myFile);
                $href = "";
                $counter = 0;

                foreach($crumbs as $crumb){
                    if($counter > 1){
                        $href = $href . "../";
                        $odkazy[] = $href;
                    }
                    elseif($counter == 1){
                        $href = $href . "";
                        $odkazy[] = '../Galerie/';
                    }
                    else{
                        $odkazy[] = $href;
                    }


                    $counter++;
                }

                $odkazy = array_reverse($odkazy);
                for ($i = 0; $i <= count($crumbNames); $i++){
                    if($i == count($crumbNames)){
                        echo '<li class="breadcrumb-item"><a href="'.$odkazy[$i].'" style="color: white" >'.$lines[1].'</a></li>';
                    }

                    else{
                        echo '<li class="breadcrumb-item"><a href="'.$odkazy[$i].'" style="color: white">'.$crumbNames[$i].'</a></li>';
                    }
                }
            }
            else{

                $counter = 0;
                $href = "";

                foreach($crumbNames as $crumbName){
                    if($counter > 0){
                        $href = $href . "../";
                        $odkazy[] = $href;
                    }
                    else{
                        $odkazy[] = $href;
                    }
                    $counter++;
                }
                $odkazy = array_reverse($odkazy);
                for ($i = 0; $i <= count($crumbNames); $i++){
                    echo '<li class="breadcrumb-item"><a href="'.$odkazy[$i].'" style="color: white">'.$crumbNames[$i].'</a></li>';
                }
            }
            ?>
        </ol>
    </nav>




</div>




