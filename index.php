<html>
<head>
<link rel="stylesheet" type="text/css" href="css\bootstrap.min.css">
<script src="js/jquery-3.2.1.js">
</script>
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

<script type="text/javascript">
    $(document).ready(function(){
      $("#name").keyup(function(){
        var key=this.value;
        $.ajax({
          type:"GET",
          url:"hint.php",
          data:"name="+key,
          success:function(res){
            $("#name_suggest").text(res);
            $("#suggest").css("display","block");
          }
        });
      });

      $("#address").keyup(function(){
        var add=this.value;
        $.ajax({
          type:"GET",
          url:"hint.php",
          data:"address="+add,
          success:function(result){
            $("#add_suggest").text(result);
            $("#suggest_add").css("display","block");
          }
        });
      });

      $("#name").blur(function(){
        $("#name_suggest").text("");
        $("#suggest").css("display","none");
      });

      $("#address").blur(function(){
        $("#add_suggest").text("");
        $("#suggest_add").css("display","none");
      })
    });
</script>
</head>
<body data-spy="scroll" data-target="#myScrollspy" data-offset="20">
<div class="container mt-3">
<form  method="POST" action="submit.php">
<div class="row">
 <div class="form-group col-md-6">
    <label for="name">Name:</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" aria-describedby="name_suggest" autocomplete="off">
     </div>
     <div class="col-md-6">
     <label for="name_suggest" id="suggest" style="display: none;">Found suggestions:</label>
    <small class="form-text" id="name_suggest"></small>
 </div>
  </div>
  <div class="row">
  <div class="form-group col-md-6">
    <label for="email">Email:</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email" autocomplete="off">
  </div>
  </div>
  <div class="row">
  <div class="form-group col-md-6">
    <label for="address">Address:</label>
    <input type="text" class="form-control" id="address" name="address" placeholder="Enter Your Address" aria-describedby="add_suggest" autocomplete="off">
    </div>
    <div class="col-md-6">
    <label for="add_suggest" id="suggest_add" style="display: none;">Found suggestions:</label>
    <small class="form-text" id="add_suggest"></small>
    </div>
  </div>

  <div class="row">
  <div class="form-group col-md-4">
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </div>
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

