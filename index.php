<!DOCTYPE HTML>
<html>
<head>
<style>
#rcorners1 {
  border-radius : 25px;
  background : #73AD21;
  padding : 20px;
  width : 50px;
  height : 50px;
}
</style>
</head>
<body>
  <div id="commentBox">
    Name : <input type="text" name="name">
    Comment : <input type="text" name="text">
  </div>
  <script>
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function(){
      if (this.readyState == 4 && this.status == 200){
        document.getElementById("commentBox").innerHTML = this.responseText;
      }
    }
    xhr.open("GET", "postComment.php", true);
    xhr.send();
    
  </script>
</body>
</html>
