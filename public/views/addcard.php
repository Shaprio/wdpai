<!DOCTYPE html>
<head>
  <link rel="stylesheet" type="text/css" href="public/css/style.css" />
  <title>ADD CARD PAGE</title>
</head>
<body>
  <div class="container">
    <div class="login-container">
        <form action="addProject" method="POST" ENCTYPE="multipart/form-data">
            <div class="messages">
                <?php
                if(isset($messages)){
                    foreach($messages as $message) {
                        echo $message;
                    }
                }
                ?>
            </div>
            <input name="title" type="text" placeholder="title">
            <textarea name="description" rows=5 placeholder="description"></textarea>

            <input type="file" name="file"/><br/>
            <button type="submit">send</button>
      </form>
    </div>
  </div>
</body>
