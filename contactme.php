<?php include 'file.php'; ?>

<html>

<head>
<meta charset="utf-8"/>
<meta name="author" content="Dennis Turco"/>
<meta name="description" content="Personal WebSite"/>
<meta name="keywords" content="HTML, CSS, JavaScript"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/> <!--Serve per la visualizzazione da mobile-->
<title>Dennis Turco</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"/>
<link rel="icon" href="immagini/icona.ico"/>  <!--Icona della pagina web-->
<link rel="stylesheet" href="stylesheet/bootstrap.min.css"/> <!--incorporo bootstrap-->
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> <!--Script per permettere l'hover on scroll-->
<link rel="stylesheet" href="stylesheet/style.css"/>
<link rel="stylesheet" href="stylesheet/contact_style.css"/>

</head>

<body>
<button onclick="myFunction()" class="setting">Opzioni</button> <!--Bottone in basso a sinistra-->
<div id="myDropdown" class="setting-content">
    <table>
        <tr>
            <th colspan="2" style="text-align: center; background-color: #888; width: 200px; border-top-right-radius: 10px; border-top-left-radius: 10px;">Tema</th>	
        </tr>
        <tr>
            <td colspan="2" style="background-color: #888; width:100px; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;"><center><button id="thememode1" onclick="invertcolorFunction()"><i class="material-icons">invert_colors</i></button></center></td>
        </tr>
        
        <tr>
            <td height="20px"></td>
        </tr>
        
            <tr>
            <th colspan="2" style="text-align: center; background-color: #888; width: 200px; border-top-right-radius: 10px; border-top-left-radius: 10px;">Lingua</th>
        </tr>
        <tr>
            <td style="background-color: #888; width:100px; border-bottom-left-radius: 10px;"><center><button id="thememode" onclick="linguaITFunction()" >IT</button></center></td>
            <td style="background-color: #888; width:100px; border-bottom-right-radius: 10px;"><center><button id="thememode" onclick="linguaENFunction()" >EN</button></center></td>
            </tr>
        </table>
</div>

<div id="back"><a href="index.html"><i class="material-icons" title="home" style="font-size: 80px;">arrow_back</i></a></div>


<p style="text-align: center; font-size: 30px; margin-top: 50px;">
    <strong>Inviami Un Messaggio</strong>
</p>

<form action="" method="POST" id="messaggio" >
    <label for="nome_input">Nome</label><br/>
    <input type="text" name="nome_input" id="nome_input" required/><br/>
    <label for="cognome_input">Cognome</label><br/>
    <input type="text" name="cognome_input" id="cognome_input" required/><br/>
    <label for="oggetto_input">Oggetto</label><br/>
    <input type="text" name="oggetto_input" id="oggetto_input" required/><br/>
    <label for="messaggio_input">Messaggio</label><br/>
    <textarea style="resize: none; margin-left: 20px;" placeholder="Testo..." rows="10" cols="40" name="messaggio_input" id="messaggio_input" required></textarea><br/>
    <p style="text-align: center;">
    <input type="submit" name="submitButton" value="Invia Messaggio"/></p>
</form>

	
<footer style="margin-top: 50px;">
    <div style="height: 2px;"></div>
    <p>&copy; 2021 Dennis Turco</p>
    <i class="material-icons">phone</i> Tel: <a href="tel:+393421666192">+39 3421666192</a>   |   <i class="material-icons">email</i> Email: <a href="mailto:dennisturco@gmail.com">dennisturco@gmail.com</a>
    <br><i class="material-icons">location_on</i> Posizione: <a href="https://www.google.it/maps/place/43036+Fidenza+PR/@44.8612438,10.0520697,14z/data=!3m1!4b1!4m5!3m4!1s0x47805e2460c27007:0x896e3cfd8d45d0e3!8m2!3d44.866279!4d10.0615953" target="blank">Fidenza (Provincia di Parma)</a>
    <table align="center">
        <tr>
            <td style="border: none; width: 40px;"><a href="https://https://join.skype.com/invite/O3cCGY3NeWGg" target="blank" title="skype"><img src="immagini/skype.png"></a></td>
            <td width="10px"></td>
            <td style="border: none; width: 50px;"><a href="https://www.instagram.com/dennis_turco/" target="blank" title="instagram"><img src="immagini/instagram.png"></a></td>
            <td width="5px"></td>
            <td style="border: none; width: 60px;"><a href="https://github.com/Mr-Denno?tab=repositories" target="blank" title="github"><img src="immagini/github.png"></a></td>
            <td width="5px"></td>
            <td style="border: none; width: 40px;"><a href="https://discord.com/invite/kbZVz3m" target="blank" title="discord"><img src="immagini/discord.png"></a></td>
        </tr>
    </table>
</footer>

<script type="text/JavaScript" src="javascript.js"></script>

</body>

</html>