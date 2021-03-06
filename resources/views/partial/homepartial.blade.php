<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('homepage/style.css') }}"> />
    <script src="{{ asset('bootstrap/jquery.min.js') }}"></script>
    <script src="{{ asset('bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <link href="{{ asset('fontawesome/css/all.min.css') }}" rel="stylesheet">
    <title>@yield('title')</title>


  

    <!--My Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <style>
      body{
          font-family: 'poppins',sans-serif;
        }
  
        .navbar{
          background-color:#383950;
          font-size: 20px;
          font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
          color:white;
          
        }
  
  
        .navbar ul{
          color:white;
          
        }
  
  
        .navbar li{
          padding: 5px;
        }
        .footer {
        background: #383950;
        height: auto;
        padding-bottom: 30px;
        position: relative;
        width: 100%;
        border-bottom: 1px solid #CCCCCC;
        border-top: 1px solid #DDDDDD;
        margin-top: 250px;
    
      }
      .footer p {
          margin: 0;
      }
      .footer img {
          max-width: 100%;
      }
      .footer h3 {
          color: white;
          font-size: 18px;
          font-weight: 400;
          line-height: 27px;
          padding: 40px 0 0px;
          text-transform: uppercase;
      margin-bottom: 15px;
      }
  
      .footer h4 {
          color: white;
          font-size: 2em;
          font-weight: 600;
          line-height: 38px;
          padding: 40px 0 10px;
          font-family: cursive;
      font-weight: lighter;
      
      }
  
      .footer h6{
      color: white;
      }
  
      .footer ul {
          font-size: 13px;
          list-style-type: none;
          margin-left: 0;
          padding-left: 0;
          margin-top: 0px;
          color: #7F8C8D;
      padding: 0 0 8px 0;
      }
  
      .email{
      border-bottom: 3px solid #fff;
      }
      .footer ul li a {
          padding: 0 0 12px 0;
          display: block;
      }
      .footer a {
          color: white;
      font-weight: lighter;
      }
  
      .footer p {
          color: white;
      font-weight: lighter;
      }
  
      .footer a:hover {
          text-decoration:none;
      font-weight: bold;
      }
      .supportLi h4 {
          font-size: 20px;
          font-weight: lighter;
          line-height: normal;
          margin-bottom: 0 !important;
          padding-bottom: 0;
      }
  
      .bg-gray {
          background-image: -moz-linear-gradient(center bottom, #BBBBBB 0%, #F0F0F0 100%);
          box-shadow: 0 1px 0 #B4B3B3;
      }
  
      .footer a {
          color: #78828D
      }
  
      .footer-bottom {
          border-top: 1px solid #DDDDDD;
      }
  
      .footer-bottom p.pull-left {
          padding-top: 0px;
      font-size: 0.75em
      }
      .container-fluid{
      margin-top: 0px;
      margin-bottom: 0px;
      padding-left: 60px;
      }
  
      .form-group{
        margin-top: 70px;
      }
      .right-side-title{
        margin-top: 70px;
      }
  
      .container{
  margin-top: 100px;
  margin-bottom:100px;
  }
  
  
  
  
  
  .popular .get-started{
    background: #d9d9d9;
    font-family:'Poppins', sans-serif;
    color: #fff;
    border-radius: 40px;
    margin: 0 0px;
    padding: 10px 25px;
    width:125px;
    margin-bottom: 20px;
    margin-top: 40px;
  }
  
  .navbar{
    background-color:#383950;
    font-size: 15px;
    font-family:'Poppins', sans-serif;
    color: #fff;
    margin-bottom: 100px;
  }
  .navbar ul{
    color:white;
  }
  .navbar ul li a{
    color: #fff;
  }
  
  .jombotron.head{
    margin-top: 100px;
    margin-bottom: 100px;
  }
  .p{
    font-family: 'Poppins', sans-serif
  }
  
  .h2 {
    font-family: 'Poppins', sans-serif;
    color: blueviolet;
    padding-right: 50px;
  }
  
  section .container{
    position:relative;
    min-width: 600px;
    min-height: 300px;
    display: flex;
    z-index: 1000;
  }
  .post{
    background-color:#d3d2e7;
    margin-bottom: 100px;
    height: 600px;
  }
  
  section .container .list-image {
    position: absolute;
    left: -30px;
    top: 180px;
    width: 380px;
    height: calc(100% - 70px);
    background-color:white;
    z-index: 1;
    padding: 0px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    box-shadow: 20px 20px 20px rgba(0, 0, 0, 2);
    image-orientation: from-image;
    border-image-width: auto;
    list-style-image: radial-gradient(100);
  }
  
  .popular{
    background-color:white;
    position:absolute;
    width: 1000px;
    height: 400px;
    margin-top: 120px;
    margin-left: 130px;
    padding-left: 240px;
    flex-direction: column;
    justify-content: space-between;
    box-shadow: 20px 20px 20px rgba(0, 0, 0, 2);
    image-orientation: from-image;
    border-image-width: auto;
  }
  .popular .post-meta{
    margin-top: 30px;
    margin-bottom: 10px;
  }
  
  .cari{
    size: 5px;
    padding: -20px;
  }
  /*--------------------------------------------------------------
  # Services
  --------------------------------------------------------------*/
  .services .icon-box {
    padding: 50px 20px;
    margin-top: 35px;
    margin-bottom: 25px;
    text-align: center;
    border: 1px solid #ebe6e4;
    height: 200px;
    position: relative;
    background: #faf9f8;
  }
  
  .services .icon {
    position: absolute;
    top: -36px;
    left: calc(50% - 36px);
    transition: 0.2s;
    border-radius: 50%;
    border: 6px solid #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    text-align: center;
    width: 72px;
    height: 72px;
    background: #f03c02;
  }
  
  .services .icon i {
    color: #fff;
    font-size: 24px;
  }
  
  .services .title {
    font-weight: 700;
    margin-bottom: 15px;
    font-size: 18px;
    text-transform: uppercase;
  }
  
  .services .title a {
    color: #343a40;
  }
  
  .services .icon-box:hover .icon {
    background: #fff;
    border: 2px solid #f03c02;
  }
  
  .services .icon-box:hover .icon i {
    color: #f03c02;
  }
  
  .services .icon-box:hover .title a {
    color: #f03c02;
  }
  
  .services .description {
    line-height: 24px;
    font-size: 14px;
  }

  .cari{
    margin-top: 7px;
  }
  </style>

  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
      <div id=judul>
        <a class="navbar-brand" href="{{ url('/') }}">
          <img src="https://img.icons8.com/clouds/40/000000/smiling-sun.png"/>CaritaKita</a>
      </div>

        
        <ul class="navbar-nav ml-auto">
          <form action="/cari" method="get" class="cari" >
            <input name="pencarian" class="search" type="text" placeholder="Search..">
          </form>
        @auth
          @if (auth()->user()->penulis)
          <li>
            <a class="btn btn-info tombol2" href="{{ url('/penulis/dashboard') }}">Dasboard Penulis</a>
          </li>
          <li>
            <a class="btn btn-danger tombol2" href="/logout">Logout</a>
          </li>
            
          @else
          <li>
            <a class="btn btn-info tombol2" href="{{ url('/admin/dashboard') }}">Dasboard Admin</a>
          </li>
          <li>
            <a class="btn btn-danger tombol2" href="/logout">Logout</a>
          </li>
          @endif
        @endauth

        @guest
          <li>
            <a class="btn btn-danger tombol" href="{{ url('/daftar') }}">Daftar</a>
            <a class="btn btn-info tombol2" href="{{ url('/login') }}">Login</a>
          </li>
        @endguest
        </ul>
    </nav>

      


    @yield('content')


    <footer>
          <div class="footer" id="footer">
              <div class="container-fluid">
                  <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          <h4> CaritaKita </h4>
                          <h6> " Bukan sekedar cerita yang usai, <br> bahwasannya cerita masih berlanjut dan sedang ditulis " </h6>
                      </div>
                      <div class="col-lg-6 col-sm-5 col-xs-3">
                          <h3> Contact </h3>
                          <ul>
                              <li>
                                <img src="{{asset('gambar/icon/mail.png')}}" class="img" width="15px">
                                <span>CaritaKita@gmail.com </span>
                              </li>
                            <li>
                                <img src="{{asset('gambar/icon/phone-call (2).png')}}"  class="img" width="15px"></span>
                                <span>123-456-789-0</span>
                            </li>
                            <li>
                                <span><img src="{{asset('gambar/icon/fb.png')}}" class="img" width="15px"></span>
                                <span>CaritaKita</span>
                            </li>
                            <li>
                                <span><img src="{{asset('gambar/icon/instagram.png')}}"  class="img" width="15px"></span>
                                <span>CaritaKita</span>
                            </li>
                            <li>
                                <span><img src="{{asset('gambar/icon/twitter.png')}}" class="img" width="15px"></span>
                                <span>@CaritaKita</span>
                          </ul>
                      </div>
                    </div>
                    <div class="bottom">
                      <p>Copyright © 2020. All right reserved.</p>
                    </div>
                  </div> 
      
                </div>
              </div>
            </div>          
      </footer>


  </body>
</html>