<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Employee profile</title>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="con-6">
				<img src="images/photo.jpg"> 
				<div>
					Hello, Rimantas Danilevicius ID 621000
				</div>
				<div>
					Active since 1999 02 16, working at cognizant 2.5 yers
				</div>
				<div>Current Total Points 1500 pts <br />
					Waiting for approving 1800 pts (isnyksta) <br />
					<button style="background-color: lightgrey">Pending</button>
					<button style="background-color: red">Reject</button>	 
					<button style="background-color: green">Accepted</button>	
					<div>
						<a href="history.php"><p><em>Your History</em></p></a>
					</div>

				</div>
			</div>
			<div class="con-6">
				<div class="row">
					<div class="col-12">
						
						<h3>Engagement</h3> 
						
							<label for="inputAddress">Search Activity</label>
							<input type="text" id="inputAddress" placeholder="Search...">
	<form class="form-inline">
  <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Sports</label>
  <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
    <option selected>Choose..</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
  </select>

  <div class="custom-control custom-checkbox my-1 mr-sm-2">
    <input type="checkbox" class="custom-control-input" id="customControlInline">
    <label class="custom-control-label" for="customControlInline">Remember my preference</label>
  </div>
<br />
<br />
<br />
<br />

<form>
	<div class="multiselect">
		<div class="selectBox" onclick="showCheckboxes()">
			<select>
				<option>Select an option</option>
			</select>
			<div class="overSelect"></div>
		</div>
		<div id="checkboxes">
			<label for="one"><input type="checkbox" id="one"/>First Check Box</label>
			<label for="two"><input type="checkbox" id="one"/>Second Check Box</label>
			<label for="three"><input type="checkbox" id="one"/>Third Check Box</label>
		</div>
</div>
</form>

<script>
	var expanded = false;
		function showCheckboxes() {
			var checkboxes = document.getElementById("checkboxes");
			if(!expanded) {
				checkboxes.style.display = "block";
				expanded = true;
			} else {
				checkboxes.style.display = "none";
				expanded = false;
			}
	}

</script>


<br />









						
						<br />
						<br />
						<br />
					</div>
					<div class="row">
						row 2 b2b
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>