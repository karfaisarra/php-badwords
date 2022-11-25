<?php
$word = $_GET['word'];
$paragraph = $_GET['paragraph'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Results</title>
</head>
<body>
    <div class="container my-5">
        <p><?php echo $paragraph; ?></p>
        <p>Questo paragrafo è lungo <?php echo strlen($paragraph)?></p>
        <p><?php echo str_ireplace($word, '***', $paragraph) ?></p>
        <p>La lunguezza del secondo paragrafo è di <?php echo strlen(str_ireplace($word, '***', $paragraph)) ?></p>
    </div>
</body>
</html>