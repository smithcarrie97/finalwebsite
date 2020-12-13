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
  }
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

  .container {
    max-width: 900px;
    margin: 50px auto 100px;
    text-align: center;
  }

footer  {
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
	<h1>Missing fields</h1>
	<p>Sorry, you have not completed all of the required fields.</p>
	<p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

	<ul>
	<?php
		for($i=0; $i<count($this->missing_required_fields); $i++){
			echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
		}
	?>
	</ul>

	<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>
</div>

<footer>
  <p>Web Design & Development by Carrie Renee Smith</p>
</footer>
