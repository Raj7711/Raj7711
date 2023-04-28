<!DOCTYPE html>
<html>
<head>
 <title>10(a)</title>
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
ul{
  display: flex;
  list-style: none;
  padding:10px;
  margin:50px;
}
ul li{
   padding:20px;
}
</style>
</head>
<body>

<h1>Position of Teaching Faculty</h1>
<form action="value" method="post">
 @csrf
<table id="customers">
  <tr>
    <th>Si no</th>
    <th>Name</th>
    <th>Designation</th>
    <th>Degree & University/Institute From which awarded</th>
    <th>Subject Specialization</th>
</tr>
<tbody>
          @foreach ($positions as $position)
          <tr>
            <td>{{$position->si}}</td>
            <td>{{$position->name}}</td>
            <td>{{$position->des}}</td>
            <td>{{$position->degree}}</td>
            <td>{{$position->sub}}</td>
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
                  addcontrols+="<td><input type='int' name='si'></td>"
                 addcontrols+="<td><input type='text' name='name'></td>"
                 addcontrols+="<td><input type='int' name='des'></td>"
                 addcontrols+="<td><input type='text' name='degree'></td>"
                 addcontrols+="<td><input type='text' name='sub'></td>"
                     addcontrols+= "</tr>";
                     $("table").append(addcontrols);
           });
        });
    </script>
</form>
<ul>
  <li><button><a href="{{url('/pos')}}">1</a></button></li>
  <li><button><a href="{{url('/Gue')}}">2</a></button></li>
  <li><button><a href="{{url('/tnt')}}">3</a></button></li>
  <li><button><a href="{{url('/phd')}}">4</a></button></li>
  <li><button><a href="{{url('/mphil')}}">5</a></button></li>
  <li><button><a href="{{url('/a')}}">6</a></button></li>
  <li><button><a href="{{url('/students')}}">7</a></button></li>
  <li><button><a href="{{url('/student1')}}">8</a></button></li>
  <li><button><a href="{{url('/'">9</a></button></li>
  <li><button><a href="">10</a></button></li>
  <li><button><a href="">11</a></button></li>
  <li><button><a href="">12</a></button></li>
  <li><button><a href="">9</a></button></li>
  <li><button><a href="">10</a></button></li>
  <li><button><a href="">11</a></button></li>
  <li><button><a href="">12</a></button></li>
  <li><button><a href="">9</a></button></li>
  <li><button><a href="">10</a></button></li>
  <li><button><a href="">11</a></button></li>
  
  
</ul>
</body>
</html>


