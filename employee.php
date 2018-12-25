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
			<div class="col-4">
				
				<div>
					Hello, Rimantas Danilevicius / ID 621000
				</div>
			
				<div id="prifile_info">
					<img src="images/photo.jpg">	 
					<div>Active since 1999 02 16, working at cognizant 2.5 yers 
						Current Total Points <span id="total_points">1500</span> pts <br />
						<p style="">Waiting for approving 1800 pts (isnyksta)</p> <br />
						<button style="background-color: lightgrey">Pending</button>
						<button style="background-color: red">Reject</button>	 
						<button style="background-color: green">Accepted</button>	
					</div>	
				</div>
<!-- <hr /> -->

						<div>
							<a href="history.php"><p><em>Your History</em></p></a>
						</div>



				

				<h5>Prizes & Weights Table/List</h5>
				<div class="points1" >
					<div class="points">
						5 - 50 
					</div>
					<div>
					Geles - 10 <button class="button" style="background-color: yellow">Take </button><br />
					Pietus - 20 <button class="button" style="background-color: yellow">Take </button><br />
					Pietus - 30 <button class="button" style="background-color: yellow">Take </button><br />
					Pietus - 40 <button class="button" style="background-color: yellow">Take </button><br />
					Pietus - 50 <button class="button" style="background-color: yellow">Take </button><br />
					Pietus - 50 <br />
					Pietus - 50 <br />
					</div>
				</div>
				
				<div class="points1" >
					<div class="points">
						50 - 100 
					</div>
					Geles - 10 <br />
					Pietus - 20 <br />
					Pietus - 30 <br />
					Pietus - 40 <br />
					Pietus - 50 <br />
					Pietus - 50 <br />
					Pietus - 50 <br />
				</div>


				<div class="points1" >
					<div class="points">
						200 - 1000 
					</div>
					
					Geles - 10 <button class="button" style="background-color: yellow">Take </button><br />
					Pietus - 20 <button class="button" style="background-color: yellow">Take </button><br />
					Pietus - 30 <button class="button" style="background-color: yellow">Take </button><br />
					Pietus - 40 <button class="button" style="background-color: yellow">Take </button><br />
					Pietus - 50 <button class="button" style="background-color: yellow">Take </button><br />
					Pietus - 50 <br />
					Pietus - 50 <br />
				</div>


			</div>
			<div class="col-8">
				<div class="row">
					<div class="col-12">
						<div>
							<h3>Engagement</h3> 
						</div>
						<div>
							<label for="inputAddress">Search for Activity</label>
							<input type="text" id="inputAddress" placeholder="Search...">
						</div>

						<!--First checkbox form-->
						<form >
							<div class="multiselect">
								<div class="selectBox" onclick="showCheckboxes()">
									<select>
										<option>Sports</option>
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
						<!--Second checkbox form-->
						<form >
							<div class="multiselect" id="multiselect">
								<div class="selectBox" onclick="showCheckboxes1()">
									<select>
										<option>Events</option>
									</select>
									<div class="overSelect"></div>
								</div>
								<div id="checkboxes1">
									<label for="summer"><input type="checkbox" id="two"/>Summer</label>
									<label for="animal"><input type="checkbox" id="two"/>Animal</label>
									<label for="basketball"><input type="checkbox" id="two"/>Basketball</label>
									<label for="volleyball"><input type="checkbox" id="two"/>Volleyball</label>
								</div>
							</div>
						</form>
						<!--Third checkbox form-->
						<form >
							<div class="multiselect" id="multiselect">
								<div class="selectBox" onclick="showCheckboxes3()">
									<select>
										<option>Option 3</option>
									</select>
									<div class="overSelect"></div>
								</div>
								<div id="checkboxes3">
									<label for="summer"><input type="checkbox" id="two"/>Summer</label>
									<label for="animal"><input type="checkbox" id="two"/>Animal</label>
									<label for="basketball"><input type="checkbox" id="two"/>Basketball</label>
									<label for="volleyball"><input type="checkbox" id="two"/>Volleyball</label>
									<label for="football"><input type="checkbox" id="two"/>Football</label>
								</div>
							</div>
						</form >

						<!--Fourth checkbox form-->
						<form>
							<div class="multiselect" id="multiselect">
								<div class="selectBox" onclick="showCheckboxes4()">
									<select>
										<option>Option 4</option>
									</select>
									<div class="overSelect"></div>
								</div>
								<div id="checkboxes4">
									<label for="summer"><input type="checkbox" id="two"/>Summer</label>
									<label for="animal"><input type="checkbox" id="two"/>Animal</label>
									<label for="basketball"><input type="checkbox" id="two"/>Basketball</label>
									<label for="volleyball"><input type="checkbox" id="two"/>Volleyball</label>
									<label for="football"><input type="checkbox" id="two"/>Football</label>
									<label for="christmas"><input type="checkbox" id="two"/>Christmas</label>
								</div>
							</div>
						</form>
						<br / >

						<!-- first JS for dropdown checkbox 1-->
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

						<!--second JS for dropdown checkbox 2-->
						<script>
							var expanded = false;
							function showCheckboxes1() {
								var checkboxes1 = document.getElementById("checkboxes1");
								if(!expanded) {
									checkboxes1.style.display = "block";
									expanded = true;
								} else {
									checkboxes1.style.display = "none";
									expanded = false;
								}
							}
						</script>

						<!--third JS for dropdown checkbox 2-->
						<script>
							var expanded = false;
							function showCheckboxes3() {
								var checkboxes3 = document.getElementById("checkboxes3");
								if(!expanded) {
									checkboxes3.style.display = "block";
									expanded = true;
								} else {
									checkboxes3.style.display = "none";
									expanded = false;
								}
							}
						</script>

						<!--fourth JS for dropdown checkbox 2-->
						<script>
							var expanded = false;
							function showCheckboxes4() {
								var checkboxes4 = document.getElementById("checkboxes4");
								if(!expanded) {
									checkboxes4.style.display = "block";
									expanded = true;
								} else {
									checkboxes4.style.display = "none";
									expanded = false;
								}
							}
						</script>
					</div>

					<br />

				</div>

				<div class="row">
					<div>
						<label for="inputAddress">Choose Team Lead by name or ID</label>
						<input type="text" id="inputAddress" placeholder="Search...">
					</div>
					<button type="submit" class="btn btn-primary btn-sm" >Submit </button> 

					<br />
					 <!-- <div>
					 <p>Please, wait for aproval from your team lead</p>
					</div> -->

				</div>

				<br />
				<br />
				<br />


				<div class="row">

					<div class="col-12">

						<hr />

						<h3>Peer to Peer</h3>
					</div>

					<div class="row">
						<div class="col-12">
							<form>
								<label for="inputAddress">Search for employee by Name or ID</label>
								<input type="text" id="inputAddress" placeholder="Search...">
							</form>

						</div>
						<div class="row">
							<p>Choose for what you giving points OR right short comment: </p>
							<div class="col-12">
								<div class="exampleCheck1">
									<input type="checkbox" class="form-check-input" id="exampleCheck1">
									<label class="form-check-label" for="exampleCheck1">Check me out</label>
								</div>

								<div class="exampleCheck1">
									<input type="checkbox" class="form-check-input" id="exampleCheck1">
									<label class="form-check-label" for="exampleCheck1">Check me out</label>
								</div>

								<div class="exampleCheck1">
									<input type="checkbox" class="form-check-input" id="exampleCheck1">
									<label class="form-check-label" for="exampleCheck1">Check me out</label>
								</div>

								<div class="exampleCheck1">
									<input type="checkbox" class="form-check-input" id="exampleCheck1">
									<label class="form-check-label" for="exampleCheck1">Check me out</label>
								</div>

								<div class="exampleCheck1">
									<input type="checkbox" class="form-check-input" id="exampleCheck1">
									<label class="form-check-label" for="exampleCheck1">Check me out</label>
								</div>

								<div class="exampleCheck1">
									<input type="checkbox" class="form-check-input" id="exampleCheck1">
									<label class="form-check-label" for="exampleCheck1">Check me out</label>
								</div>

								<div class="exampleCheck1">
									<input type="checkbox" class="form-check-input" id="exampleCheck1">
									<label class="form-check-label" for="exampleCheck1">Check me out</label>
								</div>

								<div class="exampleCheck1">
									<input type="checkbox" class="form-check-input" id="exampleCheck1">
									<label class="form-check-label" for="exampleCheck1">Check me out</label>
								</div>

								<div class="exampleCheck1">
									<input type="checkbox" class="form-check-input" id="exampleCheck1">
									<label class="form-check-label" for="exampleCheck1">Check me out</label>
								</div>

								<div class="exampleCheck1">
									<input type="checkbox" class="form-check-input" id="exampleCheck1">
									<label class="form-check-label" for="exampleCheck1">Check me out</label>
								</div>

								<div class="exampleCheck1">
									<input type="checkbox" class="form-check-input" id="exampleCheck1">
									<label class="form-check-label" for="exampleCheck1">Check me out</label>
								</div>

								<div class="exampleCheck1">
									<input type="checkbox" class="form-check-input" id="exampleCheck1">
									<label class="form-check-label" for="exampleCheck1">Check me out</label>
								</div>

								<div class="exampleCheck1">
									<input type="checkbox" class="form-check-input" id="exampleCheck1">
									<label class="form-check-label" for="exampleCheck1">Check me out</label>
								</div>

								<div class="exampleCheck1">
									<input type="checkbox" class="form-check-input" id="exampleCheck1">
									<label class="form-check-label" for="exampleCheck1">Check me out</label>
								</div>

								<div class="exampleCheck1">
									<input type="checkbox" class="form-check-input" id="exampleCheck1">
									<label class="form-check-label" for="exampleCheck1">Check me out</label>
								</div>

								<div class="exampleCheck1">
									<input type="checkbox" class="form-check-input" id="exampleCheck1">
									<label class="form-check-label" for="exampleCheck1">Check me out</label>
								</div>

								<div class="exampleCheck1">
									<input type="checkbox" class="form-check-input" id="exampleCheck1">
									<label class="form-check-label" for="exampleCheck1">Check me out</label>
								</div>

								<div class="exampleCheck1">
									<input type="checkbox" class="form-check-input" id="exampleCheck1">
									<label class="form-check-label" for="exampleCheck1">Check me out</label>
								</div>

								<div class="exampleCheck1">
									<input type="checkbox" class="form-check-input" id="exampleCheck1">
									<label class="form-check-label" for="exampleCheck1">Check me out</label>
								</div>

								<div class="exampleCheck1">
									<input type="checkbox" class="form-check-input" id="exampleCheck1">
									<label class="form-check-label" for="exampleCheck1">Check me out</label>
								</div>

								<div class="exampleCheck1">
									<input type="checkbox" class="form-check-input" id="exampleCheck1">
									<label class="form-check-label" for="exampleCheck1">Check me out</label>
								</div>

								<div class="form-group">
									<label for="exampleFormControlTextarea1">Example textarea</label>
									<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
								</div>
								<a href="team_lead.php" type="submit" class="btn btn-primary btn-sm" >Submit </a>
								<a href="rr_admin.php" type="submit" class="btn btn-success">R&R admin</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>