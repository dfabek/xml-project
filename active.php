<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <title>XML projekt</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .centar article{
            width: 100%;
            border: 3px solid rgb(42,50,66);
            padding: 10px 0px;
            margin-top:20px;
        }

        .centar article img{
            width:75%;
        }   
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <a href="index.html"><li class="home">Home</li></a>
                <a href=""><li class="active">Active Map Pool</li></a>
                <a href="hostage.php"><li class="hostage">Hostage Rescue Maps</li></a>
                <a href="reserve.php"><li class="reserve">Reserve Map Pool</li></a>
            </ul>
        </nav>
    </header>

    <div class="centar">
        <h1>Active Map Pool</h1>

        <article class="ancient">
            <h1>Ancient</h1>
            <br />
            <div class="namjestanje">
                <img src="img/ancient.jpeg" />
                <br />
                <?php
                    $ancient = simplexml_load_file("mape.xml");
                    foreach($ancient->Ancient as $Ancient){
                        echo "<p>Creator: " . (string)$Ancient->Creator . "</p><br />";
                        echo "<p>Scenario: " . (string)$Ancient->Scenario . "</p><br />";
                        echo "<p>Counter-Terrorists: " . (string)$Ancient->CounterTerrorists . "</p><br />";
                        echo "<p>Terrorists: " . (string)$Ancient->Terrorists . "</p><br />";
                        echo "<p>Theme: " . (string)$Ancient->Theme . "</p><br />";
                        echo "<p>Location: " . (string)$Ancient->Location . "</p>";
                    }
                ?>
            </div>
        </article>

        <article class="dust2">
            <h1>Dust II</h1>
            <br />
            <div class="namjestanje">
                <img src="img/dust2.jpg" />
                <?php
                    $dust2 = simplexml_load_file("mape.xml");
                    foreach($dust2->DustII as $Dust2){
                        echo "<p>Creator: " . (string)$Dust2->Creator . "</p><br />";
                        echo "<p>Scenario: " . (string)$Dust2->Scenario . "</p><br />";
                        echo "<p>Counter-Terrorists: " . (string)$Dust2->CounterTerrorists . "</p><br />";
                        echo "<p>Terrorists: " . (string)$Dust2->Terrorists . "</p><br />";
                        echo "<p>Theme: " . (string)$Dust2->Theme . "</p><br />";
                        echo "<p>Location: " . (string)$Dust2->Location . "</p>";
                    }
                ?>
            </div>
        </article>
        
        <article class="inferno">
            <h1>Inferno</h1>
            <br />
            <div class="namjestanje">
                <img src="img/inferno.jpg" />
                <br />
                <?php
                    $inferno = simplexml_load_file("mape.xml");
                    foreach($inferno->Inferno as $Inferno){
                        echo "<p>Creator: " . (string)$Inferno->Creator . "</p><br />";
                        echo "<p>Scenario: " . (string)$Inferno->Scenario . "</p><br />";
                        echo "<p>Counter-Terrorists: " . (string)$Inferno->CounterTerrorists . "</p><br />";
                        echo "<p>Terrorists: " . (string)$Inferno->Terrorists . "</p><br />";
                        echo "<p>Theme: " . (string)$Inferno->Theme . "</p><br />";
                        echo "<p>Location: " . (string)$Inferno->Location . "</p>";
                    }
                ?>
            </div>
        </article>
        
        <article class="mirage">
            <h1>Mirage</h1>
            <br />
            <div class="namjestanje">
                <img src="img/mirage.jpg" />
                <br />
                <?php
                    $mirage = simplexml_load_file("mape.xml");
                    foreach($mirage->Mirage as $Mirage){
                        echo "<p>Creator: " . (string)$Mirage->Creator . "</p><br />";
                        echo "<p>Scenario: " . (string)$Mirage->Scenario . "</p><br />";
                        echo "<p>Counter-Terrorists: " . (string)$Mirage->CounterTerrorists . "</p><br />";
                        echo "<p>Terrorists: " . (string)$Mirage->Terrorists . "</p><br />";
                        echo "<p>Theme: " . (string)$Mirage->Theme . "</p><br />";
                        echo "<p>Location: " . (string)$Mirage->Location . "</p>";
                    }
                ?>
            </div>
        </article>
        
        <article class="nuke">
            <h1>Nuke</h1>
            <br />
            <div class="namjestanje">
                <img src="img/nuke.jpg" />
                <br />
                <?php
                    $nuke = simplexml_load_file("mape.xml");
                    foreach($nuke->Nuke as $Nuke){
                        echo "<p>Creator: " . (string)$Nuke->Creator . "</p><br />";
                        echo "<p>Scenario: " . (string)$Nuke->Scenario . "</p><br />";
                        echo "<p>Counter-Terrorists: " . (string)$Nuke->CounterTerrorists . "</p><br />";
                        echo "<p>Terrorists: " . (string)$Nuke->Terrorists . "</p><br />";
                        echo "<p>Theme: " . (string)$Nuke->Theme . "</p><br />";
                        echo "<p>Location: " . (string)$Nuke->Location . "</p>";
                    }
                ?>
            </div>
        </article>
        
        <article class="overpass">
            <h1>Overpass</h1>
            <br />
            <div class="namjestanje">
                <img src="img/overpass.jpg" />
                <br />
                <?php
                    $overpass = simplexml_load_file("mape.xml");
                    foreach($overpass->Overpass as $Overpass){
                        echo "<p>Creator: " . (string)$Overpass->Creator . "</p><br />";
                        echo "<p>Scenario: " . (string)$Overpass->Scenario . "</p><br />";
                        echo "<p>Counter-Terrorists: " . (string)$Overpass->CounterTerrorists . "</p><br />";
                        echo "<p>Terrorists: " . (string)$Overpass->Terrorists . "</p><br />";
                        echo "<p>Theme: " . (string)$Overpass->Theme . "</p><br />";
                        echo "<p>Location: " . (string)$Overpass->Location . "</p>";
                    }
                ?>
            </div>
        </article>
                
        <article class="vertigo">
            <h1>Vertigo</h1>
            <br />
            <div class="namjestanje">
                <img src="img/vertigo.jpg" />
                <br />
                <?php
                    $vertigo = simplexml_load_file("mape.xml");
                    foreach($vertigo->Vertigo as $Vertigo){
                        echo "<p>Creator: " . (string)$Vertigo->Creator . "</p><br />";
                        echo "<p>Scenario: " . (string)$Vertigo->Scenario . "</p><br />";
                        echo "<p>Counter-Terrorists: " . (string)$Vertigo->CounterTerrorists . "</p><br />";
                        echo "<p>Terrorists: " . (string)$Vertigo->Terrorists . "</p><br />";
                        echo "<p>Theme: " . (string)$Vertigo->Theme . "</p><br />";
                        echo "<p>Location: " . (string)$Vertigo->Location . "</p>";
                    }
                ?>
            </div>
        </article>
    </div>

    <footer>
        <p>© Domagoj Fabek 2021.</p>
    </footer>
</body>
</html>