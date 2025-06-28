<?php
session_start();


if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

include "base.php";
?>
<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Պատվիրել | Ֆուտբոլային Վերնաշապիկներ</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <header>
    <div class="container">
      <h1>⚽ Ֆուտբոլային Վերնաշապիկներ</h1>
      <nav>
        <ul>
          <li><a href="index.php">Գլխավոր</a></li>
          <li><a href="product.html">Ապրանքներ</a></li>
          <li><a href="order.php" class="active">Պատվիրել</a></li>
          <li><a href="about.html">Մեր մասին</a></li>
          <li><a href="cart.html">Զամբյուղ</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <section class="order-form">
    <h2>Պատվիրեք ձեր սիրելի վերնաշապիկը</h2>

    <?php
  if (isset($_POST['sub'])) {  
      $first_name = $_POST['fn'];
      $last_name = $_POST['ln'];
      $province = $_POST['pr'];
      $adr = $_POST['adr'];
      $age = $_POST['age'];
      $mail = $_POST['mail'];
      $kit_id = $_POST['kit_id'];

      $query = "INSERT INTO student (firstname, lastname, age, mail, kit_id, province, adr) 
                VALUES ('$first_name', '$last_name', '$age', '$mail', '$kit_id','$province','$adr' );";
      $result = mysqli_query($connect, $query);

      if ($result) {
          echo "<p>Պատվերը հաստատված է: Շնորհակալություն!</p>";
      } else {
          echo "<p>Պատվերի հաստատումը ձախողվեց:</p>";
      }
  }
  ?>

    <form action="order.php" method="post"> 
      <label for="name">Անուն</label>
      <input type="text" id="name" name="fn" required> 

      <label for="surname">Ազգանուն</label>
      <input type="text" id="surname" name="ln" required> 

      <label for="province">Մարզ</label>
      <input type="number" id="pr" name="pr" min="1" max="11" required> 

      <label for="name">Հասցե</label>
      <input type="text" id="adr" name="adr" required> 

      <label for="age">Տարիք</label>
      <input type="number" id="age" name="age" min="5" max="100" required>

      <label for="email">Էլ․ հասցե</label>
      <input type="email" id="email" name="mail" required> 

      <label for="shirt">Ընտրեք վերնաշապիկ</label>
      <input type="number" id="kit_id" name="kit_id" required> 
      </select>

      <button type="submit" class="btn" name="sub">Հաստատել պատվերը</button>
    </form>
  </section>

  <footer>
    <div class="container">
      <p>© 2025 Ֆուտբոլային Վերնաշապիկներ • Բոլոր իրավունքները պաշտպանված են</p>
      <p>Կապ՝ 📞 +374 77 123456 | 📧 info@footballshirts.am</p>
    </div>
  </footer>
</body>
</html>
