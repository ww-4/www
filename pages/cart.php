<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <?php
    require_once "../functions/functions.php";
    ?>
	<link rel="stylesheet" href="../css/main.css" type="text/css"> 
    <meta charset="utf-8">
    <title>KROSRV</title>
</head>
<body>
        <!-- Шапка -->
    <header>
        <div class="container_header">
            <nav class="header1">
                <div class="img_logo">
                    <a href="../index.html"><img src="../images/logonew.png" class="logo" alt="not found"></a>
                </div>
                
                <div class="def1">
                <ul>
                    <li><a href="../index.html">MAIN</a></li>
                    <li><a href="#sub">SUBSCRIBE</a></li>
                    <li><a href="../pages/Information.html">INFORMATION</a></li>
                    
                    <li><a href="../pages/contacts.html">CONTACTS</a></li>
                    <li><a href="../pages/cart.php"> <img src="../images/cart.png" class="cart">CART</a></li>
                </ul>
                    </div>
            </nav>
        </div>
        <!-- Бегущая строка -->
        <nav>
            <div class="marquee-container">
                <p class="marquee"> </p>
            </div>
        </nav>
        <!-- / Бегущая строка -->
        <div class="def">
            <ul>
                <li><a href="../pages/collection1.php" >COLLECTION K22</a></li>
                <li><a href="../pages/collection2.php" >COLLECTION LY34</a></li>
                <li><a href="../pages/collection3.php" >COLLECTION WX5</a></li>
                <li><a href="../pages/sale.php" >SALE</a></li>
            
        
            </ul>
        </div>
    </header>
        <!-- / Шапка -->
      <main>
        <div class="container_cart">
            <h1>Моя корзина</h1>
            
    <?php
    if (empty($catalog4)) {
        echo "<div class=\"next\"> <H2>Корзина в данный момент не работает. <br>
        Для связи MILLIONWARE@MIAL.RU Код ошибки 404</h2>";
        echo "</div>";
    } else {
    if (!empty($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $itemId => $quantity) {
            $result = $mysqli->query("SELECT * FROM catalog WHERE id = $itemId");
            $item = $result->fetch_assoc();
            echo "<div class='cart-item'>";
            echo "<img src='../images/collection/".$item['id'].".jpg' >";
            echo "<p>".$item['text']."</p>";
            echo "<span>".$item['price']."₽</span>";
            echo "<a href='cart.php?action=remove&id=".$item['id']."'>Удалить</a>";
            echo "</div>";
        }
    } else {
        echo "Корзина пуста";
    }
}
    ?>
<h3><a href="../pages/collection1.php" class="container_cart">Продолжить покупки</a><h3>
</div>
    

        
      </main>
        <!-- Нижняя часть-->
        <footer>
          <div class="container_social">
              <a id="sub"></a>
              <div>
                  <h2>WELCOME TO OUR WORLD.</h2>
                  <div>
                      <div class="social_links">
                          <h1>SOCIAL LINKS</h1>
                          
                          <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstley"><img src="../images/instagramWhite.png"  alt="not found"></a>
                          <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstley"><img src="../images/telegramWhite.png" alt="not found"></a>
                          
                      </div>
                  </div>
                      <p>
                      Подпишись на обновления
                      </p>
                  <div class="form_mail">
                      <form id="form_id" method="post" action="#" onsubmit="javascript:return validate('form_id','email');">
                          <input type="text" id="email" placeholder="YOUR E-MAIL" name="email" />
                          <input type="submit" value="Submit" />
                       </form>
                          <p>
                              Нажимая на кнопку, вы даете согласие на обработку персональных данных и соглашаетесь c политикой конфиденциальности.
                          </p>
                  </div>
                  <p>
                      
                  </p>
              </div>
          </div>
          <div class="container_footer">
              <div class="footer_ul">
                  <H1>PRODUCT PAGE</H1>
                  <ul>
                      
                      <li><a href="../index.html">Main</a></li>
                      <li><a href="../pages/contacts.html">Adress</a></li>
                      <li><a href="../pages/support.html">Support</a></li>
                  </ul>
              </div>
          </div>
          
      </footer>
          <!-- / Нижняя часть-->
      <script src="https://www.w3schools.com/lib/w3.js"></script>
      <script src="js/form_mail.js"></script>
  </body>
  </html>