<!DOCTYPE html>
<html>
<head>
  <title>CodeStrike Interview Test</title>
</head>
<body>
<script type="text/javascript">


var s=59
var m=29
var q
function quizCount()
{
document.getElementById('timer').value=m+":"+s+" remaining"
s=s-1
q=setTimeout("quizCount()", 1000)
if (s<1)
{ m=m-1; s=59;}

if (m<0)
{
quizStop();
}
}
function quizStop()
{
clearTimeout(q)
document.getElementById('timer').value="Your Time Was Finished"
}




function textAreaAdjust(o) {
  o.style.height = "1px";
  o.style.height = (25+o.scrollHeight)+"px";
}
</script>
<dl>
 <?php
 session_start();
  $question = $_SESSION['question'];
  $answer = $_SESSION['answer'];
  ?>
</dl>
<style>

body{
  background-image: url("Exam.jpg");
  background-repeat: no-repeat;
  background-size: 100%;
  background-attachment: fixed;
}

img{
  opacity: 0.5;
  margin: auto;
  width: 50%;
}

div.header{
  margin-top: 2%;
  font-size: 50px;
  color: black;
  text-align: center;
  background-color: #381EF7;
  backface-visibility: visible;
  opacity:0.9; 
}

fieldset{
  width: 75%;
  background-color: white;
  opacity: 0.7;
  margin-left: 10%;
  margin-top: 5%;
}

div.instructions{
  margin-top: 1%;
  font-size: 33px;
  background-color: blue;
  border: 3px solid black;
  opacity: 0.7;
}

input[type=submit] {
    padding:20px 30px; 
    background:black;
    color: white; 
    border:0 none;
    cursor:pointer;
    border-radius: 5px; 

}

</style>
<div class="header">CodeStrike Interview Test</div>

<div class="questions">
<form action="http://localhost/interview/send.php" method="post">

  <fieldset>
    
    <h2><ol>
    <li><?php echo $question[1]; ?></li>
    <input type="radio" name="option1" value=<?php echo $answer[1]; ?>><?php echo $answer[1]; ?><br>
    <input type="radio" name="option1" value=<?php echo $answer[2]; ?>><?php echo $answer[2]; ?><br>
    <input type="radio" name="option1" value=<?php echo $answer[3]; ?>><?php echo $answer[3]; ?><br>
    <input type="radio" name="option1" value=<?php echo $answer[4]; ?>><?php echo $answer[4]; ?><br>
    <br>

    <li><?php echo $question[2]; ?></li>
    <input type="radio" name="option2" value=<?php echo $answer[5]; ?>><?php echo $answer[5]; ?><br>
    <input type="radio" name="option2" value=<?php echo $answer[6]; ?>><?php echo $answer[6]; ?><br>
    <input type="radio" name="option2" value=<?php echo $answer[7]; ?>><?php echo $answer[7]; ?><br>
    <input type="radio" name="option2" value=<?php echo $answer[8]; ?>><?php echo $answer[8]; ?><br>
    <br>

    <li><?php echo $question[3]; ?></li>
    <input type="radio" name="option3" value=<?php echo $answer[9]; ?>><?php echo $answer[9]; ?><br>
    <input type="radio" name="option3" value=<?php echo $answer[10]; ?>><?php echo $answer[10]; ?><br>
    <input type="radio" name="option3" value=<?php echo $answer[11]; ?>><?php echo $answer[11]; ?><br>
    <input type="radio" name="option3" value=<?php echo $answer[12]; ?>><?php echo $answer[12]; ?><br>
    <br>
    <br>

    <li><?php echo $question[4]; ?></li>
          <textarea name="answer1" onkeyup="textAreaAdjust(this)" style="overflow:hidden;width: 100%;font-size: 20px"></textarea>
    <br>
    <br>

    <li><?php echo $question[5]; ?></li>
          <textarea name="answer2" onkeyup="textAreaAdjust(this)" style="overflow:hidden;width: 100%;font-size: 20px"></textarea>
  </ol>
  <pre style="text-align: center;"><input type="submit" name="submit" style="font-size: 18px;"></pre>
  <input type="button" value="START" onClick="quizCount()">
<input type="button" value="30:00" id="timer">
<input type="button" value="SUBMIT" onClick="quizStop()">
  </fieldset>
  </form>
</div>


</body>
</html>