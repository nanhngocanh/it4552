<html>
  <head>
    <title>Example Message Box Page</title>
    <script type="text/javascript">
      var inputs = 1;
      function addField() {
        inputs++;
        var form = document.getElementById("sweet-form");
        var line_break = document.createElement("br");
        var textbox = document.createElement("input");
        textbox.setAttribute("type", "text");
        textbox.setAttribute("name", "text" + inputs);
        textbox.setAttribute("value", "I am box #" + inputs);
        form.appendChild(line_break);
        form.appendChild(textbox);
        return false;
      } //end addField
      function doLoad() {
        document
          .getElementById("sweet-link")
          .addEventListener("click", addField, false);
        window.addEventListener("load", doLoad, false);
      }
    </script>
  </head>
  <html>
    <body>
      <form id="sweet-form">
        <input type="text" name="text_1" value="I am box #1" />
      </form>
      <a id="sveet-link" href="#">Add Text Field</a>
    </body>
  </html>
</html>
