<html>
<head>
    <title>A.C: Past Jobs</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="jumbotron text-center">
        <h1>Past Jobs</h1>
    </div>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Accent Curbing</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="index.php">Home</a></li>
      <li class="active"><a href="pastJobs.php">Past Jobs</a></li>
      <li><a href="pricing.php">Pricing</a></li>
      <li><a href="reviews.php">Reviews</a></li>
    </ul>
  </div>
</nav>

<div class="text-center">
    <h3>Just some exmaples of the services that we provide.</h3>
</div>

<div class="container">
    <h2>Past Jobs can be Found Here</h2>
    <p>Click on the images to enlarge them.</p>
  
      <div class="row">
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="/images/curbing1.jpg" target="_blank">
              <img src="/images/curbing1.jpg" alt="Past Job 1" style="width:100%">
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="/images/curbing2.jpg" target="_blank">
              <img src="/images/curbing2.jpg" alt="Past Job 2" style="width:100%">
            </a>
          </div>
        </div>

        <div class="col-md-4">
          <div class="thumbnail">
            <a href="/images/curbing3.jpg" target="_blank">
              <img src="/images/curbing3.jpg" alt="Past Job 3" style="width:100%">
            </a>
          </div>
        </div>

        <div class="col-md-4">
          <div class="thumbnail">
            <a href="/images/curbing4.jpg" target="_blank">
              <img src="/images/curbing4.jpg" alt="Past Job 4" style="width:100%">
            </a>
          </div>
        </div>

        <div class="col-md-4">
          <div class="thumbnail">
            <a href="/images/curbing5.jpg" target="_blank">
              <img src="/images/curbing5.jpg" alt="Past Job 4" style="width:100%">
            </a>
          </div>
        </div>
      
      </div>
    </div>

    <?php
    echo "Today's date is " . date("d-m-Y") . "<br>";
    ?>
    
    </body>
</html>