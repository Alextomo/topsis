<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

  <title>Insert Database</title>

  <!-- Bootstrap core CSS -->
  <link href="http://localhost/topsis/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="http://localhost/topsis/jumbotron.css" rel="stylesheet">

  <!-- Just for debugging purposes. Don't actually copy this line! -->
  <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>
    <?php
    function createTable($alternatives,$criteria){
      for ($ccount=0; $ccount<$criteria; $ccount++){
        echo "<tr>";
        for ($acount=0; $acount <$alternatives ; $acount++) { 

         echo "<td contenteditable ";
         echo "id=\"";
         echo "r";
         echo $ccount;
         echo "c";
         echo $acount;
         echo "\"";
         echo ">";
         echo "...";
         echo "</td>";
       }
       echo "</tr>";
     }
   }
   ?>

   <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../"><span class="glyphicon glyphicon-home"></span></a>
        </div>
        <div class="navbar-collapse collapse">

        </div><!--/.navbar-collapse -->
      </div>
    </div>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Insert Your Own Database.</h2>
          <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>

        </div>
      </div>

      <div class="container">
        <!-- Example row of columns -->
        <table class="table">
         <?php
         createTable (20,20);

         ?>

       </table>
       <a class="btn btn-default" href="insert/" role="button">Save into database &raquo;</a>
     </div>

     <hr>

     <footer>
      <p>&copy; Company 2014</p>
    </footer>
  </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://localhost/topsis/js/1.11.1/jquery.js"></script>
    <script src="http://localhost/topsis/js/bootstrap.min.js"></script>
  </body>
  </html>
