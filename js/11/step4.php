<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript">
        function setAlign( align ) {
            var pTag = window.document.getElementById("paragraph");
            pTag.setAttribute("align", align);
        }
    </script>
</head>
<body>
    <form action="" name="alignForm">
        <select name="alignSelect" id="">
            <option value="left">left</option>
            <option value="right">right</option>
            <option value="center">center</option>
        </select>
        <input type="button" name="" id="" value="Go" onclick="setAlign( document.alignForm.alignSelect.value )">
    </form>

    <p id="paragraph">
        This is some sample text
    </p>
</body>
</html>