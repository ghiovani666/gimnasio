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









































.breadcrumb {
  margin: 5px 0;
  padding: 0;
  background-color: transparent;
  border-radius: 0;
  font-size: 14px;
  font-weight: 700;
  color: inherit; }

.breadcrumb > .active {
  color: inherit;
  opacity: 0.9; }

.breadcrumb > li + li:before {
  color: inherit;
  padding: 0 20px;
  font-family: 'fontello';
  content: '\e830'; }

/*pagination*/
.pagination {
  margin-bottom: 10px; }

.pagination > li > a, .pagination > li > span {
  text-align: center;
  padding: 9px 0;
  border-color: #e5e5e5;
  color: #323232;
  border-width: 1px;
  margin-left: 10px;
  margin-bottom: 10px;
  min-width: 40px;
  max-width: 40px;
  font-size: 14px;
  font-weight: 400;
  text-transform: uppercase; }

.pagination > li:first-child > a, .pagination > li:first-child > span {
  border-radius: 0px;
  padding: 9px 0; }

.pagination > li:last-child > a, .pagination > li:last-child > span {
  border-radius: 0px;
  padding: 9px 0;
  color: #323232; }

.pagination > li > a:hover, .pagination > li > span:hover, .pagination > li > a:focus, .pagination > li > span:focus {
  background-color: #6d81b4;
  border-color: #6d81b4;
  color: #ffffff; }

.pagination > .active > a, .pagination > .active > span, .pagination > .active > a:hover, .pagination > .active > span:hover, .pagination > .active > a:focus, .pagination > .active > span:focus {
  background-color: #6d81b4;
  border-color: #6d81b4;
  color: #ffffff; }

/*forms*/
.form-control {
  height: 50px;
  border-color: #e5e5e5;
  background-color: transparent;
  border-radius: 0;
  color: #000000;
  padding-left: 30px;
  padding-right: 40px;
  font-size: 16px; }

/* select styling */
.form-control option {
  color: #323232;
  background-color: #ffffff; }

.form-control, .form-control:focus {
  -webkit-box-shadow: none;
  box-shadow: none; }

.form-control.invalid {
  -webkit-box-shadow: 0 0 0 2px #6d81b4;
  box-shadow: 0 0 0 2px #6d81b4; }

.form-control:focus {
  border-color: #b2b2b2;
  color: #b2b2b2; }

.form-control:-moz-placeholder {
  color: #b2b2b2;
  opacity: 1; }

.form-control::-moz-placeholder {
  color: #b2b2b2;
  opacity: 1; }

.form-control:-ms-input-placeholder {
  color: #b2b2b2; }

.form-control::-webkit-input-placeholder {
  color: #b2b2b2; }

.form-control:focus:-moz-placeholder {
  color: transparent;
  opacity: 1; }

.form-control:focus::-moz-placeholder {
  color: transparent;
  opacity: 1; }

.form-control:focus:-ms-input-placeholder {
  color: transparent; }

.form-control:focus::-webkit-input-placeholder {
  color: transparent; }

/*icons for forms */
form label + [class*="icon-"] {
  position: absolute;
  font-size: 16px;
  color: #323232;
  left: 20px;
  top: 25px; }

form label + [class*="icon-"] + .form-control {
  padding-left: 50px; }

label {
  font-weight: normal; }

.form-control + [class*="icon-"] {
  position: absolute;
  font-size: 24px;
  right: 20px;
  top: 7px;
  color: #6d81b4; }

input[type=checkbox], input[type=radio] {
  margin-top: 8px; }

/*carousel*/
.carousel {
  overflow: hidden; }

.carousel-indicators li {
  width: 10px;
  height: 10px;
  border-width: 0;
  background-color: #323232;
  margin: 0 3px;
  -webkit-transition: all 0.2s ease-in-out 0s;
  -moz-transition: all 0.2s ease-in-out 0s;
  -o-transition: all 0.2s ease-in-out 0s;
  -ms-transition: all 0.2s ease-in-out 0s;
  transition: all 0.2s ease-in-out 0s; }

.carousel-indicators li:hover {
  opacity: 0.8; }

.carousel-indicators .active {
  width: 10px;
  height: 10px;
  margin: 0 3px;
  background-color: #6d81b4; }

.carousel-control {
  border: 1px solid #ffffff;
  color: #ffffff !important;
  border-radius: 0px;
  width: 50px;
  height: 50px;
  left: -50px;
  top: 50%;
  margin-top: -25px;
  text-shadow: none;
  opacity: 1;
  background-image: none !important;
  filter: alpha(opacity=100); }

.carousel-control.right {
  right: -50px; }

.carousel:hover .carousel-control {
  left: 50px; }

.carousel:hover .carousel-control.right {
  left: auto;
  right: 50px; }

.carousel-control span {
  font-family: 'fontello' !important;
  width: 50px !important;
  height: 50px !important;
  margin: 0 !important;
  font-size: 16px !important;
  left: 0 !important;
  top: 0 !important;
  line-height: 50px !important; }

.carousel-control .icon-prev:before {
  content: '\e801'; }

.carousel-control .icon-next:before {
  content: '\e80a'; }

/*collapse accordion*/
.panel-heading .panel-title {
  font-weight: 400;
  letter-spacing: 0;
  padding: 0;
  position: relative; }
.panel-heading .panel-title > a {
  line-height: 1;
  display: block;
  padding: 17px 65px 17px 30px;
  color: #ffffff;
  background-color: #6d81b4;
  border: none;
  word-wrap: break-word; }
.panel-heading .panel-title > a.collapsed:hover, .panel-heading .panel-title > a:hover {
  color: #ffffff;
  /*background-color: #6d81b4; }*/
  background-color: #6d81b4; }
.panel-heading .panel-title > a.collapsed {
  /*background-color: #6d81b4; }*/
  background-color: #0f2676; }
.panel-heading .panel-title > a:after {
  color: #ffffff;
  content: '+';
  position: absolute;
  font-size: 30px;
  line-height: 48px;
  text-align: center;
  right: 0;
  top: 0;
  bottom: 0;
  width: 50px;
  border-left: 1px solid rgba(255, 255, 255, 0.2);
  letter-spacing: 0; }
.panel-heading .panel-title > a.collapsed:after {
  content: '-';
  line-height: 40px;
  font-size: 40px; }
.panel-heading .panel-title > a.icon-tab:after {
  font-size: 0;
  color: transparent; }
.panel-heading .panel-title > a.icon-tab > i {
  font-size: 28px;
  position: absolute;
  right: 0;
  top: 0;
  width: 50px;
  line-height: 50px;
  text-align: center; }

.panel {
  box-shadow: none; }

.panel-group .panel {
  border-radius: 0;
  background-color: transparent; }

.panel-default > .panel-heading {
  background-color: transparent;
  color: inherit;
  position: relative;
  border: none;
  border-radius: 0;
  padding: 0; }

.panel-default {
  border-color: transparent; }

.panel-group .panel + .panel {
  margin-top: 0; }

.panel-body {
  border: 1px solid rgba(0, 0, 0, 0.1);
  border-top: none !important; }
  .panel-body .media-left {
    padding-top: 8px;
    padding-right: 28px; }
    .panel-body .media-left .img-circle {
      max-width: 50px; }

.panel-group .panel-heading + .panel-collapse .panel-body {
  padding: 23px 30px 30px;
  border-radius: 0px; }

/*progress bars*/
p + .progress {
  margin-top: -10px; }

.progress {
  overflow: hidden;
  height: 20px;
  position: relative;
  border-radius: 10px;
  -webkit-box-shadow: none;
  box-shadow: none;
  background-color: #6d81b4;
  border: none; }

.progress-bar {
  background-color: #6d81b4;
  color: inherit;
  -webkit-box-shadow: none;
  box-shadow: none;
  border-radius: 10px;
  height: 20px; }

.progress-bar span {
  position: relative;
  color: #ffffff;
  top: -5px;
  font-size: 0.9em;
  display: none; }

.progress-bar-info {
  background-color: #8aa5ec; }

.progress-bar-warning {
  background-color: #f0ad4e; }

.progress-bar-danger {
  background-color: #d9534f; }

.alert {
  border-radius: 0;
  border-width: 1px; }

.media-right, .media > .pull-right {
  padding-left: 20px; }

.media-left, .media > .pull-left {
  padding-right: 20px; }

/*nav*/
.nav > li > a {
  color: #323232; }

.nav > li > a:hover, .nav > li > a:focus {
  background-color: inherit; }

/*tabs*/
.tab-content {
  border-radius: 0 0 0 0;
  padding: 30px 30px;
  border: 1px solid rgba(0, 0, 0, 0.1); }
  .tab-content.no-border {
    padding: 0;
    border: none;
    background-color: transparent !important; }
  .tab-content.top-color-border {
    position: relative; }
    .tab-content.top-color-border:before {
      content: '';
      position: absolute;
      left: -1px;
      right: -1px;
      top: -1px;
      height: 10px;
      background-color: #6d81b4; }
  .tab-content .featured-tab-image {
    margin: -30px -31px 24px -31px; }

.nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus {
  border: 1px solid rgba(0, 0, 0, 0.1); }

.nav-tabs {
  border-bottom-color: transparent;
  margin-top: 0px;
  margin-bottom: -1px; }

.nav-tabs > li > a {
  padding: 13px 24px;
  margin-right: 1px;
  margin-top: 0px;
  border: 1px solid rgba(0, 0, 0, 0.1);
  border-radius: 0; }

.nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus {
  border-color: transparent;
  background-color: #6d81b4;
  color: #ffffff; }

.nav-tabs > li > a:hover, .nav-tabs > li > a:focus, .nav-tabs.nav-justified > .active > a {
  border-color: transparent;
  background-color: #6d81b4;
  color: #ffffff; }

/*bs buttons*/
.btn {
  padding: 18px 30px;
  text-transform: uppercase;
  margin: 0 2px 6px 0;
  border: none;
  border-radius: 0;
  -webkit-transition: all 0.3s ease-in-out 0s;
  -moz-transition: all 0.3s ease-in-out 0s;
  -o-transition: all 0.3s ease-in-out 0s;
  -ms-transition: all 0.3s ease-in-out 0s;
  transition: all 0.3s ease-in-out 0s; }

li.media:before, li.media:after {
  display: block;
  content: '';
  clear: both; }

/* dropdown menu */
.dropdown-menu {
  -webkit-box-shadow: none;
  box-shadow: none;
  border-radius: 0;
  border-color: rgba(0, 0, 0, 0.1);
  z-index: 1001;
  font-size: 16px;
  margin-top: 3px; }
  [class*="right"] .dropdown-menu {
    right: 0;
    left: auto; }

.dropdown-menu > li > a:focus, .dropdown-menu > li > a:hover {
  color: #323232;
  background-color: transparent; }

.table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
  padding: 13px 8px;
  border-color: #e5e5e5; }

.table {
  border-top: 1px solid #e5e5e5;
  border-bottom: 1px solid #e5e5e5; }
  .table td + td {
    border-left: 1px solid #e5e5e5; }

.table-bordered > thead > tr > td, .table-bordered > thead > tr > th {
  border-bottom-width: 1px; }

.table-responsive {
  border: none; }

.well {
  -webkit-box-shadow: none;
  box-shadow: none;
  border: none;
  border-radius: 0; }

/*
**vertical margins and paddings
*/
section > [class*="container"] {
  padding-top: 100px;
  padding-bottom: 100px; }

footer > [class*="container"] {
  padding-top: 50px;
  padding-bottom: 50px; }

#contact + footer > [class*="container"] {
  padding-top: 75px; }

/*same top and bottom paddings for sections*/
.section_padding_0 > [class*="container"] {
  padding-top: 0;
  padding-bottom: 0; }

.section_padding_15 > [class*="container"] {
  padding-top: 15px;
  padding-bottom: 15px; }

.section_padding_25 > [class*="container"] {
  padding-top: 25px;
  padding-bottom: 25px; }

.section_padding_50 > [class*="container"] {
  padding-top: 50px;
  padding-bottom: 50px; }

.section_padding_75 > [class*="container"] {
  padding-top: 75px;
  padding-bottom: 75px; }

/*top paddings for sections*/
.section_padding_top_0 > [class*="container"] {
  padding-top: 0; }

.section_padding_top_25 > [class*="container"] {
  padding-top: 25px; }

.section_padding_top_50 > [class*="container"] {
  padding-top: 50px; }

.section_padding_top_75 > [class*="container"] {
  padding-top: 75px; }

/*bottom paddings for sections*/
.section_padding_bottom_0 > [class*="container"] {
  padding-bottom: 0; }

.section_padding_bottom_25 > [class*="container"] {
  padding-bottom: 25px; }

.section_padding_bottom_50 > [class*="container"] {
  padding-bottom: 50px; }

.section_padding_bottom_75 > [class*="container"] {
  padding-bottom: 75px; }

/* margins inside sections */
.row .row + .row {
  margin-top: 30px; }

section > [class*="container"] > .row > [class*="col-"], footer > [class*="container"] > .row > [class*="col-"] {
  margin-top: 15px;
  margin-bottom: 15px; }

@media (max-width: 991px) {
  [class*="col-md-"] + [class*="col-md-"] {
    margin-top: 30px !important; }
  [class*="col-md-"] + [class*="col-md-"][class*="col-sm-"] {
    margin-top: 15px !important; } }

@media (max-width: 767px) {
  div[class*="col-sm-"] + [class*="col-sm-"] {
    margin-top: 30px !important; } }

[class*="_0"] > [class*="container"] > .row > [class*="col-"] {
  margin-top: 0 !important;
  margin-bottom: 0 !important; }

[class*="_0"] > [class*="container"] > .row > [class*="col-"] {
  margin-bottom: 0; }

[class*="_0"] > [class*="container"] > .row > [class*="col-"] {
  margin-top: 0; }

/* vertical alignmetn in columns */
.table_section [class*="container"] {
  height: 100%; }

.table_section .row {
  display: table;
  min-width: 100%;
  height: 100%; }

.table_section [class*="col-"] {
  display: table-cell;
  vertical-align: middle;
  float: none; }

@media screen and (max-width: 767px) {
  .table_section .row, .table_section [class*="col-"] {
    display: block;
    width: auto; }
  [class*="col-xs"] + [class*="col-xs"] {
    margin-top: 0 !important; } }

@media screen and (max-width: 991px) {
  .table_section.table_section_md .row, .table_section.table_section_md [class*="col-"] {
    display: block;
    width: auto; } }

@media screen and (max-width: 1199px) {
  .table_section.table_section_lg .row, .table_section.table_section_lg [class*="col-"] {
    display: block;
    width: auto; } }

@media screen and (min-width: 1200px) {
  /* overlap featured person */
  .top-overlap {
    margin-top: -170px; }
  .top-overlap-small {
    margin-top: -100px; } }

@media (max-width: 767px) {
  .container {
    max-width: 500px; } }

/*
**general styles
*/
html {
  width: 100%;
  height: 100%;
  position: relative;
  overflow: visible; }

::selection {
  color: #ffffff;
  background-color: #6d81b4; }

::-moz-selection {
  color: #ffffff;
  background-color: #6d81b4; }

body {
  font-family: 'Open Sans', sans-serif;
  font-size: 16px;
  font-weight: 400;
  line-height: 30px;
  background-color: #ffffff;
  overflow: visible;
  overflow-x: hidden; }

h1, h2, h3, h4, h5, h6 {
  font-family: 'Open Sans', sans-serif;
  line-height: 1;
  font-weight: 700;
  letter-spacing: -0.05em;
  margin-bottom: 20px; }

p {
  margin-bottom: 15px; }

blockquote {
  position: relative;
  margin: 30px 0;
  padding: 40px 20px 29px 98px;
  line-height: 1.57;
  border: none;
  background-color: #f5f5f5;
  font-style: italic; }
  blockquote .media {
    font-style: normal;
    margin: 26px 0 16px !important;
    color: #323232; }
    blockquote .media img {
      min-width: 50px;
      max-width: 50px;
      border-radius: 50%; }
    blockquote .media h4 {
      margin-bottom: -3px; }

blockquote:before, blockquote:after {
  font-family: 'PT Sans', sans-serif;
  font-size: 100px;
  font-style: normal;
  content: '\201c';
  color: #6d81b4;
  position: absolute;
  left: 52px;
  top: 6px; }

@media (max-width: 600px) {
  blockquote {
    padding-left: 58px; }
  blockquote:before, blockquote:after {
    left: 14px; } }

.blockquote-big {
  max-width: 80%;
  margin-left: auto;
  margin-right: auto;
  font-style: normal;
  font-size: 24px;
  text-align: center;
  line-height: 1.5;
  color: #323232;
  padding: 30px 40px;
  border: none; }
  @media (max-width: 767px) {
    .blockquote-big {
      font-size: 20px;
      max-width: 100%; } }
  .blockquote-big h3 {
    font-size: 16px;
    letter-spacing: 0.09em;
    text-transform: uppercase;
    color: inherit;
    margin-top: 30px; }
  .blockquote-big:after {
    left: auto;
    right: 0;
    top: 0px;
    content: '\201d'; }
  .blockquote-big:before {
    top: 4px;
    left: 0; }

img {
  max-width: 100%; }

.panel-body .media-left img {
  max-width: none; }

a {
  text-decoration: none;
  -webkit-transition: all 0.3s ease-in-out 0s;
  -moz-transition: all 0.3s ease-in-out 0s;
  -o-transition: all 0.3s ease-in-out 0s;
  -ms-transition: all 0.3s ease-in-out 0s;
  transition: all 0.3s ease-in-out 0s; }

a:hover {
  color: #6d81b4;
  text-decoration: none;
  -webkit-transition: all 0.15s linear 0s;
  -moz-transition: all 0.15s linear 0s;
  -o-transition: all 0.15s linear 0s;
  -ms-transition: all 0.15s linear 0s;
  transition: all 0.15s linear 0s; }

a:focus {
  outline: medium none;
  text-decoration: none; }

a img {
  -webkit-transition: all 0.15s ease-in-out 0s;
  -moz-transition: all 0.15s ease-in-out 0s;
  -o-transition: all 0.15s ease-in-out 0s;
  -ms-transition: all 0.15s ease-in-out 0s;
  transition: all 0.15s ease-in-out 0s; }

iframe {
  border: none;
  max-width: 100%; }

input[type='number'] {
  -moz-appearance: textfield; }

input::-webkit-outer-spin-button, input::-webkit-inner-spin-button {
  -webkit-appearance: none; }

/*
**styled lists
*/
ul.list1 {
  list-style: none;
  padding: 0;
  margin: 25px 0; }

ul.list1 li {
  position: relative;
  padding: 9px 0 10px 30px; }
  ul.list1 li > .media {
    margin: 7px 0 7px; }

ul.list1.no-bullets li {
  padding-left: 0; }
  ul.list1.no-bullets li:before {
    display: none; }

ul.list1 li:first-child {
  border-top: 1px solid rgba(0, 0, 0, 0.1); }

ul.list1 li {
  border-bottom: 1px solid rgba(0, 0, 0, 0.1); }

ul.list1 li:before {
  content: '';
  display: block;
  position: absolute;
  border: 1px solid #6d81b4;
  left: 10px;
  top: 22px;
  width: 7px;
  height: 7px;
  border-radius: 50%; }

ul.list2 {
  list-style: none;
  padding-left: 20px !important; }

ul.list2 li {
  position: relative;
  padding: 5px 0 5px; }

ul.list2 li:before {
  font-family: 'fontello';
  content: '\e82c';
  font-size: 16px;
  color: #6d81b4;
  display: block;
  position: absolute;
  left: -18px; }

ol.list3 {
  counter-reset: li;
  list-style: none outside none;
  padding: 0; }

ol.list3 li {
  position: relative;
  padding: 8px 0 8px 38px; }

ol.list3 li:after {
  content: counter(li, decimal-leading-zero);
  counter-increment: li;
  position: absolute;
  left: 2px;
  top: 50%;
  margin-top: -16px;
  font-weight: 700;
  color: inherit;
  width: 30px;
  height: 30px;
  text-align: center;
  line-height: 30px;
  color: #ffffff;
  background-color: #6d81b4;
  border-radius: 100%; }

/*
**icons
*/
a[class*='soc-'] {
  font-size: 0;
  color: transparent;
  display: inline-block;
  line-height: 1;
  vertical-align: middle; }
  a[class*='soc-'] + a[class*='soc-'], .tooltip + a[class*='soc-'] {
    margin-left: 20px; }
  a[class*='soc-'].bg-icon + a[class*='soc-'].bg-icon {
    margin-left: 7px; }

a[class*='soc-']:before {
  font-family: 'socicon';
  font-size: 16px;
  line-height: 1;
  text-align: center;
  color: #b2b2b2;
  display: inline-block;
  -webkit-transition: all 0.6s linear 0s;
  -moz-transition: all 0.6s linear 0s;
  -o-transition: all 0.6s linear 0s;
  -ms-transition: all 0.6s linear 0s;
  transition: all 0.6s linear 0s; }

a[class*='soc-']:hover:before {
  -webkit-transition: all 0.05s linear 0s;
  -moz-transition: all 0.05s linear 0s;
  -o-transition: all 0.05s linear 0s;
  -ms-transition: all 0.05s linear 0s;
  transition: all 0.05s linear 0s; }

a.border-icon:before {
  border: 1px solid #b2b2b2;
  padding: 15px;
  margin-bottom: 4px; }

a.bg-icon:before {
  color: #ffffff;
  background-color: #b2b2b2;
  padding: 16px;
  margin-bottom: 4px; }

a.bg-icon:hover:before {
  color: #ffffff !important; }

a.color-bg-icon:before {
  color: #ffffff;
  background-color: #b2b2b2;
  margin-bottom: 4px;
  padding: 16px; }

a.color-bg-icon:hover:before {
  background-color: #323232;
  color: #ffffff !important; }

a.color-icon:hover:before {
  color: #323232 !important; }

a.color-icon.border-icon:hover:before {
  color: #ffffff !important; }

a[class*='soc-'].rounded-icon:before {
  -webkit-border-radius: 50%;
  border-radius: 50%; }

/*corporate colors*/
a.color-icon.soc-twitter:before, a[class*="soc-"].soc-twitter:hover:before {
  color: #00abef;
  border-color: #00abef; }

a.color-icon.soc-facebook:before, a[class*="soc-"].soc-facebook:hover:before {
  color: #507cbe;
  border-color: #507cbe; }

a.color-icon.soc-google:before, a[class*="soc-"].soc-google:hover:before {
  color: #d93e2d;
  border-color: #d93e2d; }

a.color-icon.soc-pinterest:before, a[class*="soc-"].soc-pinterest:hover:before {
  color: #c92619;
  border-color: #c92619; }

a.color-icon.soc-foursquare:before, a[class*="soc-"].soc-foursquare:hover:before {
  color: #23b7e0;
  border-color: #23b7e0; }

a.color-icon.soc-yahoo:before, a[class*="soc-"].soc-yahoo:hover:before {
  color: #6e2a85;
  border-color: #6e2a85; }

a.color-icon.soc-skype:before, a[class*="soc-"].soc-skype:hover:before {
  color: #28abe3;
  border-color: #28abe3; }

a.color-icon.soc-yelp:before, a[class*="soc-"].soc-yelp:hover:before {
  color: #c83218;
  border-color: #c83218; }

a.color-icon.soc-feedburner:before, a[class*="soc-"].soc-feedburner:hover:before {
  color: #ffcc00;
  border-color: #ffcc00; }

a.color-icon.soc-linkedin:before, a[class*="soc-"].soc-linkedin:hover:before {
  color: #3371b7;
  border-color: #3371b7; }

a.color-icon.soc-viadeo:before, a[class*="soc-"].soc-viadeo:hover:before {
  color: #e4a000;
  border-color: #e4a000; }

a.color-icon.soc-xing:before, a[class*="soc-"].soc-xing:hover:before {
  color: #005a60;
  border-color: #005a60; }

a.color-icon.soc-myspace:before, a[class*="soc-"].soc-myspace:hover:before {
  color: #323232;
  border-color: #323232; }

a.color-icon.soc-soundcloud:before, a[class*="soc-"].soc-soundcloud:hover:before {
  color: #fe3801;
  border-color: #fe3801; }

a.color-icon.soc-spotify:before, a[class*="soc-"].soc-spotify:hover:before {
  color: #7bb342;
  border-color: #7bb342; }

a.color-icon.soc-grooveshark:before, a[class*="soc-"].soc-grooveshark:hover:before {
  color: #f67e03;
  border-color: #f67e03; }

a.color-icon.soc-lastfm:before, a[class*="soc-"].soc-lastfm:hover:before {
  color: #d41316;
  border-color: #d41316; }

a.color-icon.soc-youtube:before, a[class*="soc-"].soc-youtube:hover:before {
  color: #d12121;
  border-color: #d12121; }

a.color-icon.soc-vimeo:before, a[class*="soc-"].soc-vimeo:hover:before {
  color: #51b5e7;
  border-color: #51b5e7; }

a.color-icon.soc-dailymotion:before, a[class*="soc-"].soc-dailymotion:hover:before {
  color: #004e72;
  border-color: #004e72; }

a.color-icon.soc-vine:before, a[class*="soc-"].soc-vine:hover:before {
  color: #00b389;
  border-color: #00b389; }

a.color-icon.soc-flickr:before, a[class*="soc-"].soc-flickr:hover:before {
  color: #0062dd;
  border-color: #0062dd; }

a.color-icon.soc-500px:before, a[class*="soc-"].soc-500px:hover:before {
  color: #58a9de;
  border-color: #58a9de; }

a.color-icon.soc-instagram:before, a[class*="soc-"].soc-instagram:hover:before {
  color: #9c7c6e;
  border-color: #9c7c6e; }

a.color-icon.soc-wordpress:before, a[class*="soc-"].soc-wordpress:hover:before {
  color: #464646;
  border-color: #464646; }

a.color-icon.soc-tumblr:before, a[class*="soc-"].soc-tumblr:hover:before {
  color: #45556c;
  border-color: #45556c; }

a.color-icon.soc-blogger:before, a[class*="soc-"].soc-blogger:hover:before {
  color: #ec661c;
  border-color: #ec661c; }

a.color-icon.soc-technorati:before, a[class*="soc-"].soc-technorati:hover:before {
  color: #5cb030;
  border-color: #5cb030; }

a.color-icon.soc-reddit:before, a[class*="soc-"].soc-reddit:hover:before {
  color: #e74a1e;
  border-color: #e74a1e; }

a.color-icon.soc-dribbble:before, a[class*="soc-"].soc-dribbble:hover:before {
  color: #e84d88;
  border-color: #e84d88; }

a.color-icon.soc-stumbleupon:before, a[class*="soc-"].soc-stumbleupon:hover:before {
  color: #e64011;
  border-color: #e64011; }

a.color-icon.soc-digg:before, a[class*="soc-"].soc-digg:hover:before {
  color: #1d1d1b;
  border-color: #1d1d1b; }

a.color-icon.soc-envato:before, a[class*="soc-"].soc-envato:hover:before {
  color: #597c3a;
  border-color: #597c3a; }

a.color-icon.soc-behance:before, a[class*="soc-"].soc-behance:hover:before {
  color: #007eff;
  border-color: #007eff; }

a.color-icon.soc-delicious:before, a[class*="soc-"].soc-delicious:hover:before {
  color: #31a9ff;
  border-color: #31a9ff; }

a.color-icon.soc-deviantart:before, a[class*="soc-"].soc-deviantart:hover:before {
  color: #c5d200;
  border-color: #c5d200; }

a.color-icon.soc-forrst:before, a[class*="soc-"].soc-forrst:hover:before {
  color: #5b9a68;
  border-color: #5b9a68; }

a.color-icon.soc-play:before, a[class*="soc-"].soc-play:hover:before {
  color: #5acdbd;
  border-color: #5acdbd; }

a.color-icon.soc-zerply:before, a[class*="soc-"].soc-zerply:hover:before {
  color: #9dbc7a;
  border-color: #9dbc7a; }

a.color-icon.soc-wikipedia:before, a[class*="soc-"].soc-wikipedia:hover:before {
  color: #000000;
  border-color: #000000; }

a.color-icon.soc-apple:before, a[class*="soc-"].soc-apple:hover:before {
  color: #b9bfc1;
  border-color: #b9bfc1; }

a.color-icon.soc-flattr:before, a[class*="soc-"].soc-flattr:hover:before {
  color: #f67c1a;
  border-color: #f67c1a; }

a.color-icon.soc-github:before, a[class*="soc-"].soc-github:hover:before {
  color: #221e1b;
  border-color: #221e1b; }

a.color-icon.soc-chimein:before, a[class*="soc-"].soc-chimein:hover:before {
  color: #888688;
  border-color: #888688; }

a.color-icon.soc-friendfeed:before, a[class*="soc-"].soc-friendfeed:hover:before {
  color: #2f72c4;
  border-color: #2f72c4; }

a.color-icon.soc-newsvine:before, a[class*="soc-"].soc-newsvine:hover:before {
  color: #075b2f;
  border-color: #075b2f; }

a.color-icon.soc-identica:before, a[class*="soc-"].soc-identica:hover:before {
  color: #000000;
  border-color: #000000; }

a.color-icon.soc-bebo:before, a[class*="soc-"].soc-bebo:hover:before {
  color: #ef1011;
  border-color: #ef1011; }

a.color-icon.soc-zynga:before, a[class*="soc-"].soc-zynga:hover:before {
  color: #dc0606;
  border-color: #dc0606; }

a.color-icon.soc-steam:before, a[class*="soc-"].soc-steam:hover:before {
  color: #8f8d8a;
  border-color: #8f8d8a; }

a.color-icon.soc-xbox:before, a[class*="soc-"].soc-xbox:hover:before {
  color: #92c83e;
  border-color: #92c83e; }

a.color-icon.soc-windows:before, a[class*="soc-"].soc-windows:hover:before {
  color: #00bdf6;
  border-color: #00bdf6; }

a.color-icon.soc-outlook:before, a[class*="soc-"].soc-outlook:hover:before {
  color: #0072c6;
  border-color: #0072c6; }

a.color-icon.soc-coderwall:before, a[class*="soc-"].soc-coderwall:hover:before {
  color: #3e8dcc;
  border-color: #3e8dcc; }

a.color-icon.soc-tripadvisor:before, a[class*="soc-"].soc-tripadvisor:hover:before {
  color: #000000;
  border-color: #000000; }

a.color-icon.soc-appnet:before, a[class*="soc-"].soc-appnet:hover:before {
  color: #494949;
  border-color: #494949; }

a.color-icon.soc-goodreads:before, a[class*="soc-"].soc-goodreads:hover:before {
  color: #1abc9c;
  border-color: #1abc9c; }

a.color-icon.soc-tripit:before, a[class*="soc-"].soc-tripit:hover:before {
  color: #1982c3;
  border-color: #1982c3; }

a.color-icon.soc-lanyrd:before, a[class*="soc-"].soc-lanyrd:hover:before {
  color: #3c80c9;
  border-color: #3c80c9; }

a.color-icon.soc-slideshare:before, a[class*="soc-"].soc-slideshare:hover:before {
  color: #4ba3a6;
  border-color: #4ba3a6; }

a.color-icon.soc-buffer:before, a[class*="soc-"].soc-buffer:hover:before {
  color: #000000;
  border-color: #000000; }

a.color-icon.soc-rss:before, a[class*="soc-"].soc-rss:hover:before {
  color: #f26109;
  border-color: #f26109; }

a.color-icon.soc-vkontakte:before, a[class*="soc-"].soc-vkontakte:hover:before {
  color: #5a7fa6;
  border-color: #5a7fa6; }

a.color-icon.soc-disqus:before, a[class*="soc-"].soc-disqus:hover:before {
  color: #2e9fff;
  border-color: #2e9fff; }

a.color-icon.soc-houzz:before, a[class*="soc-"].soc-houzz:hover:before {
  color: #7cc04b;
  border-color: #7cc04b; }

a.color-icon.soc-mail:before, a[class*="soc-"].soc-mail:hover:before {
  color: #000000;
  border-color: #000000; }

a.color-icon.soc-patreon:before, a[class*="soc-"].soc-patreon:hover:before {
  color: #e44727;
  border-color: #e44727; }

a.color-icon.soc-paypal:before, a[class*="soc-"].soc-paypal:hover:before {
  color: #009cde;
  border-color: #009cde; }

a.color-icon.soc-playstation:before, a[class*="soc-"].soc-playstation:hover:before {
  color: #000000;
  border-color: #000000; }

a.color-icon.soc-smugmug:before, a[class*="soc-"].soc-smugmug:hover:before {
  color: #acfd32;
  border-color: #acfd32; }

a.color-icon.soc-swarm:before, a[class*="soc-"].soc-swarm:hover:before {
  color: #fc9d3c;
  border-color: #fc9d3c; }

a.color-icon.soc-triplej:before, a[class*="soc-"].soc-triplej:hover:before {
  color: #e53531;
  border-color: #e53531; }

a.color-icon.soc-yammer:before, a[class*="soc-"].soc-yammer:hover:before {
  color: #1175c4;
  border-color: #1175c4; }

a.color-icon.soc-stackoverflow:before, a[class*="soc-"].soc-stackoverflow:hover:before {
  color: #fd9827;
  border-color: #fd9827; }

a.color-icon.soc-drupal:before, a[class*="soc-"].soc-drupal:hover:before {
  color: #00598e;
  border-color: #00598e; }

a.color-icon.soc-odnoklassniki:before, a[class*="soc-"].soc-odnoklassniki:hover:before {
  color: #f48420;
  border-color: #f48420; }

a.color-icon.soc-android:before, a[class*="soc-"].soc-android:hover:before {
  color: #8ec047;
  border-color: #8ec047; }

a.color-icon.soc-meetup:before, a[class*="soc-"].soc-meetup:hover:before {
  color: #e2373c;
  border-color: #e2373c; }

a.color-icon.soc-persona:before, a[class*="soc-"].soc-persona:hover:before {
  color: #e6753d;
  border-color: #e6753d; }

a.color-icon.soc-amazon:before, a[class*="soc-"].soc-amazon:hover:before {
  color: #ff9900;
  border-color: #ff9900; }

a.color-icon.soc-ello:before, a[class*="soc-"].soc-ello:hover:before {
  color: #000000;
  border-color: #000000; }

a.color-icon.soc-mixcloud:before, a[class*="soc-"].soc-mixcloud:hover:before {
  color: #314359;
  border-color: #314359; }

a.color-icon.soc-8tracks:before, a[class*="soc-"].soc-8tracks:hover:before {
  color: #122c4b;
  border-color: #122c4b; }

a.color-icon.soc-twitch:before, a[class*="soc-"].soc-twitch:hover:before {
  color: #6441a5;
  border-color: #6441a5; }

a.color-icon.soc-airbnb:before, a[class*="soc-"].soc-airbnb:hover:before {
  color: #ff5a5f;
  border-color: #ff5a5f; }

a.color-icon.soc-pocket:before, a[class*="soc-"].soc-pocket:hover:before {
  color: #ed4055;
  border-color: #ed4055; }

/*corporate background colors*/
.color-bg-icon:before {
  color: #ffffff; }

.color-bg-icon.soc-twitter:before, a.soc-twitter.bg-icon:hover:before, .soc-twitter.color-icon.border-icon:hover:before {
  background-color: #00abef; }

.color-bg-icon.soc-facebook:before, a.soc-facebook.bg-icon:hover:before, .soc-facebook.color-icon.border-icon:hover:before {
  background-color: #507cbe; }

.color-bg-icon.soc-google:before, a.soc-google.bg-icon:hover:before, .soc-google.color-icon.border-icon:hover:before {
  background-color: #d93e2d; }

.color-bg-icon.soc-pinterest:before, a.soc-pinterest.bg-icon:hover:before, .soc-pinterest.color-icon.border-icon:hover:before {
  background-color: #c92619; }

.color-bg-icon.soc-foursquare:before, a.soc-foursquare.bg-icon:hover:before, .soc-foursquare.color-icon.border-icon:hover:before {
  background-color: #23b7e0; }

.color-bg-icon.soc-yahoo:before, a.soc-yahoo.bg-icon:hover:before, .soc-yahoo.color-icon.border-icon:hover:before {
  background-color: #6e2a85; }

.color-bg-icon.soc-skype:before, a.soc-skype.bg-icon:hover:before, .soc-skype.color-icon.border-icon:hover:before {
  background-color: #28abe3; }

.color-bg-icon.soc-yelp:before, a.soc-yelp.bg-icon:hover:before, .soc-yelp.color-icon.border-icon:hover:before {
  background-color: #c83218; }

.color-bg-icon.soc-feedburner:before, a.soc-feedburner.bg-icon:hover:before, .soc-feedburner.color-icon.border-icon:hover:before {
  background-color: #ffcc00; }

.color-bg-icon.soc-linkedin:before, a.soc-linkedin.bg-icon:hover:before, .soc-linkedin.color-icon.border-icon:hover:before {
  background-color: #3371b7; }

.color-bg-icon.soc-viadeo:before, a.soc-viadeo.bg-icon:hover:before, .soc-viadeo.color-icon.border-icon:hover:before {
  background-color: #e4a000; }

.color-bg-icon.soc-xing:before, a.soc-xing.bg-icon:hover:before, .soc-xing.color-icon.border-icon:hover:before {
  background-color: #005a60; }

.color-bg-icon.soc-myspace:before, a.soc-myspace.bg-icon:hover:before, .soc-myspace.color-icon.border-icon:hover:before {
  background-color: #323232; }

.color-bg-icon.soc-soundcloud:before, a.soc-soundcloud.bg-icon:hover:before, .soc-soundcloud.color-icon.border-icon:hover:before {
  background-color: #fe3801; }

.color-bg-icon.soc-spotify:before, a.soc-spotify.bg-icon:hover:before, .soc-spotify.color-icon.border-icon:hover:before {
  background-color: #7bb342; }

.color-bg-icon.soc-grooveshark:before, a.soc-grooveshark.bg-icon:hover:before, .soc-grooveshark.color-icon.border-icon:hover:before {
  background-color: #f67e03; }

.color-bg-icon.soc-lastfm:before, a.soc-lastfm.bg-icon:hover:before, .soc-lastfm.color-icon.border-icon:hover:before {
  background-color: #d41316; }

.color-bg-icon.soc-youtube:before, a.soc-youtube.bg-icon:hover:before, .soc-youtube.color-icon.border-icon:hover:before {
  background-color: #d12121; }

.color-bg-icon.soc-vimeo:before, a.soc-vimeo.bg-icon:hover:before, .soc-vimeo.color-icon.border-icon:hover:before {
  background-color: #51b5e7; }

.color-bg-icon.soc-dailymotion:before, a.soc-dailymotion.bg-icon:hover:before, .soc-dailymotion.color-icon.border-icon:hover:before {
  background-color: #004e72; }

.color-bg-icon.soc-vine:before, a.soc-vine.bg-icon:hover:before, .soc-vine.color-icon.border-icon:hover:before {
  background-color: #00b389; }

.color-bg-icon.soc-flickr:before, a.soc-flickr.bg-icon:hover:before, .soc-flickr.color-icon.border-icon:hover:before {
  background-color: #0062dd; }

.color-bg-icon.soc-500px:before, a.soc-500px.bg-icon:hover:before, .soc-500px.color-icon.border-icon:hover:before {
  background-color: #58a9de; }

.color-bg-icon.soc-instagram:before, a.soc-instagram.bg-icon:hover:before, .soc-instagram.color-icon.border-icon:hover:before {
  background-color: #9c7c6e; }

.color-bg-icon.soc-wordpress:before, a.soc-wordpress.bg-icon:hover:before, .soc-wordpress.color-icon.border-icon:hover:before {
  background-color: #464646; }

.color-bg-icon.soc-tumblr:before, a.soc-tumblr.bg-icon:hover:before, .soc-tumblr.color-icon.border-icon:hover:before {
  background-color: #45556c; }

.color-bg-icon.soc-blogger:before, a.soc-blogger.bg-icon:hover:before, .soc-blogger.color-icon.border-icon:hover:before {
  background-color: #ec661c; }

.color-bg-icon.soc-technorati:before, a.soc-technorati.bg-icon:hover:before, .soc-technorati.color-icon.border-icon:hover:before {
  background-color: #5cb030; }

.color-bg-icon.soc-reddit:before, a.soc-reddit.bg-icon:hover:before, .soc-reddit.color-icon.border-icon:hover:before {
  background-color: #e74a1e; }

.color-bg-icon.soc-dribbble:before, a.soc-dribbble.bg-icon:hover:before, .soc-dribbble.color-icon.border-icon:hover:before {
  background-color: #e84d88; }

.color-bg-icon.soc-stumbleupon:before, a.soc-stumbleupon.bg-icon:hover:before, .soc-stumbleupon.color-icon.border-icon:hover:before {
  background-color: #e64011; }

.color-bg-icon.soc-digg:before, a.soc-digg.bg-icon:hover:before, .soc-digg.color-icon.border-icon:hover:before {
  background-color: #1d1d1b; }

.color-bg-icon.soc-envato:before, a.soc-envato.bg-icon:hover:before, .soc-envato.color-icon.border-icon:hover:before {
  background-color: #597c3a; }

.color-bg-icon.soc-behance:before, a.soc-behance.bg-icon:hover:before, .soc-behance.color-icon.border-icon:hover:before {
  background-color: #007eff; }

.color-bg-icon.soc-delicious:before, a.soc-delicious.bg-icon:hover:before, .soc-delicious.color-icon.border-icon:hover:before {
  background-color: #31a9ff; }

.color-bg-icon.soc-deviantart:before, a.soc-deviantart.bg-icon:hover:before, .soc-deviantart.color-icon.border-icon:hover:before {
  background-color: #c5d200; }

.color-bg-icon.soc-forrst:before, a.soc-forrst.bg-icon:hover:before, .soc-forrst.color-icon.border-icon:hover:before {
  background-color: #5b9a68; }

.color-bg-icon.soc-play:before, a.soc-play.bg-icon:hover:before, .soc-play.color-icon.border-icon:hover:before {
  background-color: #5acdbd; }

.color-bg-icon.soc-zerply:before, a.soc-zerply.bg-icon:hover:before, .soc-zerply.color-icon.border-icon:hover:before {
  background-color: #9dbc7a; }

.color-bg-icon.soc-wikipedia:before, a.soc-wikipedia.bg-icon:hover:before, .soc-wikipedia.color-icon.border-icon:hover:before {
  background-color: #000000; }

.color-bg-icon.soc-apple:before, a.soc-apple.bg-icon:hover:before, .soc-apple.color-icon.border-icon:hover:before {
  background-color: #b9bfc1; }

.color-bg-icon.soc-flattr:before, a.soc-flattr.bg-icon:hover:before, .soc-flattr.color-icon.border-icon:hover:before {
  background-color: #f67c1a; }

.color-bg-icon.soc-github:before, a.soc-github.bg-icon:hover:before, .soc-github.color-icon.border-icon:hover:before {
  background-color: #221e1b; }

.color-bg-icon.soc-chimein:before, a.soc-chimein.bg-icon:hover:before, .soc-chimein.color-icon.border-icon:hover:before {
  background-color: #888688; }

.color-bg-icon.soc-friendfeed:before, a.soc-friendfeed.bg-icon:hover:before, .soc-friendfeed.color-icon.border-icon:hover:before {
  background-color: #2f72c4; }

.color-bg-icon.soc-newsvine:before, a.soc-newsvine.bg-icon:hover:before, .soc-newsvine.color-icon.border-icon:hover:before {
  background-color: #075b2f; }

.color-bg-icon.soc-identica:before, a.soc-identica.bg-icon:hover:before, .soc-identica.color-icon.border-icon:hover:before {
  background-color: #000000; }

.color-bg-icon.soc-bebo:before, a.soc-bebo.bg-icon:hover:before, .soc-bebo.color-icon.border-icon:hover:before {
  background-color: #ef1011; }

.color-bg-icon.soc-zynga:before, a.soc-zynga.bg-icon:hover:before, .soc-zynga.color-icon.border-icon:hover:before {
  background-color: #dc0606; }

.color-bg-icon.soc-steam:before, a.soc-steam.bg-icon:hover:before, .soc-steam.color-icon.border-icon:hover:before {
  background-color: #8f8d8a; }

.color-bg-icon.soc-xbox:before, a.soc-xbox.bg-icon:hover:before, .soc-xbox.color-icon.border-icon:hover:before {
  background-color: #92c83e; }

.color-bg-icon.soc-windows:before, a.soc-windows.bg-icon:hover:before, .soc-windows.color-icon.border-icon:hover:before {
  background-color: #00bdf6; }

.color-bg-icon.soc-outlook:before, a.soc-outlook.bg-icon:hover:before, .soc-outlook.color-icon.border-icon:hover:before {
  background-color: #0072c6; }

.color-bg-icon.soc-coderwall:before, a.soc-coderwall.bg-icon:hover:before, .soc-coderwall.color-icon.border-icon:hover:before {
  background-color: #3e8dcc; }

.color-bg-icon.soc-tripadvisor:before, a.soc-tripadvisor.bg-icon:hover:before, .soc-tripadvisor.color-icon.border-icon:hover:before {
  background-color: #000000; }

.color-bg-icon.soc-appnet:before, a.soc-appnet.bg-icon:hover:before, .soc-appnet.color-icon.border-icon:hover:before {
  background-color: #494949; }

.color-bg-icon.soc-goodreads:before, a.soc-goodreads.bg-icon:hover:before, .soc-goodreads.color-icon.border-icon:hover:before {
  background-color: #1abc9c; }

.color-bg-icon.soc-tripit:before, a.soc-tripit.bg-icon:hover:before, .soc-tripit.color-icon.border-icon:hover:before {
  background-color: #1982c3; }

.color-bg-icon.soc-lanyrd:before, a.soc-lanyrd.bg-icon:hover:before, .soc-lanyrd.color-icon.border-icon:hover:before {
  background-color: #3c80c9; }

.color-bg-icon.soc-slideshare:before, a.soc-slideshare.bg-icon:hover:before, .soc-slideshare.color-icon.border-icon:hover:before {
  background-color: #4ba3a6; }

.color-bg-icon.soc-buffer:before, a.soc-buffer.bg-icon:hover:before, .soc-buffer.color-icon.border-icon:hover:before {
  background-color: #000000; }

.color-bg-icon.soc-rss:before, a.soc-rss.bg-icon:hover:before, .soc-rss.color-icon.border-icon:hover:before {
  background-color: #f26109; }

.color-bg-icon.soc-vkontakte:before, a.soc-vkontakte.bg-icon:hover:before, .soc-vkontakte.color-icon.border-icon:hover:before {
  background-color: #5a7fa6; }

.color-bg-icon.soc-disqus:before, a.soc-disqus.bg-icon:hover:before, .soc-disqus.color-icon.border-icon:hover:before {
  background-color: #2e9fff; }

.color-bg-icon.soc-houzz:before, a.soc-houzz.bg-icon:hover:before, .soc-houzz.color-icon.border-icon:hover:before {
  background-color: #7cc04b; }

.color-bg-icon.soc-mail:before, a.soc-mail.bg-icon:hover:before, .soc-mail.color-icon.border-icon:hover:before {
  background-color: #000000; }

.color-bg-icon.soc-patreon:before, a.soc-patreon.bg-icon:hover:before, .soc-patreon.color-icon.border-icon:hover:before {
  background-color: #e44727; }

.color-bg-icon.soc-paypal:before, a.soc-paypal.bg-icon:hover:before, .soc-paypal.color-icon.border-icon:hover:before {
  background-color: #009cde; }

.color-bg-icon.soc-playstation:before, a.soc-playstation.bg-icon:hover:before, .soc-playstation.color-icon.border-icon:hover:before {
  background-color: #000000; }

.color-bg-icon.soc-smugmug:before, a.soc-smugmug.bg-icon:hover:before, .soc-smugmug.color-icon.border-icon:hover:before {
  background-color: #acfd32; }

.color-bg-icon.soc-swarm:before, a.soc-swarm.bg-icon:hover:before, .soc-swarm.color-icon.border-icon:hover:before {
  background-color: #fc9d3c; }

.color-bg-icon.soc-triplej:before, a.soc-triplej.bg-icon:hover:before, .soc-triplej.color-icon.border-icon:hover:before {
  background-color: #e53531; }

.color-bg-icon.soc-yammer:before, a.soc-yammer.bg-icon:hover:before, .soc-yammer.color-icon.border-icon:hover:before {
  background-color: #1175c4; }

.color-bg-icon.soc-stackoverflow:before, a.soc-stackoverflow.bg-icon:hover:before, .soc-stackoverflow.color-icon.border-icon:hover:before {
  background-color: #fd9827; }

.color-bg-icon.soc-drupal:before, a.soc-drupal.bg-icon:hover:before, .soc-drupal.color-icon.border-icon:hover:before {
  background-color: #00598e; }

.color-bg-icon.soc-odnoklassniki:before, a.soc-odnoklassniki.bg-icon:hover:before, .soc-odnoklassniki.color-icon.border-icon:hover:before {
  background-color: #f48420; }

.color-bg-icon.soc-android:before, a.soc-android.bg-icon:hover:before, .soc-android.color-icon.border-icon:hover:before {
  background-color: #8ec047; }

.color-bg-icon.soc-meetup:before, a.soc-meetup.bg-icon:hover:before, .soc-meetup.color-icon.border-icon:hover:before {
  background-color: #e2373c; }

.color-bg-icon.soc-persona:before, a.soc-persona.bg-icon:hover:before, .soc-persona.color-icon.border-icon:hover:before {
  background-color: #e6753d; }

.color-bg-icon.soc-amazon:before, a.soc-amazon.bg-icon:hover:before, .soc-amazon.color-icon.border-icon:hover:before {
  background-color: #ff9900; }

.color-bg-icon.soc-ello:before, a.soc-ello.bg-icon:hover:before, .soc-ello.color-icon.border-icon:hover:before {
  background-color: #000000; }

.color-bg-icon.soc-mixcloud:before, a.soc-mixcloud.bg-icon:hover:before, .soc-mixcloud.color-icon.border-icon:hover:before {
  background-color: #314359; }

.color-bg-icon.soc-8tracks:before, a.soc-8tracks.bg-icon:hover:before, .soc-8tracks.color-icon.border-icon:hover:before {
  background-color: #122c4b; }

.color-bg-icon.soc-twitch:before, a.soc-twitch.bg-icon:hover:before, .soc-twitch.color-icon.border-icon:hover:before {
  background-color: #6441a5; }

.color-bg-icon.soc-airbnb:before, a.soc-airbnb.bg-icon:hover:before, .soc-airbnb.color-icon.border-icon:hover:before {
  background-color: #ff5a5f; }

.color-bg-icon.soc-pocket:before, a.soc-pocket.bg-icon:hover:before, .soc-pocket.color-icon.border-icon:hover:before {
  background-color: #ed4055; }

.demo-icon {
  display: inline-block;
  text-align: center;
  padding: 15px 20px 10px;
  background-color: #ffffff; }
  .demo-icon span {
    display: block; }
  .demo-icon .name {
    font-size: 1.01em;
    font-weight: 700;
    color: #323232; }
  .demo-icon a[class*="soc-"]:before {
    color: #323232;
    font-size: 24px;
    margin: 10px 0 0; }

.social-icons-demo a[class*="soc-"]:before {
  margin: 10px !important; }
.social-icons-demo a + a {
  margin: 0 !important; }

h1 > [class*="rt-icon-"], h2 > [class*="rt-icon-"], h3 > [class*="rt-icon-"], h4 > [class*="rt-icon-"], h5 > [class*="rt-icon-"], h6 > [class*="rt-icon-"] {
  font-size: 1.2em;
  position: relative;
  top: .1em;
  line-height: 0;
  padding-right: 0.1em; }

p > [class*="rt-icon-"] {
  font-size: 1.1em;
  position: relative;
  top: .1em;
  line-height: 0;
  padding-right: 0.45em; }
  p > [class*="rt-icon-"] + [class*="rt-icon-"] {
    margin-left: -0.75em; }

.theme_button > [class*="rt-icon-"], .theme_button > [class*="glyphicon"], .theme_button > [class*="fa-"] {
  padding: 0 4px;
  position: relative;
  top: 1px; }

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

/*
**utilites
*/
.alignleft {
  float: left;
  margin: 5px 30px 15px 0;
  max-width: 50%; }

.round {
  border-radius: 50%; }

.inline-block {
  display: inline-block;
  max-width: 100%; }

.with_background {
  padding: 40px;
  background-color: #f5f5f5; }

.with_border {
  padding: 40px;
  border: 1px solid #e5e5e5; }

.before_cover, .after_cover, .before_cover > *, .after_cover > * {
  position: relative;
  z-index: 2; }

.before_cover:before, .after_cover:after {
  content: '';
  display: block;
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0; }

#response, .highlight {
  color: #6d81b4;
  border-color: #6d81b4; }

.highlight2 {
  color: #0f2676;
  border-color: #0f2676; }
  
 .highlight3 {
  color: #000000;
  border-color: #ffffff; }
  
  .highlight4 {
  color: #ffffff;
  border-color: #ffffff; }

.red, .required {
  color: #fa5c5d; }

.black {
  color: #000000;
  border-color: #000000; }

.grey {
  color: #323232;
  border-color: #323232; }

.greylinks a {
  color: #b2b2b2; }

.darklinks a {
  color: #323232; }

.thin {
  font-weight: 300; }

.bold {
  font-weight: 700; }

.quotesign {
  position: relative;
  display: inline-block;
  width: 50px;
  height: 50px;
  line-height: 1; }

.quotesign:before {
  font-size: 150px;
  font-family: 'PT Sans', sans-serif;
  content: '‘‘';
  position: absolute;
  left: 0;
  top: 0;
  line-height: 1; }

[class*="_bg_color"] {
  color: #ffffff; }
  [class*="_bg_color"] h1, [class*="_bg_color"] h2, [class*="_bg_color"] h3, [class*="_bg_color"] h4, [class*="_bg_color"] h5, [class*="_bg_color"] h6 {
    color: #ffffff; }

.light_bg_color {
  background-color: #ffffff; }

.main_bg_color {
  color: #ffffff;
  background-color: #0f2676; }

.dark_bg_color {
  background-color: #000000; }

.darkgrey_bg_color {
  background-color: #323232; }

/*dividers*/
.divider_20 {
  margin: 20px 0; }

.divider_30 {
  margin: 30px 0; }

.divider_40 {
  margin: 40px 0; }

.topmargin_0 {
  margin-top: 0 !important; }

.topmargin_10 {
  margin-top: 10px; }

.topmargin_20 {
  margin-top: 20px; }

.topmargin_30 {
  margin-top: 30px; }

.topmargin_40 {
  margin-top: 40px; }

.bottommargin_0 {
  margin-bottom: 0; }

.bottommargin_10 {
  margin-bottom: 10px; }

.bottommargin_20 {
  margin-bottom: 20px; }

.bottommargin_30 {
  margin-bottom: 30px; }

.bottommargin_40 {
  margin-bottom: 40px; }

.margin_0 {
  margin: 0; }

/*alignment*/
.display_table {
  display: table;
  min-width: 100%;
  height: 100%;
  margin: auto; }

.display_table_cell {
  display: table-cell;
  vertical-align: middle;
  float: none;
  overflow: hidden;
  zoom: 1; }

.columns_padding_0 [class*="col-"] {
  padding: 0; }

@media (min-width: 500px) {
  .column_padding_25 .row {
    margin-left: -25px;
    margin-right: -25px; }
  .column_padding_25 [class*="col-"] {
    padding-left: 25px;
    padding-right: 25px; } }

.not_found {
  font-size: 300px;
  font-weight: 700;
  line-height: 0.7;
  letter-spacing: -0.04em; }
  .not_found + h2 {
    font-size: 48px;
    margin: 54px 0 0px; }
  .not_found + h2 + h3 {
    margin: 14px 0 42px; }

@media (min-width: 1200px) {
  .text-lg-right {
    text-align: right; }
  .text-lg-left {
    text-align: left; }
  .text-lg-center {
    text-align: center; }
  .display_table_lg {
    display: table;
    min-width: 100%;
    height: 100%;
    margin: auto; }
  .display_table_cell_lg {
    display: table-cell;
    vertical-align: middle;
    float: none;
    overflow: hidden;
    zoom: 1; } }

@media (min-width: 992px) {
  .text-md-right {
    text-align: right; }
  .text-md-left {
    text-align: left; }
  .text-md-center {
    text-align: center; }
  .display_inline_md {
    display: inline; }
  .display_table_md {
    display: table;
    min-width: 100%;
    height: 100%;
    margin: auto; }
  .display_table_cell_md {
    display: table-cell;
    vertical-align: middle;
    float: none;
    overflow: hidden;
    zoom: 1; } }

@media (min-width: 768px) {
  .text-sm-right {
    text-align: right; }
  .text-sm-left {
    text-align: left; }
  .text-sm-center {
    text-align: center; }
  .display_table_sm {
    display: table;
    min-width: 100%;
    height: 100%;
    margin: auto; }
  .display_table_cell_sm {
    display: table-cell;
    vertical-align: middle;
    float: none;
    overflow: hidden;
    zoom: 1; }
  .big {
    font-size: 50px;
    font-weight: 300; } }

@media (max-width: 767px) {
  .text-xs-right {
    text-align: right; }
  .text-xs-left {
    text-align: left; }
  .text-xs-center {
    text-align: center; }
  .not_found {
    font-size: 130px; } }

.inline-dropdown {
  list-style: none;
  margin: 0;
  padding: 0; }
  .inline-dropdown > li {
    display: inline-block; }

/*
**common sections styles
*/
/*parallax*/
.parallax {
  background-attachment: fixed !important;
  -webkit-background-size: cover !important;
  -moz-background-size: cover !important;
  -o-background-size: cover !important;
  background-size: cover !important;
  -webkit-transition: all .15s ease !important;
  -moz-transition: all .15s ease !important;
  -o-transition: all .15s ease !important;
  -ms-transition: all .15s ease !important;
  transition: all .15s ease !important;
  background-position: 50% 0;
  background-repeat: no-repeat;
  position: relative; }

@media (max-width: 767px) {
  .parallax {
    -webkit-background-size: auto auto !important;
    -moz-background-size: auto auto !important;
    -o-background-size: auto auto !important;
    background-size: auto auto !important; } }

.parallax:before, .parallax:after {
  content: '';
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  opacity: 0.8; }

.parallax.light_section:after {
  background-color: #ffffff;
  -ms-filter: "progid: DXImageTransform.Microsoft.Alpha(Opacity=85)";
  filter: alpha(opacity=85);
  opacity: 0.85; }

.parallax.grey_section:after {
  background-color: #ffffff;
  -ms-filter: "progid: DXImageTransform.Microsoft.Alpha(Opacity=93)";
  filter: alpha(opacity=93);
  opacity: 0.93; }

.parallax.color_section:after {
  background-color: #6d81b4;
  -ms-filter: "progid: DXImageTransform.Microsoft.Alpha(Opacity=90)";
  filter: alpha(opacity=90);
  opacity: 0.9; }

.parallax.color_section.main_color2:after {
  background-color: #6d81b4; }

.parallax.color_section.main_color3:after {
  background-color: #0f2676; }

.parallax.dark_section:before {
  background-color: #222;
  opacity: 0.85; }

.parallax.dark_section:after {
  -ms-filter: "progid: DXImageTransform.Microsoft.Alpha(Opacity=95)";
  filter: alpha(opacity=0.2);
  opacity: 0.20; }

.parallax.darkgrey_section:before {
  background-color: #444;
  opacity: 0.85; }

.parallax.darkgrey_section:after {
  opacity: 0.1; }

.parallax > *, .radial_gradient > *, .gradient > *, .diagonal_section > * {
  z-index: 4;
  position: relative; }

.radial_gradient {
  position: relative;
  overflow: hidden; }

.gradient {
  position: relative; }

.gradient:before, .gradient:after {
  content: '';
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: 3; }

.header_gradient, #box_wrapper:before, .gradient:before, .gallery-image-links:before, .blog-item:hover:before, .dark_gradient:before, .ui-slider-range {
  background: #20bbe9;
  background: -moz-linear-gradient(left, #6d81b4 0%, #6d81b4 100%);
  background: -webkit-gradient(linear, left top, right top, color-stop(0%, #6d81b4), color-stop(100%, #6d81b4));
  background: -webkit-linear-gradient(left, #6d81b4 0%, #6d81b4 100%);
  background: -o-linear-gradient(left, #6d81b4 0%, #6d81b4 100%);
  background: -ms-linear-gradient(left, #6d81b4 0%, #6d81b4 100%);
  background: linear-gradient(to right, #6d81b4 0%, #6d81b4 100%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='$mainColor', endColorstr='$mainColor2',GradientType=1 ); }

.gradient.darkgrey_section:after, .gradient.dark_section:after {
  background: #323232; }

.with_background_image {
  background-image: url(../img/background_section.png); }

.with_top_border, .with_bottom_border {
  position: relative; }

.with_top_border:before, .with_bottom_border:after {
  content: '';
  display: block;
  position: absolute;
  height: 1px;
  left: 0;
  right: 0;
  top: 0;
  background-color: #e5e5e5; }

.with_bottom_border:after {
  top: auto;
  bottom: 0; }

.bg_image, .bg_image:after {
  background-image: url(../img/background_section.png); }

.section_header {
  margin: 0 0 22px;
  font-size: 50px;
  position: relative;
  word-wrap: break-word; }
  .section_header.big {
    font-size: 100px;
    font-weight: 700;
    margin-bottom: 30px; }
  .section_header.small {
    font-size: 30px; }

.section_header.page-title {
  font-size: 48px; }

h3 + .section_header {
  margin-top: -10px; }

.section_header + h3 {
  margin: -22px 0 44px;
  font-size: 30px;
  font-weight: 300; }

.section_header + p {
  font-weight: 300;
  font-size: 28px;
  margin-bottom: 28px;
  line-height: 1.5em; }

.section_header.big + p {
  margin-bottom: 30px; }

.text-center .section_header + p, .section_header.text-center + p {
  max-width: 80%;
  margin-left: auto;
  margin-right: auto;
  text-align: center; }

.section_header + blockquote {
  font-size: 16px;
  max-width: 60%;
  margin: 50px auto 44px;
  border: none;
  background-color: transparent;
  padding: 0 40px; }

.section_header + blockquote:before, .section_header + blockquote:after {
  font-style: normal;
  font-family: 'fontello';
  content: '\e808';
  position: absolute;
  left: 0;
  top: -10px;
  font-size: 30px;
  color: #6d81b4; }

.section_header + blockquote:after {
  content: '\e809';
  left: auto;
  right: 0; }

@media (max-width: 991px) {
  .section_header {
    font-size: 30px;
    margin-top: 0; }
  .section_header + blockquote, .section_header + p {
    max-width: 100% !important; }
  .section_header + p {
    font-size: 1.1em;
    letter-spacing: 0; } }

@media (max-width: 767px) {
  .section_header {
    font-size: 30px;
    margin-top: 0; }
  .section_header.big {
    font-size: 36px;
    margin-top: 0; }
  .section_header + blockquote, .section_header + p {
    max-width: 100% !important; } }

/*page preloader*/
.preloader {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: #ffffff;
  z-index: 13000;
  height: 100%; }

.preloader_image {
  width: 80px;
  height: 80px;
  position: absolute;
  left: 50%;
  top: 50%;
  background: url(../img/preloader.gif) no-repeat 50% 50% transparent;
  margin: -40px 0 0 -40px; }

/*
animated elements
*/
.to_animate {
  visibility: hidden; }

.animated {
  /*IE7 fix*/
  visibility: visible !important; }

/*
**boxed layout
*/
body.boxed {
  position: static;
  width: auto;
  height: auto; }

.pattern1 {
  background-image: url(../img/pattern1.png); }

.pattern2 {
  background-image: url(../img/pattern2.png); }

.pattern3 {
  background-image: url(../img/pattern3.png); }

.pattern4 {
  background-image: url(../img/pattern4.png); }

.pattern5 {
  background-image: url(../img/pattern5.png); }

.pattern6 {
  background-image: url(../img/pattern6.png); }

.pattern7 {
  background-image: url(../img/pattern7.png); }

.pattern8 {
  background-image: url(../img/pattern8.png); }

.pattern9 {
  background-image: url(../img/pattern9.png); }

.pattern10 {
  background-image: url(../img/pattern10.png); }

.pattern11 {
  background-image: url(../img/pattern11.png); }

.boxed .container {
  max-width: 100%;
  padding-left: 50px;
  padding-right: 50px; }

@media (max-width: 500px) {
  .boxed .container {
    padding-left: 10px;
    padding-right: 10px; } }

.boxed #box_wrapper.container {
  padding: 0;
  -webkit-box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.2);
  box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.2); }
  .boxed #box_wrapper.container.top-bottom-margins {
    margin-top: 40px;
    margin-bottom: 40px; }

/**light section*/
.light_section {
  background-color: #ffffff;
  color: #b2b2b2; }
  .light_section.bg_image {
    color: #323232; }
  .light_section h1, .light_section h2, .light_section h3, .light_section h4, .light_section h5, .light_section h6 {
    color: #323232; }
    .light_section h1 a, .light_section h2 a, .light_section h3 a, .light_section h4 a, .light_section h5 a, .light_section h6 a {
      color: inherit; }
      .light_section h1 a:hover, .light_section h2 a:hover, .light_section h3 a:hover, .light_section h4 a:hover, .light_section h5 a:hover, .light_section h6 a:hover {
        color: #6d81b4; }
  .light_section a {
    color: #6d81b4; }
    .light_section a:hover {
      color: #b2b2b2; }
  .light_section .theme_button {
    color: #ffffff; }
    .light_section .theme_button:hover, .light_section .theme_button:focus {
      color: #ffffff;
      background-color: #6d81b4;
      border-color: #6d81b4; }
  .light_section .theme_button.inverse {
    color: #323232; }
    .light_section .theme_button.inverse:hover, .light_section .theme_button.inverse:focus {
      border-color: #323232;
      background-color: #323232;
      color: #ffffff; }
  .light_section .theme_button.color1:active, .light_section .theme_button.color1:hover, .light_section .theme_button.color1:focus {
    background-color: #6d81b4;
    border-color: #6d81b4; }
  .light_section .color-icon.bg-icon:before {
    background-color: #f5f5f5; }
  .light_section .color-icon.bg-icon:hover:before {
    color: #ffffff !important; }
  .light_section .greylinks a {
    color: #b2b2b2; }
  .light_section .darklinks a {
    color: #323232; }
    .light_section .darklinks a:hover {
      color: #6d81b4; }
  .light_section .thumbnail .caption {
    border: 1px solid rgba(0, 0, 0, 0.1);
    border-top: none; }
  .light_section .thumbnail > img, .light_section .thumbnail > a > img {
    border: 1px solid rgba(0, 0, 0, 0.1);
    border-bottom: none; }

/**grey section*/
.grey_section {
  background-color: #fafafa;
  color: #a5a5a5; }
  .grey_section h1, .grey_section h2, .grey_section h3, .grey_section h4, .grey_section h5, .grey_section h6 {
    color: #2a2a2a; }
    .grey_section h1 a, .grey_section h2 a, .grey_section h3 a, .grey_section h4 a, .grey_section h5 a, .grey_section h6 a {
      color: inherit; }
      .grey_section h1 a:hover, .grey_section h2 a:hover, .grey_section h3 a:hover, .grey_section h4 a:hover, .grey_section h5 a:hover, .grey_section h6 a:hover {
        color: #6d81b4; }
  .grey_section a {
    color: #6d81b4; }
    .grey_section a:hover {
      color: #323232; }
  .grey_section blockquote {
    background-color: #ffffff; }
  .grey_section .theme_button {
    color: #ffffff; }
    .grey_section .theme_button:hover, .grey_section .theme_button:focus {
      color: #ffffff; }
    .grey_section .theme_button.inverse {
      color: #323232; }
      .grey_section .theme_button.inverse:hover {
        background-color: #323232;
        color: #ffffff; }
  .grey_section .greylinks a {
    color: #323232; }
    .grey_section .greylinks a:hover {
      color: #6d81b4; }
  .grey_section .color-icon.bg-icon:before {
    background-color: #ffffff; }
  .grey_section .color-icon.bg-icon:hover:before {
    color: #ffffff !important; }
  .grey_section .form-control {
    border-color: #ffffff; }
  .grey_section .breadcrumb {
    color: #b2b2b2; }
    .grey_section .breadcrumb a {
      color: #999999; }
      .grey_section .breadcrumb a:hover {
        color: #6d81b4; }
  .grey_section .post {
    background-color: #ffffff;
    color: #b2b2b2; }
    .grey_section .post a:hover {
      color: #323232; }
    .grey_section .post .entry-title a {
      color: #323232; }
      .grey_section .post .entry-title a:hover {
        color: #6d81b4; }
  .grey_section .thumbnail .caption {
    border: none; }
  .grey_section .countdown-section {
    border-left: 15px solid #fafafa;
    border-right: 15px solid #fafafa;
    padding-right: 20px;
    padding-left: 20px;
    background-color: #ffffff; }
    @media (max-width: 767px) {
      .grey_section .countdown-section {
        border: none;
        padding-left: 8px;
        padding-right: 8px; } }

/**common dark sections*/
[class*="dark"] {
  /* blog */
  /* single blog post */
  /* shortcodes */
  /* shop */ }
  [class*="dark"] h1, [class*="dark"] h2, [class*="dark"] h3, [class*="dark"] h4, [class*="dark"] h5, [class*="dark"] h6 {
    color: #ffffff; }
    [class*="dark"] h1 a, [class*="dark"] h2 a, [class*="dark"] h3 a, [class*="dark"] h4 a, [class*="dark"] h5 a, [class*="dark"] h6 a {
      color: #ffffff; }
      [class*="dark"] h1 a:hover, [class*="dark"] h2 a:hover, [class*="dark"] h3 a:hover, [class*="dark"] h4 a:hover, [class*="dark"] h5 a:hover, [class*="dark"] h6 a:hover {
        color: #6d81b4; }
  [class*="dark"] a {
    color: #6d81b4; }
    [class*="dark"] a:hover {
      color: #ffffff; }
  [class*="dark"] hr {
    border-color: rgba(255, 255, 255, 0.1); }
  [class*="dark"] blockquote, [class*="dark"] .blockquote {
    color: #ffffff;
    border-color: rgba(255, 255, 255, 0.1);
    background-color: #2d2d2d; }
  [class*="dark"] .theme_button {
    color: #ffffff; }
    [class*="dark"] .theme_button:after {
      content: '';
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
      background-color: rgba(255, 255, 255, 0.02); }
    [class*="dark"] .theme_button:hover, [class*="dark"] .theme_button:focus {
      background-color: #ffffff;
      border-color: #ffffff;
      color: #323232; }
  [class*="dark"] .theme_button.inverse {
    border-color: #ffffff;
    background-color: transparent;
    color: #ffffff; }
    [class*="dark"] .theme_button.inverse:after {
      display: none; }
    [class*="dark"] .theme_button.inverse:hover, [class*="dark"] .theme_button.inverse:focus {
      background-color: #ffffff;
      color: #323232; }
  [class*="dark"] .with_background, [class*="dark"] .well {
    background-color: rgba(255, 255, 255, 0.06); }
  [class*="dark"] .with_border {
    border-color: rgba(255, 255, 255, 0.1); }
  [class*="dark"] .grey, [class*="dark"] .black {
    color: #ffffff;
    border-color: #ffffff; }
  [class*="dark"].with_top_border:before, [class*="dark"].with_bottom_border:after {
    background-color: rgba(255, 255, 255, 0.1); }
  [class*="dark"] .section_header + p {
    color: inherit; }
  [class*="dark"] .form-control {
    color: #ffffff;
    border-color: rgba(255, 255, 255, 0.1); }
  [class*="dark"] form label + [class*="icon-"] {
    color: #ffffff; }
  [class*="dark"] .form-group-select:before {
    border-color: rgba(255, 255, 255, 0.1); }
  [class*="dark"] .form-control:-moz-placeholder {
    color: #b2b2b2;
    opacity: 1; }
  [class*="dark"] .form-control::-moz-placeholder {
    color: #b2b2b2;
    opacity: 1; }
  [class*="dark"] .form-control:-ms-input-placeholder {
    color: #b2b2b2; }
  [class*="dark"] .form-control::-webkit-input-placeholder {
    color: #b2b2b2; }
  [class*="dark"] .contact-form.transparent-background .form-control {
    border-color: rgba(255, 255, 255, 0.1); }
  [class*="dark"] .border-paragraphs p {
    color: #ffffff;
    border-color: rgba(255, 255, 255, 0.1) !important; }
  [class*="dark"] .table, [class*="dark"] .table-bordered, [class*="dark"] .table th, [class*="dark"] .table td {
    border-color: rgba(255, 255, 255, 0.1); }
  [class*="dark"] .table-striped > tbody > tr:nth-child(odd), [class*="dark"] .table-striped > tbody > tr:nth-child(odd) > td, [class*="dark"] .table-striped > tbody > tr:nth-child(odd) > th {
    border-color: rgba(255, 255, 255, 0.1);
    background-color: rgba(255, 255, 255, 0.06); }
  [class*="dark"] .color-icon.bg-icon:before {
    background-color: #ffffff; }
  [class*="dark"] .color-icon.bg-icon:hover:before {
    color: #ffffff !important; }
  [class*="dark"] .color-bg-icon:hover:before {
    background-color: #6d81b4; }
  [class*="dark"] .tab-content, [class*="dark"] .nav-tabs > li > a {
    border-color: rgba(255, 255, 255, 0.1);
    color: #ffffff; }
  [class*="dark"] .nav-tabs > li.active > a, [class*="dark"] .nav-tabs > li.active > a:hover, [class*="dark"] .nav-tabs > li.active > a:focus {
    border-color: #6d81b4;
    border-bottom-color: transparent;
    background-color: #6d81b4;
    color: #ffffff; }
  [class*="dark"] #isotope_filters a, [class*="dark"] .filters a {
    color: #ffffff;
    border-color: rgba(255, 255, 255, 0.1); }
  [class*="dark"] .price-table {
    border-color: rgba(255, 255, 255, 0.1);
    outline-color: rgba(255, 255, 255, 0.1); }
  [class*="dark"] .price-table.style2 {
    background-color: rgba(255, 255, 255, 0.06); }
  [class*="dark"] .plan-name {
    background-color: rgba(255, 255, 255, 0.06); }
  [class*="dark"] .plan-price p {
    color: #ffffff; }
  [class*="dark"] .features-list .disabled:before {
    color: #ffffff; }
  [class*="dark"] ul.list1 {
    color: #ffffff; }
  [class*="dark"] ul.list1 li {
    border-color: rgba(255, 255, 255, 0.1); }
  [class*="dark"] .greylinks a {
    color: #b5b5b5; }
    [class*="dark"] .greylinks a:hover {
      color: #6d81b4; }
  [class*="dark"] .darklinks a {
    color: #ffffff; }
    [class*="dark"] .darklinks a:hover {
      color: #6d81b4; }
  [class*="dark"] a.logo {
    color: #ffffff; }
    [class*="dark"] a.logo:hover {
      color: #e6e6e6; }
  [class*="dark"].blog-single .post {
    background-color: transparent; }
    [class*="dark"].blog-single .post .entry-header {
      color: #b5b5b5;
      border-color: rgba(255, 255, 255, 0.1); }
      [class*="dark"].blog-single .post .entry-header span {
        border-color: rgba(255, 255, 255, 0.1); }
    [class*="dark"].blog-single .post .entry-title a {
      color: inherit; }
    [class*="dark"].blog-single .post .entry-excerpt {
      color: #b5b5b5;
      border-color: rgba(255, 255, 255, 0.1); }
  [class*="dark"] .post-content {
    border-color: rgba(255, 255, 255, 0.1); }
  [class*="dark"] .blog-grid-post-meta {
    color: #ffffff;
    border-color: rgba(255, 255, 255, 0.1); }
  [class*="dark"] .owl-theme .owl-dots .owl-dot span {
    background-color: #ffffff; }
  [class*="dark"] .testimonials-carousel .media + p {
    background-color: rgba(255, 255, 255, 0.06); }
  [class*="dark"] .side-item, [class*="dark"] .blog-item .from-blog-social {
    border-color: rgba(255, 255, 255, 0.1); }
  @media (min-width: 992px) {
    [class*="dark"].blog article.post .date {
      color: inherit; } }
  [class*="dark"] .entry-excerpt {
    color: #ffffff; }
  [class*="dark"] .comment-meta {
    color: #ffffff; }
  [class*="dark"] .comment-meta .author_url {
    color: #ffffff; }
  [class*="dark"] .comment-list article:after {
    background-color: rgba(255, 255, 255, 0.1); }
  [class*="dark"] .comment-respond {
    border-color: rgba(255, 255, 255, 0.1); }
  [class*="dark"] .entry-tags {
    border-color: rgba(255, 255, 255, 0.1); }
  [class*="dark"] .widget_shopping_cart .cart_list, [class*="dark"] .widget_recent_entries li, [class*="dark"] .widget_recent_comments li, [class*="dark"] .widget_archive li, [class*="dark"] .widget_categories li, [class*="dark"] .widget_meta li, [class*="dark"] .widget_nav_menu li, [class*="dark"] .widget_pages li, [class*="dark"] .widget_popular_entries li {
    border-color: rgba(255, 255, 255, 0.1) !important; }
  [class*="dark"] .widget_nav_menu ul ul {
    border-color: rgba(255, 255, 255, 0.1); }
  [class*="dark"] .widget_popular_entries .media-heading {
    color: #ffffff; }
  [class*="dark"] .widget_recent_entries a:before, [class*="dark"] .widget_archive a:before, [class*="dark"] .widget_categories a:before, [class*="dark"] .widget_meta a:before, [class*="dark"] .widget_nav_menu a:before, [class*="dark"] .widget_pages a:before {
    color: #ffffff; }
  [class*="dark"] .tweet_list li + li .tweet_right {
    border-color: rgba(255, 255, 255, 0.1); }
  [class*="dark"] .widget_tag_cloud a {
    color: #ffffff; }
  [class*="dark"] #calendar_wrap {
    border-color: rgba(255, 255, 255, 0.1); }
  [class*="dark"] .widget_calendar table {
    border-color: rgba(255, 255, 255, 0.1); }
  [class*="dark"] .widget_calendar tfoot td a {
    border-color: rgba(255, 255, 255, 0.1); }
  [class*="dark"] .widget_calendar caption, [class*="dark"] .widget_calendar thead, [class*="dark"] .widget_calendar th {
    color: #ffffff; }
  [class*="dark"] .widget_calendar tbody td a:hover {
    color: #ffffff; }
  [class*="dark"] .grid-view h3:before, [class*="dark"] .grid-view h3:after {
    background-color: rgba(255, 255, 255, 0.1); }
  [class*="dark"] .price {
    color: #ffffff; }
  [class*="dark"] .owl-carousel.product-thumbnails .owl-nav > div:after {
    color: #ffffff; }
  [class*="dark"] .ui-slider {
    background-color: rgba(255, 255, 255, 0.06); }
  [class*="dark"] .ui-slider .ui-slider-handle {
    background-color: #ffffff; }
  [class*="dark"] #sort_view {
    border-color: rgba(255, 255, 255, 0.1);
    color: #ffffff; }
  [class*="dark"] #toggle_shop_view.grid-view:after, [class*="dark"] #toggle_shop_view:before {
    background-color: #2a2a2a; }
  [class*="dark"] .widget_layered_nav .color-filters a:before {
    border-color: rgba(255, 255, 255, 0.1); }
  [class*="dark"] aside .widget a {
    color: #ffffff; }
  [class*="dark"] .pagination > li > a, [class*="dark"] .pagination > li > span {
    border-color: rgba(255, 255, 255, 0.1);
    color: #ffffff;
    background-color: transparent; }
  [class*="dark"] .pagination > li > a:hover, [class*="dark"] .pagination > li > span:hover, [class*="dark"] .pagination > li > a:focus, [class*="dark"] .pagination > li > span:focus, [class*="dark"] .pagination > .active > a, [class*="dark"] .pagination > .active > span, [class*="dark"] .pagination > .active > a:hover, [class*="dark"] .pagination > .active > span:hover, [class*="dark"] .pagination > .active > a:focus, [class*="dark"] .pagination > .active > span:focus {
    border-color: #6d81b4;
    background-color: #6d81b4;
    color: #ffffff; }
  [class*="dark"] .thumbnail {
    background-color: transparent; }
    [class*="dark"] .thumbnail h3 a {
      color: #ffffff; }
  [class*="dark"] .thumbnail .caption {
    border-color: transparent;
    background-color: #2f2f2f; }
  [class*="dark"] .progress {
    background-color: rgba(255, 255, 255, 0.1); }
  [class*="dark"] .panel-group .panel-heading + .panel-collapse .panel-body {
    border-color: rgba(255, 255, 255, 0.1); }
  [class*="dark"] .entry-meta .comments-link a {
    color: #ffffff; }
  [class*="dark"] #timetable tbody th, [class*="dark"] #timetable tbody td {
    border-color: rgba(255, 255, 255, 0.1); }

/**dark section*/
.dark_section {
  background-color: #323232;
  color: #989898; }

/**darkgrey section*/
.darkgrey_section {
  background-color: #3c3c3c;
  color: #b5b5b5; }
  .darkgrey_section .section_header + p {
    color: #b2b2b2 !important; }

.darkgrey_section.darkgrey_lighter {
  background-color: #3a3a3a; }

/**color section*/
.color_section.main_color2 {
  background-color: #6d81b4; }
  .color_section.main_color2 .highlight {
    color: #6d81b4; }

.color_section {
  background-color: #6d81b4;
  color: #ffffff; }
  .color_section h1, .color_section h2, .color_section h3, .color_section h4, .color_section h5, .color_section h6 {
    color: #ffffff; }
    .color_section h1 a, .color_section h2 a, .color_section h3 a, .color_section h4 a, .color_section h5 a, .color_section h6 a {
      color: #ffffff; }
      .color_section h1 a:hover, .color_section h2 a:hover, .color_section h3 a:hover, .color_section h4 a:hover, .color_section h5 a:hover, .color_section h6 a:hover {
        color: #dcf1fb; }
  .color_section a {
    color: #ffffff; }
    .color_section a:hover {
      color: #dcf1fb; }
  .color_section blockquote, .color_section .blockquote {
    border-color: #82ceef; }
  .color_section .theme_button.color1 {
    background-color: #ffffff;
    border-color: #ffffff;
    color: #323232; }
    .color_section .theme_button.color1:hover {
      background-color: #323232;
      border-color: #323232;
      color: #ffffff; }
  .color_section .theme_button:hover, .color_section .theme_button:focus {
    background-color: #ffffff;
    border-color: #ffffff;
    color: #323232; }
  .color_section .theme_button.inverse {
    background-color: transparent;
    border-color: #ffffff;
    color: #ffffff; }
    .color_section .theme_button.inverse:hover, .color_section .theme_button.inverse:focus {
      background-color: #323232;
      border-color: #323232;
      color: #ffffff; }
  section .color_section .theme_button {
    color: #323232;
    background-color: #ffffff;
    border-color: #ffffff; }
  section .color_section .theme_button:hover {
    background-color: #323232;
    border-color: #323232;
    color: #ffffff; }
  .color_section .with_background {
    background-color: rgba(255, 255, 255, 0.2); }
  .color_section .with_border {
    border-color: rgba(255, 255, 255, 0.2); }
  .color_section.with_top_border .container:before, .color_section.with_bottom_border .container:after {
    background-color: #82ceef; }
  .color_section .section_header:before {
    background-color: #82ceef; }
  .color_section .black {
    border-color: #ffffff;
    color: #ffffff; }
  .color_section .grey {
    border-color: #323232;
    color: #323232; }
  .color_section #response, .color_section .highlight {
    color: #ffffff; }
  .color_section ul.list1 li {
    border-color: rgba(255, 255, 255, 0.2) !important; }
  .color_section [class*='soc-']:before {
    color: #ffffff;
    border-color: #ffffff; }
  .color_section .color-icon.bg-icon:before {
    background-color: #ffffff; }
  .color_section .color-icon.bg-icon:hover:before {
    color: #ffffff !important; }
  .color_section .form-control {
    color: #ffffff;
    border-color: rgba(255, 255, 255, 0.2); }
  .color_section .form-control:-moz-placeholder {
    color: #ffffff; }
  .color_section .form-control::-moz-placeholder {
    color: #ffffff; }
  .color_section .form-control:-ms-input-placeholder {
    color: #ffffff; }
  .color_section .form-control::-webkit-input-placeholder {
    color: #ffffff; }
  .color_section .form-control:focus:-moz-placeholder {
    color: transparent;
    opacity: 1; }
  .color_section .form-control:focus::-moz-placeholder {
    color: transparent;
    opacity: 1; }
  .color_section .form-control:focus:-ms-input-placeholder {
    color: transparent; }
  .color_section .form-control:focus::-webkit-input-placeholder {
    color: transparent; }
  .color_section .form-control.invalid {
    -webkit-box-shadow: 0 0 0 2px #ffffff;
    box-shadow: 0 0 0 2px #ffffff; }

/*
**template styles
*/
#box_wrapper, #land {
  overflow: visible;
  position: relative; }

#box_wrapper:before {
  content: '';
  display: block;
  right: 0;
  left: 0;
  top: 0;
  height: 10px; }

#topline {
  padding: 4px 0;
  font-size: 14px;
  position: relative;
  z-index: 1001; }
  #topline.gradient {
    padding-top: 0;
    margin-top: -6px; }
    #topline.gradient a[id] {
      color: #ffffff;
      padding: 0 10px; }
    #topline.gradient [class*="col-"] > span {
      color: #ffffff; }
  #topline.grey_section a[id] {
    color: #b2b2b2;
    padding: 0 10px; }
  #topline [class*="rt-icon-"] {
    font-size: 18px;
    position: relative;
    top: 3px;
    padding-right: 6px; }
  @media (min-width: 768px) {
    #topline [class*="col-"] > span {
      padding-left: 33px; }
      #topline [class*="col-"] > span:first-child {
        padding-left: 0; } }
  @media (max-width: 767px) {
    #topline [class*="col-"] > span {
      display: block; } }

.currency-dropdown .dropdown-menu {
  min-width: 0;
  padding: 20px 10px; }
  .currency-dropdown .dropdown-menu > li > a {
    color: inherit;
    padding: 5px 20px; }
  .currency-dropdown .dropdown-menu > li > a:hover, .currency-dropdown .dropdown-menu > li.active-currency {
    color: #323232; }

.login-dropdown .dropdown-menu {
  min-width: 400px;
  padding: 30px 30px; }
  .login-dropdown .dropdown-menu label {
    display: none; }
  .login-dropdown .dropdown-menu .form-control {
    border-color: rgba(0, 0, 0, 0.1); }

.cart-dropdown .dropdown-menu {
  min-width: 400px;
  padding: 20px 30px; }

@media (max-width: 767px) {
  .login-dropdown, .cart-dropdown {
    position: static; }
  .login-dropdown .dropdown-menu, .cart-dropdown .dropdown-menu {
    right: 0;
    left: 0;
    min-width: 0; } }

#toplogo {
  position: relative; }

@media (max-width: 767px) {
  #social {
    padding: 10px 0 0;
    position: relative; } }

a.logo {
  display: inline-block;
  font-size: 22px;
  font-weight: 700;
  letter-spacing: -0.05em;
  line-height: 1;
  color: #323232;
  padding: 20px 0;
  word-break: break-word; }
  a.logo img {
    margin-right: 10px; }
    .home a.logo img, footer a.logo img {
      max-width: 100%; }
  a.logo:hover {
    color: #323232; }
  .header_gradient a.logo {
    color: #ffffff; }
  a.logo.bottom_logo {
    padding: 0;
    font-size: 28px; }
    a.logo.bottom_logo img {
      max-width: 50px; }
  a.logo.vertical_logo {
    padding: 0; }
    a.logo.vertical_logo img {
      margin: 0 0 10px; }
  @media (max-width: 1199px) and (min-width: 992px) {
    a.logo {
      font-size: 36px; } }
  @media (max-width: 600px) {
    a.logo {
      font-size: 26px; }
      a.logo img {
        max-width: 50px; } }

#header {
  top: 0;
  left: 0;
  right: 0;
  position: relative;
  z-index: 1000;
  -webkit-transition: all ease 0.1s 0;
  -moz-transition: all ease 0.1s 0;
  -o-transition: all ease 0.1s 0;
  -ms-transition: all ease 0.1s 0;
  transition: all ease 0.1s 0; }
  #header.mobile-active {
    z-index: 1002; }
  #header.affix {
    position: fixed; }
  #header .widget_search {
    position: absolute;
    right: 60px;
    top: 50%;
    height: 50px;
    margin-top: -20px;
    z-index: 3;
    /* navigation with search  */
    /* hide search  on small devices*/ }
    #header .widget_search label {
      display: inline;
      font-size: 0;
      color: transparent;
      cursor: pointer; }
    #header .widget_search label:before {
      display: block;
      position: absolute;
      text-align: center;
      width: 50px;
      right: 0;
      line-height: 48px;
      color: #6d81b4;
      font-size: 24px;
      font-weight: normal;
      content: "\e626";
      font-family: "rt-icons";
      z-index: 3;
      border-left: 1px solid transparent;
      -webkit-transition: all 0.2s ease-in-out 0s;
      -moz-transition: all 0.2s ease-in-out 0s;
      -o-transition: all 0.2s ease-in-out 0s;
      -ms-transition: all 0.2s ease-in-out 0s;
      transition: all 0.2s ease-in-out 0s; }
    #header .widget_search input#search {
      width: 0;
      position: absolute;
      top: 0;
      right: 0;
      padding: 0 10px;
      border-color: transparent;
      background-color: transparent;
      color: transparent;
      -webkit-transition: all 0.2s ease-in-out 0s;
      -moz-transition: all 0.2s ease-in-out 0s;
      -o-transition: all 0.2s ease-in-out 0s;
      -ms-transition: all 0.2s ease-in-out 0s;
      transition: all 0.2s ease-in-out 0s; }
      #header .widget_search input#search:focus {
        width: 230px;
        border-color: #e5e5e5;
        background-color: #ffffff;
        color: #b2b2b2; }
        #header .widget_search input#search:focus + label:before {
          border-color: #e5e5e5; }
    #header .widget_search button, #header .widget_search .theme_button {
      display: none; }
    @media (min-width: 992px) {
      #header .widget_search {
        right: 15px;
        margin-top: -25px; }
      #header .widget_search + nav {
        margin-right: 60px; } }
    @media (max-width: 991px) {
      #header .widget_search {
        display: none; } }

.header_white {
  background-color: #ffffff; }
  .header_white.affix {
    box-shadow: 0px 2px 3px rgba(0, 0, 0, 0.1); }

.header_darkgrey {
  background-color: #323232; }

@media (max-width: 992px) {
  #header_wrapper .col-sm-12 {
    min-height: 0; } }

/**
* mainslider styles
*/
/* flexslider */
#mainslider {
  position: relative; }
  #mainslider .flexslider:before, #mainslider .flexslider:after {
    content: '';
    display: block;
    clear: both; }
  #mainslider .container {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    margin-left: auto;
    margin-right: auto; }
  #mainslider [class*="col-"] {
    position: static; }
  #mainslider .slide_description_wrapper {
    position: absolute;
    top: 0;
    bottom: 0;
    right: 0;
    left: 0;
    height: 100%;
    z-index: 5;
    padding: 40px 0; }
  #mainslider .slide_description_wrapper:before, #mainslider .slide_description {
    display: inline-block;
    vertical-align: middle; }
  #mainslider .slide_description_wrapper:before {
    content: '';
    display: inline-block;
    width: 0;
    height: 100%;
    vertical-align: middle; }
  #mainslider p {
    font-size: 20px;
    margin-bottom: 20px; }
  #mainslider p:first-child {
    font-size: 30px;
    font-weight: 300;
    letter-spacing: -0.05em;
    margin-bottom: 14px; }
  #mainslider h3 {
    font-size: 40px;
    line-height: 0.9;
    color: #ffffff;
    margin: 0 0 28px;
    padding: 0 0 2px; }
  #mainslider .fa {
    font-size: 42px;
    display: inline-block;
    text-align: center;
    line-height: 100px;
    width: 100px;
    border-radius: 50%;
    border: 1px solid #323232;
    color: #323232;
    margin: 3px;
    -webkit-transition: all 0.2s linear 0s;
    -moz-transition: all 0.2s linear 0s;
    -o-transition: all 0.2s linear 0s;
    -ms-transition: all 0.2s linear 0s;
    transition: all 0.2s linear 0s; }
    #mainslider .fa:hover {
      border-color: #6d81b4;
      color: #6d81b4; }
  #mainslider .theme_button {
    margin: 10px 0 10px; }

@media (min-width: 1200px) {
  #mainslider h3 {
    font-size: 80px; } }

@media (min-width: 1600px) {
  #mainslider h3 {
    font-size: 100px; }
  #mainslider p:first-child {
    font-size: 50px; } }

@media (max-width: 767px) {
  #mainslider p {
    font-size: 14px;
    margin-bottom: 5px; }
  #mainslider p:first-child {
    font-size: 14px;
    margin-bottom: 5px; }
  #mainslider h3 {
    font-size: 20px;
    margin-bottom: 10px; }
  #mainslider .theme_button {
    margin-top: 5px; }
  #mainslider .flex-control-nav {
    display: none; }
  #mainslider .slide_description_wrapper {
    padding: 4px 0; }
  #mainslider .fa {
    line-height: 50px;
    width: 50px;
    font-size: 32px; } }

@media (max-width: 600px) {
  #mainslider h3 {
    color: #323232; }
  #mainslider .container {
    position: static; }
  #mainslider .slide_description_wrapper:before {
    display: none; }
  #mainslider .slide_description {
    padding: 10px 0 20px;
    display: block;
    text-align: center; }
  #mainslider .slide_description_wrapper {
    padding: 10px 0 0;
    position: relative; }
  #layerslider .theme_button {
    padding: 5px 1px;
    font-size: 11px; } }

#layerslider {
  padding: 0; }
  #layerslider [class*="container"] {
    padding: 0; }

#breadcrumbs h1 {
  display: inline;
  font-size: 40px; }

#breadcrumbs {
  /* styles for breadcrumbs style 3 */
  /* styles for breadcrumbs style 4 */ }
  @media screen and (min-width: 992px) {
    #breadcrumbs .display_table_md {
      width: auto;
      min-width: 0; }
    #breadcrumbs h1.display_table_cell_md {
      padding-right: 20px; }
    #breadcrumbs .breadcrumb.display_table_cell_md {
      border-left: 1px solid rgba(255, 255, 255, 0.2);
      padding-left: 25px; } }
  #breadcrumbs .bottom_breadcrumbs {
    float: right;
    padding: 0 20px;
    margin: -15px 15px -15px 15px;
    background-color: rgba(0, 0, 0, 0.05); }

#mainteasers [class*="col-"] {
  vertical-align: top; }
  #mainteasers [class*="col-"] .media-left h4 {
    font-size: 24px; }
  #mainteasers [class*="col-"] .media-left h3 {
    font-size: 50px;
    margin: 0; }

@media (min-width: 1200px) {
  #sliderteasers .row {
    margin-top: -100px; } }

#folio {
  overflow: hidden; }

#grid [class*="col-"] {
  margin-top: 15px !important;
  margin-bottom: 15px !important; }

@media (min-width: 500px) {
  #contact.negative_margin .row:last-child .col-sm-12 {
    margin-bottom: -140px; }
  #contact.negative_margin + #copyright > .container {
    padding-top: 130px; }
  #contact .col-sm-4 {
    padding-left: 25px;
    padding-right: 25px; }
  #about .col-md-4 {
    padding-left: 25px;
    padding-right: 25px; } }

#subscribe .form-control {
  width: 350px;
  max-width: 100%;
  margin: 11px auto -5px;
  display: inline-block; }

#partners-carousel {
  text-align: center;
  margin-bottom: 0; }
  #partners-carousel img {
    opacity: 0.8; }
    #partners-carousel img:hover {
      opacity: 1; }
  #partners-carousel .owl-nav {
    margin-top: -12px; }
  #partners-carousel .owl-nav > div:after {
    font-size: 20px;
    color: #6d81b4; }
  #partners-carousel .owl-nav > div:hover {
    opacity: 0.6; }

#related-gallery-items-carousel {
  margin-top: 30px; }

#breadcrumbs.parallax {
  background-image: url(../example/parallax/breadcrumbs.jpg); }

#comingsoon1 {
  background-image: url(../example/parallax/comingsoon1.jpg); }

#comingsoon2 {
  background-image: url(../example/parallax/comingsoon2.jpg); }

#comingsoon3 {
  background-image: url(../example/parallax/comingsoon3.jpg); }

#donate {
  background-image: url(../example/parallax/donate.jpg); }

#progress, #subscribe {
  background-image: url(../example/parallax/progress.jpg); }

#team {
  background-image: url(../example/parallax/blog.jpg); }

#services {
  background: url(../example/parallax/services.jpg) no-repeat 100% 0; }

#featured {
  background: url(../example/parallax/featured.jpg) no-repeat 100% 0; }
  
#mapa_bg {
  background: url(../img/mapa.jpg) no-repeat 100% 0; }  

#featured .teaser .media-body h3, #comingsoon1 .teaser .media-body h3 {
  font-size: 20px; }

#skills {
  background: url(../example/parallax/skills.jpg) no-repeat 100% 0; }

#contact {
  background-image: url(../example/parallax/map.jpg); }

#recent .section_header {
  margin-bottom: 42px; }

#recent > img {
  z-index: 3;
  position: relative;
  right: 0; }
  @media (min-width: 768px) and (max-width: 991px) {
    #recent > img {
      position: absolute;
      top: 20%;
      max-width: 60%; } }
  @media (min-width: 992px) {
    #recent > img {
      position: absolute;
      top: -30px;
      max-width: 60%; } }

#copyright {
  font-size: 16px; }
  #copyright p {
    margin: 0;
    font-size: 18px;
    font-weight: 300; }
  #copyright.table_section .bottom_logo img {
    margin-bottom: 0; }

#map {
  height: 500px; }
  #map img {
    max-width: inherit; }
  #map h3 {
    margin-top: 0; }
  #map p {
    line-height: 1.3; }

/*
**main menu (min 992px) styles
*/
@media (min-width: 992px) {
  /* menu layout */
  .sf-menu, .sf-menu ul {
    margin: 0;
    padding: 0;
    list-style: none; }
  .sf-menu li {
    position: relative; }
  .sf-menu ul {
    position: absolute;
    display: none;
    top: 100%;
    z-index: 99; }
  .sf-menu li:hover > ul, .sf-menu li.sfHover > ul {
    display: block; }
  .sf-menu a {
    display: block;
    position: relative; }
  .sf-menu ul ul {
    top: -20px;
    left: 100%; }
  /* menu skin */
  .sf-menu a {
    font-weight: 400;
    padding: .75em 1.1em;
    text-decoration: none;
    zoom: 1;
    /* IE7 */ }
  .sf-menu li {
    white-space: nowrap;
    /* no need for Supersubs plugin */
    *white-space: normal;
    /* ...unless you support IE7 (let it wrap) */
    -webkit-transition: background .2s;
    transition: background .2s; }
  .sf-menu > li {
    display: inline-block;
    padding: 30px 0 30px;
    position: relative; }
  .sf-menu > li > a {
    padding: 10px 15px;
    color: #ffffff;
    font-size: 16px; }
  .boxed .sf-menu > li > a {
    padding-left: 10px;
    padding-right: 10px; }
  .sf-menu > li > a:hover, .sf-menu > li.active > a {
    color: #6d81b4; }
  .bordered_items .sf-menu {
    text-align: center; }
  .bordered_items .sf-menu > li {
    padding: 0; }
  .bordered_items .sf-menu > li > a {
    padding: 20px 40px 20px 44px; }
  .bordered_items .sf-menu > li + li:before {
    content: '';
    width: 1px;
    position: absolute;
    left: 0;
    top: 0;
    bottom: 0;
    background-color: rgba(255, 255, 255, 0.1); }
  .header_white .sf-menu > li > a {
    color: #323232; }
  .header_white .sf-menu > li > a:hover, .header_white .sf-menu > li.active > a {
    color: #6d81b4; }
  .header_white .sf-menu > li + li:before {
    background-color: #e5e5e5; }
  .header_gradient .sf-menu > li > a:hover, .header_gradient .sf-menu > li.active > a {
    color: #323232; }
  .sf-menu li:hover, .sf-menu li.sfHover {
    /* only transition out, not in */
    -webkit-transition: none;
    transition: none; }
  /* second level */
  .sf-menu ul {
    text-align: left;
    list-style: none;
    padding: 20px 0;
    background-color: #6d81b4;
    box-shadow: 0px 2px 3px rgba(0, 0, 0, 0.1);
    min-width: 12em;
    /* allow long menu items to determine submenu width */
    *width: 12em;
    /* no auto sub width for IE7, see white-space comment below */ }
  .sf-menu ul a {
    font-size: 16px;
    color: #ffffff;
    padding-left: 40px;
    padding-right: 40px; }
  .sf-menu ul > li + li:before {
    position: absolute;
    content: '';
    height: 1px;
    left: 40px;
    right: 40px;
    background-color: rgba(255, 255, 255, 0.2); }
  .sf-menu ul a:hover, .sf-menu ul li.active a {
    color: #323232; }
  /* third level */
  .sf-menu ul ul {
    background-color: #6d81b4;
    border-top: 0; }
  .affix-top .sf-menu > li > a [class*='icon'] {
    display: block;
    font-size: 1.9em;
    line-height: 1em;
    padding: 0;
    top: 0;
    text-align: center; }
  /*** arrows (for all except IE7) **/
  /* styling for both css and generated arrows */
  .sf-arrows .sf-with-ul:after {
    font-family: 'fontello';
    content: '\e82e';
    padding-left: 7px; }
  /*top menu level*/
  /* styling for right-facing arrows */
  .sf-arrows ul .sf-with-ul:after {
    content: '\e830'; } }

@media (max-width: 1199px) and (min-width: 992px) {
  .sf-menu > li > a {
    padding-left: 6px;
    padding-right: 6px; }
  .boxed .sf-menu > li > a {
    padding-left: 2px;
    padding-right: 2px; } }

@media (max-width: 1199px) and (min-width: 768px) {
  .bordered_items .sf-menu > li > a {
    padding-right: 20px;
    padding-left: 24px; } }

#toggle_menu {
  position: absolute;
  top: 50%;
  margin-top: -30px;
  display: none;
  background-color: #ffffff;
  right: 15px;
  width: 60px;
  height: 60px;
  cursor: pointer;
  z-index: 1001;
  visibility: visible; }
  #toplogo #toggle_menu {
    position: fixed;
    top: 35px;
    margin: 0; }
  #toplogo #toggle_menu.mobile-active {
    top: 0; }
  #toggle_menu:hover span:before {
    top: -7px; }
  #toggle_menu:hover span:after {
    top: 7px; }
  #toggle_menu span, #toggle_menu span:before, #toggle_menu span:after {
    display: block;
    width: 20px;
    height: 1px;
    position: absolute;
    background-color: #323232;
    content: '';
    left: 0;
    -webkit-transition: all 0.2s ease-in-out 0s;
    -moz-transition: all 0.2s ease-in-out 0s;
    -o-transition: all 0.2s ease-in-out 0s;
    -ms-transition: all 0.2s ease-in-out 0s;
    transition: all 0.2s ease-in-out 0s; }
  #toggle_menu span {
    left: 20px;
    top: 50%;
    margin-top: -1px; }
  #toggle_menu span:before {
    top: -5px; }
  #toggle_menu span:after {
    top: 5px; }

/*
**main menu mobile styles
*/
@media (max-width: 991px) {
  #mainmenu_wrapper {
    /*position: relative;*/
    position: fixed;
    visibility: hidden;
    z-index: 10;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    background-color: transparent;
    opacity: 0;
    -webkit-transition: all 0.2s linear 0s;
    -moz-transition: all 0.2s linear 0s;
    -o-transition: all 0.2s linear 0s;
    -ms-transition: all 0.2s linear 0s;
    transition: all 0.2s linear 0s; }
  .mobile-active #mainmenu_wrapper {
    visibility: visible;
    opacity: 1;
    background-color: #111;
    background-color: rgba(0, 0, 0, 0.9); }
  #toggle_menu {
    display: block; }
    #toggle_menu.mobile-active {
      background-color: #ffffff !important;
      border: none;
      top: 0;
      right: 0;
      position: fixed;
      margin: 0;
      z-index: 3000; }
      #toggle_menu.mobile-active:after {
        position: absolute;
        top: 14px;
        left: 10px;
        font-family: 'rt-icons';
        content: "\e602";
        font-size: 40px;
        color: #323232; }
      #toggle_menu.mobile-active span {
        display: none; }
  .nav-justified > li > a {
    text-align: left; }
  .sf-menu {
    position: fixed;
    overflow: auto;
    background-color: #ffffff;
    width: auto;
    top: 30px;
    left: 30px;
    bottom: 30px;
    right: 30px;
    padding: 20px;
    font-size: 1.1em;
    text-transform: uppercase;
    font-weight: 800;
    word-wrap: break-word;
    text-align: left; }
  .sf-menu a {
    color: #323232; }
  .sf-menu ul {
    list-style: none;
    padding-left: 10px; }
  .sf-menu ul li a {
    display: block;
    padding: 10px;
    font-weight: normal;
    text-transform: none; }
  .sf-menu ul li a:before {
    content: '-';
    padding-right: 5px; }
  .sf-menu ul ul li a:before {
    content: '--';
    padding-right: 5px; }
  /*** arrows (for all except IE7) **/
  .sf-arrows .sf-with-ul {
    padding-right: 2.5em;
    *padding-right: 1em;
    /* no CSS arrows for IE7 (lack pseudo-elements) */ }
  /* styling for both css and generated arrows */
  .sf-arrows .sf-with-ul:after {
    font-family: 'fontello';
    content: '\e82e';
    position: absolute;
    right: 1.44em;
    height: 0;
    width: 0;
    font-size: 20px; }
  /*top menu level*/
  .sf-arrows .sfHover > a, .sf-arrows .sfHover > a:hover {
    color: #ffffff;
    background-color: #323232; } }

@media (max-width: 400px) {
  .sf-menu {
    top: 15px;
    left: 15px;
    bottom: 15px;
    right: 15px;
    padding: 15px 5px; } }

/*
**blog
*/
article.post iframe {
  margin-bottom: -8px; }

h1.entry-title {
  font-size: 50px;
  margin-bottom: 5px; }

h2.entry-title {
  font-size: 50px;
  margin-bottom: 0;
  line-height: 0.9; }

h3.entry-title {
  margin-bottom: 4px; }

article.post + article.post {
  margin-top: 50px; }

article.post.isotope-item {
  margin: 0 0 30px !important; }

.entry-title {
  margin-top: 0; }

.entry-header {
  font-weight: 400; }

.entry-meta {
  margin: 4px 0 17px 0; }
  .entry-meta span + span {
    margin-left: 14px; }
  .entry-meta i {
    font-size: 14px;
    margin-right: 5px; }

.entry-tags {
  padding: 21px 0 0;
  margin: 27px 0 14px;
  border-top: 1px solid rgba(0, 0, 0, 0.1); }
  .entry-tags span + span {
    margin-left: 14px; }
  .entry-tags i {
    font-size: 14px;
    margin-right: 5px; }

.entry-meta:before, .entry-meta:after, .comment-meta:before, .comment-meta:after {
  display: block;
  clear: both;
  content: '';
  width: 0;
  height: 0; }

.entry-thumbnail {
  text-align: center;
  position: relative; }

.entry-thumbnail img {
  background-color: #ffffff; }

.entry-thumbnail[class*='col-'] {
  margin-bottom: 0; }

/* additional meta in corner of thumbnail */
.entry-meta-corner {
  position: absolute;
  z-index: 2;
  text-align: center;
  color: #ffffff;
  background-color: #6d81b4; }
  .entry-meta-corner a {
    color: #ffffff; }
  .entry-meta-corner .date {
    color: #ffffff;
    display: block;
    padding-bottom: 8px; }
    .entry-meta-corner .date strong {
      color: #323232;
      display: block;
      font-size: 40px;
      padding: 14px 17px 0; }
  .entry-meta-corner .comments-link {
    display: block;
    padding: 4px 0;
    background-color: #6d81b4; }
    .entry-meta-corner .comments-link i {
      font-size: 14px; }

.post-content {
  border: 1px solid rgba(0, 0, 0, 0.1);
  border-top: none;
  padding: 35px 44px 20px; }
  .post-content .theme_button {
    margin: 18px 0 10px; }

@media (max-width: 600px) {
  .post-content {
    padding-left: 20px;
    padding-right: 20px; } }

.entry-excerpt {
  color: #323232;
  font-weight: 300;
  font-size: 24px;
  margin: 24px 0 24px; }
  .entry-excerpt p {
    margin-bottom: 16px !important; }

.st_facebook_hcount, .st_twitter_hcount, .st_googleplus_hcount {
  position: relative;
  text-align: right; }

.st_facebook_hcount span, .st_twitter_hcount span, .st_googleplus_hcount span {
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  -ms-box-sizing: content-box;
  box-sizing: content-box; }

.author-meta h2 {
  margin: 0 0 2px; }
.author-meta .author-place {
  margin: -3px 0 7px;
  font-size: 14px; }

/* gallery single */
.gallery-items-nav {
  margin-top: 60px; }
  .gallery-items-nav h4 {
    margin: -5px 0 0; }
  .gallery-items-nav .media {
    position: relative;
    padding: 10px 0; }
  .gallery-items-nav .next-item img {
    max-width: none;
    padding: 0 30px 0 0; }
  .gallery-items-nav .next-item i {
    right: -10px; }
  .gallery-items-nav .prev-item img {
    max-width: none;
    padding: 0 0 0 30px; }
  .gallery-items-nav .prev-item i {
    left: -10px; }
  .gallery-items-nav a {
    position: relative; }
    .gallery-items-nav a i {
      position: absolute;
      top: 50%;
      margin-top: -14px;
      font-size: 23px; }

/* common side item */
.side-item {
  border: 1px solid #e5e5e5; }

.item-content {
  margin: 34px 40px; }

.item-media {
  margin: -1px 0 0 -1px; }

@media (min-width: 992px) {
  .item-content.left {
    margin-right: 10px; }
  .item-content.right {
    margin-left: 10px; } }

@media (max-width: 767px) {
  .entry-title {
    font-size: 28px !important; } }

/* events */
.event-item {
  margin-bottom: 30px; }
  .event-item h2 {
    font-size: 28px;
    font-weight: 300; }

/*comments*/
.comments-area {
  margin-top: 76px; }
  .comments-area h2 {
    margin-bottom: 28px;
    font-size: 30px;
    font-size: 40px;
    font-weight: 700; }
  .comments-area li {
    list-style: none;
    padding-top: 15px; }

.comments-area .media-object {
  max-width: 50px;
  border-radius: 50%; }

.comment-list {
  margin: 0;
  padding: 0;
  position: relative; }
  .comment-list ol {
    padding-left: 30px; }

@media (min-width: 992px) {
  .comment-list ol {
    padding-left: 70px; } }

@media (min-width: 768px) {
  .entry-thumbnail.col-sm-5 {
    padding-right: 0; } }

.comments-area .media-body {
  padding: 0 0 8px 0;
  margin-bottom: 7px; }

.comment-meta {
  line-height: 1;
  margin-bottom: 0;
  padding-bottom: 10px; }
  .comment-meta .comment-date {
    display: block;
    margin-top: 4px; }
  .comment-meta .author_url {
    color: #323232;
    font-weight: 700; }

.reply {
  float: right; }
  .reply i {
    font-size: 14px; }

.comment-respond {
  margin-top: 42px; }
  .comment-respond h3 {
    font-size: 40px;
    margin: 0 0 35px; }
  .comment-respond p {
    margin-bottom: 10px;
    position: relative; }

/*
**shop
*/
/* sort panel */
.storefront-sorting {
  line-height: 1; }

#toggle_shop_view {
  margin-left: 14px; }

#toggle_shop_view:before, #toggle_shop_view:after {
  font-family: 'FontAwesome';
  display: inline-block;
  background-color: #323232;
  color: #ffffff;
  padding: 17px 16px 18px;
  font-size: 14px;
  -webkit-transition: all 0.2s ease-in-out 0s;
  -moz-transition: all 0.2s ease-in-out 0s;
  -o-transition: all 0.2s ease-in-out 0s;
  -ms-transition: all 0.2s ease-in-out 0s;
  transition: all 0.2s ease-in-out 0s; }

#toggle_shop_view:before {
  content: "\f00a";
  margin-right: 5px; }

#toggle_shop_view:after {
  content: "\f03a";
  background-color: #6d81b4; }

#toggle_shop_view.grid-view:before {
  background-color: #6d81b4; }

#toggle_shop_view.grid-view:after {
  background-color: #323232; }

#sort_view {
  color: #323232;
  display: inline-block;
  padding: 16px 14px 17px;
  font-size: 14px;
  border: 1px solid rgba(0, 0, 0, 0.1); }

.columns-1 .product {
  width: 100%;
  margin-right: 0;
  float: none; }

@media (min-width: 768px) {
  .columns-2 .product {
    width: 50%;
    float: left; }
  .columns-3 .product {
    width: 33.33333%;
    float: left; }
  .columns-4 .product {
    width: 25%;
    float: left; } }

.products {
  margin-left: -15px;
  margin-right: -15px; }
  .products:before, .products:after {
    content: '';
    clear: both;
    display: block; }

.product {
  margin-bottom: 30px;
  padding-left: 15px;
  padding-right: 15px; }
  .owl-item .product {
    padding: 0; }
  .product h3 {
    font-weight: 300;
    font-size: 28px;
    margin: 20px 140px 12px 0; }
  .product .theme_button {
    margin: 4px 0 11px;
    padding-right: 25px;
    padding-left: 25px; }
  .product [class*="col-"]:first-child a span {
    position: absolute;
    background-color: #6d81b4;
    color: #ffffff;
    padding: 0 10px;
    text-transform: uppercase;
    font-size: 14px;
    top: 10px;
    right: 25px; }
    .product [class*="col-"]:first-child a span.onsale {
      background-color: #6d81b4;
      left: 25px;
      right: auto; }

.star-rating {
  overflow: hidden;
  position: relative;
  height: 1em;
  line-height: 1em;
  font-size: 11px;
  width: 5.1em;
  font-family: "fontawesome";
  margin-bottom: 4px; }
  .star-rating:before, .star-rating span:before {
    content: "\f005\f005\f005\f005\f005";
    float: left;
    top: 0;
    left: 0;
    position: absolute;
    letter-spacing: 0.1em;
    letter-spacing: 0\9;
    color: #e5e5e5; }
  .star-rating span {
    overflow: hidden;
    float: left;
    top: 0;
    left: 0;
    position: absolute;
    padding-top: 1.5em; }
    .star-rating span:before {
      color: #fa5c5d; }

.price {
  position: absolute;
  right: 50px;
  top: 36px;
  font-weight: 700;
  color: #323232;
  font-size: 28px; }
  .price del {
    color: #b2b2b2;
    font-size: 16px;
    font-weight: normal; }
  .price ins {
    text-decoration: none; }

.grid-view {
  text-align: center; }
  .grid-view .product [class*="col-"]:last-child {
    padding: 18px 40px 18px 36px;
    margin-top: 0 !important; }
  .grid-view h3 {
    font-size: inherit;
    color: inherit;
    font-weight: 400;
    margin: 10px 0 14px;
    position: relative;
    letter-spacing: 0; }
    .grid-view h3:before, .grid-view h3:after {
      content: '';
      height: 1px;
      width: 23%;
      position: absolute;
      background-color: rgba(0, 0, 0, 0.1);
      bottom: -20px;
      right: 14%; }
    .grid-view h3:before {
      right: auto;
      left: 14%; }
  .grid-view .star-rating {
    margin: auto; }
  .grid-view .price {
    position: static;
    display: block;
    margin: 8px 0 22px; }
  .grid-view .product-description {
    display: none; }
  .grid-view [class*="col-"] {
    width: 100%;
    float: none; }

.list-view .product {
  float: none;
  width: 100%; }
  .list-view .product [class*="col-"]:last-child {
    padding: 18px 40px 18px 36px;
    margin-top: 0 !important; }

</style>
</html>