<!doctype html>
<html>
 <head>
  <meta charset="utf-8">
  <title>PHP Calculator</title>
  <style>
   p {font-size: 12px;}
  </style>
 </head>

 <body>
  <h2>OOP calculator</h2>
  <br> 
  <form action="calc.php" method="POST">

      <div>
       <input type="text"   name="num1Inserted"   placeholder="first number"   min="0"   max="1000"   step="1" >
      </div>

      <br>
      
      <div>
       <input type="text" name="num2Inserted"   placeholder="second number"   min="0"   max="1000"   step="1" >
      </div>

      <br>

      <div>
       <select name="calInserted">
        <option value="add">Addition</option>
        <option value="subt">Subtraction</option>
        <option value="mul">Multiply</option>
        <option value="div">division</option>
       </select>
      </div>

      <br>
      <button type="submit">Calculate</button>
  </form>
 </body>

</html>
