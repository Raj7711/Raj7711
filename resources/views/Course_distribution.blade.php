<!doctype html>
<html lang="en">
  <head>
    <title>9</title>
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
  border:  1px solid #ddd;
  padding: 8px;
}
#customer th{
  text-align: center;
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
      <form action="value" method="post">
        @csrf
        <table id="customers">
            <tr>
                <th rowspan="2">Title of Programme/Semester</th>
                <th rowspan="2">Total No.of Students appeared</th>
                <th colspan="4">Division</th>
            </tr>
            <tr>
               <td>Distinction%</td>
               <td>I%</td>
               <td>II% </td>
               <td>Pass%</td>
            </tr>
            <tbody>
          @foreach ($courses as $course)
          <tr>
            <td>{{$course->title}}</td>
            <td>{{$course->total}}</td>
            <td>{{$course->dis}}</td>
            <td>{{$course->first}}</td>
            <td>{{$course->second}}</td>
            <td>{{$course->pass}}</td>
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
                  addcontrols+="<td><input type='text' name='title'></td>"
                 addcontrols+="<td><input type='int' name='total'></td>"
                 addcontrols+="<td><input type='int' name='dis'></td>"
                 addcontrols+="<td><input type='int' name='first'></td>"
                 addcontrols+="<td><input type='int' name='second'></td>"
                 addcontrols+="<td><input type='int' name='pass'></td>"
                     addcontrols+= "</tr>";
                     $("table").append(addcontrols);
           });
        });
    </script>
  </form>
  </body>
</html>