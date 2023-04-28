<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
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
<body>
<h1>Details of Guest lecturers under year of report:</h1>
<table id="customers">
  <tr>
    <th>Si no</th>
    <th>Department_id</th>
    <th>Name</th>
    <th>Research Degrees</th>
  
    <th>Subject Specialization</th>
    <th colspan="3">Button</th>
  </tr>
  <tbody>
    @foreach($guestlecturers as $ptfaculty)
    <tr>
        <td>{{$ptfaculty->id}}</td>
        <td>{{$ptfaculty->department_id}}</td>
        <td>{{$ptfaculty->department_name}}</td>
        
        <td>{{$ptfaculty->degree}}</td>
        <td>{{$ptfaculty->subject_specification}}</td>
        <td><a href="{{url('/delete')}}/{{$ptfaculty->id}}">
        
      <button class="good">ADD <button></a>
        
</td>
<td><a href="{{url('/delete')}}/{{$ptfaculty->id}}">
        
        <button class="good">EDIT<button></a>
          
  </td>
  <td><a href="{{url('/delete')}}/{{$ptfaculty->id}}">
        
      <button class="good">DELETE <button></a>
        
</td>
        


        
</tr>
@endforeach

</tbody>
  

</table>

</body>
</html>