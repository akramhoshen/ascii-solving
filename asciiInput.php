<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container mt-3">
        <h2>Inline Forms</h2>
        <p>If you want your form elements to appear side by side, use .row and .col:</p>
        <div class="row">
            <div class="card card-body">
                <form action="asciioutput.php" method="POST">
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Enter alphabet" id="ascii"
                                name="ascii">
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" placeholder="Enter Number" id="num" name="num">
                        </div>
                        <div class="col">
                            <input type="submit" class="btn btn-primary" value="Submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>