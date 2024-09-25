<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

<!-- Css Styles -->
{{--<link rel="stylesheet" href="home/css/bootstrap.min.css" type="text/css">--}}
{{--<link rel="stylesheet" href="home/css/font-awesome.min.css" type="text/css">--}}
{{--<link rel="stylesheet" href="home/css/elegant-icons.css" type="text/css">--}}
{{--<link rel="stylesheet" href="home/css/nice-select.css" type="text/css">--}}
{{--<link rel="stylesheet" href="home/css/jquery-ui.min.css" type="text/css">--}}
{{--<link rel="stylesheet" href="home/css/owl.carousel.min.css" type="text/css">--}}
{{--<link rel="stylesheet" href="home/css/slicknav.min.css" type="text/css">--}}
{{--<link rel="stylesheet" href="home/css/style.css" type="text/css">--}}



{{--{{ HTML::style('home/css/bootstrap.min.css') }}--}}
{{--{{ HTML::style('home/css/font-awesome.min.css') }}--}}
{{--{{ HTML::style('home/css/elegant-icons.css') }}--}}
{{--{{ HTML::style('home/css/nice-select.css') }}--}}
{{--{{ HTML::style('home/css/jquery-ui.min.css') }}--}}
{{--{{ HTML::style('home/css/owl.carousel.min.css') }}--}}
{{--{{ HTML::style('home/css/slicknav.min.css') }}--}}
{{--{{ HTML::style('home/css/style.css') }}--}}


<link rel="stylesheet" href="{{ asset('home/css/bootstrap.min.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('home/css/font-awesome.min.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('home/css/elegant-icons.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('home/css/nice-select.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('home/css/jquery-ui.min.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('home/css/owl.carousel.min.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('home/css/slicknav.min.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('home/css/style.css') }}" type="text/css">




<style>

    .custom-modal{
        max-width: 80%;
    }


    .clickable_link {
        display: block;
        width: 100%;
        height: 100%;
        text-decoration: none;
        color: inherit;
    }

    .featured__item {
        margin-bottom: 50px;
        background-color: white;
        box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);
        padding: 10px;

    }

    .products_section{
        margin-top: 20px;
        background-color: rgba(243,244,246,0.33);
    }

    .owl-prev{
        display: none !important;
    }

    .owl-next{
        display: none !important;
    }

    .row {
        overflow: visible;
    }

    .sticky-div{
        position: sticky;
        top: 80px;
        z-index: 10;
        padding-top: 20px
    }

    .navbar_size{
        padding-bottom: 10px;
        margin-bottom: 0;
        padding-top: 10px;
        margin-top: 0;
        box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);
        background-color: white;
        /*background-color: rgba(250,250,250,0.33);*/
    }

    .search_container{
       margin: auto;
        color: red;
        background: white;
        height: 65px;
        width: 55%;
        position: relative;
        border-radius: 10px;
        box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);
    }

    .details_text{
        border-radius: 10px !important;
        box-shadow: 0 3px 10px rgb(0 0 0 / 0.2) !important;
        display: inline-block !important;
        background-color: white !important;
        width: 30px !important;
    }

    .search_button{
        width: 100%;
        height: 65px;
        border-radius: 0 10px 10px 0;
        background-color: green;
        color: white;
        border: none;
        font-weight: bold;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0;
        padding: 0;
    }

    .search_text{
        color: black;
        border: none;
        /*font-weight: bold;*/
        display: flex;
        align-items: center;
        justify-content: start;
        margin-left: 5%;
        padding: 0;
    }

    .search_div{
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }



</style>
