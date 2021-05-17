<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.collapsible {
  background-color: #777;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}

.active, .collapsible:hover {
  background-color: #555;
}

.content {
  padding: 0 18px;
  display: none;
  overflow: hidden;
  background-color: #f1f1f1;
}
</style>
</head>
<body>

<div id="welcomeDiv"  style="display:none;" class="answer_list" > WELCOME</div>
<input type="button" name="answer" value="Show Div" onclick="showDiv()" />




<script>
function showDiv() {
   document.getElementById('welcomeDiv').style.display = "block";
}
</script>

</body>
</html>