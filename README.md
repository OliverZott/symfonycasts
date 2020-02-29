SymfonyCasts
=========
https://symfonycasts.com/tracks/php


Chapter 1
------------


Chapter 2
------------
1. **http Requests:**
    * POST / GET
    * added pets_new.php
    * Links in **header.html**

2. **Forms:**
    * added Form in pets_new.php <br>
        `<form action="pets_new.php" method="POST">`
    * `name="any_name"` ...Important! used to get fields value in php
    * usage of some Bootstrap
    
3. **Reading POST requests**
    * SuperGlobals: e.g. `var_dump($_POST)`
        * $_POST
        * $_GET
        * $_SERVER
    * Check if the http request method is POST: <br> 
        `if ($_SERVER['REQUEST_METHOD'] == "POST") {`
    * Check if POST-key exists: <br>
        `isset($_POST['key'])`

4. **JSON for storing data**
    * input: <br> 
        encoding: `json_encode($file, JSON_PRETTY_PRINT)` / storing: `file_put_content()`
    * output: <br>
        `json_decode(file_get_contents($file, ...))`
        
5. **Redirecting http requests (!! IMPORTANT !!)**
    * **header** ... sending http-header in raw format. `exit` / `die` afterwards to 
    ensure following code is not executed. <br> 
        `header('Location: url');`
    * Request / Response !!!
    
    