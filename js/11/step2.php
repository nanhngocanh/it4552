<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script type="text/javascript">
        if (window.confirm('Open Google?')) {
            newWindow = window.open("http://www.google.com", "toolbar=no,alwayRaised=yes")
            newWindow.focus()
        }
    </script>
</body>
</html>