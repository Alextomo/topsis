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
      echo "<tr>";
      for ($j=0; $j<$alternatives ; $j++) { 
        if ($j==0) {
          echo "<td>#</td>";
        }
        else {
          echo "<td>";
          echo "Candidate ";
          echo $j;
          echo "</td>";
        }
      }
      echo "</tr>";
      for ($ccount=1; $ccount<=$criteria; $ccount++){
        echo "<tr>";
        for ($acount=0; $acount <$alternatives ; $acount++) { 
          if ($acount==0) {
            echo "<td>Criteria ";
            echo $ccount;
            echo "</td>";
          }
          else {
            echo "<td contenteditable ";
            echo "id=\"";
            echo "r";
            echo $ccount;
            echo "c";
            echo $acount;
            echo "\"";
            echo ">";
            echo "</td>";
          }
        }
        echo "</tr>";
      }
    }
    ?>
    <!-- Comparison Table-->
    <?php

    function createComparisonTable($x){
      echo "<tr>";
      for ($i=1; $i<=$x ; $i++) { 
        echo "<td>";
        echo "Criteria ";
        echo "$i";
        echo "</td>";
      }
      echo "</tr><tr>";
      for ($j=1; $j <=$x ; $j++) { 
        echo "<td contenteditable ";
        echo "id=\"";
        echo "cr";
        echo $j;
        echo "\"";
        echo ">";
        echo "</td>";

      }
      echo "</tr>";
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
            <a class="navbar-brand" href="http://localhost/topsis/"><span class="glyphicon glyphicon-home"></span></a>
          </div>
          <div class="navbar-collapse collapse">
           <ul class="nav navbar-nav">
            <!--<li class="active"><a href="#">Beginner</a></li>-->
            <li ><a href="http://localhost/topsis/selectcriteria/">Beginner</a></li>
            <li><a href="http://localhost/topsis/createyourown/">Intermediate</a></li>
            <li class="active"><a href="http://localhost/topsis/insert/">Advanced</a></li>

          </ul>

        </div><!--/.navbar-collapse -->
      </div>
    </div>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Insert Your Own Database.</h2>
          <p>TOPSIS method for advance decisioning purpose. You can create your own database and make your own criteria.</p>
        </div>
      </div>

      <div class="container">

        <?php
        $A = $_GET["nameAlternative"];
        $B = $A+1; 
        $C = $_GET["nameCriteria"]; 
        ?>


        <!-- Example row of columns -->
        <h2>Decision Matrix</h2>
        <table class="table table-striped table-bordered">
         <?php
         createTable ($B,$C);

         ?>

       </table>
       <h2>Comparison Matrix</h2>
       <p>Value in percentage.</p>
       <table class="table table-striped table-bordered">
         <?php
         createComparisonTable($C);
         ?>
       </table>
       <a class="btn btn-default" href="insert/" role="button" onclick="alert("a");">Save into database &raquo;</a>

     </div>
     <div class="container">
       <button class="btn btn-default" onclick="alert("a");">a</button>
       
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
