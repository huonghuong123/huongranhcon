<html>
      <head>
      <title>Exercise 9</title>
      <style>
          table{
            width:270px;
           border-style: groove;
          }
          .td1{
            height:30px;
            width:30px; 
            background-color: #FFFFFF;
          }
          .td2{
            height:30px;
            width:30px; 
            background-color:#CCFF99;
          }
      </style>
   </head>
   <body>
   
      <table>   
      <?php  
      for($i=1; $i <= 100; $i++)  
      {   
          if($i %10 == 0)  
          {  
                      
            echo "<td>$i</td>";  
           echo "<tr class='td1'></tr>";
          }  
          else  
          {  
            echo "<td class='td2'>$i</td>";  
          }  
      }  
        
      ?>  
     </table>
       
   </body>
</html>