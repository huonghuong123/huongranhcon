<html>
   
   <head>
      <title>Exercise 7</title>
      <style>
          table{
            width:270px;
           border-style: groove;
          }
      </style>
   </head>
   <body>
   
      <table>   
      <?php  
      for($row=1; $row <= 8; $row++)  
      {  
          echo "<tr>";  
          for($col=1; $col <=8; $col++)  
          {  
            $total=$row + $col;  
            if($total%2 == 0)  
            {  
              echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";  
            }  
            else  
            {  
              echo "<td height=30px width=30px bgcolor=#000000></td>";  
            }  
          }  
          echo "</tr>";  
      }  
      ?>  
     </table>
       
   </body>
</html>