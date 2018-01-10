<div class="projects">
    <!-- heading two -->
    <div class="w3-mobile">
        <div class="w3-mobile sayingcontainer projectsheader">
            <h1>project <span class="highlighttext">portfolio</span></h1>
        </div>
    </div>

    <!-- panel buttons -->
    <div class="w3-container w3-mobile" style="text-align: center;">
        <div class="project image overlay" data-modal="project1">
        </div>
        <div class="project image overlay" data-modal="project2">
        </div>
        <div class="project image overlay" data-modal="modal3">
        </div>
        <div class="project image overlay" data-modal="modal4">
        </div>
    </div>

    <div id="project1" class="ui modal">
        <div class="ui image content">
            <img class="ui centered image slide" src="img/dash1.png">
            <img class="ui centered image slide" src="img/dash2.png">
            <img class="ui centered image slide" src="img/dash3.png">
            <button class="w3-button w3-black w3-display-left">&#10094;</button>
            <button class="w3-button w3-black w3-display-right">&#10095;</button>
        </div>
        <div class="content">
            <div class="w3-mobile w3-cell w3-cell projectinfo">
            <h2>Analytics Dashboard</h2>
            <h3>Content Motive</h3>
            <p class="info">The purpose of this tool was to show that each piece of custom content would continue to pay dividends over time. It was intended for internal use, and external use by our clients, ergo the users of the system would be "experts", granting a little leeway to creatively streamline the interface. The development team had sidelined this project a few years ago, after they ran into trouble aggregating the volume of data required in a web-friendly timeframe. <!--My solution was to create a couple of methods that pre-aggregated the data before sending it to the browser: One method grouped by date for the left-hand chart; the other grouped by page for the right-hand table. These methods ran on a weekly cron job, after the application updated itself with new data from Google Analytics.--></p>
            </div>
            <div class="w3-mobile w3-cell w3-cell projectdetails">
                <!-- button -->
                <div class="w3-mobile buttondiv2">
                    <div class="w3-mobile button2">
                        <a href="http://www.dash.miloanderson.net" target="_blank">
                            <p class="buttontext">see it <span class="highlighttext">live</span></p>
                        </a>
                    </div>
                </div>
                <p class="date">Project Date <span class="highlighttext">June 2017 </span></p>
                <p class="tools">
                    Tools/Components: 
                    <span class="highlighttext">Yii2, D3.js, Google Analytics API, LESS, Webpack, Babel, Codeception, Netbeans, MySQL Workbench, Git</span>
                </p>
            </div>
        </div>
    </div>

    <div id="project2" class="ui modal">
        <div class="ui image content">
            <img class="ui centered image" src="img/svh.png">
        </div>
        <div class="content">
            <div class="w3-mobile w3-cell w3-cell projectinfo">
            <h2>Financial Chart</h2>
            <h3>Seattle Vipassana Hall</h3>
            <p class="info">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent mattis mauris quis est varius hendrerit. Proin pharetra ullamcorper turpis ut blandit. Mauris fermentum nec quam non volutpat. Vestibulum vitae massa pretium, finibus eros nec, luctus diam. Cras lectus dolor, ultricies ut metus eget, faucibus venenatis dui. Praesent gravida lectus ut mauris scelerisque pretium. Pellentesque posuere, urna sit amet feugiat tempor, est neque lobortis mauris, vel feugiat nisi dui vitae mauris.</p>
            </div>
            <div class="w3-mobile w3-cell w3-cell projectdetails">
                <!-- button -->
                <div class="w3-mobile buttondiv2">
                    <div class="w3-mobile button2">
                        <a href="http://www.svh.miloanderson.net" target="_blank">
                            <p class="buttontext">see it <span class="highlighttext">live</span></p>
                        </a>
                    </div>
                </div>
                <p class="date">Project Date <span class="highlighttext">January 2017</span></p>
                <p class="tools">
                    Tools/Components: 
                    <span class="highlighttext">D3.js, Google Sheets</span>
                </p>
            </div>
        </div>
    </div>
</div>