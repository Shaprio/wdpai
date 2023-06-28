<head>
  <link rel="stylesheet" type="text/css" href="public/css/style.css" />
  <title>GAME PAGE</title>
</head>
<body>
  <div class="container">
    <div class="login-container">
      <form>
          <?php foreach($projects as $project): ?>
              <div id="project-1">
                  <img src="public/uploads/<?= $project->getImage(); ?>">
                  <div>

                      <div class="social-section">
                          <i class="fas fa-heart"> 600</i>
                          <i class="fas fa-minus-square"> 121</i>
                      </div>
                  </div>
              </div>
          <?php endforeach; ?>
      </form>
    </div>
  </div>
</body>
