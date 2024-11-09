<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProjectOne</title>
    <link rel="stylesheet" href="https://bootswatch.com/5/sandstone/bootstrap.min.css">
    <style>
        body{
            background-color: #FFDEE9;
            background-image: linear-gradient(0deg, #FFDEE9 0%, #B5FFFC 100%);


        }
        #footer{
            text-align: center;
            margin: 428px 0 0 0;
        }
    </style>
    <script>
        function showSuggestion(str){
            if(str.length==0){
                document.getElementById('output').innerHTML='';
            }
            else{
                let xhr = new XMLHttpRequest();
                xhr.onreadystatechange=function(){
                    if(this.readyState==4 && this.status==200){
                        document.getElementById('output').innerHTML= this.responseText;
                    }
                }
                xhr.open("GET","./suggest.php?q="+str,true);

                xhr.send(); 
            }
        }
    </script>
</head>
<body>
    <div class="container">
        <h1>Search Users</h1>
        <form>
            Search User: <input type="text" class="form-control" 
            onkeyup="showSuggestion(this.value)"> 
        </form>
        <p>Suggestion: <span id="output" style="font-weight:bold"></span></p>
    </div>

    <footer id="footer">
        <p>Creater:
            <h5>Seyed Hamid Hosseini</h5>
        </p>
    </footer>
</body>
</html>