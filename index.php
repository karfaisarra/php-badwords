<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1></h1>
        <form action="greetings.php" method="get">
            <div class="mt-5">
                <label for="word" class="form-label">Word:</label>
                <input type="text" name="word" id="word" class="form-control" placeholder="type a word">
            </div>
            <div class="my-3">
                <label for="paragraph" class="form-label">Paragraph:</label>
                <textarea class="form-control" name="paragraph" placeholder="Write a paragraph"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Next</button>
        </form>
    </div>
  </body>
</html>