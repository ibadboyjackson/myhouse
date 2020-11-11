<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link rel="stylesheet" type="text/css" href="./css/dropdown.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin=""/>
    <title>MyHouse</title>
</head>
<body>

<!-- LOADER -->
<div class="loading" id="loading">
    <div class="loader">
       <span class="txt">
            Logo
           Geomark
       </span>
        <span class="txt-b">
            MyHouse <br>
            Experiment
        </span>
        <span class="txt-r">
            L'immobilier de standing
        </span>
    </div>
</div>
<!-- END LOADER -->
<!-- MENU -->
<!-- END MENU -->

<!-- MAP -->


<div class="map" id="map">

    <!--
    <div class="sidebar-button">
        <button type="button" id="sidebarCollapse" class="btn btn-info" style="position: relative; display: block; z-index: 455">
            <i class="fas fa-align-left"></i>
        </button>
        <div class="wrapper">
                <div id="dismiss">
                    <i class="fas fa-arrow-left"></i>
                </div>

                <div class="sidebar-header">
                    <h3>MyHouse Sidebar</h3>
                </div>
            </nav>
        </div>
    </div>
-->

    <div class="pg">
        <nav class="navbar navbar-expand-lg navbar-light pg-nav">
            <div class="container-fluid">
                <a href="http://hermanjacksonfoutou.com" class="navbar-brand">Logo</a>
                <div class="ml-auto nav-r">
                    <a href="{{ route('login') }}" class="pg-user">
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="pg-r">
                        <span></span>
                    </a>
                </div>
            </div>
        </nav>
        <div class="container-fluid" style="background-color: transparent!important;">
            <div class="sidebar">
                <div class="container">
                    <div class="pg-sidebar">
                        <h6>Navigation</h6>
                    </div>
                    <div class="pg-slider-content">
                        <form action="">
                            <div class="form-group">
                                <label for="pays" style="margin-right: 15px;">Pays</label>
                                <select>
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="pays" style="margin-right: 15px;">Pays</label>
                                <select>
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

<!-- END MAP -->

<script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js" integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og==" crossorigin=""></script>
<script src="{{ asset('js/leaflet/casablanca.js') }}"></script>
<script src="{{ asset('js/map.js') }}"></script>
<script src="{{ asset('bootstrap/js/jquery.min.js') }}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="{{ asset('js/apps.js') }}"></script>
<script src="{{ asset('js/application.js') }}"></script>

<script src="{{ asset('') }}./js/jquery.dropdown.min.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</body>
</html>
