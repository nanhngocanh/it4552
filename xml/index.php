<!DOCTYPE html>

<head>
    <script>
        let ajaxRequest;

        function getXMLHttpRequest() {
            let request;
            if (window.XMLHttpRequest) {

                //Firefox, Opera, IE7, and other browsers will use the native object   
                request = new XMLHttpRequest();
            } else {

                //IE 5 and 6 will use the ActiveX control 
                request = new ActiveXObject("Microsoft.XMLHTTP");
            }
            return request;
        }

        function ajaxResponse()
        //This gets called when the readyState changes.
        {
            if (ajaxRequest.readyState != 4)
            //  check to see if we're done
            {
                return;
            } else {
                if (ajaxRequest.status == 200)
                //  check to see if successful
                {
                    let timeValue = ajaxRequest.responseXML.getElementsByTagName("timenow")[0];
                    document.getElementById("showtime").innerHTML = timeValue.childNodes[0].nodeValue;
                } else {
                    alert("Request failed: " + ajaxRequest.statusText);
                }
            }
        }

        function getServerTime()
        //  The main JavaScript for calling the update. 
        {
            ajaxRequest = getXMLHttpRequest();
            if (!ajaxRequest) {
                document.getElementById("showtime").innerHTML = "Request error!";
                return;
            }
            let myURL = "gettime.php";
            let myRand = parseInt(Math.random() * 999999999999999);
            myURL = myURL + "?rand=" + myRand;
            ajaxRequest.onreadystatechange = ajaxResponse;
            ajaxRequest.open("GET", myURL);
            ajaxRequest.send(null);
        }
    </script>
</head>

<body onload="getServerTime();">
    <h1>Ajax Demonstration</h1>
    <h2>Getting the server time without refreshing page</h2>
    <form><input type="button" value="Get Server Time" onclick=" getServerTime();" /></form>
    <div id="showtime" class="displaybox"></div>
</body>

</html>