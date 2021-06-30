
<!-- Created By Kris Panman -->
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Portfolio</title>
      <link rel="stylesheet" href="style.css">
      <script src="https://kit.fontawesome.com/a076d05399.js"></script>
      <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
      <link rel="stylesheet" type="text/css" href="style1.css">
      
        
      
   </head>
   <body>
 <?php
            $connection = mysqli_connect("localhost","root","","website_portfolio");
            $select = "SELECT * from skills";
            $result = mysqli_query($connection,$select);
            while ($row = mysqli_fetch_array($result)){
            
                $skill_naam     = $row['skill_naam'];
                $skill_value    = $row['skill_value'];
            }
            ?>
         
         
         

     <div class="scroll-up-btn">
         <i class="fas fa-angle-up"></i>
      </div>
      <nav class="navbar">
         <div class="max-width">
            <div class="logo"><a href="#">Portfo<span>lio.</span></a></div>
            <ul class="menu">
               <li><a href="#home" class="menu-btn">Home</a></li>
               <li><a href="#about" class="menu-btn">over mij</a></li>
               <li><a href="#services" class="menu-btn">Projecten</a></li>
               <li><a href="#skills" class="menu-btn">vaardigheden</a></li>
               <li><a href="#teams" class="menu-btn">Teams</a></li>
               <li><a href="#contact" class="menu-btn">Contact</a></li>
            </ul>
            <div class="menu-btn">
               <i class="fas fa-bars"></i>
            </div>
         </div>
      </nav>
  
      <!-- home section start -->
      <section class="home" id="home">
         <div class="max-width">
            <div class="home-content">
               <div class="text-1">Hallo, mijn naam is </div>
               <div class="text-2">Kris Panman</div>
               <div class="text-3">En ik ben een  <span class="typing"></span></div>
               <a href="///C:/Users/krisp/OneDrive/Bureaublad/portfolio/index.html#contact">zoek contact</a>
            </div>
         </div>
      </section> 
      <!-- about section start -->
      <section class="about" id="about">
         <div class="max-width">
            <h2 class="title">Over mij</h2>
            <div class="about-content">
               <div class="column left">
                  <img src="afbeeldingen/profile1.jpg" alt="">
               </div>
               <div class="column right"> 
                  <div class="text">Ik ben Kris en ik ben een <span class="typing-1"></span></div>
                  <p>Mijn naam is Kris Panman, ik ben 16 jaar oud en ik woon in beverwijk. Ik volg de opleiding software developer aan het Nova college te Haarlem. Ik ben een hardwerkende en snelle leerling, ik kan kritiek goed opnemen maar ik durf het ook te geven. Ook durf ik mijn mening te geven, ik ben erg sociaal en ik praat graag. Ik ben al sinds een wat jongere leeftijd aan het programmeren en vind het nogsteeds interessant. Naast programmeren vind ik het leuk om met vrienden te zijn, ook sport ik veel en ik hou van muziek. Lang verhaal kort : ik ben een hele sociale, slimme en hardwerkende jongen. ik ben erg leergierig en ik leer snel.</p>
                  <a href="#">Download CV</a>
               </div>
            </div>
         </div>
      </section> 
      <!-- services section start -->
    <section class="services" id="services">
         <div class="max-width">
            <h2 class="title">Mijn projecten</h2>
            <div class="serv-content">

               <?php 
               $connection = mysqli_connect("localhost","root","","website_portfolio");
               $select = "SELECT * from projecten";
               $result = mysqli_query($connection,$select);
               while ($row = mysqli_fetch_array($result)){
                     
                  $projectnaam        = $row['projectnaam'];
                        $omschrijving       = $row['project_omschrijving'];
                        $project_startdatum = $row['project_startdatum'];
                        $project_einddatum  = $row['project_einddatum'];
                    
            ?>

                        <div class="card">
                            <div class="box">
                                <i class="fas fa-code"></i>
                                <div class="text"><?php echo $projectnaam;?></div>
                                <p><?php echo $omschrijving?></p>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
         </div>
         </div>
      </section> -->
      <!-- skills section start -->
     <section class="skills" id="skills">
         <div class="max-width">
            <h2 class="title">Mijn skills</h2>
            <div class="skills-content">
               <div class="column left">
                  <div class="text">Mijn skills en ervaringen.</div>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, ratione error est recusandae consequatur, iusto illum deleniti quidem impedit, quos quaerat quis minima sequi. Cupiditate recusandae laudantium esse, harum animi aspernatur quisquam et delectus ipsum quam alias quaerat? Quasi hic quidem illum. Ad delectus natus aut hic explicabo minus quod.</p>
                  <a href="#">Lees meer</a>
               </div>
               <div class="column right">
                  <?php
                     $connection = mysqli_connect("localhost","root","","website_portfolio");
                     $select = "SELECT * from skills ORDER BY skill_value DESC";
                     $result = mysqli_query($connection,$select);
                     while ($row = mysqli_fetch_array($result)){
                     
                         $skill_naam     = $row['skill_naam'];
                         $skill_value    = $row['skill_value'];
                     
                     ?>
                  <div class="bars">
                     <div class="info">
                        <span><?php echo strtoupper($skill_naam)?></span>
                        <span><?php echo $skill_value?></span>
                     </div>
                     <div class="line <?php echo $skill_naam ?>"></div>
                  </div>
                  <?php
                     }
                     ?>
               </div>
            </div>
         </div>
      </section> 
      <!-- teams section start -->
       <section class="teams" id="teams">
         <div class="max-width">
             <h2 class="title">Mijn werkervaringen</h2>
             <div class="carousel owl-carousel">
                 <?php  
               $connection = mysqli_connect("localhost","root","","website_portfolio");
               $select = "SELECT * from werkervaring";
               $result = mysqli_query($connection,$select);
               while ($row = mysqli_fetch_array($result)){
                     
                  $bedrijf = $row['werk_bedrijf'];
                        $omschrijving = $row['werk_omschrijving'];
                        $werk_van = $row['werk_datum_van'];
                        $werk_tot = $row['werk_datum_tot'];
                    
            ?>

                        
                                <div class="text"><?php echo $bedrijf;?></div>
                                <p><?php echo $omschrijving;?></p>
                                <p>Van<?php echo $werk_van;?></p>
                                <p>Tot<?php echo $werk_tot;?></p>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
             </div>
         </div>
         </section> 
      <!-- contact section start -->
     <section class="contact" id="contact">
         <div class="max-width">
            <h2 class="title">Contact me</h2>
            <div class="contact-content">
               <div class="column left">
                  <div class="text">Get in Touch</div>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos harum corporis fuga corrupti. Doloribus quis soluta nesciunt veritatis vitae nobis?</p>
                  <div class="icons">
                     <div class="row">
                        <i class="fas fa-user"></i>
                        <div class="info">
                           <div class="head">Name</div>
                           <div class="sub-title">Kris Panman</div>
                        </div>
                     </div>
                     <div class="row">
                        <i class="fas fa-map-marker-alt"></i>
                        <div class="info">
                           <div class="head">Address</div>
                           <div class="sub-title">Beverwijk, Nederland</div>
                        </div>
                     </div>
                     <div class="row">
                        <i class="fas fa-envelope"></i>
                        <div class="info">
                           <div class="head">Email</div>
                           <div class="sub-title">krispanman@outlook.com</div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="column right">
                  <div class="text">Bericht me</div>
                  <form action="#">
                     <div class="fields">
                     <div class="field name">
                        <input type="text" name="naam" placeholder="Naam" required>
                     </div>
                     <div class="field email">
                        <input type="email" name="email" placeholder="Email" required>
                     </div>                        
                  </div>
                  <div class="field Company name">
                        <input type="text" name="bedrijfsnaam" placeholder="Bedrijfsnaam">
                     </div>
                     <div class="field Address">
                        <input type="text" name="postcode" placeholder="Postcode">
                     </div>
                     <div class='field Zip code'>
                        <input type='text' name="vestigingsplaats" placeholder="Vestigingsplaats">
                     </div>
                     <div class="field telefoonnummer">
                        <input type="digits" name="telefoonnummer" placeholder="Telefoonnummer" required>
                     </div>
                  <div class="field">
                            <input type="text" name="onderwerp" placeholder="Onderwerp" required>
                        </div>
                        <div class="field textarea">
                            <textarea cols="30" rows="10" name="bericht" placeholder="Bericht" required></textarea>
                        </div>
                        <div class="button">
                            <button type="submit" name="Send_message">Stuur Bericht</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

   <?php

   $naam = "";
   $email = "";
    $bedrijfsnaam = "";
    $postcode = "";
    $vestigingsplaats = "";
   $telefoonnummer = "";
   $onderwerp = "";
   $bericht = "";
    $datum = date("d-m-Y");
    $masker = "/^([0-9]{4}[ ]+[A-Z]{2})$/";

   // array voor invoerfouten definiteren
   $invoerfouten = array();

// als op registreer wordt gedrukt
   
   if (isset($_POST['Send_message'])){
      $naam            = $_POST['naam'];
      $email             = $_POST['email'];
        $bedrijfsnaam       = $_POST['bedrijfsnaam'];
        $postcode           = $_POST['postcode'];
        $vestigingsplaats   = $_POST['vestigingsplaats'];
      $telefoonnummer       = $_POST['telefoonnummer'];
      $onderwerp         = $_POST['onderwerp'];
      $bericht            = $_POST['bericht']; 
        
        //Empty Testcases
       if (empty($naam))
        {
          array_push($invoerfouten,"Een naam is verplicht");
       }
        if (empty($email))
        {
          array_push($invoerfouten,"Een email adres is verplicht");
       }
        if (empty($onderwerp))
        {
          array_push($invoerfouten,"Een onderwerp is verplicht");
       }
        if (empty($bericht))
        {
          array_push($invoerfouten,"Een bericht is verplicht");
       }
        
        //Cijfergevoelig Testcases
       if (!ctype_alpha($naam))
        {
          array_push($invoerfouten,"Een voor en achternaam kunnen geen cijfers bevatten.");
       }       
        if (!ctype_alpha($vestigingsplaats))
        {
          array_push($invoerfouten,"Een vestigingsplaats mag geen cijfers bevatten.");
       }  

         if (!preg_match($masker,$postcode))
        {
            array_push($invoerfouten, "postcode is niet geldig.");
        }                 
       if (!is_numeric($telefoonnummer))
        {
            array_push($invoerfouten, "telefoonnummer is niet numeriek.");
        }
        if (!ctype_alpha($onderwerp))
        {
            array_push($invoerfouten, "Een onderwerp mag geen cijfers bevatten");
        }

        //email en postcode testcases
      
        if (!filter_var($email,FILTER_VALIDATE_EMAIL))
        {
            array_push($invoerfouten, "email is niet geldig.");
        }

      if (count($invoerfouten) == 0) {
            // Database connectie opbouwen
            $conn = new mysqli("localhost", "root", "", "website_portfolio");
            // Connectie controleren
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
      }

            // insert statement samenstellen
            $sql = "insert into contact (postcode, bedrijfsnaam, bericht, email, naam, onderwerp, telefoonnummer, vestigingsplaats, datum)
            values('$postcode', '$bedrijfsnaam', '$bericht', '$email', '$naam', '$onderwerp', '$telefoonnummer', '$vestigingsplaats', '$datum')";

            mysqli_query($conn, $sql);

            var_dump ($sql);

            } else
            {
            //als er invoerfouten zijn, voor elke regel de fout tonen.
            foreach ($invoerfouten as $invoerfout) {
                // voor iedere regel in het array de invoerfout tonen  tekstkleur rood.
                echo "<div style=color:red>" . $invoerfout . "</div>";
            }
        } 
     }
   ?>  <!-- einde php -->
      <!-- footer section start -->
     <footer>
         <span>Created By <a href="///C:/Users/krisp/OneDrive/Bureaublad/portfolio/index.html#">Kris Panman</a> | <span class="far fa-copyright"></span> 2020 All rights reserved.</span>
      </footer>
      <script src="script.js"></script>
   </body>
</html> 