<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet'
        integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css'>
    <link rel="stylesheet" href="<?= baseurl ?>/src/css/errors.css">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Grandstander&family=Montserrat:wght@500&display=swap');

    * {
        font-family: 'Grandstander', 'Montserrat', cursive, Arial, Helvetica, sans-serif;
        transition: all .5s;
    }

    body {
        background-color: #101820;
    }

    h1 {
        font-size: 4rem;
        color: #F2AA4C;
    }

    h1:hover {
        color: #F2AA4C;
        text-shadow: 3px 4px #f2aa4c93;
    }

    h3 {
        font-size: 2rem;
        color: #F2AA4C;
    }

    h3:hover {
        color: #F2AA4C;
        text-shadow: 2px 2px #f2aa4c93;
    }

    p {
        color: #F2AA4C;
    }

    a {
        font-size: larger;
        color: #101820;
        background-color: #F2AA4C;
        text-decoration: none;
        margin-top: 10px;
        padding: 10px 10px 10px 10px;
        border-radius: 8px;
    }

    a:hover {
        color: #101820;
        background-color: #c98b38;
        border: 4px solid #F2AA4C;
    }
    </style>
    <title>Whoops!</title>
</head>

<body class="user-select-none">
    <div class="container text-center">
        <h1 class="headline">Whoops!</h1>

        <p class="lead">We seem to have hit a snag. Please try again later...</p>
        <div class="divider mt-2"></div>
        <br>
        <a href="/">Back To Homepage</a>
    </div>


    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js'
        integrity='sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p' crossorigin='anonymous'>
    </script>
</body>

</html>