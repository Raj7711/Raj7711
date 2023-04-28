<!DOCTYPE html>
<html>
<head>
 <title>4(b)</title>
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
<h1>4(b)Details of Guest lecturers under year of report:</h1>
<form action="value" method="post">
 @csrf
<table id="customers">
  <tr>
    <th>Si no</th>
    <th>Name</th>
    <th>Research Degrees</th>
    <th>Subject Specialization</th>
  </tr>
  <tbody>
          @foreach ($guests as $guest)
          <tr>
            <td>{{$guest->si}}</td>
            <td>{{$guest->name}}</td>
            <td>{{$guest->research}}</td>
            <td>{{$guest->subject}}</td>
          </tr>
          @endforeach
       </tbody>
  <tfoot>
          <tr>
              <td colspan="3"><input type="button" value="Add New Row" id="newrows" style="width:600px;">
              <td colspan="1"><input type="submit" value="save" name ="save" style="width:600px;"></tr>
         </tr>
      </tfoot>
      </table>
       <script type="text/javascript">
        $(document).ready(function() {
           $("#newrows").click(function(){
                 var addcontrols="<tr>"
                  addcontrols+="<td><input type='int' name='si'></td>"
                 addcontrols+="<td><input type='text' name='name'></td>"
                 addcontrols+="<td><input type='int' name='research'></td>"
                 addcontrols+="<td><input type='text' name='subject'></td>"
                     addcontrols+= "</tr>";
                     $("table").append(addcontrols);
           });
        });
    </script>
</form>
 </body>
</html>