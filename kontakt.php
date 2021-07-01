<?php include "partials/header.php"; ?>

<?php include "partials/single-header.php"; ?>

<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
  integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
  crossorigin="anonymous"
/>

<link
  rel="stylesheet"
  href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
  integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay"
  crossorigin="anonymous"
/>
<section class="container main ">
  <article class="contactPage">
    <div class="post">
      <div class="conAbout">
        <h3>About</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit nisi
          architecto maxime consequuntur, doloremque quia in magnam. Enim eum
          sit doloribus, culpa corrupti quasi cumque accusamus voluptatum nobis
          repellendus, ipsum impedit quo. Esse, nesciunt? Magni assumenda fugit
          tenetur voluptatum quis odit provident nihil dicta quaerat recusandae,
          incidunt vero doloremque inventore eligendi. Doloribus sint natus
          consectetur.
        </p>
      </div>

      <div class="conCon" o>
        <h3>Contact Us</h3>
        <p>
          <a href=""
            ><i class="fas fa-map-marker-alt"></i>&nbsp;Zelena ulica 34, Novi
            Sad</a
          >
        </p>
        <p>
          <a href=""><i class="fas fa-phone"></i>&nbsp;021 123 456</a>
        </p>
        <p>
          <a href=""
            ><i class="fas fa-envelope"></i>&nbsp;info@zelenaulica.com</a
          >
        </p>
      </div>

      <div class="conFom">

        <h3>Ask question</h3>
          
            <input type="text" class="form-control" placeholder="Name" />
          
            <input type="email" class="form-control" placeholder="Email" />
          
            <textarea cols="30" rows="10" class="form-control" placeholder="Input text"></textarea>
          
          <button class="btn">Posaljite poruku</button>
      
      </div>
    

      <div class="conSoc">
        <h3>Socials</h3>
        <a href=""><i class="fab fa-facebook-square"></i></a>
        <a href=""><i class="fab fa-instagram"></i></a>
        <a href=""><i class="fab fa-pinterest-square"></i></a>
      </div>
    </div>
  </article>
  <?php include "partials/sidebar.php"; ?>

  <?php include "partials/footer.php"; ?>
</section>
