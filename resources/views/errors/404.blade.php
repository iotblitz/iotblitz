<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>404 Not Found</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- LottieFiles -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.6/lottie.min.js" integrity="sha512-C+5zCzGLTnUmrEnR08OqDYNhBlC9RBHed0QbZgFGl02Jb07prks/gD6SOF6iq3dhGwLZz9YQUXz7Hgo2zXfZQg==" crossorigin="anonymous"></script>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            background-color: #f8f9fa;
        }
        .container {
            max-width: 600px;
        }
        .animation {
            width: 100%;
            height: auto;
            max-width: 400px;
            margin: auto;
        }
        .message {
            font-size: 1.5rem;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div id="animation" class="animation"></div>
        <div class="message">
            <h1>404</h1>
            <p>Oops! The page you are looking for does not exist.</p>
            <a href="/" class="btn btn-primary">Go Home</a>
        </div>
    </div>
    <script>
        // Load the Lottie animation
        var animation = lottie.loadAnimation({
            container: document.getElementById('animation'), // the dom element that will contain the animation
            renderer: 'svg',
            loop: true,
            autoplay: true,
            path: 'https://assets5.lottiefiles.com/packages/lf20_yotx8rcd.json' // the path to the animation json
        });
    </script>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
