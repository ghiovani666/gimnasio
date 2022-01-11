<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    @yield('title_page')
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Default CSS -->
    @section('head')
    @include('web.layouts.partials.head')
    @show
    <!-- CSS Page para las paginas a instanciar -->
    @yield('head_page')

</head>

<body>

    <!--wrapper start-->
    <div class="wrapper home-default-wrapper">

        <!-- Header para todas las paginas -->
        @include('web.layouts.partials.header')

        @yield('content')
        <!-- Footer para todas las paginas -->
        @include('web.layouts.partials.footer')

        <!-- Codigo JS para todas las paginas -->
        @include('web.layouts.partials.footer_js')

        @yield('footer_page')

    </div>
</body>

<style type="text/css">
    
/* Header Top */
.header-top {
    position: relative;
    background-color: #181614;
    padding: 16.5px 0;
}

.header-top .inner-container {
    position: relative;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
}

.header-top .left-column {
    position: relative;
    display: flex;
    align-items: center;
    flex-wrap: wrap;
}

.header-top ul.contact-info {
    position: relative;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
}

.header-top ul.contact-info li {
    margin-right: 22px;
    color: #fff;
    font-size: 16px;
    font-weight: 400;
    position: relative;
    padding-right: 20px;
}

.header-top ul.contact-info li:before {
    position: absolute;
    content: '';
    top: 5px;
    right: 0;
    width: 1px;
    height: 20px;
    background-color: rgba(255, 255, 255, 0.2);
}

.header-top ul.contact-info li:last-child:before {
    display: none;
}

.header-top ul.contact-info a {
    color: #fff;
}

.header-top ul.contact-info li i {
    margin-right: 7px;
    font-size: 20px;
    vertical-align: middle;
    position: relative;
    top: -2px;
}

.header-top .social-icon {
    position: relative;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    padding-left: 25px;
    border-left: 1px solid rgba(255, 255, 255, 0.2);
}

.header-top .social-icon li {
    margin-right: 20px;
    font-size: 14px;
    line-height: 20px;
}

.header-top .social-icon li a {
    color: #fff;
    transition: .5s;
}
/* Header Style */

.main-header {
    position: relative;
    display: block;
    width: 100%;
    z-index: 9999;
    top: 0px;
    left: 0px;
    background: none;
    clear: both;
}

.main-header.header-style-one .auto-container {
    max-width: 1520px;
}

.main-header.header-style-one {
    position: relative;
}

















section > [class*="container"] {
  padding-top: 100px;
  padding-bottom: 100px; }


/*
**buttons
*/
.theme_button {
  font-size: 16px;
  font-weight: 400;
  padding: 16px 38px;
  margin-bottom: 4px;
  line-height: 1;
  display: inline-block;
  min-width: 10em;
  text-align: center;
  color: #ffffff;
  border: 1px solid #323232;
  background-color: #323232;
  -webkit-border-radius: 0px;
  border-radius: 0px;
  position: relative;
  -webkit-transition: all 0.6s linear 0s;
  -moz-transition: all 0.6s linear 0s;
  -o-transition: all 0.6s linear 0s;
  -ms-transition: all 0.6s linear 0s;
  transition: all 0.6s linear 0s; }

.color1 {
  background-color: #6d81b4;
  border-color: #6d81b4; }

.color2 {
  background-color: #6d81b4;
  border-color: #6d81b4; }

.theme_button:active, .theme_button:hover, .theme_button:focus {
  color: #ffffff;
  background-color: #6d81b4;
  border-color: #6d81b4;
  opacity: 1;
  text-decoration: none;
  outline: none;
  -webkit-transition: all 0.05s linear 0s;
  -moz-transition: all 0.05s linear 0s;
  -o-transition: all 0.05s linear 0s;
  -ms-transition: all 0.05s linear 0s;
  transition: all 0.05s linear 0s; }

.theme_button:active {
  top: 1px; }

.theme_button.inverse {
  color: #323232;
  background-color: transparent;
  border: 1px solid #323232; }

.block_button {
  display: block;
  width: 100%;
  text-align: center; }

  
  
/*teasers*/
.teaser {
  position: relative;
  margin-bottom: 30px; }
  .teaser[class*="_bg_color"] {
    padding: 35px 40px; }
  .teaser [class*="_bg_color"] {
    padding: 21px;
    margin-bottom: 2px;
    text-align: center; }
    .teaser [class*="_bg_color"] + h4 {
      margin-top: 24px; }
  .teaser .border_icon {
    padding: 0.35em;
    min-width: 1.8em;
    border-width: 3px;
    border-style: solid; }
  .teaser i {
    min-width: 1em; }
  .teaser h2 {
    font-size: 50px;
    font-weight: 400;
    margin-bottom: 33px;
    position: relative;
    padding-bottom: 10px; }
    .teaser h2:after {
      content: '';
      position: absolute;
      width: 50px;
      margin-left: -25px;
      height: 1px;
      background-color: rgba(204, 204, 204, 0.2);
      bottom: -12px;
      left: 50%; }
  .teaser h3 {
    margin-bottom: 16px;
    font-size: 24px; }
  .teaser h4 {
    font-size: 20px;
    margin-bottom: 18px; }
  .teaser .media-left {
    padding-right: 30px; }
  .teaser .media-body h3 {
    margin-bottom: 8px;
    font-size: 28px; }
  .teaser .media-body h4 {
    margin-bottom: 6px; }
  @media (max-width: 500px) {
    .teaser h2, .teaser h3, .teaser h4 {
      font-size: 1.4em !important; } }
  .teaser [class*="count"] {
    font-family: 'Open Sans', sans-serif;
    font-size: 80px;
    margin: 10px 0 6px; }
    .teaser [class*="count"] + p {
      margin: 0;
      font-size: 28px;
      font-weight: 300; }
  .teaser .theme_button {
    margin: 22px 0 0; }
  .section_padding_bottom_0 .teaser {
    margin-bottom: 0; }

.teaser_icon {
  display: inline-block;
  line-height: 1;
  -webkit-transition: all 0.2s ease-in-out 0s;
  -moz-transition: all 0.2s ease-in-out 0s;
  -o-transition: all 0.2s ease-in-out 0s;
  -ms-transition: all 0.2s ease-in-out 0s;
  transition: all 0.2s ease-in-out 0s; }
  .teaser_icon + p {
    margin-top: 27px; }
  .teaser:hover .teaser_icon {
    -webkit-animation: pulse 0.9s infinite;
    -moz-animation: pulse 0.9s infinite;
    -ms-animation: pulse 0.9s infinite;
    -o-animation: pulse 0.9s infinite;
    animation: pulse 0.9s infinite; }

.size_big {
  font-size: 64px; }

.size_normal {
  font-size: 42px; }

.size_small {
  font-size: 26px; }

/*horizontal teaser*/
.teaser.table_section {
  margin-top: 26px; }
  .teaser.table_section + .teaser.table_section {
    margin-top: 70px; }

@media (min-width: 768px) {
  .teaser.table_section [class*="col-"] * {
    margin: 0;
    top: 0; } }

@media (max-width: 767px) {
  .teaser.table_section [class*="col-"] * {
    text-align: center !important; } }



</style>
</html>