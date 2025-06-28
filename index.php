<?php
session_start();
?>
<!DOCTYPE html>
<html lang="hy">
  <style>
    .user-bar {
      text-align: right;
      padding: 10px 20px;
      background-color: #f5f5f5;
      font-family: Rubik, sans-serif;
    }
    .user-bar a.logout-btn {
      background: #d9534f;
      color: white;
      padding: 5px 10px;
      border-radius: 5px;
      margin-left: 10px;
      text-decoration: none;
    }
    .user-bar a.logout-btn:hover {
      background: #c9302c;
    }
  </style>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Ֆուտբոլային Վերնաշապիկներ</title>
  <link rel="stylesheet" href="styles.css" />
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
<body>
    <header>
        <nav>
            <?php if (isset($_SESSION['username'])): ?>
                <p>Բարի գալուստ, <?= htmlspecialchars($_SESSION['username']) ?>!</p>
                <a href="logout.php">Դուրս գալ</a>
            <?php else: ?>
                <a href="login.php">Մուտք</a> | <a href="register.php">Գրանցվել</a>
            <?php endif; ?>
        </nav>
    </header>


  <header>
    <div class="container">
      <h1>⚽ Ֆուտբոլային Վերնաշապիկներ</h1>
      <nav>
        <ul>
          <li><a href="index.php">Գլխավոր</a></li>
          <li><a href="product.html">Ապրանքներ</a></li>
          <li><a href="order.php">Պատվիրել</a></li>
          <li><a href="about.html">Մեր մասին</a></li>
          <li><a href="cart.html">Զամբյուղ</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <section class="hero">
    <div class="hero-text">
      <h2>Ձեր սիրելի թիմի շապիկը՝ մատչելի գնով</h2>
      <p>Պաշտոնական և անհատական պատվերներով ֆուտբոլային վերնաշապիկներ</p>
      <a href="product.html" class="btn">Դիտել ապրանքները</a>
    </div>
  </section>

  <section class="products">
    <h2>Հիթ շապիկներ</h2>
    <div class="product-grid">
      <div class="product">
        <img src="https://th.bing.com/th/id/OIP.KFz0zJiaFVkuexnc1duLewAAAA?rs=1&pid=ImgDetMain" alt="Real Madrid Shirt">
        <h3>Real Madrid 2024</h3>
        <p>Գին: 12,000 դր.</p>
      </div>
      <div class="product">
        <img src="https://th.bing.com/th/id/OIP.eG8rtOu0Y_VbSj7ijTKsKwHaHa?w=200&h=200&c=7&r=0&o=5&cb=iwc2&dpr=1.3&pid=1.7" alt="Barcelona Shirt">
        <h3>Barcelona Home</h3>
        <p>Գին: 11,500 դր.</p>
      </div>
      <div class="product">
        <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEg9-_zAVVx6GBIFvrYdMKRalnjRkSrmdfPecbbSXtJ2QjHa6PUW4j9fOPsqr1nChUarJgjhfdsK70UDFLGq_o_YAdTJeEFEzz4bCttG_6MKgA8s0yxN_yyTbk2aBO5rN0eLBk2_wafohIvOMh1kFhSuXF5yU9lUrh11BuSvEBEQjM29IfUnsTDCgXKM_1M/s1600/arsenal-24-25-away-kit%20(3).jpg" alt="Arsenal Shirt">
        <h3>Arsenal Away</h3>
        <p>Գին: 10,000 դր.</p>
      </div>
    </div>
  </section>

  <footer>
    <div class="container">
      <p>© 2025 Ֆուտբոլային Վերնաշապիկներ • Բոլոր իրավունքները պաշտպանված են</p>
      <p>Կապ՝ 📞 +374 77 123456 | 📧 info@footballshirts.am</p>
    </div>
  </footer>
</body>
</html>
