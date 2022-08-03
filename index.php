<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Multi Step</title>
</head>
<body>
<div class="container">
	<form id="form1">
		<h2>ACCOUNT CREATION</h2>
		<input type="text" name="email" placeholder="Email" required>
		<input type="password" name="password" placeholder="Password" required>
		<input type="password" name="con_password" placeholder="Confirm Password" required>

		<div class="btn-box">
			<button type="button" id="next1"> NExt</button>
			
		</div>

	</form>


	<form id="form2">
		<h2>Personal info</h2>
		<input type="text" name="name" placeholder="Name" required>
		<input type="number" name="age" placeholder="Age" required>
		<input type="text" name="country" placeholder="Country" required>

		<div class="btn-box">
			<button type="button" id="next2"> NExt</button>
			<button type="button" id="prev1"> Previous</button>
			
		</div>

	</form>


	<form id="form3">
		<h2>Academics</h2>
		<input type="text" name="degree" placeholder="Last degree" required>
		<input type="number" name="year" placeholder="Year of Passing" required>
		<input type="text" name="institute" placeholder="NAme of Institute" required>

		<div class="btn-box">
			<button type="button"> Submit</button>
			<button type="button" id="prev2"> Previous</button>
			
		</div>

	</form>

<div class="step_row">
	<div id="progress"></div>
	<div class="step_col">Step 1</div>
	<div class="step_col">Step 2</div>
	<div class="step_col">Step 3</div>


</div>
	
	
</div>

<script type="text/javascript">
	var form1 = document.getElementById("form1");
	var form2 = document.getElementById("form2");
	var form3 = document.getElementById("form3");

	var next1 = document.getElementById("next1");
	var next2 = document.getElementById("next2");
	var prev1 = document.getElementById("prev1");
	var prev2 = document.getElementById("prev2");

	var progress= document.getElementById("progress");

		next1.onclick =function(){
		form1.style.left ="-450px";
		form2.style.left="40px";
		progress.style.width="240px";
	}
		prev1.onclick =function(){
		form1.style.left ="40px";
		form2.style.left="450px";
		progress.style.width="120px";
	}
		next2.onclick =function(){
		form2.style.left ="-450px";
		form3.style.left="40px";
		progress.style.width="360px";
	}
		prev2.onclick =function(){
		form2.style.left ="40px";
		form3.style.left="450px";
		progress.style.width="240px";
	}

</script>
</body>
</html>