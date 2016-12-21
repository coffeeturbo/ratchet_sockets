<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>121</title>
    <script type="text/javascript">
        var conn = new WebSocket('ws://127.0.0.1:8080/chat');
        conn.onopen = function(e) {
            console.log("Connection established!");
        };

        conn.onmessage = function(e) {
            console.log(e.data);
            console.log(e);
            var messages = document.getElementById('messages');

            messages.append(e.data);
        };

        function sendMessage(){
            conn.send("helloworld<br>");
        }
    </script>
</head>
<body>
<h1><?php echo "index.html"; ?></h1>

<div id="messages"></div>

<button onclick="sendMessage()">send</button>
</body>
</html>


