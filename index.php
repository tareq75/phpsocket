<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<script type="text/javascript">
	var conn = new WebSocket('ws://localhost:8080');
	conn.onopen = function(e) {
	    console.log("Connection established!");
	};
	conn.onmessage = async function(e) {
	    console.log(e.data);
	};
	conn.send('Hello World!');


	var conn 		= new WebSocket('ws://localhost:8080');
	conn.onmessage 	= function(e){ console.log(e.data); };
	conn.onopen 	= () => conn.send('hello');


</script>

<!-- <script src="https://gist.githubusercontent.com/cboden/fcae978cfc016d506639c5241f94e772/raw/e974ce895df527c83b8e010124a034cfcf6c9f4b/autobahn.js"></script>
<script>
    var conn = new ab.Session('wss://localhost:8080',
        function() {
            conn.subscribe('kittensCategory', function(topic, data) {
                // This is where you would add the new article to the DOM (beyond the scope of this tutorial)
                console.log('New article published to category "' + topic + '" : ' + data.title);
            });
        },
        function() {
            console.warn('WebSocket connection closed');
        },
        {'skipSubprotocolCheck': true}
    );
</script> -->


</body>
</html>

