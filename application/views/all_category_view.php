<div class = "container">
<div class = "row">
<div class = "col-2"></div>
<div class = "col-8">
<h3>Список Категории</h3>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Название Категорий</th>




    </tr>
  </thead> 
   <tbody>

<?php
foreach($category as $row){


echo
'<tr>
      <td>'.$row['name_category'].'</td>

      
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