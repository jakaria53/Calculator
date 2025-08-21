<!DOCTYPE html>
<html>
    <head>
        
     <link rel="stylesheet" href="style1.css">
    </head>
    <body>
        <div class="box"><table>
          
        <tr>
            <th colspan="3"> <input type = "text" id="a"> </th>
            <th> <input type = "button" value="C" onclick="clr()"> </th>
        </tr>

        <tr>
            <th> <input type = "button" value="1" onclick="pick(1)"> </th>
            <th> <input type = "button" value="2" onclick="pick(2)"> </th>
            <th> <input type = "button" value="3" onclick="pick(3)"> </th>
            <th> <input type = "button" value="/" onclick="pick('/')"> </th>
        </tr>

        <tr>
            <th> <input type = "button" value="4" onclick="pick(4)"> </th>
            <th> <input type = "button" value="5" onclick="pick(5)"> </th>
            <th> <input type = "button" value="6" onclick="pick(6)"> </th>
            <th> <input type = "button" value="*" onclick="pick('*')"> </th>
        </tr>

        <tr>
            <th> <input type = "button" value="7" onclick="pick(7)"> </th>
            <th> <input type = "button" value="8" onclick="pick(8)"> </th>
            <th> <input type = "button" value="9" onclick="pick(9)"> </th>
            <th> <input type = "button" value="-" onclick="pick('-')"> </th>
        </tr>

        <tr>
            <th> <input type = "button" value="." onclick="pick('.')"> </th>
            <th> <input type = "button" value="0" onclick="pick(0)"> </th>
            <th> <input type = "button" value="=" onclick="solve()"> </th>
            <th> <input type = "button" value="+" onclick="pick('+')"> </th>
        </tr>
        </table> </div>
        
      
       
        
      <script src="script.js"></script>

    </body>
</html>