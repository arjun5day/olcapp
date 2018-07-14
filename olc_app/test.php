<html>
<head>
 <script>
   function getText3(){
      var in1=document.getElementById('in1').value;
      var in2=document.getElementById('in2').value;
      var in3 = sum(in1, in2);
      document.getElementById('in3').value=in3;
   }
</script>
</head>
<body>

 <form>
   <input type="text" id="in1"/>
   <input type="text" id="in2"/>
    <input type="text" id="in3"/>
   <button type="button" onclick="getText3()">Get text 3</button>
</form>
</body>
</html>