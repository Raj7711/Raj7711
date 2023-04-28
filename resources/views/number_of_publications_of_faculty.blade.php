<!doctype html>
<html lang="en">
  <head>
    <title>10(b)</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
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
  <h3>12(b)Details of candidates qualified for M.Phil./Ph.D degree under year of report:</h3>
<form action="{{url('/')}}/spublication" method="post">
  @csrf
<table id="customers">
  <tr>
    <th>Development programme.</th>
  <th >No. of faculty benefited</th>
    
    
</tr>
<tbody>
          
          <tr>
            <td></td>
            <td></td>
           
            
            
            
          </tr>
          
       </tbody>
          
          
          
          
             
            
            
          
          
       
<tfoot>
          <tr>
              <td colspan="1"><input type="button" value="Add New Row" id="newrows" style="width:600px;">
             
              <td colspan="1"><input type="submit" value="save" name ="save" style="width:600px;"></tr>
         </tr>
      </tfoot>
      </table>
       <script type="text/javascript">
        $(document).ready(function() {
           $("#newrows").click(function(){
                 var addcontrols="<tr>"
                 addcontrols+="<td><input type='radio' name='publications' value='Papers in Peer Reviewed journals'>Papers in Peer Reviewed journals<br><input type='radio' name='publications' value='Papers in Non-Peer Reviewed Journals'>Papers in Non-Peer Reviewed Journals<br><input type='radio' name='publications' value='Papers in e-Journals'>Papers in e-Journals<br><input type='radio' name='publications' value='Conference Proceedings'>Conference Proceedings<br><input type='radio' name='publications' value='Authored'>Authored<br><input type='radio' name='publications' value='Edited Books Journals'>Edited Books Journals<br><input type='radio' name='publications' value='Monographs'>Monographs<br><input type='radio' name='publications' value='Chapter in books'>Chapter in books</td>"

                 addcontrols+="<td><input type='text' name='faculty_benifite'</td>"
                 
                  
                  
                  
                  
                  
                  
                  
                  
                  
                     addcontrols+= "</tr>";
                     $("table").append(addcontrols);
           });
        });
    </script>
</form>
</body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>