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
  <link href="../css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="jumbotron.css" rel="stylesheet">

  <!-- Just for debugging purposes. Don't actually copy this line! -->
  <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>

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
          <!-- Example row of columns -->
          <div class="row">
            <div class="btn-group" data-toggle="buttons">
              <div class="col-md-12">
                <form role="form" action="http://localhost/topsis/insert/add/" method="get">
                  <div class="form-group">
                    <label for="alternativeInput">Alternative</label>
                    <input type="number" name="nameAlternative" class="form-control" id="inputAlternative" placeholder="How many alternatives?"> 
                  </div>
                  <div class="form-group">
                    <label for="criteriaInput">Criteria</label>
                    <input type="number" name="nameCriteria" class="form-control" id="inputCriteria" placeholder="How many criteria?">
                  </div>
                  <button type="submit"  class="btn btn-default" >Submit &raquo;</button><br>
                </form>
              </div>
            </div>
          </div>

          <hr>
          
          <footer>
            <p>&copy; Company 2014</p>
          </footer>
        </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../js/1.11.1/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
  </html>
