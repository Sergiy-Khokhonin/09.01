<div class = "container">
<div class = "row">
<div class = "col-2"></div>
<div class = "col-8">
<h3>Список заказов</h3>
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
foreach($application as $row){


echo
'<tr>
      <td>'.$row['name'].'</td>
      <td>'.$row['discription'].'</td>

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