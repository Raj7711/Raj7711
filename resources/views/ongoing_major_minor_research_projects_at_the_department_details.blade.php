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
@livewireStyles
  </head>
  <body>
    <livewire:counter/>
  <h3>12(b)Details of candidates qualified for M.Phil./Ph.D degree under year of report:</h3>
<form action="{{url('/')}}/sproject" method="post">
  @csrf
<table id="customers">
  <tr>
    <th>Title of project</th>
    <th>Nature of project</th>
  
    <th >Funding/Sponsoring Agency</th>
    <th>Amount</th>
    <th >During on year</th>
    <th>Name of principle invistigator/Co-PI</th>
    <th >Sanctioned</th>
    <th>Submmitted</th>
   
</tr>
<tbody>
          @foreach($project as $pro)
          <tr>
            
            <td>{{$pro->title}}</td>
            <td>{{$pro->project}}</td>
            <td>{{$pro->funding}}</td>
            <td>{{$pro->amount}}</td>
            <td>{{$pro->year}}</td>
            <td>{{$pro->investigator}}</td>
            <td>{{$pro->Sanctioned}}</td>
            <td>{{$pro->submit}}</td>
            
            
            
            
          </tr>
          @endforeach
          
       </tbody>
          
          
          
          
             
            
            
          
          
       
<tfoot>
          <tr>
              <td colspan="3"><input type="button" value="Add New Row" id="newrows" style="width:600px;">
             
              <td colspan="3"><input type="submit" value="save" name ="save" style="width:600px;"></tr>
         </tr>
      </tfoot>
      </table>
       <script type="text/javascript">
        $(document).ready(function() {
           $("#newrows").click(function(){
                 var addcontrols="<tr>"
                 addcontrols+="<td><input type='text' name='title' value=''></td>"
                 addcontrols+="<td><input type='radio' id='gender' name='project' value='Major'>Major<br><input type='radio' id='gender' name='project' value='Minor'>Minor<br><input type='radio' id='gender' name='project' value='Interdisplinary project'>Interdisciplinary Projects<br><input type='radio' id='gender' name='project' value='Industry sponsored'>Industry sponsored<br><input type='radio' id='gender' name='project' value='Project sponsored by university/collages'>Project sponsored by university/collages<br><input type='radio' id='gender' name='project' value='Consultancy'>Consultancy <br><input type='radio' id='gender' name='project' value='Any other'>Anyother<br><input type='radio' id='gender' name='project' value='Total'>Total</td>"
                addcontrols+="<td><input type='text' id='gender' name='funding' value=''></td>"
                 addcontrols+="<td><input type='text' id='gender' name='amount' value=''></td>"
                 addcontrols+="<td><input type='text' id='gender' name='year' value=''></td>"
                 addcontrols+="<td><input type='text' id='gender' name='investigator' value=''></td>"
                 addcontrols+="<td><input type='text' id='gender' name='Sanctioned' value=''></td>"
                 addcontrols+="<td><input type='text' id='gender' name='submit' value=''></td>"
                 
                  
                  
                  
                  
                  
                  
                  
                  
                  
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
    @livewireScripts
  </body>
</html>