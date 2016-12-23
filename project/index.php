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
          var messages = document.getElementById('messages');
            messages.append(e.data);
        };

        function sendMessage(){
          messages = document.getElementById('messages');
          var text_message = document.getElementById('chat_message').value;
          conn.send(text_message);
          messages.append("<br>"+text_message);
        }
    </script>
</head>
<body>
<h1><?php echo "index.php"; ?></h1>

<div id="messages"></div>

<textarea name="chat_message" id="chat_message" cols="30" rows="10"></textarea>

<button onclick="sendMessage()">send</button>
</body>
</html>


