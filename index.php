<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
    <link rel="stylesheet" href="css/w3.css">
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:300,600" rel="stylesheet">
</head>

<body>
    
<!-- navigation -->
<div class="w3-bar navbarstyle">
    <a href="#statement" class="w3-bar-item w3-button">milo anderson</a>
    <a href="#skills" class="w3-bar-item w3-button w3-hide-small">skills</a>
    <a href="#projects" class="w3-bar-item w3-button w3-hide-small">projects</a>
    <a href="#experience" class="w3-bar-item w3-button w3-hide-small">experience</a>
    <a href="#education" class="w3-bar-item w3-button w3-hide-small">education</a>
    <a id="burger" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium">&#9776;</a>
</div>
<div id="mobileNav" class="w3-bar-block navbarstyle w3-hide w3-hide-large w3-hide-medium">
    <a href="#skills" class="w3-bar-item w3-button">skills</a>
    <a href="#projects" class="w3-bar-item w3-button">projects</a>
    <a href="#experience" class="w3-bar-item w3-button">experience</a>
    <a href="#education" class="w3-bar-item w3-button">education</a>
</div>

<div class="w3-mobile mainwrapper">

    <!-- banner -->
    <div class="w3-mobile bannerwrapper">
        <img class="photo desktop" src="img/banner.jpg">
        <img class="photo mobile" src="img/mobile.jpg">
    </div>

    <!-- heading -->
    <div class="w3-mobile">
        <div class="w3-mobile headercontainer">
            <h1>about <span class="highlighttext">milo</span></h1>
        </div>
    </div>

    <!-- three columns -->
    <div class="w3-mobile w3-cell-row about">
        <div class="w3-mobile w3-cell one">
            <p class="phighlight">practical design - creative implementation</p>
            <p class="containercontent">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent mattis mauris quis est varius hendrerit. Proin pharetra ullamcorper turpis ut blandit. Mauris fermentum nec quam non volutpat. Vestibulum vitae massa pretium, finibus eros nec, luctus diam. Cras lectus dolor, ultricies ut metus eget, faucibus venenatis dui. Praesent gravida lectus ut mauris scelerisque pretium. Pellentesque posuere, urna sit amet feugiat tempor, est neque lobortis mauris, vel feugiat nisi dui vitae mauris. Donec nisi mauris, tincidunt eget metus fringilla, accumsan elementum magna. Praesent sollicitudin tellus porta scelerisque suscipit. Vestibulum arcu elit, dignissim vitae placerat at, mattis nec tortor. Sed aliquam, velit sit amet porta feugiat, ligula ipsum facilisis dolor, eget sagittis purus nibh at metus. Aliquam facilisis placerat pulvinar. Pellentesque accumsan ut nisi sit amet iaculis. Fusce luctus finibus leo non dapibus. Vivamus sollicitudin diam dolor, quis consequat urna commodo sed. Ut nibh dui, bibendum sit amet luctus eu, scelerisque id enim.</p>
        </div>
        <div class="w3-mobile w3-cell w3-cell two">
            <p class="phighlight">skills</p>
            <p class="containercontent">• WordPress & PHP Development<br>• User-Centered Systems Design<br>• Programming/System Management<br>• Leadership and Team Collaborations<br>• Projects and Processes Management<br>• Functionality & System Evaluations</p>
        </div>
        <div class="w3-mobile w3-cell w3-cell-middle three">
            <img class="photo" src="img/phototest-2.jpg">
        </div>
    </div>

<?php include 'portfolio.php'; ?>
   
    <!-- heading three -->
    <div class="w3-mobile">
        <div class="w3-mobile sayingcontainer">
            <h1>work <span class="highlighttext">experience</span></h1>
        </div>
    </div>

    <!-- work experience -->
    <div class="w3-mobile w3-cell-row educationcontainers">
        <div class="w3-mobile w3-cell w3-cell experienceboxes leftboxtwo">
            <p class="degree"><span class="highlighttext">2017 </span>Technical Director</p>
            <p class="major">Everett, WA</p>
            <p class="university">Content Motive</p>
            <p class="info">• Secured, migrated and reorganized 1,400 WordPress websites; managed hosting, domain registrations, CDNs</p>
        </div>

        <div class="w3-mobile w3-cell w3-cell experienceboxes centerbox">
            <p class="degree"><span class="highlighttext">2008-2015 </span>Web Developer</p>
            <p class="major">Seattle, WA</p>
            <p class="university">Garden City Group, LLC</p>
            <p class="info">• Using OOP PHP, AJAX, and T-SQL, developed complex transactional web applications supporting team processes; maintained these applications in response to ongoing changing requirements<br>• Leveraged HTML, CSS, JavaScript, and PHP expertise to build and maintain hundreds of high-traffic websites, including the General Motors Bankruptcy and the BP Oil Spill Settlement Fund websites; continually ensured cross-browser and mobile compatibility<br>• Leveraged knowledge of PHP and WordPress to create custom plugins from scratch; employed query filters, customized taxonomies, and user-meta data to support individual user interface configuraion<br>• Identfied opportunities to streamline processes; replaced hierarchical knowledge management system with a network-based system; produced training materials & documentaion<br>• Innovated a new way of generating complex dynamic & personalized documents using Crystal Reports; streamlined the data organization process and eliminated the need to hire contract workers</p>
        </div>
        <div class="w3-mobile w3-cell w3-cell experienceboxes rightboxtwo">
            <p class="degree"><span class="highlighttext">2007-2008 </span>Journalist</p>
            <p class="major">Seattle, Washington</p>
            <p class="university">Freelance</p>
            <p class="info">Provided ethical and accurate reporting; led coverage of the illegal eviction of villagers from their land near Sihanoukville, Cambodia and authored the story which was published in Northwest Asian Weekly. Served as the AP stringer at the Washington Democratic Party Headquarters; reported on the 2008 democratic caucus.</p>
        </div>
    </div>

    <!-- technology break -->
    <div class="w3-mobile technology">
        <h1>technology<span class="highlighttext"> snapshot</span></h1>
        <p class="techtext">MS Office/Excel | PHP | SQL | WordPress | CSS | LESS | Bootstrap | JavaScript | jQuery | AJAX | Adobe Photoshop, Acrobat Pro, InDesign | Crystal Reports | Yii2 | D3.js | Vue.js
            <br><br> Quickly learns programs or systems</p>
    </div>

    <!-- heading four -->
    <div class="w3-mobile">
        <div class="w3-mobile sayingcontainer">
            <h1>education & <span class="highlighttext">credentials</span></h1>
        </div>
    </div>

    <!-- education -->
    <div class="w3-mobile w3-cell-row educationcontainers">
        <div class="w3-mobile w3-cell w3-cell fifty leftbox">
            <p class="degree"><span class="highlighttext">2014 </span>Master's Degree</p>
            <p class="major">Information Systems Design & Critical Information Studies</p>
            <p class="university">University of Toronto - Toronto, Ontario</p>
            <p class="info">• Member of Beta Phi Mu<br>• Information Architecture<br>• Knowledge Media Design<br>• Data Modeling<br>• Project Management</p>
        </div>
        <div class="w3-mobile w3-cell w3-cell fifty rightbox">
            <p class="degree"><span class="highlighttext">2008 </span>Bachelor of Arts</p>
            <p class="major">Communications and an emphasis in Journalism</p>
            <p class="university">University of Washington – Seattle, Washington</p>
            <p class="info">• Finalist for Dean's Medal<br>• Member of Phi Beta Kappa</p>
        </div>
    </div>

    <!-- button -->
    <div class="w3-mobile buttondiv">
        <div class="w3-mobile button">
            <p class="buttontext">download <span class="highlighttext">resume</span></p>
        </div>
    </div>

    <!-- heading five -->
    <div class="w3-mobile">
        <div class="w3-mobile sayingcontainer">
            <h1>get in <span class="highlighttext">touch</span></h1>
        </div>
    </div>

    <!-- contact -->
    <div class="w3-mobile w3-cell-row educationcontainers">
        <div class="w3-mobile w3-cell w3-cell fifty leftbox">
            <p class="degree"><span class="highlighttext">email: </span>themiloanderson@gmail.com</p>
        </div>
        <div class="w3-mobile w3-cell w3-cell fifty rightbox">
            <p class="degree"><span class="highlighttext">call: </span>206.596.5558</p>
        </div>
    </div>

    <!-- wrapper end -->
</div>

<!-- footer -->
<div class="w3-mobile w3-cell-row footer">
    <div class="w3-cell footercells">
        <p class="leftfootercontent">MILO<span class="highlighttext">ANDERSON</span></p>
    </div>
    <div class="w3-cell footercells">
        <p class="rightfootercontent">&copy;milo anderson 2017. All Rights Reserved.</p>
    </div>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="semantic/dist/semantic.min.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>