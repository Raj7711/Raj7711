<!doctype html>
<html lang="en">
  <head>
    <title>16</title>
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

#customers td,#customers th {
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
    <table id="customers">
      <tr>
         <th>Level</th>
         <th>International</th>
         <th>National</th>
         <th>State</th>
         <th>University</th>
         <th>College</th>
      </tr>
      <tr>
        <td>Number</td>
        <td><input type="int" name="inter"></td>
        <td><input type="int" name="nat"></td>
        <td><input type="int" name="Stat"></td>
        <td><input type="int" name="uni"></td>
        <td><input type="int" name="col"></td>
      </tr>
      <tr>
        <td>Sponsoring Agencies</td>
        <td><input type="int" name="inter"></td>
        <td><input type="int" name="nat"></td>
        <td><input type="int" name="Stat"></td>
        <td><input type="int" name="uni"></td>
        <td><input type="int" name="col"></td>
      </tr>
      <tfoot>
          <tr>
              <td colspan="2"><input type="submit" value="save" name ="save" style="width:600px;"></tr>
         </tr>
    </table>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>