<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Office shop</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" />
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header id="header">
    <nav>
      <a href="#" class="logo">
        <img src="https://img.icons8.com/bubbles/452/office.png" class="icon_office" alt="Logo image">
      </a>

      <div class="burger">
        <span class="spn1"></span>
        <span class="spn2"></span>
        <span class="spn3"></span>
      </div>

      <div class="mobileMenu" id="mobile">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="shop.php">Shop</a></li>
          <li><a href="about.html">About us</a></li>
          <li><a href="service.html">Service</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
      </div>

      <ul class="fullSize">
        <li><a href="index.php">Home</a></li>
        <li><a href="shop.php">Shop</a></li>
        <li><a href="about.html">About us</a></li>
        <li><a href="service.html">Service</a></li>
        <li><a href="contact.html">Contact</a></li>
      </ul>
      <div>
        <?php


        if (isset($_SESSION['show']) && $_SESSION['show']) {
          echo '<i class="fa-solid fa-cart-shopping fa-2xl" style="margin: 10px; cursor: pointer;"></i>
                <a href="./logout.php" style="text-decoration: none; color: black;" title="logout">
                <i class="fa-solid fa-right-from-bracket fa-2xl" style="margin: 10px; cursor: pointer;"></i></a>';
        } else {
          echo '<a href="./login.php" style="text-decoration: none; color: black;" title="login">
        <i class="fa-regular fa-user fa-2xl" style="margin: 10px; cursor: pointer;"></i>
    </a>';
        }
        ?>
      </div>
    </nav>
  </header>
  <main class="wrapper">
    <section id="shop">
      <h2>Our Products</h2>
      <div class="products">
        <div class="product-card">
          <div class="product-image-wrapper">
            <img src="https://cdn.pixabay.com/photo/2010/12/13/10/00/attach-2092__340.jpg" alt="paper clips" class="product-img">
          </div>
          <h3 class="product-name">Paper Clips</h3>
          <h4 class="product-price">13.50</h4>
          <button class="product-add" data-action="ADD_TO_CART">Add to cart</button>
        </div>
        <div class="product-card">
          <div class="product-image-wrapper">
            <img src="https://cdn.pixabay.com/photo/2010/12/13/10/12/stapler-2479_960_720.jpg" alt="stapler" class="product-img">
          </div>
          <h3 class="product-name">Staplers</h3>
          <h4 class="product-price">20.02</h4>
          <button class="product-add" data-action="ADD_TO_CART">Add to cart</button>
        </div>
        <div class="product-card">
          <div class="product-image-wrapper">
            <img src="https://cdn.pixabay.com/photo/2012/02/22/19/31/binder-15454_960_720.jpg" alt="paper clips 2" class="product-img">
          </div>
          <h3 class="product-name">Paper clips</h3>
          <h4 class="product-price">10.00</h4>
          <button class="product-add" data-action="ADD_TO_CART">Add to cart</button>
        </div>
        <div class="product-card">
          <div class="product-image-wrapper">
            <img src="https://cdn.pixabay.com/photo/2017/01/11/01/18/the-ruler-1970655_960_720.png" alt="rulers" class="product-img">
          </div>
          <h3 class="product-name">Rulers</h3>
          <h4 class="product-price">10.00</h4>
          <button class="product-add" data-action="ADD_TO_CART">Add to cart</button>
        </div>
        <div class="product-card">
          <div class="product-image-wrapper">
            <img src="https://cdn.pixabay.com/photo/2018/01/10/17/30/scissors-3074340_960_720.jpg" alt="scissors" class="product-img">
          </div>
          <h3 class="product-name">Scissors</h3>
          <h4 class="product-price">15.00</h4>
          <button class="product-add" data-action="ADD_TO_CART">Add to cart</button>
        </div>
        <div class="product-card">
          <div class="product-image-wrapper">
            <img src="https://cdn.pixabay.com/photo/2017/09/18/10/22/consulting-2761233_960_720.png" alt="binders" class="product-img">
          </div>
          <h3 class="product-name">Binders</h3>
          <h4 class="product-price">12.00</h4>
          <button class="product-add" data-action="ADD_TO_CART">Add to cart</button>
        </div>
        <div class="product-card">
          <div class="product-image-wrapper">
            <img src="https://cdn.pixabay.com/photo/2016/03/24/16/06/binder-1277031_960_720.jpg" alt="notebooks" class="product-img">
          </div>
          <h3 class="product-name">Note books</h3>
          <h4 class="product-price">25.00</h4>
          <button class="product-add" data-action="ADD_TO_CART">Add to cart</button>
        </div>
        <div class="product-card">
          <div class="product-image-wrapper">
            <img src="https://cdn.pixabay.com/photo/2013/07/28/14/07/calculator-168360_960_720.jpg" alt="calculators" class="product-img">
          </div>
          <h3 class="product-name">Calculators</h3>
          <h4 class="product-price">40.00</h4>
          <button class="product-add" data-action="ADD_TO_CART">Add to cart</button>
        </div>
        <div class="product-card">
          <div class="product-image-wrapper">
            <img src="https://cdn.pixabay.com/photo/2013/08/03/18/43/postit-169631_960_720.jpg" alt="sticky notes" class="product-img">
          </div>
          <h3 class="product-name">Sticky notes</h3>
          <h4 class="product-price">8.00</h4>
          <button class="product-add" data-action="ADD_TO_CART">Add to cart</button>
        </div>
        <div class="product-card">
          <div class="product-image-wrapper">
            <img src="/WorkSupplyHub-OfficeShopping/images/pencil.jpeg" alt="pencil" class="product-img">
          </div>
          <h3 class="product-name">Pencil</h3>
          <h4 class="product-price">10.00</h4>
          <button class="product-add" data-action="ADD_TO_CART">Add to cart</button>
        </div>
        <div class="product-card">
          <div class="product-image-wrapper">
            <img src="/WorkSupplyHub-OfficeShopping/images/pencil case.jpeg" alt="pencil case" class="product-img">
          </div>
          <h3 class="product-name">Pencil Case</h3>
          <h4 class="product-price">20.00</h4>
          <button class="product-add" data-action="ADD_TO_CART">Add to cart</button>
        </div>
        <div class="product-card">
          <div class="product-image-wrapper">
            <img src="/WorkSupplyHub-OfficeShopping/images/pen.jpeg" alt="pen" class="product-img">
          </div>
          <h3 class="product-name">Pen</h3>
          <h4 class="product-price">10.00</h4>
          <button class="product-add" data-action="ADD_TO_CART">Add to cart</button>
        </div>
        <div class="product-card">
          <div class="product-image-wrapper">
            <img src="/WorkSupplyHub-OfficeShopping/images/highlighter.jpeg" alt="highlighter" class="product-img">
          </div>
          <h3 class="product-name">Highlighter</h3>
          <h4 class="product-price">15.00</h4>
          <button class="product-add" data-action="ADD_TO_CART">Add to cart</button>
        </div>
        <div class="product-card">
          <div class="product-image-wrapper">
            <img src="/WorkSupplyHub-OfficeShopping/images/gluestick.jpeg" alt="gluestick" class="product-img">
          </div>
          <h3 class="product-name">Glue Stick</h3>
          <h4 class="product-price">17.00</h4>
          <button class="product-add" data-action="ADD_TO_CART">Add to cart</button>
        </div>
        <div class="product-card">
          <div class="product-image-wrapper">
            <img src="/WorkSupplyHub-OfficeShopping/images/eraser.jpeg" alt="eraser" class="product-img">
          </div>
          <h3 class="product-name">Eraser</h3>
          <h4 class="product-price">5.00</h4>
          <button class="product-add" data-action="ADD_TO_CART">Add to cart</button>
        </div>
        <div class="product-card">
          <div class="product-image-wrapper">
            <img src="/WorkSupplyHub-OfficeShopping/images/clipboard.jpeg" alt="clipboard" class="product-img">
          </div>
          <h3 class="product-name">Clipboard</h3>
          <h4 class="product-price">50.00</h4>
          <button class="product-add" data-action="ADD_TO_CART">Add to cart</button>
        </div>
        <div class="product-card">
          <div class="product-image-wrapper">
            <img src="/WorkSupplyHub-OfficeShopping/images/scissor.jpeg" alt="scissor" class="product-img">
          </div>
          <h3 class="product-name">Scissor</h3>
          <h4 class="product-price">20.00</h4>
          <button class="product-add" data-action="ADD_TO_CART">Add to cart</button>
        </div>
        <div class="product-card">
          <div class="product-image-wrapper">
            <img src="/WorkSupplyHub-OfficeShopping/images/sharpener.jpg" alt="sharpener" class="product-img">
          </div>
          <h3 class="product-name">Sharpener</h3>
          <h4 class="product-price">6.00</h4>
          <button class="product-add" data-action="ADD_TO_CART">Add to cart</button>
        </div>
        <div class="product-card">
          <div class="product-image-wrapper">
            <img src="/WorkSupplyHub-OfficeShopping/images/geometry set.jpg" alt="geometry set" class="product-img">
          </div>
          <h3 class="product-name">Geometry Box</h3>
          <h4 class="product-price">95.00</h4>
          <button class="product-add" data-action="ADD_TO_CART">Add to cart</button>
        </div>
        <!-- My changes -->
        <div class="product-card">
          <div class="product-image-wrapper">
            <img src="https://cdn.pixabay.com/photo/2014/03/24/17/21/organizer-295500_640.png" alt="paper clips" class="product-img">
          </div>
          <h3 class="product-name">Notepad</h3>
          <h4 class="product-price">49.00</h4>
          <button class="product-add" data-action="ADD_TO_CART">Add to cart</button>
        </div>
        <div class="product-card">
          <div class="product-image-wrapper">
            <img src="https://cdn.pixabay.com/photo/2013/07/13/09/47/adhesive-tape-156017_1280.png" alt="paper clips" class="product-img">
          </div>
          <h3 class="product-name">Sellotape</h3>
          <h4 class="product-price">39.00</h4>
          <button class="product-add" data-action="ADD_TO_CART">Add to cart</button>
        </div>
        <div class="product-card">
          <div class="product-image-wrapper">
            <img src="https://media.istockphoto.com/id/1424596730/photo/august-2023-calendar-isolated-on-white-background-3d-illustration.webp?b=1&s=170667a&w=0&k=20&c=qpKyZHzn7VT0RUVYYvkeL9h_rLaKq1VT_NG23TfqyX4=" alt="paper clips" class="product-img">
          </div>
          <h3 class="product-name">Desk Calendar</h3>
          <h4 class="product-price">249.00</h4>
          <button class="product-add" data-action="ADD_TO_CART">Add to cart</button>
        </div>
        <div class="product-card">
          <div class="product-image-wrapper">
            <img src="https://media.istockphoto.com/id/160380266/photo/black-computer-mouse-resting-on-bright-blue-mousepad.webp?b=1&s=170667a&w=0&k=20&c=sPmZey5jeof34snlPlNsuMaMWQ50cGolfiy_1sUDYoE=" alt="paper clips" class="product-img">
          </div>
          <h3 class="product-name">Mouse Pad</h3>
          <h4 class="product-price">249.00</h4>
          <button class="product-add" data-action="ADD_TO_CART">Add to cart</button>
        </div>
        <div class="product-card">
          <div class="product-image-wrapper">
            <img src="https://images.unsplash.com/photo-1587117266184-2fbb10ccc05e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fE1hcmtlcnN8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60" alt="paper clips" class="product-img">
          </div>
          <h3 class="product-name">Markers</h3>
          <h4 class="product-price">49.00</h4>
          <button class="product-add" data-action="ADD_TO_CART">Add to cart</button>
        </div>
        <div class="product-card">
          <div class="product-image-wrapper">
            <img src="https://img.freepik.com/free-vector/row-colored-office-ring-binders_1284-71694.jpg?size=626&ext=jpg&ga=GA1.1.1445118326.1696907406&semt=ais" alt="paper clips" class="product-img">
          </div>
          <h3 class="product-name">File Folders</h3>
          <h4 class="product-price">249.00</h4>
          <button class="product-add" data-action="ADD_TO_CART">Add to cart</button>
        </div>
        <div class="product-card">
          <div class="product-image-wrapper">
            <img src="https://img.freepik.com/free-photo/levitating-music-headphones-display_23-2149817602.jpg?size=626&ext=jpg&ga=GA1.1.1445118326.1696907406&semt=sph" alt="paper clips" class="product-img">
          </div>
          <h3 class="product-name">Headphones</h3>
          <h4 class="product-price">499.00</h4>
          <button class="product-add" data-action="ADD_TO_CART">Add to cart</button>
        </div>
        <div class="product-card">
          <div class="product-image-wrapper">
            <img src="https://img.freepik.com/free-vector/black-mug-isolated_1284-42454.jpg?size=626&ext=jpg&ga=GA1.1.1445118326.1696907406&semt=ais" alt="paper clips" class="product-img">
          </div>
          <h3 class="product-name">Coffee Mug</h3>
          <h4 class="product-price">199.00</h4>
          <button class="product-add" data-action="ADD_TO_CART">Add to cart</button>
        </div>
      </div>
    </section>
    <?php

    if (isset($_SESSION['show']) && $_SESSION['show']) {
      echo '<div class="cart-container" id="basket">
      <h2 class="text-center">Cart</h2>
      <div class="cart"></div>
    </div>';
    }
    ?>
    <section class="about" id="about">
      <h2>They wrote about us...</h2>
      <img id="heart" src="https://www.freeiconspng.com/uploads/heart-png-26.png" alt="heart logo">
      <div class="content-slider">
        <div class="slider">
          <div class="mask">
            <ul>
              <li class="anim1">
                <div class="quote">Fast shipping, nice service.</div>
                <div class="source">Harshwardhan, USA</div>
              </li>
              <li class="anim2">
                <div class="quote">Hello, I just wanna say thank you for nice service.</div>
                <div class="source">Aditya, Belgium</div>
              </li>
              <li class="anim3">
                <div class="quote">Hope to see you soon, hope to work with you again!</div>
                <div class="source">Shyam, Poland</div>
              </li>
              <li class="anim4">
                <div class="quote">Best company I have ever worked with.</div>
                <div class="source">Ameya, Ukraine</div>
              </li>
              <li class="anim5">
                <div class="quote">Best regards from South Korea, It was pleasure to cooperate with you!</div>
                <div class="source">Darshan, S.Korea</div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section id="service">
      <div class="service-wrapper">
        <h2>Who we are and what do we do</h2>
        <div class="circle"></div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis adipisci necessitatibus, eum fugiat earum obcaecati autem placeat ipsa magnam iusto quia tenetur? Dolores provident esse natus libero, voluptas magnam, dolor deleniti ipsa cum blanditiis. Consectetur cumque laboriosam atque natus eos, excepturi nam a doloribus unde asperiores corporis officiis incidunt, enim sed, quia debitis provident suscipit, vero illo perspiciatis rerum deserunt repudiandae. Voluptate doloribus eos quibusdam sit itaque pariatur cumque assumenda quidem sint possimus dolorem praesentium magnam, aliquam deserunt, adipisci autem reiciendis voluptatibus nostrum error architecto placeat alias nihil ex vel suscipit. Consectetur reiciendis incidunt voluptate excepturi, qui doloremque saepe dolorum.
          <hr>
        </p>
      </div>
      <div class="service-grid">
        <div class="service-card">
          <i class="fa-solid fa-thumbs-up"></i>
          <h4>Over 200 happy customers</h4>
        </div>
        <div class="service-card">
          <i class="fa-solid fa-truck-fast"></i>
          <h4>100% safe shipping</h4>
        </div>
        <div class="service-card">
          <i class="fa-solid fa-globe"></i>
          <h4>Over 50 countries served</h4>
        </div>
        <div class="service-card">
          <i class="fa-solid fa-scale-balanced"></i>
          <h4>Over 11 years in industry</h4>
        </div>
      </div>
    </section>
  </main>
  <footer id="footer">
    <div class="column">
      <h3>Shortly about Us...</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, non sapiente at quas enim aliquid, architecto aperiam, dicta est nisi cum sed alias incidunt illum sequi praesentium. Totam, praesentium at?</p>
    </div>
    <div class="column">
      <h3><i class="fa-solid fa-house-chimney"></i>Address</h3>
      <ul>
        <li>VISHWAKARMA INSTITUTE OF TECHNOLOGY</li>
        <li>Upper Indira Nagar,</li>
        <li>Bibwewadi, Pune,</li>
        <li>India</li>
        <li>Contact: 9420205009</li>
      </ul>
    </div>
    <div class="column">
      <h3>Social media</h3>
      <ul>
        <li><a href="#"><i class="fa-brands fa-facebook-square"></i>Facebbok</a></li>
        <li><a href="#"><i class="fa-brands fa-instagram-square"></i>Instagram</a></li>
        <li><a href="#"><i class="fa-brands fa-twitter-square"></i>Twitter</a></li>
        <li><a href="#"><i class="fa-brands fa-youtube-square"></i>YouTube</a></li>
      </ul>
    </div>
    <div class="column">
      <h3>Wanna be up to date!</h3>
      <p>Join out newsletter</p>
      <input type="email" placeholder="harshwardhan.patil22@vit.edu" />
      <button>Subscribe</button>
    </div>
  </footer>
  <p class="bottomfooter">Coded with <i class="fa-solid fa-heart"></i> by Group-5</a></p>
  <script src="scripts.js"></script>
</body>

</html>
