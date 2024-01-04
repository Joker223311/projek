

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content=" Today in this blog you will learn how to create a responsive Login & Registration Form in HTML CSS & JavaScript. The blog will cover everything from the basics of creating a Login & Registration in HTML, to styling it with CSS and adding with JavaScript." />
    <meta
      name="keywords"
      content=" 
 Animated Login & Registration Form,Form Design,HTML and CSS,HTML CSS JavaScript,login & registration form,login & signup form,Login Form Design,registration form,Signup Form,HTML,CSS,JavaScript,
"
    />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Login & Signup</title>
    <link rel="stylesheet" href="./assets/css/log.css" />
    <script src="../custom-scripts.js" defer></script>
  </head>
  <body>
    <section class="wrapper">
      <div class="form signup">
        <header>Signup</header>
        <form action="process.php" method="post">
          <input type="text" placeholder="Full name" name="fullname" required />
          <input type="text" placeholder="Email address" name="email" required />
          <input type="password" placeholder="Password" name="password" required />
          <div class="checkbox">
            <input type="checkbox" id="signupCheck" />
            <label for="signupCheck">I accept all terms & conditions</label>
          </div>
          <input type="submit" value="Signup" name="signup" />
        </form>
      </div>

      <div class="form login">
        <header>Login</header>
        <form action="process.php" method="post">
          <input type="text" placeholder="Email address" name="email" required />
          <input type="password" placeholder="Password" name="password" required />
          <input type="submit" value="Login" name="login" />
        </form>
      </div>

      <script>
        const wrapper = document.querySelector(".wrapper"),
          signupHeader = document.querySelector(".signup header"),
          loginHeader = document.querySelector(".login header");

        loginHeader.addEventListener("click", () => {
          wrapper.classList.add("active");
        });
        signupHeader.addEventListener("click", () => {
          wrapper.classList.remove("active");
        });
      </script>
    </section>
    <!-- //File process.php ini akan memproses data dari form signup dan login, dan menyimpannya atau memverifikasinya dalam database.
    Pastikan untuk membuat tabel users di database Anda dengan kolom-kolom yang sesuai, seperti id (AUTO_INCREMENT, PRIMARY KEY),
    fullname, email, dan password.
    Dengan adanya file connect.php dan process.php, Anda dapat memproses operasi database dari formulir login dan signup di HTML Anda.
    Jangan lupa untuk menyesuaikan informasi koneksi database dan tabel sesuai dengan konfigurasi Anda. -->
  </body>
</html>
