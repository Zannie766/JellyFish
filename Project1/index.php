<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];

    $sql = "INSERT INTO users (name, email) VALUES (:name, :email)";
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);

    if ($stmt->execute()) {
        echo "Dữ liệu đã được thêm thành công!";
    } else {
        echo "Lỗi khi thêm dữ liệu.";
    }
}
?>
<!DOCTYPE html>
<html lang="eng">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
        <title>JellyFish website</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    </head>
    <body>
 <header>
    <input type="checkbox" name="" id="toggler">
  <label for="toggler" class="fas fa-bars"></label>
    <a href="#" class="logo">JellyFish<span>.</span></a>
 <nav class="navbar">
    <a href="#home">Home</a>
    <a href="#about">About</a>
    <a href="#products">Products</a>
    <a href="#review">Review</a>
    <button onclick="location.href='Adminview.html'" style="   border: none; border-radius: 5px; cursor: pointer;">
      Manager
  </button>
  

 </nav>
 <div class="icons">
  <a href="#" class="fas fa-heart"></a>
  <a href="#" class="fas fa-shopping-cart"></a>
  <a href="#" class="fas fa-user"></a>
</div>

</header>       
        
        <!--home section starts-->
 <section class="home" id="home">
    <div class="content">
     
  </div>
  
      </section>
      
      <!--home section ends-->
  
     <!--about section starts-->
     
     <section class="about" id="about">
      <h1 class="heading"><span> About </span>Us</h1>
    <div class="row">
      <div class="video-container">
  <video src="v4.mp4" loop autoplay muted ></video>
  <h3>best Teddy sellers</h3>
      </div>
      <div class="content">
          <h3>why choose us?</h3>
          <p>orem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus aliquet semper dui, vitae tincidunt dolor facilisis id. Nullam ac aliquet nulla.</p>
          <p>orem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus aliquet semper dui, vitae tincidunt dolor facilisis id. Nullam ac aliquet nulla.</p>
          <a href="#" class="btn">learn more</a>  
      </div>
    </div>
     </section>
     <!--about section ends-->
  
     <!--icons section starts-->
  <section class="icons-container">
      <div class="icon-box">
          <i class="fas fa-truck"></i>
              <p> free delivery</p>
      <p class="subtext">On All Orders</p>
          </div>
          <div class="icon-box">
              <i class="fas fa-money-bill-wave"></i>
                  <p> moneyback garantee</p>
                  <p class="subtext">10 days returns</p>
              </div>
              <div class="icon-box">
                  <i class="fas fa-gift"></i>
                      <p> offer & gifts</p>
                      <p class="subtext">on all orders</p>
                  </div>
                  <div class="icon-box">
                      <i class="fas fa-credit-card"></i>
                          <p> secure payments</p>
                          <p class="subtext">protected by paypal</p>
                      </div>
                      
      </div>
  </section>
  
  
  
     <!--icons section ends-->
  
     <!--products section starts-->
      <section class="products" id="products">
          <h1 class="heading">latest<span> products </span></h1>
          
          
          <div class="product-container">
              <div class="product-item">
                  <div class="discount">-10%</div>
                 <img src="1.jpg" alt="Jellycat Bartholomew Bear  ">
                 <div class="product-name">Jellycat Bartholomew Bear </div>
                 <div class="price">$565</div>        
                  <a href="#" class="fas fa-heart"></a>
                  <a href="#" class="cart-btn">Add To Cart</a>
                  <a href="#" class="fas fa-share"></a>
                 </div>
  
                 
                 
                  <div class="product-item">
                  <div class="discount">-15%</div>
                  <img src="2.jpg" alt="Smudge rabbit ">
                  <div class="product-name">Smudge rabbit</div>
                  <div class="price">$23.99</div>
                  <a href="#" class="fas fa-heart"></a>
                  <a href="#" class="cart-btn">Add To Cart</a>
                  <a href="#" class="fas fa-share"></a>
              </div>
  
              
              
                  <div class="product-item">
                  <div class="discount">-20%</div>
                  <img src="3.jpg" alt="Bashful Christmas Bunny ">
                  <div class="product-name">Bashful Christmas Bunny</div>
                  <div class="price">$35</div>
                  <a href="#" class="fas fa-heart"></a>
                  <a href="#" class="cart-btn">Add To Cart</a>
                  <a href="#" class="fas fa-share"></a>
              </div>
  
                   
                  <div class="product-item">
                  <div class="discount">-25%</div>
                  <img src="4.jpg" alt="Mooliet Cow ">
                  <div class="product-name">Mooliet Cow</div>
                  <div class="price">$38</div>
                  <a href="#" class="fas fa-heart"></a>
                  <a href="#" class="cart-btn">Add To Cart</a>
                  <a href="#" class="fas fa-share"></a>
              </div>


              <div class="product-item">
                <div class="discount">-28%</div>
                <img src="5.jpg" alt="Bashful Toffee Puppy ">
                <div class="product-name">Bashful Toffee Puppy</div>
                <div class="price">$40</div>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="cart-btn">Add To Cart</a>
                <a href="#" class="fas fa-share"></a>
            </div>

          
                <div class="product-item">
                <div class="discount">0%</div>
                <img src="8.png" alt="Fuddles Calf ">
                <div class="product-name">Fuddles Calf</div>
                <div class="price">$38</div>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="cart-btn">Add To Cart</a>
                <a href="#" class="fas fa-share"></a>
            </div>

            <div class="product-item">
                <div class="discount">-30%</div>
                <img src="7.jpg" alt="Timmy Turtle ">
                <div class="product-name">Timmy Turtle</div>
                <div class="price">$48</div>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="cart-btn">Add To Cart</a>
                <a href="#" class="fas fa-share"></a>
            </div>
            
            <?php include 'product.php'; ?> 
         
          
</div>
    </section>
   
   <!--products section ends-->
<!--Review section starts-->
<!--Review section starts-->
<section class="review" id="review">
    <h1 class="heading">Customer's <span>Review</span></h1>
    <div class="box-container">
      
      <div class="box">
        <div class="stars">
          <i class="fas fa-star" style="color: #e84393;"></i>
          <i class="fas fa-star" style="color: #e84393;"></i>
          <i class="fas fa-star" style="color: #e84393;"></i>
          <i class="fas fa-star" style="color: #e84393;"></i>
          <i class="fas fa-star" style="color: #e84393;"></i>
        </div>
        <p>Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Corrupti Asperiores Laboriosam Praesentium Enim Maiores? Ad Repellat Voluptates Alias Facere Repudiandae Dolor Accusamus Enim Ut Odit, Aliquam Nesciunt Eaque Nulla Dignissimos.</p>
        <div class="user">
          <img src="11.jpg" alt="">
          <div class="user-info">
            <h3>Cá rô</h3>
            <span>Legit Customer</span>
          </div>
        </div>
      </div>
  
      <div class="box">
        <div class="stars">
          <i class="fas fa-star" style="color: #e84393;"></i>
          <i class="fas fa-star" style="color: #e84393;"></i>
          <i class="fas fa-star" style="color: #e84393;"></i>
          <i class="fas fa-star" style="color: #e84393;"></i>
          <i class="fas fa-star" style="color: #e84393;"></i>
        </div>
        <p>Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Corrupti Asperiores Laboriosam Praesentium Enim Maiores? Ad Repellat Voluptates Alias Facere Repudiandae Dolor Accusamus Enim Ut Odit, Aliquam Nesciunt Eaque Nulla Dignissimos.</p>
        <div class="user">
          <img src="11a.jpg" alt="">
          <div class="user-info">
            <h3>Nước lèo vị sữa</h3>
            <span>Normal Customer</span>
          </div>
        </div>
      </div>
  
      <div class="box">
        <div class="stars">
          <i class="fas fa-star" style="color: #e84393;"></i>
          <i class="fas fa-star" style="color: #e84393;"></i>
          <i class="fas fa-star" style="color: #e84393;"></i>
          <i class="fas fa-star" style="color: #e84393;"></i>
          <i class="fas fa-star" style="color: #e84393;"></i>
        </div>
        <p>Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Corrupti Asperiores Laboriosam Praesentium Enim Maiores? Ad Repellat Voluptates Alias Facere Repudiandae Dolor Accusamus Enim Ut Odit, Aliquam Nesciunt Eaque Nulla Dignissimos.</p>
        <div class="user">
          <img src="14.jpg" alt="">
          <div class="user-info">
            <h3>Minh Hạnh</h3>
            <span>VIP Customer</span>
          </div>
        </div>
      </div>
  
    </div>
  </section>
  <!--Review section ends-->
  

<!--Review section ends-->

     <script src="script.js"></script>
     <script>
        document.addEventListener("DOMContentLoaded", function () {
          const cartButtons = document.querySelectorAll(".cart-btn");
          const cartIcon = document.querySelector(".fa-shopping-cart");
      
          // Xử lý nút "Add to Cart"
          cartButtons.forEach(btn => {
            btn.addEventListener("click", function (e) {
              e.preventDefault();
      
              const productItem = btn.closest(".product-item");
              const productName = productItem.querySelector(".product-name").innerText;
              const productPrice = productItem.querySelector(".price").innerText;
      
              let cart = JSON.parse(localStorage.getItem("cart")) || [];
              cart.push({ name: productName, price: productPrice });
              localStorage.setItem("cart", JSON.stringify(cart));
      
              // Chuyển đến trang giỏ hàng
              window.location.href = "cart.html";
            });
          });
      
          // Khi click icon giỏ hàng cũng chuyển đến cart.html
          if (cartIcon) {
            cartIcon.addEventListener("click", function (e) {
              e.preventDefault();
              window.location.href = "cart.html";
            });
          }
        });
      </script>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    if (!localStorage.getItem("currentUser")) {
      window.location.href = "register.html"; 
    }
  });
</script>

      <a href="cart.html" class="btn" style="margin-left: 10px;"></a>

      <script src="cart.js"></script>
      <script src="admin.js"></script>

     
          <script>
document.addEventListener("DOMContentLoaded", function () {
  const welcomeUser = document.getElementById("welcomeUser");
  const dropdownMenu = document.getElementById("dropdownMenu");
  const currentUser = JSON.parse(localStorage.getItem("currentUser"));

  if (currentUser) {
    welcomeUser.innerText = `Xin chào, ${currentUser.fullName}`;
  } else {
    welcomeUser.innerText = "Đăng ký";
  }

  welcomeUser.addEventListener("click", function (e) {
    e.stopPropagation();
    dropdownMenu.style.display = dropdownMenu.style.display === "block" ? "none" : "block";
  });

  document.addEventListener("click", function () {
    dropdownMenu.style.display = "none";
  });
});

function logout() {
  localStorage.removeItem("currentUser");
  alert("Đăng xuất thành công!");
  window.location.href = "index.html";
}
</script>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const welcomeUser = document.getElementById("welcomeUser");
    const dropdownMenu = document.getElementById("dropdownMenu");
    const currentUser = JSON.parse(localStorage.getItem("currentUser"));

    if (currentUser) {
      welcomeUser.innerText = `Xin chào, ${currentUser.fullName}`;
    } else {
      welcomeUser.innerText = "Đăng ký";
    }

    welcomeUser.addEventListener("click", function (e) {
      e.stopPropagation();
      dropdownMenu.style.display = dropdownMenu.style.display === "block" ? "none" : "block";
    });

    document.addEventListener("click", function () {
      dropdownMenu.style.display = "none";
    });
  });

  function logout() {
    localStorage.removeItem("currentUser");
    alert("Đăng xuất thành công!");
    window.location.href = "index.php";
  }
</script>

</body>
</html>


    </body>
</html>
    









   

            
         
                