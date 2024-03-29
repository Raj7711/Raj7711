<!doctype html>
<html lang="en">
  <head>
    <title>17</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
    <form action="insert" method="post">
      @csrf
      <h1>17.Number of Collaboration.</h1>
      <table id="customers">
        <tr>
            <th>International</th>
            <th>National</th>
            <th>Any other</th>
        </tr>
        <tr>
          <td><input type="int" name="international"></td>
          <td><input type="int" name="national"></td>
          <td><input type="int" name="other"></td>
        </tr>
        <tbody>
          @foreach ($collaborations as $collaboration)
             <tr>
              <td>{{$collaboration->international}}</td>
              <td>{{$collaboration->national}}</td>
              <td>{{$collaboration->other}}</td>
             </tr>
         @endforeach
         </tbody>
        <tfoot>
          <tr>
              <td colspan="2"><input type="submit" value="save" name ="save" style="width:600px;"></tr>
         </tr>
      </tfoot>
   </table>
  </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>