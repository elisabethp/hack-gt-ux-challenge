<html>
    <head>
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="https://bevacqua.github.io/dragula/"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.5/d3.js"></script>
        <script src="https://cdn.rawgit.com/novus/nvd3/v1.8.1/build/nv.d3.min.js"></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/dragula/3.7.2/dragula.min.js'></script>
        <script src="js/app.js"></script>

        <link rel="stylesheet" type="text/css" href="styles/original-theme.css">
        <link rel="stylesheet" type="text/css" href="styles/theme.css">
        <link rel="stylesheet" type="text/css" href="styles/dragula.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/novus/nvd3/v1.8.1/build/nv.d3.css">
    </head>
    <body>
        <div id="main-site">
            <div id="header">
                <div id="header-content">
                    <div class="header-section" id="left-header">
                        <div id="home-icon">
                            <svg class="ud3GfMdXCOVZXCvKABW5d _3cw4McDwMD97uMTf1wnGGf" width="48" height="48" viewBox="0 0 48 48"><g transform="translate(8 9)"><path fill-rule="nonzero" d="M14.723625 23.7500267L14.5395 23.8112533C13.35375 24.2036267 11.60025 24.8073067 10.025625 25.5282133 9.94125 25.5674133 9.886125 25.6771733 9.886125 25.6771733 9.8565 25.74512 9.81975 25.828 9.778125 25.9217067L9.77325 25.9336533C9.595875 26.3334933 9.3525 26.9349333 9.24975 27.1790933L9.168 27.3721067C9.15525 27.4030933 9.163125 27.4381867 9.186375 27.46096 9.201375 27.4751467 9.2205 27.4829867 9.240375 27.4837333 9.25275 27.4837333 9.265125 27.48112 9.27675 27.4751467L9.4665 27.3855467C9.8985 27.1813333 10.44225 26.87184 11.014875 26.6011733L11.034375 26.5922133C12.12225 26.07888 13.349625 25.4990933 14.087625 25.14816 14.088375 25.1477867 14.20725 25.0850667 14.266875 24.9663467L14.820375 23.8616533C14.835 23.8329067 14.8305 23.7981867 14.809125 23.7735467 14.788875 23.7489067 14.753625 23.74032 14.723625 23.7500267M10.303125 22.03792C10.380375 21.8863467 10.738875 21.1994133 10.82025 21.0456L10.83525 21.0194667C13.236375 16.5096 16.162875 12.25584 19.531875 8.37690667L19.62525 8.26938667C19.6545 8.23578667 19.659375 8.18837333 19.638 8.14917333 19.616625 8.10997333 19.57275 8.08869333 19.528875 8.09429333L19.388625 8.11370667C17.17725 8.41685333 14.940375 8.83648 12.736125 9.36101333 12.5175 9.42149333 12.37575 9.56373333 12.345375 9.59696 10.69575 11.5633067 9.133125 13.6341867 7.70025 15.7550933 7.62825 15.8618667 7.620375 16.11872 7.620375 16.11872 7.620375 16.11872 7.981875 18.88064 8.507625 20.9164267 7.204125 24.6471467 6.04125 29.5628267 6.04125 29.5628267 6.03225 29.59456 6.03825 29.62928 6.058125 29.6557867 6.078 29.6822933 6.10875 29.6983467 6.142125 29.69984L6.88425 29.69984C6.930375 29.7005867 6.972 29.6725867 6.987375 29.6296533L7.03875 29.4911467C7.796625 27.4352 8.65875 25.40576 9.6135 23.42784 9.835875 22.96752 10.303125 22.03792 10.303125 22.03792"></path><path fill-rule="nonzero" d="M20.61975,9.18293333 L20.61825,9.04256 C20.617125,8.99813333 20.58975,8.95856 20.54775,8.94362667 C20.506125,8.92832 20.458875,8.93989333 20.429625,8.97349333 L20.337,9.08026667 C16.408875,13.6032 13.10775,18.62416 10.523625,24.0016533 L10.463625,24.1274667 C10.44525,24.16704 10.452375,24.2148267 10.48275,24.2461867 C10.503,24.26784 10.53,24.2794133 10.5585,24.28016 C10.57275,24.28016 10.58775,24.2775467 10.601625,24.2719467 L10.731,24.21856 C12.937125,23.3087467 15.19125,22.51952 17.42925,21.87552 C17.5635,21.83744 17.676375,21.7441067 17.7405,21.6205333 C18.723,19.7165333 20.999625,16.03024 20.999625,16.03024 C21.05775,15.9466133 21.0435,15.8237867 21.0435,15.8237867 C21.0435,15.8237867 20.644875,11.4143467 20.61975,9.18293333"></path><path fill-rule="nonzero" d="M23.075625,2.08885333 C21.93525,2.06458667 20.579625,2.30874667 19.043625,2.81312 C18.813375,2.89376 18.6315,3.02032 18.466875,3.18122667 C16.906125,4.64096 15.38625,6.18917333 13.95,7.78890667 L13.840125,7.91061333 C13.809,7.94496 13.8045,7.99536 13.82775,8.03530667 C13.851375,8.07525333 13.8975,8.09578667 13.942875,8.08608 L14.102625,8.05173333 C16.418625,7.55893333 18.754125,7.18224 21.046125,6.93285333 C21.19725,6.91642667 21.352875,6.96682667 21.465375,7.06912 C21.579375,7.17216 21.643125,7.31925333 21.640125,7.47232 C21.6015,9.73696 21.684375,12.0131733 21.887625,14.2374933 L21.901125,14.38272 C21.90525,14.42752 21.936375,14.46448 21.979875,14.4760533 C22.040625,14.4809067 22.074375,14.4641067 22.09575,14.43424 L22.17975,14.3151467 C23.472,12.48096 24.876375,10.6971733 26.356125,9.0112 C26.51925,8.82304 26.5635,8.70469333 26.594625,8.53408 C27.06,5.56981333 26.341125,3.37834667 25.69875,2.82357333 C25.141125,2.34272 24.331875,2.11610667 23.075625,2.08885333 Z"></path><polygon class="navLogoStar" points="4 5.56 1.649 7.236 2.516 4.482 .196 2.764 3.083 2.738 4 0 4.917 2.738 7.804 2.764 5.484 4.482 6.351 7.236"></polygon></g></svg>
                        </div>
                        <div id="search">
                            <input type="text" placeholder="Search for stocks...">
                        </div>
                    </div> <!-- end left header -->
                    <div class="header-section" id="right-header">
                        <div id="icons">
                            <div class="icon">
                                <img src="imgs/user.png"/>
                            </div>
                            <div class="icon">
                                <img src="imgs/notifications.png"/>
                            </div>
                           <!-- <div class="icon">
                                <img src="imgs/settings.png"/>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div id="main-body">
                <div id="below-header-section">
                    <div id="spiderman">
                        <div id="dashboard-title"><h1>Your Dashboard</h1></div>
                    </div>
                    <div id="spooderman">
                        <!--<div id="current-status">-->
                            <!--<div id="status-name">Ruth Petit - Bois</div>-->
                            <div id="status-details">
                                <!--<div>
                                    <div class="status-help"><img src="imgs/help.svg"/></div>
                                </div> -->
                                <div class="status-div" id="portfolio-info">
                                    <div class="status-title" id="portfolio-title">Portfolio Value:</div>
                                    <div class="status-value" id="portfolio-val">100.78</div>
                                </div> <!-- end portfolio info -->
                                <div class="status-div" id="buying-info">
                                    <div class="status-title" id="buying-title">Buying Power:</div>
                                    <div class="status-value" id="buying-val">25.67</div>
                                </div> <!-- end buying info -->
                            </div> <!-- end status-details-->
                        <!--</div>-->
                    </div>
                </div> <!-- end below header section-->
                <div id="grid"> 
                    <div class="halves" id="left-grid"> 
                        <div class="top-q quarters" id="top-left-grid">
                            <div class="widget" id="graph-widget">
                                <div class="widget-title"><h2>Market</h2></div>
                                <div class="widget-content" id="graph">
                                    <div id="top-graph-desc"></div>
                                    <div id="graph-svg">
                                        <svg></svg>
                                    </div>
                                    <div id="graph-toggle"></div>
                                </div>
                            </div> <!-- end widget -->
                        </div>
                        <div class="quarters" id="bottom-left-grid">
                            <div class="widget" id="news-widget">
                                <div class="widget-title"><h2>News</h2></div>
                                <div class="widget-content" id="graph">
                                    <div id="top-graph-desc"></div>
                                    <div id="graph-svg">
                                        <svg></svg>
                                    </div>
                                    <div id="graph-toggle"></div>
                                </div>
                            </div> 
                        </div>
                    </div>
                    <div class="halves" id="right-grid">
                        <div class="top-q quarters" id="top-right-grid">
                            <div class="half-w widget" id="mystocks-widget">
                                <div class="widget-title"><h2>My Stocks</h2></div>
                                <div class="widget-content" id="graph">
                                    <div id="top-graph-desc"></div>
                                    <div id="graph-svg">
                                        <svg></svg>
                                    </div>
                                    <div id="graph-toggle"></div>
                                </div>
                            </div>
                            <div class="half-w widget" id="watchlist-widget">
                                <div class="widget-title"><h2>Watch List</h2></div>
                                <div class="widget-content" id="graph">
                                    <div id="top-graph-desc"></div>
                                    <div id="graph-svg">
                                        <svg></svg>
                                    </div>
                                    <div id="graph-toggle"></div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="quarters" id="bottom-right-grid">
                            <div class="widget" id="movers-widget">
                                <div class="widget-title"><h2>Top Movers</h2></div>
                                <div class="widget-content" id="graph">
                                    <div id="top-graph-desc"></div>
                                    <div id="graph-svg">
                                        <svg></svg>
                                    </div>
                                    <div id="graph-toggle"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end grid -->
            </div> <!-- end main body -->
        </div> <!-- end main site -->
    </body>
</html>