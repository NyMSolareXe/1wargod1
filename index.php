<?php
$a = scandir("img/");
unset($a[0]);
unset($a[1]);
$b = json_encode(array_values($a));
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <title>Document</title>
</head>

<body>
  <div class="main">

  </div>

  <script>
    let imgArrayItems = JSON.parse(`<?php echo $b ?>`)


    let target = document.querySelector('.main')
    let text = ''
    for (let i = 0; i < imgArrayItems.length; i++) {
      text += `<div><img src="img/${imgArrayItems[i]}"/></div>`
    }
    target.innerHTML = text
  </script>
</body>

</html>