@extends('admin.default.layouts.baseCont')
@section('add_css')
    <style>
        .fontawesome-icon-list .fa-hover a {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            display: block;
            color: #222222;
            line-height: 40px;
            height: 40px;
            padding: 0;
            border-radius: 4px;
        }

        .fontawesome-icon-list .fa-hover a i {
            font-size: 20px;
            color: #858796 !important;
        }
        .fontawesome-icon-list .bg-primary a i{
            color:#fff !important;;
        }
    </style>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row fontawesome-icon-list bigicon">
            <div class="fa-hover  col-auto">
                <a
                        data-tips="tooltip"  data-placement="top" title=""
                        data-content="fa-american-sign-language-interpreting" class="fancybox fancybox.ajax"
                        data-original-title="">
                    <i class="fa fa-american-sign-language-interpreting"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a
                        data-tips="tooltip"  data-placement="top" title=""
                        data-content="fa-assistive-listening-systems" class="fancybox fancybox.ajax"
                        data-original-title="">
                    <i class="fa fa-assistive-listening-systems"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"
                    data-placement="top" title="fa-audio-description"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-audio-description"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip" 
                   data-placement="top" title="fa-blind" class="fancybox fancybox.ajax"
                   data-original-title="">
                    <i class="fa fa-blind"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"
                    data-placement="top" title="fa-braille"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-braille"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip" 
                   data-placement="top" title="fa-deaf" class="fancybox fancybox.ajax"
                   data-original-title="">
                    <i class="fa fa-deaf"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"
                    data-placement="top" title="fa-deaf"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-deaf"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"
                    data-placement="top" title="fa-envira"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-envira"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"
                    data-placement="top" title="fa-first-order"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-first-order"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"
                    data-placement="top" title="fa-font-awesome"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-font-awesome"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"
                    data-placement="top" title="fa-gitlab"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-gitlab"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip" 
                   data-placement="top" title="fa-glide" class="fancybox fancybox.ajax"
                   data-original-title="">
                    <i class="fa fa-glide"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"
                    data-placement="top" title="fa-glide-g"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-glide-g"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"
                    data-placement="top" title="fa-google-plus-official"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-google-plus-official"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"
                    data-placement="top" title="fa-google-plus-official"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-google-plus-official"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"
                    data-placement="top" title="fa-instagram"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-instagram"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"
                    data-placement="top" title="fa-low-vision"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-low-vision"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"
                    data-placement="top" title="fa-pied-piper"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-pied-piper"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"
                    data-placement="top" title="fa-question-circle-o"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-question-circle-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"
                    data-placement="top" title="fa-sign-language"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-sign-language"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"
                    data-placement="top" title="fa-snapchat"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-snapchat"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"
                    data-placement="top" title="fa-snapchat-ghost"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-snapchat-ghost"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"
                    data-placement="top" title="fa-snapchat-square"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-snapchat-square"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"
                    data-placement="top" title="fa-themeisle"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-themeisle"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"
                    data-placement="top" title="fa-universal-access"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-universal-access"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"
                    data-placement="top" title="fa-viadeo"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-viadeo"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"
                    data-placement="top" title="fa-viadeo-square"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-viadeo-square"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"
                    data-placement="top" title="fa-volume-control-phone"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-volume-control-phone"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"
                    data-placement="top" title="fa-wheelchair-alt"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-wheelchair-alt"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"
                    data-placement="top" title="fa-wpbeginner"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-wpbeginner"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"
                    data-placement="top" title="fa-wpforms"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-wpforms"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip" 
                   data-placement="top" title="fa-yoast" class="fancybox fancybox.ajax"
                   data-original-title="">
                    <i class="fa fa-yoast"></i>
                </a>
            </div>
        </div>
        <div class="row fontawesome-icon-list bigicon">
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"
                    data-placement="top" title="fa-ambulance"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-ambulance"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"
                    data-placement="top" title="fa-h-square"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-h-square"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip" 
                   data-placement="top" title="fa-heart" class="fancybox fancybox.ajax"
                   data-original-title="">
                    <i class="fa fa-heart"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"
                    data-placement="top" title="fa-heart-o"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-heart-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"
                    data-placement="top" title="fa-heartbeat"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-heartbeat"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"
                    data-placement="top" title="fa-hospital-o"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-hospital-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"
                    data-placement="top" title="fa-medkit"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-medkit"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"
                    data-placement="top" title="fa-plus-square"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-plus-square"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"
                    data-placement="top" title="fa-stethoscope"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-stethoscope"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"
                    data-placement="top" title="fa-user-md"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-user-md"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"
                    data-placement="top" title="fa-wheelchair"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-wheelchair"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"
                    data-placement="top" title="fa-wheelchair-alt"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-wheelchair-alt"></i>
                </a>
            </div>
        </div>
        <div class="row fontawesome-icon-list bigicon">
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-ambulance"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-ambulance"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-automobile"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-automobile"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-bicycle"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-bicycle"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-bus"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-bus"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-cab"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-cab"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-car"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-car"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-fighter-jet" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-fighter-jet"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-motorcycle"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-motorcycle"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-plane"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-plane"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-rocket"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-rocket"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-ship"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-ship"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-space-shuttle" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-space-shuttle"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-subway"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-subway"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-taxi"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-taxi"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-train"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-train"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-truck"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-truck"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-wheelchair"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-wheelchair"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-wheelchair-alt" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-wheelchair-alt"></i>
                </a>
            </div>
        </div>
        <div class="row fontawesome-icon-list bigicon">
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-address-book" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-address-book"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-address-book-o" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-address-book-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-address-card" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-address-card"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-address-card-o" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-address-card-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-adjust"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-adjust"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-american-sign-language-interpreting" class="fancybox fancybox.ajax"
                   data-original-title="">
                    <i class="fa fa-american-sign-language-interpreting"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-anchor"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-anchor"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-archive"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-archive"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-area-chart"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-area-chart"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-arrows"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-arrows"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-arrows-h"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-arrows-h"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-arrows-v"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-arrows-v"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-assistive-listening-systems" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-assistive-listening-systems"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-asterisk"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-asterisk"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-at"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-at"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-audio-description" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-audio-description"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-automobile"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-automobile"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-balance-scale" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-balance-scale"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-ban"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-ban"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-bank"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-bank"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-bar-chart"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-bar-chart"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-bar-chart-o" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-bar-chart-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-barcode"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-barcode"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-bars"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-bath"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-bath"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-battery-0"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-battery-0"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-battery-1"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-battery-1"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-battery-2"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-battery-2"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-battery-3"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-battery-3"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-battery-4"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-battery-4"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-battery-empty" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-battery-empty"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-battery-full" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-battery-full"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-battery-half" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-battery-half"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-battery-quarter" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-battery-quarter"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-battery-three-quarters" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-battery-three-quarters"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-bed"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-bed"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-beer"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-beer"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-bell"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-bell"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-bell-o"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-bell-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-bell-slash"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-bell-slash"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-bell-slash-o" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-bell-slash-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-bicycle"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-bicycle"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-binoculars"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-binoculars"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-birthday-cake" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-birthday-cake"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-blind"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-blind"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-bluetooth"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-bluetooth"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-bluetooth-b" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-bluetooth-b"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-bolt"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-bolt"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-bomb"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-bomb"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-book"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-book"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-bookmark"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-bookmark"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-bookmark-o"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-bookmark-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-braille"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-braille"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-briefcase"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-briefcase"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-bug"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-bug"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-building"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-building"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-building-o"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-building-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-bullhorn"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-bullhorn"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-bullseye"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-bullseye"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-bus"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-bus"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-cab"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-cab"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-calculator"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-calculator"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-calendar"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-calendar"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-calendar-check-o" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-calendar-check-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-calendar-minus-o" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-calendar-minus-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-calendar-o"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-calendar-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-calendar-plus-o" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-calendar-plus-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-calendar-times-o" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-calendar-times-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-camera"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-camera"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-camera-retro" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-camera-retro"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-car"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-car"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-caret-square-o-down" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-caret-square-o-down"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-caret-square-o-left" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-caret-square-o-left"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-caret-square-o-right" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-caret-square-o-right"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-caret-square-o-up" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-caret-square-o-up"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-cart-arrow-down" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-cart-arrow-down"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-cart-plus"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-cart-plus"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-cc"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-cc"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-certificate" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-certificate"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-check"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-check"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-check-circle" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-check-circle"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-check-circle-o" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-check-circle-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-check-square" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-check-square"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-check-square-o" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-check-square-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-child"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-child"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-circle"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-circle"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-circle-o"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-circle-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-circle-o-notch" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-circle-o-notch"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-circle-thin" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-circle-thin"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-clock-o"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-clock-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-clone"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-clone"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-close"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-close"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-cloud"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-cloud"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-cloud-download" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-cloud-download"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-cloud-upload" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-cloud-upload"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-code"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-code"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-code-fork"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-code-fork"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-coffee"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-coffee"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-cog"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-cog"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-cogs"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-cogs"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-comment"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-comment"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-comment-o"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-comment-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-commenting"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-commenting"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-commenting-o" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-commenting-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-comments"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-comments"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-comments-o"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-comments-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-compass"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-compass"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-copyright"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-copyright"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-creative-commons" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-creative-commons"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-credit-card" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-credit-card"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-crop"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-crop"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-crosshairs"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-crosshairs"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-cube"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-cube"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-cubes"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-cubes"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-cutlery"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-cutlery"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-dashboard"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-dashboard"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-database"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-database"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-deaf"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-deaf"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-deaf"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-deaf"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-desktop"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-desktop"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-diamond"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-diamond"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-dot-circle-o" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-dot-circle-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-download"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-download"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-edit"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-edit"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-ellipsis-h"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-ellipsis-h"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-ellipsis-v"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-ellipsis-v"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-envelope"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-envelope"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-envelope-o"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-envelope-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-envelope-open" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-envelope-open"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-envelope-open-o" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-envelope-open-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-envelope-square" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-envelope-square"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-eraser"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-eraser"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-exchange"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-exchange"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-exclamation" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-exclamation"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-exclamation-circle" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-exclamation-circle"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-exclamation-triangle" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-exclamation-triangle"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-external-link" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-external-link"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-external-link-square" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-external-link-square"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-eye"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-eye"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-eye-slash"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-eye-slash"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-eyedropper"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-eyedropper"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-fax"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-fax"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-feed"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-feed"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-female"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-female"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-fighter-jet" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-fighter-jet"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-file-archive-o" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-file-archive-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-file-audio-o" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-file-audio-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-file-code-o" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-file-code-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-file-excel-o" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-file-excel-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-file-image-o" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-file-image-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-file-movie-o" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-file-movie-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-file-pdf-o"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-file-pdf-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-file-photo-o" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-file-photo-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-file-picture-o" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-file-picture-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-file-powerpoint-o" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-file-powerpoint-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-file-sound-o" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-file-sound-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-file-video-o" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-file-video-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-file-word-o" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-file-word-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-file-zip-o"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-file-zip-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-film"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-film"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-filter"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-filter"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-fire"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-fire"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-fire-extinguisher" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-fire-extinguisher"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-flag"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-flag"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-flag-checkered" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-flag-checkered"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-flag-o"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-flag-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-flash"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-flash"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-flask"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-flask"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-folder"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-folder"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-folder-o"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-folder-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-folder-open" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-folder-open"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-folder-open-o" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-folder-open-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-frown-o"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-frown-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-futbol-o"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-futbol-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-gamepad"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-gamepad"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-gavel"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-gavel"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-gear"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-gear"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-gears"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-gears"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-gift"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-gift"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-glass"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-glass"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-globe"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-globe"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-graduation-cap" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-graduation-cap"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-group"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-group"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-hand-grab-o" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-hand-grab-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-hand-lizard-o" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-hand-lizard-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-hand-paper-o" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-hand-paper-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-hand-peace-o" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-hand-peace-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-hand-pointer-o" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-hand-pointer-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-hand-rock-o" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-hand-rock-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-hand-scissors-o" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-hand-scissors-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-hand-spock-o" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-hand-spock-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-hand-stop-o" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-hand-stop-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-handshake-o" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-handshake-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-hdd-o"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-hdd-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-headphones"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-headphones"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-heart"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-heart"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-heart-o"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-heart-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-heartbeat"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-heartbeat"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-history"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-history"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-home"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-home"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-hotel"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-hotel"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-hourglass"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-hourglass"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-hourglass-1" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-hourglass-1"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-hourglass-2" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-hourglass-2"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-hourglass-3" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-hourglass-3"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-hourglass-end" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-hourglass-end"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-hourglass-half" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-hourglass-half"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-hourglass-o" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-hourglass-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-hourglass-start" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-hourglass-start"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-i-cursor"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-i-cursor"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-id-badge"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-id-badge"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-id-card"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-id-card"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-id-card-o"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-id-card-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-image"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-image"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-inbox"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-inbox"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-industry"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-industry"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-info"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-info"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-info-circle" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-info-circle"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-institution" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-institution"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-key"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-key"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-keyboard-o"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-keyboard-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-language"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-language"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-laptop"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-laptop"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-leaf"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-leaf"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-legal"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-legal"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-lemon-o"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-lemon-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-level-down"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-level-down"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-level-up"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-level-up"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-life-bouy"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-life-bouy"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-life-buoy"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-life-buoy"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-life-ring"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-life-ring"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-life-saver"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-life-saver"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-lightbulb-o" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-lightbulb-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-line-chart"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-line-chart"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-location-arrow" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-location-arrow"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-lock"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-lock"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-low-vision"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-low-vision"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-magic"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-magic"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-magnet"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-magnet"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-mail-forward" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-mail-forward"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-mail-reply"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-mail-reply"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-mail-reply-all" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-mail-reply-all"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-male"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-male"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-map"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-map"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-map-marker"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-map-marker"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-map-o"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-map-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-map-pin"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-map-pin"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-map-signs"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-map-signs"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-meetup"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-meetup"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-meh-o"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-meh-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-microchip"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-microchip"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-microphone"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-microphone"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-microphone-slash" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-microphone-slash"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-minus"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-minus"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-minus-circle" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-minus-circle"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-minus-square" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-minus-square"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-minus-square-o" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-minus-square-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-mobile"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-mobile"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-mobile-phone" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-mobile-phone"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-money"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-money"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-moon-o"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-moon-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-mortar-board" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-mortar-board"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-motorcycle"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-motorcycle"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-mouse-pointer" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-mouse-pointer"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-music"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-music"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-navicon"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-navicon"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-newspaper-o" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-newspaper-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-object-group" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-object-group"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-object-ungroup" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-object-ungroup"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-paint-brush" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-paint-brush"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-paper-plane" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-paper-plane"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-paper-plane-o" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-paper-plane-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-paw"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-paw"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-pencil"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-pencil"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-pencil-square" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-pencil-square"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-pencil-square-o" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-pencil-square-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-percent"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-percent"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-phone"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-phone"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-phone-square" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-phone-square"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-photo"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-photo"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-picture-o"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-picture-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-pie-chart"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-pie-chart"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-plane"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-plane"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-plug"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-plug"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-plus"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-plus"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-plus-circle" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-plus-circle"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-plus-square" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-plus-square"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-plus-square-o" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-plus-square-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-podcast"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-podcast"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-power-off"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-power-off"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-print"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-print"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-puzzle-piece" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-puzzle-piece"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-qrcode"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-qrcode"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-question"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-question"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-question-circle" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-question-circle"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-question-circle-o" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-question-circle-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-quote-left"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-quote-left"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-quote-right" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-quote-right"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-random"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-random"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-recycle"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-recycle"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-refresh"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-refresh"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-registered"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-registered"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-remove"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-remove"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-reorder"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-reorder"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-reply"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-reply"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-reply-all"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-reply-all"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-retweet"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-retweet"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-road"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-road"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-rocket"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-rocket"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-rss"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-rss"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-rss-square"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-rss-square"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-search"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-search"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-search-minus" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-search-minus"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-search-plus" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-search-plus"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-send"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-send"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-send-o"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-send-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-server"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-server"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-share"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-share"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-share-alt"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-share-alt"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-share-alt-square" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-share-alt-square"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-share-square" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-share-square"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-share-square-o" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-share-square-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-shield"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-shield"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-ship"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-ship"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-shopping-bag" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-shopping-bag"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-shopping-basket" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-shopping-basket"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-shopping-cart" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-shopping-cart"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-shower"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-shower"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-sign-in"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-sign-in"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-sign-out"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-sign-out"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-signal"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-signal"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-sitemap"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-sitemap"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-sliders"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-sliders"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-smile-o"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-smile-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-snowflake-o" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-snowflake-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-soccer-ball-o" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-soccer-ball-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-sort"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-sort"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-sort-alpha-asc" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-sort-alpha-asc"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-sort-alpha-desc" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-sort-alpha-desc"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-sort-amount-asc" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-sort-amount-asc"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-sort-amount-desc" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-sort-amount-desc"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-sort-asc"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-sort-asc"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-sort-desc"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-sort-desc"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-sort-down"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-sort-down"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-sort-numeric-asc" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-sort-numeric-asc"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-sort-numeric-desc" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-sort-numeric-desc"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-sort-up"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-sort-up"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-space-shuttle" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-space-shuttle"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-spinner"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-spinner"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-spoon"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-spoon"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-square"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-square"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-square-o"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-square-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-star"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-star"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-star-half"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-star-half"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-star-half-empty" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-star-half-empty"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-star-half-full" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-star-half-full"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-star-half-o" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-star-half-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-star-o"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-star-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-sticky-note" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-sticky-note"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-sticky-note-o" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-sticky-note-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-street-view" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-street-view"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-suitcase"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-suitcase"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-sun-o"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-sun-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-support"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-support"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-tablet"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-tablet"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-tachometer"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-tachometer"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-tag"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-tag"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-tags"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-tags"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-tasks"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-tasks"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-taxi"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-taxi"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-television"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-television"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-terminal"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-terminal"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-thermometer-empty" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-thermometer-empty"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-thermometer-full" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-thermometer-full"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-thermometer-half" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-thermometer-half"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-thermometer-quarter" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-thermometer-quarter"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-thermometer-three-quarters" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-thermometer-three-quarters"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-thumb-tack"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-thumb-tack"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-thumbs-down" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-thumbs-down"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-thumbs-o-down" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-thumbs-o-down"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-thumbs-o-up" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-thumbs-o-up"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-thumbs-up"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-thumbs-up"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-ticket"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-ticket"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-times"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-times"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-times-circle" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-times-circle"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-times-circle-o" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-times-circle-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-tint"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-tint"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-toggle-down" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-toggle-down"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-toggle-left" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-toggle-left"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-toggle-off"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-toggle-off"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-toggle-on"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-toggle-on"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-toggle-right" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-toggle-right"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-toggle-up"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-toggle-up"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-trademark"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-trademark"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-trash"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-trash"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-trash-o"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-trash-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-tree"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-tree"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-trophy"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-trophy"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-truck"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-truck"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-tty"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-tty"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-tv"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-tv"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-umbrella"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-umbrella"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-universal-access" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-universal-access"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-university"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-university"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-unlock"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-unlock"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-unlock-alt"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-unlock-alt"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-unsorted"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-unsorted"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-upload"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-upload"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-user"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-user"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-user-circle" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-user-circle"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-user-circle-o" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-user-circle-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-user-o"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-user-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-user-plus"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-user-plus"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-user-secret" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-user-secret"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-user-times"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-user-times"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-users"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-users"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-video-camera" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-video-camera"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-volume-control-phone" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-volume-control-phone"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-volume-down" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-volume-down"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-volume-off"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-volume-off"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-volume-up"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-volume-up"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-warning"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-warning"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-wheelchair"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-wheelchair"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-wheelchair-alt" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-wheelchair-alt"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-wifi"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-wifi"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-window-close" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-window-close"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-window-close-o" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-window-close-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-window-maximize" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-window-maximize"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-window-minimize" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-window-minimize"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-window-restore" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-window-restore"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-wrench"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-wrench"></i>
                </a>
            </div>
        </div>
        <div class="row fontawesome-icon-list bigicon">
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-arrows-alt"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-arrows-alt"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-backward"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-backward"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-compress"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-compress"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-eject"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-eject"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-expand"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-expand"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-fast-backward" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-fast-backward"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-fast-forward" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-fast-forward"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-forward"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-forward"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-pause"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-pause"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-pause-circle" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-pause-circle"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-pause-circle-o" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-pause-circle-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-play"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-play"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-play-circle" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-play-circle"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-play-circle-o" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-play-circle-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-random"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-random"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-step-backward" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-step-backward"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-step-forward" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-step-forward"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-stop"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-stop"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-stop-circle" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-stop-circle"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-stop-circle-o" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-stop-circle-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-youtube-play" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-youtube-play"></i>
                </a>
            </div>
        </div>
        <div class="row fontawesome-icon-list bigicon">
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-arrows-alt"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-arrows-alt"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-backward"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-backward"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-compress"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-compress"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-eject"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-eject"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-expand"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-expand"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-fast-backward" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-fast-backward"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-fast-forward" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-fast-forward"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-forward"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-forward"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-pause"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-pause"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-pause-circle" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-pause-circle"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-pause-circle-o" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-pause-circle-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-play"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-play"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-play-circle" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-play-circle"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-play-circle-o" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-play-circle-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-random"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-random"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-step-backward" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-step-backward"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-step-forward" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-step-forward"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-stop"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-stop"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-stop-circle" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-stop-circle"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-stop-circle-o" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-stop-circle-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-youtube-play" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-youtube-play"></i>
                </a>
            </div>
        </div>
        <div class="row fontawesome-icon-list bigicon">
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-cc-amex"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-cc-amex"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-cc-diners-club" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-cc-diners-club"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-cc-discover" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-cc-discover"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-cc-jcb"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-cc-jcb"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-cc-mastercard" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-cc-mastercard"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-cc-paypal"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-cc-paypal"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-cc-stripe"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-cc-stripe"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-cc-visa"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-cc-visa"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-credit-card" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-credit-card"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-google-wallet" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-google-wallet"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-paypal"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-paypal"></i>
                </a>
            </div>
        </div>
        <div class="row fontawesome-icon-list bigicon">
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-area-chart"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-area-chart"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-bar-chart"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-bar-chart"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-bar-chart-o" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-bar-chart-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-line-chart"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-line-chart"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-pie-chart"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-pie-chart"></i>
                </a>
            </div>
        </div>
        <div class="row fontawesome-icon-list bigicon">
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-circle-o-notch" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-circle-o-notch"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-cog"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-cog"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-gear"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-gear"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-refresh"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-refresh"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-spinner"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-spinner"></i>
                </a>
            </div>
        </div>
        <div class="row fontawesome-icon-list bigicon">
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-bitcoin"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-bitcoin"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-btc"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-btc"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-cny"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-cny"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-credit-card-alt" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-credit-card-alt"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-dollar"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-dollar"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-eur"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-eur"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-euro"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-euro"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-gbp"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-gbp"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-gg"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-gg"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-gg-circle"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-gg-circle"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-ils"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-ils"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-inr"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-inr"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-jpy"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-jpy"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-krw"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-krw"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-money"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-money"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-rmb"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-rmb"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-rouble"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-rouble"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-rub"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-rub"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-ruble"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-ruble"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-rupee"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-rupee"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-shekel"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-shekel"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-sheqel"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-sheqel"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-try"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-try"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-turkish-lira" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-turkish-lira"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-usd"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-usd"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-won"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-won"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-yen"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-yen"></i>
                </a>
            </div>
        </div>
        <div class="row fontawesome-icon-list bigicon">
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-hand-grab-o" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-hand-grab-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-hand-lizard-o" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-hand-lizard-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-hand-o-down" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-hand-o-down"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-hand-o-left" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-hand-o-left"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-hand-o-right" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-hand-o-right"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-hand-o-up"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-hand-o-up"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-hand-paper-o" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-hand-paper-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-hand-peace-o" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-hand-peace-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-hand-pointer-o" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-hand-pointer-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-hand-rock-o" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-hand-rock-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-hand-scissors-o" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-hand-scissors-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-hand-spock-o" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-hand-spock-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-hand-stop-o" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-hand-stop-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-thumbs-down" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-thumbs-down"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-thumbs-o-down" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-thumbs-o-down"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-thumbs-o-up" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-thumbs-o-up"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-thumbs-up"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-thumbs-up"></i>
                </a>
            </div>
        </div>
        <div class="row fontawesome-icon-list bigicon">
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-genderless"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-genderless"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-intersex"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-intersex"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-mars"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-mars"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-mars-double" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-mars-double"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-mars-stroke" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-mars-stroke"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-mars-stroke-h" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-mars-stroke-h"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-mars-stroke-v" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-mars-stroke-v"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-mercury"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-mercury"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-neuter"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-neuter"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-transgender" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-transgender"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-transgender-alt" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-transgender-alt"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-venus"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-venus"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-venus-double" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-venus-double"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-venus-mars"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-venus-mars"></i>
                </a>
            </div>
        </div>
        <div class="row fontawesome-icon-list bigicon">
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-genderless"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-genderless"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-intersex"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-intersex"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-mars"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-mars"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-mars-double" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-mars-double"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-mars-stroke" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-mars-stroke"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-mars-stroke-h" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-mars-stroke-h"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-mars-stroke-v" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-mars-stroke-v"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-mercury"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-mercury"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-neuter"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-neuter"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-transgender" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-transgender"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-transgender-alt" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-transgender-alt"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-venus"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-venus"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-venus-double" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-venus-double"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-venus-mars"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-venus-mars"></i>
                </a>
            </div>
        </div>
        <div class="row fontawesome-icon-list bigicon">
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-align-center" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-align-center"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-align-justify" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-align-justify"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-align-left"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-align-left"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-align-right" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-align-right"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-bold"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-bold"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-chain"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-chain"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-chain-broken" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-chain-broken"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-clipboard"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-clipboard"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-columns"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-columns"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-copy"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-copy"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-cut"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-cut"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-dedent"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-dedent"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-eraser"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-eraser"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-file"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-file"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-file-o"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-file-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-file-text"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-file-text"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-file-text-o" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-file-text-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-files-o"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-files-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-floppy-o"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-floppy-o"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-font"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-font"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-header"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-header"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-indent"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-indent"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-italic"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-italic"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-link"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-link"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-list"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-list"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-list-alt"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-list-alt"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-list-ol"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-list-ol"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-list-ul"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-list-ul"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-outdent"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-outdent"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-paperclip"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-paperclip"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-paragraph"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-paragraph"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-paste"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-paste"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-repeat"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-repeat"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-rotate-left" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-rotate-left"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-rotate-right" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-rotate-right"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-save"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-save"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-scissors"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-scissors"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-strikethrough" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-strikethrough"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-subscript"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-subscript"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-superscript" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-superscript"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-table"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-table"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title=""
                   data-content="fa-text-height" class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-text-height"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-text-width"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-text-width"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-th"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-th"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-th-large"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-th-large"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-th-list"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-th-list"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-underline"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-underline"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-undo"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-undo"></i>
                </a>
            </div>
            <div class="fa-hover  col-auto">
                <a data-tips="tooltip"  data-placement="top" title="fa-unlink"
                   class="fancybox fancybox.ajax" data-original-title="">
                    <i class="fa fa-unlink"></i>
                </a>
            </div>
        </div>
    </div>
@endsection

@section('foot_js')
    <script>
        layui.use(['layer'], function () {



            var isMore=0
            var picIndex = 1;
            $(document).on('click', '.fa-hover', function () {

                if(isMore==1){
                    $(this).toggleClass('active');
                    $(this).find('.card').toggleClass('bg-primary ');
                    if ($(this).hasClass('active')) {
                        $(this).attr('data-index', picIndex);
                        picIndex++;
                    } else {
                        picIndex--
                    }
                }else{
                    $(".fa-hover").removeClass('bg-primary');
                    $(".fa-hover ").removeClass('active');
                    $(this).toggleClass('active');
                    $(this).toggleClass('bg-primary ');
                }

            })


        });




    </script>

@endsection