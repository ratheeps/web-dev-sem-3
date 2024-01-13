<html>

<head>

</head>

<body>
    <h1>Welcome</h1>

    <button type="button" onclick="loadData()">Load Data</button>

    <p>Status of request: <span id="status"></span></p>

    <script>
        function loadData() {

            var xhttp = new XMLHttpRequest();

            xhttp.onreadystatechange = function() {

                // var statusText = "init";
                // if (this.readyState == 1) {
                //     statusText = "Connection Established"
                // } else if (this.readyState == 2) {
                //     statusText = "Request Received By Server"
                // } else if (this.readyState == 3) {
                //     statusText = "Request Processing By Server"
                // } else if (this.readyState == 4) {
                //     statusText = "Request Finished"
                // }

                // document.getElementById("status").innerHTML = statusText;

                // // console.log(this.status);

                if (this.readyState == 4) {
                    if (this.status == 200) {
                        document.getElementById("status").innerHTML = this.responseText;
                    }

                    // else {
                    //     document.getElementById("status").innerHTML = 'Something wrong';
                    // }

                    // let headers = this.getResponseHeader('content-type');

                    let response = this.responseText;

                    console.log(response)
                }
            };


            xhttp.open("GET", "src/sample.php", true);

            // xhttp.setRequestHeader('test-header', 'hello');
            // xhttp.setRequestHeader('test-header-a', 'hello1');

            console.log('before send')

            xhttp.send();

            // xhttp.abort();

            console.log('After send')

        }
    </script>
</body>

</html>