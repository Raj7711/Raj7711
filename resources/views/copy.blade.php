<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<h3>(6).Teaching and Non-teaching Staff in the Department(Designation of non-teaching staff may be denoted):</h3>

<form action="value" method="post">
 @csrf
<table style="width:100%" id="customers">
  <tr>
    <th rowspan="2">Professor</th>
    <th colspan="4">SC</th>
    <th colspan="4">ST</th>
    <th colspan="4">OBC</th>
    <th colspan="4">GEN</th>
    <th colspan="4">TOTAL</th>


    
  </tr>
  <tr>
    
    <td>REG_M</td>
    <td>REG_F</td>
    <td>CONT_M</td>
    <td>CONT_F</td>
    <td>REG_M</td>
    <td>REG_F</td>
    <td>CONT_M</td>
    <td>CONT_F</td>
    <td>REG_M</td>
    <td>REG_F</td>
    <td>CONT_M</td>
    <td>CONT_F</td>
    <td>REG_M</td>
    <td>REG_F</td>
    <td>CONT_M</td>
    <td>CONT_F</td>
    <td>REG_M</td>
    <td>REG_F</td>
    <td>CONT_M</td>
    <td>CONT_F</td>
  </tr>
  <tbody>
          
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          
       </tbody>
<tfoot>
          <tr>
              <td colspan="8"><input type="button" value="Add New Row" id="newrows" style="width:600px;">
              <td colspan="8"><input type="submit" value="save" name ="save" style="width:600px;"></tr>
         </tr>
      </tfoot>
      </table>
       <script type="text/javascript">
        $(document).ready(function() {
           $("#newrows").click(function(){
                 var addcontrols="<tr>"
                  addcontrols+="<td><input type='int' name='si'></td>"
                 
                  addcontrols+="<td colspan="2"><input type='text' name='SC'></td>"
                  addcontrols+="<td colspan="2"><input type='text' name='SC'></td>"
                  addcontrols+="<td colspan="2"><input type='text' name='SC'></td>"
                  addcontrols+="<td colspan="2"><input type='text' name='SC'></td>"
                  addcontrols+="<td colspan="2"><input type='text' name='SC'></td>"
                  addcontrols+="<td colspan="2"><input type='text' name='SC'></td>"
                  addcontrols+="<td colspan="2"><input type='text' name='SC'></td>"
                  addcontrols+="<td colspan="2"><input type='text' name='SC'></td>"

                
                     addcontrols+= "</tr>";
                     $("table").append(addcontrols);
           });
        });
    </script>
</form>
</table>
</body>
 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

