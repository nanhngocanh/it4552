<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <script type="text/javascript">
      num = 0;
      function myFunc() {
        num++;
        document.myForm.outputField.value = "Called" + num + "times";
      }
      window.setInterval("myFunc()", 1000);
    </script>
  </head>
  <body>
    <form name="myForm">
      <input type="text" name="outputField" id="" readonly />
    </form>
  </body>
</html>
