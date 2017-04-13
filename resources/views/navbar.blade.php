<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Keith McKnight</title>

        <!-- Fonts -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
   <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">
  
<style>
.jumbotron_km {
  margin-top: 5rem;
  margin-bottom: 2rem;
  background-color: #eceeef;
  display: flex;
  flex-direction: column;
  align-items: center;/*typically means centered from top to bottom. Here it means centered from left to right.*/
  width:100%;

}

 #kmsig {
margin-left: 2rem;
 }

</style>




  </head>
  <body>





    <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
    <!--review what fixed-top means-->
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">Keith McKnight</a>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About Me</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Links I like</a>
          </li>
        </ul>
      </div>
    </nav>


<!--I'll try some flexbox...Ok, it worked but i really want the eye a fixed
distance from the name not flexing around.-->
<!--
<div class="d-flex flex-row justify-content-around jumbotron_km">
<div class="p-2"><img src="/images/kmeye.png" class="img-fluid float-left" alt="..."></div>
  <div class="p-2"><img width=642 height=93 src="/images/kmsignature.png" class="img-fluid float-right" alt="..."></div>
</div>
-->

<div class="container jumbotron_km clearfix">
<img src="/images/kmeye.png" width=99 height=64 class="float-left" alt="...">
  <img id="kmsig" width=642 height=93 src="/images/kmsignature.png" class="float-left" alt="...">
</div>









<!--
<div class="container">
      <div class="row">
        <div class="col-10">
        <img src="/images/kmeye.png" class="img-fluid float-left" alt="...">
        <img width=642 height=93 src="/images/kmsignature.png" class="img-fluid float-right" alt="...">    

        </div>
      </div>
 </div>
-->


<!--
<div class="container">

        <img src="/images/kmeye.png" class="img-fluid float-left" alt="...">
        <img width=642 height=93 src="/images/kmsignature.png" class="img-fluid float-right" alt="...">    
 </div>
-->



    <!-- Main jumbotron for a primary marketing message or call to action -->
    
<!--
    <div class="jumbotron">
      <div class="container">
        <img src="/images/kmeye.png" class="img-fluid float-left" alt="...">
        <img width=642 height=93 src="/images/kmsignature.png" class="img-fluid float-right" alt="...">    
      </div>
    </div>
-->
    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
       </div>
        <div class="col-md-4">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div>
      </div>

      <hr>

      <footer>
        <p>&copy; Company 2017</p>
      </footer>
    </div> <!-- /container -->






<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    </body>
</html>
