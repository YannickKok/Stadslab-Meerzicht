<?php
if($_POST["message"]) {
    mail("yannickok@msn.com", "Form to email message", $_POST["message"], "From: an@email.address");
}
?>

<!DOCTYPE html>
<html lang="nl">

    <head>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
        <link type="text/css" href="style.css" rel="stylesheet" />	
    </head>

    <body>
        <div class="container">
            
            <div class="box11">
                <h1><a href="index.html">Stadslab Meerzicht</a> > Project aanmelden </h1>

            </div>

            <div class="box22">

                <form action="projectaanmelden.php" method="post" enctype="text/plain">

                        
                        
                        

                    <select class="input">
                        <option>Kies een project</option>
                        <option>Een nieuw project starten</option>
                        <option>Nieuwe winkelcentrum</option>
                    </select>
                    <br>

                    <input type="text" class="input" value="Vul hier je naam in"> <br>
                    <input type="text" class="input" value="Vul hier je emailadres in"><br>
                    <input type="text" class="input" value="Vul hier je telefoonnummer in"><br>
                    <textarea class="biggerinput">Heb jij een goed idee voor Meerzicht? 

Laat het ons weten!
                    
Vul hier je idee in.
                </textarea>
                <button class="secondarybutton"><a href="index.html" class="buttontext">Terug gaan</a></button>
                <input type="submit" value="Verzenden" class="submitbutton">
            
            
            </form>

            </div>

            <div class="popup" id="myPopup">
                <div class="popuptext" >
                    <h2>Social Media</h2> <img src="pics/close3.png" class="closeimg" onclick="myFunction()">
                    
                    <p class="bold">Hier vind je een overzicht van Meerzichtse social media:
                        <br><br>
                        <a href="https://nl-nl.facebook.com/gemeentezoetermeer">Gemeente Zoetermeer</a><a class="button2" target="_blank" href="https://nl-nl.facebook.com/gemeentezoetermeer">Klik hier</a>
                        <br><br>
                        <a href="https://www.instagram.com/biebzoetermeer/">Bibliotheek Zoetermeer</a><a class="button2" target="_blank" href="https://www.instagram.com/biebzoetermeer/">Klik hier</a>
                        <br><br>
                        <a href="https://twitter.com/ZoetermeerVndg">Zoetermeer Nieuws</a><a class="button2" target="_blank" href="https://twitter.com/ZoetermeerVndg">Klik hier</a>

                    </p>
                </div>
            </div>

            <div class="popup2" id="myPopup2">
                <div class="popuptext" >
                    <h2>Nieuwsbrieven</h2> <img src="pics/close3.png" class="closeimg" onclick="showNewsletters()">

                    <p class="bold">Hier vind je een overzicht van Meerzichtse nieuwsbrieven.
                        <br><br>
                        <a href="http://www.waterbuurtvereniging.nl/vereniging/nieuwsbrief.htm">Waterbuurtvereniging</a><a class="button2" target="_blank" href="http://www.waterbuurtvereniging.nl/vereniging/nieuwsbrief.htm">Klik hier</a>
                        <br><br>
                        <a href="https://www.zoetermeer.nl/inwoners/producten-a-z_45918/product/nieuwsbrieven-aanmelden_1177.html?pk_campaign=Redirects&pk_kwd=nieuwsbrieven">Gemeente Zoetermeer</a><a class="button2" target="_blank" href="https://www.zoetermeer.nl/inwoners/producten-a-z_45918/product/nieuwsbrieven-aanmelden_1177.html?pk_campaign=Redirects&pk_kwd=nieuwsbrieven">Klik hier</a>
                        <br><br>
                        <a href="https://zoetermeer.nieuws.nl/nieuwsbrief/">Zoetermeer Nieuws</a><a class="button2" target="_blank" href="https://zoetermeer.nieuws.nl/nieuwsbrief/">Klik hier</a>
                    </p>
                </div>
            </div>

            <div class="box3">
                <img src="pics/nl crop.png" class="languagebutton">
                <select class="languageselect" id="langselect" onChange="window.location.href=this.value">
                    <option value="projectaanmelden.html">Nederlands (NL)</option>
                    <option value="submitproject.html">English (EN)</option>



                </select>


            </div>
        
        


        </div>



        <footer class="footercontainer">
            <div class="footerbold1" onclick="myFunction()">
                Social Media
            </div>
            <div class="footerbold1" onclick="showNewsletters()" >
                Nieuwsbrieven
            </div>
            <div class="footerbold">
                Adres: <br>

                <p class="footerfar">Albrandswaard 1</p>
            </div>
            <div class="footerbold">
                Telefoonnummer: <br>

                <p class="footerfar">060644115399</p>
            </div>
            <div class="footerbold">
                Email: <br>

                <p class="footerfar">W.burggraaff@hhs.nl</p>
            </div>
        </footer>

        <script>
            // When the user clicks on div, open the popup
            function myFunction() {
              var popup = document.getElementById("myPopup");
              
              popup.classList.toggle("show");
              


            }
            function showNewsletters() {
                var popup2 = document.getElementById("myPopup2");
                popup2.classList.toggle("show");

            }
        </script>

    </body>

</html>