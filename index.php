<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style>
		body {
			background-color: black;
			color: green;
			font-family: 'Courier New', monospace;
			font-size: 1.2em;
		}

		#output {
			height: 80vh;
			overflow-y: scroll;
			border: 1px solid green;
			padding: 10px;
			margin: 10px;
		}

		#input-line {
			display: flex;
			margin: 10px;
		}

		#prompt {
			flex-shrink: 0;
			color: white;
			margin-right: 10px;
		}

		#cmd {
			flex-grow: 1;
			background-color: transparent;
			border: none;
			outline: none;
			color: green;
			font-family: 'Courier New', monospace;
			font-size: 1.2em;
		}

		#cmd:focus {
			outline: none;
		}
	</style>
</head>
<body onload="document.getElementById('cmd').focus();">
	<div id="output">
		<p>Welcome to the command line interface.</p>
	</div>

	<div id="input-line">
		<div id="prompt">&gt;&gt;&gt;</div>
		<input type="text" id="cmd" onkeydown="handleKeyDown(event)">
	</div>

	<script>
		function handleKeyDown(event) {
			if (event.key === "Enter") {
				event.preventDefault();

				let cmd = document.getElementById('cmd');
				let output = document.getElementById('output');
				let input = cmd.value.trim().toLowerCase();
				cmd.value = "";

				if (input === "login") {
					output.innerHTML += "<p>Login successful.</p>";
					window.location.href = "./main";
				} 
                if (input == "help"){
                    output.innerHTML += "<p>Avaliable commands:</p><p>help  -  This command.</p><p>login  -  Login to the site."
                }
                else {
					output.innerHTML += "<p>" + input + ": command not found. Try 'help'.</p>";
				}
			}
		}
	</script>
</body>
</html>
