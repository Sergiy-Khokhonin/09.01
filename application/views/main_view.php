<section class="section">

<div class = "container">
  <div class = "row">
    <div class = "col-2"></div>
    <div class = "col-8">
  <!-- Container Start -->
  <div class="row row-cols-1 row-cols-md-4">
<?php
    $sql = "select * from application";
 
    foreach($application as $row){
    
 echo'<div class="col mb-4">
    <div class="card">
      <img src="image/'.$row['img'].'" class="card-img-top" >
      <div class="card-body">
        <h5 class="card-title">'.$row['name'].'
        <h4 class="card-title">'.$row['name_category']'
        <p class="card-text">'$row['Discription']'
      </div>
    </div>
  </div>';
};
?>
</div>
<div class = "col-2"></div>
</div>
</div>
</div>
</section>