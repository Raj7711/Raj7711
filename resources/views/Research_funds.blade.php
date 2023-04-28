<!doctype html>
<html lang="en">
  <head>
    <title>19</title>
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
  </head>
  <style>
  #customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

 #customers th {
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
  <body>
  <form action="value" method="post">
    @csrf
  <table id="customers">
        <tr>
            <th>Nature of project</th>
            <th>Duration/year</th>
            <th>Name of the funding agency</th>
            <th>Total grant sanctioned</th>
            <th>Received</th>
        </tr>
        <tbody>
          @foreach ($funds as $fund)
          <tr>
            <td>{{$fund->nature}}</td>
            <td>{{$fund->year}}</td>
            <td>{{$fund->name}}</td>
            <td>{{$fund->total}}</td>
            <td>{{$fund->received}}</td>
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
                  addcontrols+="<td><input type='text' name='nature' placeholder='Enter nature of project'></td>"
                 addcontrols+="<td><input type='int' name='year' placeholder='Enter the Year'></td>"
                 addcontrols+="<td><input type='text' name='name' placeholder='Enter the Agency'></td>"
                 addcontrols+="<td><input type='int' name='total' placeholder='Total grant sanctioned'></td>"
                 addcontrols+="<td><input type='int' name='received' placeholder='Enter Received'></td>"
                     addcontrols+= "</tr>";
                     $("table").append(addcontrols);
           });
        });
    </script>
    </form>
  </body>
</html>