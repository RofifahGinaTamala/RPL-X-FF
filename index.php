<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FF Rent Car</title>
    <link rel="stylesheet" href="styles.css" />
    <style>
      body {
        margin: 0;
        font-family: Arial, sans-serif;
        background-color: #f8f8f8;
      }
      header {
        background: black;
        padding: 20px;
      }
      nav {
        display: flex;
        justify-content: space-between;
        align-items: center;
        max-width: 1200px;
        margin: auto;
        color: white;
      }
      nav ul {
        list-style: none;
        display: flex;
        gap: 20px;
      }
      nav ul li {
        display: inline;
      }
      nav ul li a {
        text-decoration: none;
        color: white;
        font-weight: bold;
      }
      .hero {
        background: linear-gradient(to bottom, #000, #444);
        color: white;
        text-align: left;
        padding: 50px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        height: 400px;
      }
      .hero-text {
        max-width: 500px;
      }
      .hero-text h2 {
        font-size: 28px;
        color: gold;
      }
      .hero-image img {
        width: 150px;
        margin: 10px;
      }
    </style>
  </head>
  <body>
    <header>
      <nav>
        <h1>FA RENT CAR</h1>
        <ul>
          <li><a href="#">HOME</a></li>
          <li><a href="#">ABOUT</a></li>
          <li><a href="#">LAYANAN</a></li>
          <li><a href="#">GALLERY</a></li>
          <li><a href="#">KONTAK</a></li>
        </ul>
      </nav>
    </header>

    <section class="hero">
      <div class="hero-text">
        <p>Welcome to, <strong>FF RENT CAR</strong></p>
        <h2>Layanan sewa mobil terbaik di Makassar!</h2>
      </div>
      <div class="hero-image">
        <img src="car1.png" alt="Mobil 1" />
        <img src="car2.png" alt="Mobil 2" />
        <img src="car3.png" alt="Mobil 3" />
      </div>
    </section>
  </body>
</html>
