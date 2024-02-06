<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>php-badwords</title>
</head>
<body>
  <form action="script.php" method="GET">
    
     <div class="mb-3 p-3">
            <label for="parola" class="form-label">Parola da censurare</label>
            <input type="text" class="form-control" name="parola" id="parola">
        </div>
             <div class="mb-3 p-3">
            <label for="paragrafo" class="form-label">Paragrafo</label>
            <textarea class="form-control" name="paragrafo" id="paragrafo" rows="3"></textarea>
        </div>
            <button type="submit" class="btn btn-primary ms-3">Submit</button>
  </form>
</body>
</html>