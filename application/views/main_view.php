<section class="section">

<div class = "container">
  <div class = "row">
    <div class = "col-2"></div>
    <div class = "col-8">
  <!-- Container Start -->
  <div class="row row-cols-1 row-cols-md-4">
<?php
 

    foreach($applications as $row){
    
      echo'  <div class="col">
      <div class="card">
        <img src="image/'.$row['photo'].'" class="card-img-top" alt="..." width="400px"   height="400px">
        <div class="card-body">
          <h5 class="card-title">'.$row['name'].'</h5>
          <p class="card-text">'.$row['discription'].'</p>
          <p class="card-text">Дата подачи:'.$row['date_start'].'</p>
          <p class="card-text">Дата выполнения:'.$row['date_end'].'</p>
          <p class="card-text">Автор: '.$row['fio'].'</p>
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