<html>
<head>
<link rel="stylesheet" type="text/css" href="css\bootstrap.min.css">
<style>

*{
	outline:1px red;
}

#anim{
	animation-name:shake;
	animation-duration:2s;
	animation-fill-mode: forwards;
}

@keyframes shake{
	to{
		transform:translateX(20px);
	}
}
</style>
<script type="text/javascript">
<!--
fadeArray = ['#000', '#111', '#222', '#333', '#444', '#555', '#666', '#777', '#888', '#999', '#aaa', '#bbb', '#ccc', '#ddd', '#eee', '#fff']

function fadeIn () {
document.getElementById('fade').style.color = fadeArray.pop();
if (fadeArray.length) setTimeout ('fadeIn()', 500);
}
onload = fadeIn
// -->
</script>
</head>
<body data-spy="scroll" data-target="#myScrollspy" data-offset="20">
<div class="container mt-3">
<form  method="POST" action="submit.php">
 <div class="form-group col-md-6">
    <label for="name">Name:</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
  </div>
  <div class="form-group col-md-6">
    <label for="email">Email:</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email">
  </div>
  <div class="form-group col-md-6">
    <label for="address">Address:</label>
    <input type="text" class="form-control" id="address" name="address" placeholder="Enter Your Address">
  </div>
  <div class="form-group col-md-6">
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
<hr class="mt-3">
<div class="row mt-3">
<div class="col-md-4" id="anim">
<h3>Hello There</h3>
<p id="fade">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.</p>
</div>
<div class="col-md-4 mb-3 mt-3">
<img class="img-fluid" src="pexels-photo.jpg" onmouseover="this.src='pexels-photo-113338.jpeg'" onmouseout="this.src='pexels-photo.jpg'" style="width:350px;height:228px;"/>
</div>
<div class="col-md-4 mt-3">
<img src="download.jpg" class="img-fluid" onmouseover="this.src='download23.jpg'" onmouseout="this.src='download.jpg'" style="width:350px; height:228px;"/>
</div>
</div>
</div>
</body>
</html>

