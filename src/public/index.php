<!DOCTYPE html>
<html>

<head>
    <link type="text/css" rel="stylesheet" href="resources/css/bootstrap.css">
    <link type="text/css" rel="stylesheet" href="resources/css/prism.css">
    <link type="text/css" rel="stylesheet" href="resources/css/main.css">
</head>

<body>
    <div class="container">
        <div class="col text-center text-light">
            <h1><?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?></h1>
        </div>
    </div>

    <pre>
        <code class="language-json">
            {
                "current-page": "home",
                "description": "Hi! I'm a backend developer, and I really want to study and learn more about everything!",
                "author": "Breno Augusto Ribeiro Campos", 
                "occupation": "Backend Developer"
            }
        </code>
    </pre>

    <script src="resources/js/prism.js"></script>
</body>

</html>