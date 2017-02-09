<!DOCTYPE html>
<html>
<head>
  <title>Lily Kang</title>
  <link href="style.css" type="text/css" rel="stylesheet">
</head>
<body>
  <div class=container>
    <h1>Lily Kang</h1>
    <img src="images/Lily_Kang_Photo.jpg" alt="Lily Kang's headshot" width="428" height="284"/>
    <h2>About Me</h2>
    <p>
      I am a wonderer and a wanderer. <br />
      I live for conversations that allow me to get to know someone deeply. <br />
      During college, I developed strong passion for entrepreneurship and human development <br />
      through researching internationally and leading student organizations. <br />
      Human Centered Design encapsulates my principles and pursuits. <br />
      After graduating in May 2016, I've been contributing to a software company <br />
      in Minneapolis, MN while continuing my involvement in social innovation.
    </p>
    <a href="http://www.jingtingkang.com" target="_blank">Learn More About Me</a>
    <h2>Here is one of my favorite quotes: </h2>
    <p>
      <?php
      $messages = array(
          'What would you do if you are not afraid of anything?',
          'Now is the perfect time.',
          'It is not the critic who counts.'
      );

      echo $messages[rand(0, count($messages) - 1)];
      ?>
    </p>
  </div>

</body>
</html>
