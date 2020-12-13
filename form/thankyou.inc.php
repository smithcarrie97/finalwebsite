<style type="text/css">

  * {
    margin: 0;
    padding: 0;
    border: 0;
  }

  @font-face{
  font-family: "montserrat"
  src: url('../fonts/Montserrat.ttf') format('truetype');
  }


  body {
    background-color:#BCB5C5;
    header {
        background: white;
        padding: 20px;
        height: 60px;
        position: fixed;
        width: 100%;
        z-index: 9999;
    }


    header nav ul li {
        display: inline;
        padding: 0 15px;
    }

    header nav a {
        text-decoration: none;
        background-color: white;
        color:black;
        font-weight: bold;
        text-transform: uppercase;
        font-family: 'montserrat';
    }

    header nav a:hover {
      color:#BCB5C5;
    }


    .logo-container,
    header nav {
        display: inline-block;
        vertical-align: middle;
      }

    body {
      position:absolute;
      width: 100%;
    }

    footer {
      background: #212023;
      color: white;
      text-align: center;
      padding: 20px 0;
      font-family: 'montserrat';
      width:100%;
  }

</style>

<header>
  <div class="logo-container">
    <a href="index.html">
      <img src="images/logo.png" alt="Logo" width="50" />
    </a>
  </div>
    <nav>
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="work.html">Work</a></li>
        <li><a href="contact.html">Contact</a></li>
      </ul>
    </nav>
</header>

<div class="container">
  <h1>Thank you!</h1>
  <p>Thanks for your message. I will be in touch with you shortly.</p>
</div>

<footer>Web Design & Development by Carrie Renee Smith</footer>
