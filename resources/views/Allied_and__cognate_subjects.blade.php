<!DOCTYPE html>
<html>
<head>
  <title>8</title>
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
  background-color: red;
  color: white;
}
</style>
</head>
<body>
<h3>8.Allied and cognate subjects</h3>
<form action="value" method="post">
  @csrf
<table id="customers">
  <tr>
    <th>Serial no</th>
    <th>Allied_subjects</th>
    <th>Cognate</th>
  </tr>
  <tbody>
          @foreach ($allieds as $allied)
          <tr>
            <td>{{$allied->serial}}</td>
            <td>{{$allied->alli}}</td>
            <td>{{$allied->cog}}</td>
          </tr>
          @endforeach
       </tbody>
  <tfoot>
         <tr>
              <td colspan="1"><input type="button" value="Add New Row" id="newrows" style="width:400px;">
              <td colspan="2"><input type="submit" value="save" name ="save" style="width:600px;"></tr>
         </tr>
  </tfoot>
</table>
   <script type="text/javascript">
        $(document).ready(function() {
           $("#newrows").click(function(){
                 var addcontrols="<tr>"
                  addcontrols+="<td><input type='int' name='serial'></td>"
                 addcontrols+="<td><input type='text' name='alli'></td>"
                 addcontrols+="<td><input type='text' name='cog'></td>"
                     addcontrols+= "</tr>";
                     $("table").append(addcontrols);
           });
        });
  </script>
 </form>

</body>
</html>
