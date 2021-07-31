<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>home page</title>
        <link rel="stylesheet" href="{{ asset('/public/css.css') }}">
    </head>
    <body>
        <div class="conteiner">

            <!--  LOGO DIV  -->
            <div class="logo">
                <h1><img src="{{ asset('/public/img1.png') }}">iDOKN.XYZ</h1>
            </div>


            <!--  NAVBER DIV  -->
            <div class="navber">
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('catogery') }}">Category</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contuct Us</a></li>
                </ul>
            </div>


            
              
            



            <!--  SEARCH DIV  -->
            <div class="search_item">
                <form class="search" action="https://google.com/m/search">
                    <input  class="x" type="text" name="q" type="text"><br>
                    <input type="hidden" name="as_sitesearch" value="site4movies.wapkiz.com">
                    
                    <input class="y" type="submit" value="FIND SONG">
                </form>
            </div>

              @yield('section')
        </div>
        <!--  FOOTER DIV  -->
        <div class="footer">
                <h3>© 2020 www.idokn.xyz</h3>
            </div>
    </body>
</html>
