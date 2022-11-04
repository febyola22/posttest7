<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Posstest 2 Pemrograman WEB</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar" id="navbar">
      <div class="logo"><img src="img/logo.png" alt="" width="70px" /></div>
      <input type="checkbox" id="check" />
      <div class="search">
      <form class="cari">
          <input type="text" name="search" placeholder="Search..">
        </form>
      </div>
      <ul class="nav-links">
        <input type="checkbox" id="checkbox_toggle" />
        <label for="checkbox_toggle" class="hamburger">&#9776;</label>
        <div class="menu">
          <li class="exo"><a href="#navbar">HOME</a></li>
          <li class="exo"><a href="#product">MENU</a></li>
          <li class="exo"><a href="#contact">CONTACT</a></li>
          <li class="exo"><a href="phpcrud">SIGN IN</a></li>
          <li class="exo"><a href="phpcrud"><form action="logout.php" method="post" class="tbl"><button type="submit" name="logout"
                                class="lgt">logout</button>
                        </form></a></li>
          <li><a href="#"><i class="bi-brightness-high-fill exol" id="toggleDark"></i></a></li>
        </div>
      </ul>
    </nav>

    <!-- main content -->
    <!-- iklan -->
    <div class="row">
      <div class="col-2">
        <img src="img/konten.jpg"pict1" />
      </div>
    </div>

    <!-- PRODUCT -->
    <div class="container1" id="dom1">
      <h2>GALERRY MENU</h2>
      </div>
    </div>

    <div id="product" class="container container2">
      <h2 onclick="DOM()">DESSERT</h2>
      <div class="card"  onclick="popUpBox()">
        <img src="img/gambar1.JPG" class="content" width="150px"/>
        <div class="deskrip">
          <span>RAINBOW ICE</span>
          <h4>Rp. 15.000</h5>
        </div>
      </div>
      <div class="card" onclick="popUpBox() ">
        <img src="img/gambar2.JPG" class="content" width="150px"/>
        <div class="deskrip">
          <span>CREAPE</span>
          <h4>Rp. 10.000</h5>
        </div>
      </div>
      <p></p>
      <div class="card" id="test1" id="coba1" onclick="popUpBox()">
        <img src="img/gambar3.JPG" class="content" />
        <div class="deskrip">
          <span>AFFOGATO ICE CREAM</span>
          <h4>Rp. 10.000</h5>
          </div>
        </div>
      <div class="card" id="test2" id="coba2" onclick="popUpBox()">
        <img src="img/gambar4.JPG" class="content" />
        <div class="deskrip">
          <span>DRAGON FRUIT</span>
          <h4>Rp. 25.000</h5>
        </div>
      </div>
      <div class="card" onclick="popUpBox()">
        <img src="img/gambar5.JPG" class="content" />
        <div class="deskrip">
          <span>CHOCOLATE CHEESE</span>
          <h4>Rp. 87.500</h5>
        </div>
      </div>
    </div>

    <div id="product" class="container container3">
      <h2>FOOD'S</h2>
      <div class="card" id="test3" id="coba3" onclick="popUpBox()">
        <img src="img/gambar6.JPG" class="content" />
        <div class="deskrip">
          <span>BOLGONESE SPAGHETTI</span>
          <h4>Rp. 25.000</h5>
        </div>
      </div>
      <div class="card" onclick="popUpBox()">
        <img src="img/gambar7.JPG" class="content" />
        <div class="deskrip">
          <span>KEPITING SOKA</span>
          <h4>Rp. 30.000</h5>
        </div>
      </div>
      <div class="card" onclick="popUpBox()">
        <img src="img/gambar8.JPG" class="content" />
        <div class="deskrip">
          <span>JAPANESE CHICKEN</span>
          <h4>Rp. 25.000</h5>
        </div>
      </div>
      <div class="card" onclick="popUpBox()">
        <img src="img/gambar9.JPG" class="content" />
        <div class="deskrip">
          <span>TEMIE CAPCAY</span>
          <h4>Rp. 20.000</h5>
        </div>
      </div>
      <div class="card" onclick="popUpBox()">
        <img src="img/gambar10.JPG" class="content" />
        <div class="deskrip">
          <span>CREAM SAUCE</span>
          <h4>Rp. 20.000</h5>
        </div>
      </div>
    </div>

    
  <section id="aboutme">
      <div class = "image">
         <img src="img/foto.jpg" class="newspaper">
      </div>

      <div class = "content content4">
          <h2>About Me</h2>
          <span><!-- line here --></span>
          <div class="biodata"> <p> <span >Holla!</span> <br>
            <p>Thank you for coming in Emery Cafe & Bistro. <br> 
            my name is Febyola Pappang Allo,
            and My Student ID Number is 2109106137 <br>
            I LoVe U moree <i class="fa-regular fa-heart"></i> <br> 
            From Baekhyun's wife^^ <br>
            </p></div>
      </div>
  </section><br><br>

    <!-- footer -->
    <div class="link-icons" id="contact">
      <ul class = "icons">
      <li><a href="https://www.instagram.com/fbyolaa_/">
        <i class="fa-brands fa-instagram"></i>
    </a>
    </li>
    <li><a href="https://web.whatsapp.com/">
        <i class="fa-brands fa-whatsapp"></i>
    </a>
    </li>
    <li><a href="https://github.com/febyola22">
        <i class="fa-brands fa-github"></i>
    </a>
    </li>
    </ul></div>
    <div id="footerr" class="footer">
      <p>copyright &copy;2022 <a href="#aboutme">by Fbyolaa</a>  </p>
   </div>
   <script src="script.js"></script>

  </body>
</html>