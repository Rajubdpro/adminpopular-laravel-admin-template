<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
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
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>

<table id="customers" style="max-width:600px;width:100%;margin:0 auto;">
  
  <tr>
     <td colspan="2" style="text-align: center"><h2>{{__('New Customer Contact')}}</h2> </td>
  </tr>

  <tr>
    <td>{{__('Name')}}</td>
    <td>{{clean($data['name'])}}</td>
  </tr>

  <tr>
    <td>{{__('Email')}}</td>
    <td>{{clean($data['email'])}}</td>
  </tr>

   <tr>
    <td>{{__('Subject')}}</td>
    <td>{{clean($data['subject'])}}</td>
  </tr>

   <tr>
    <td>{{__('Message')}}</td>
    <td>{{clean($data['message'])}}</td>
  </tr>
 
</table>
</body>
</html>
