<div class = "container">
<div class = "row">
<div class = "col-2"></div>
<div class = "col-8">
<h3>Список Категории</h3>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Имя</th>
      <th scope="col">Описание</th>
      <th scope="col">Дата начала</th>
      <th scope="col">Статус</th>
      <th scope="col">Дата закрытия</th>



    </tr>
  </thead> 
   <tbody>

<?php
foreach($applications as $row){


echo
'<tr>
      <td>'.$row['name'].'</td>
      <td>'.$row['discript'].'</td>
      <td>'.$row['date_start'].'</td>
      <td>'.$row['status'].'</td>
      <td>'.$row['date_end'].'</td>
      
    </tr>';
}
?>
</tbody>
</table>
<form>
    
</form>
</div>
<div class = "col-2"></div>
</div>
</div>