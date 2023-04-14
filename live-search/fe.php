<html lang="en">
<body>
<h1>Ajax Demonstration of Live Search</h1>
<p>
    Search for: <input
        type="text"
        id="searchstring"
    />
</p>
<div id="results">
    <ul id="list">
        <li>Results will be displayed here.</li>
    </ul>
</div>
<script>
    let ajaxRequest;
    let obj = document.getElementById("searchstring");
    obj.onkeydown = startSearch;
    let t; // public variable for the timeout
    function startSearch() {
        if (t) window.clearTimeout(t);
        t = window.setTimeout("liveSearch()", 200);
    }

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

    function liveSearch() {
        /**
         * Because ajaxRequest is used by other functions,
         * so we need to declare it at the beginning of the script
         * Also declare getXMLHttpRequest() function
         */
        ajaxRequest = getXMLHttpRequest();
        if (!ajaxRequest) alert("Request error!");
        let myURL = "be.php";
        let query = document.getElementById("searchstring").value;
        myURL = myURL + "?query=" + query;
        ajaxRequest.onreadystatechange = ajaxResponse;
        ajaxRequest.open("GET", myURL);
        ajaxRequest.send(null);
    }

    function ajaxResponse() //This gets called when the readyState changes.
    {
        if (ajaxRequest.readyState !== 4) // check to see if we're done
        {
            return;
        } else {
            if (ajaxRequest.status === 200) // check to see if successful
            {
                displaySearchResults();
            } else {
                alert("Request failed: " + ajaxRequest.statusText);
            }
        }
    }

    function displaySearchResults() {
        let i, n, li, t;
        let ul = document.getElementById("list");
        let div = document.getElementById("results");
        div.removeChild(ul); // delete the old search results
        ul = document.createElement("ul"); // create a new list container
        ul.id = "list";
        let names = ajaxRequest.responseXML.getElementsByTagName("name");
        for (i = 0; i < names.length; i++) {
            li = document.createElement("li"); // create a new list element
            n = names[i].firstChild.nodeValue;
            t = document.createTextNode(n);
            li.appendChild(t);
            ul.appendChild(li);
        }
        if (names.length === 0) { // if no results are found, say so
            li = document.createElement("li");
            li.appendChild(document.createTextNode("No results."));
            ul.appendChild(li);
        }
        div.appendChild(ul); // display the new list
    }

</script>
</body>
</html>
