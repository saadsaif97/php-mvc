<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4 text-center">My Academy Dashboard</h1>
    <p class="lead text-center">Here you can manage Students, Teachers and Courses.</p>
  </div>
</div>

<div class="container">
   
   <div class="row mb-4">
    <div class="col col-md-8 offset-md-2">
      <div class="card">
        <div class="card-header">
          Report
        </div>
        <div class="card-body">
          <p class="d-flex justify-content-between"><span>Total students:</span> <span><?= count($students) ?></span></p>
          <p class="d-flex justify-content-between"><span>Total teachers:</span> <span><?= count($teachers) ?></span></p>
          <p class="d-flex justify-content-between"><span>Total courses:</span> <span><?= count($courses) ?></span></p>
          <p class="d-flex justify-content-between"><span>Total emails:</span> <span><?= count($emails) ?></span></p>
        </div>
        <div class="card-footer">
          <form action="/php-mvc/" method="POST">
            <button type="submit" class="btn btn-sm btn-primary">
              <i class="fas fa-download text-white"></i>

              Download Report
            </button>
          </form>
        </div>
      </div>
    </div>
   </div>

   <div class="row">
    <div class="col col-md-8 offset-md-2">
      <div class="card">
        <div class="card-header">
          APP FEATURES
        </div>
        <div class="card-body">
          <p><i class="fas fa-check-circle text-success"></i> MVC</p>
          <p><i class="fas fa-check-circle text-success"></i> PDO</p>
          <p><i class="fas fa-check-circle text-success"></i> Read, Insert and Delete using PDO query</p>
          <p><i class="fas fa-check-circle text-success"></i> More than 10 database queries</p>
          <p><i class="fas fa-check-circle text-success"></i> Download report</p>
          <p><i class="fas fa-check-circle text-success"></i> Beautiful and consistent design</p>
          <p><i class="fas fa-check-circle text-success"></i> Separation of concerns</p>
          <p><i class="fas fa-check-circle text-success"></i> Send email ( it will work on live server )</p>
        </div>
      </div>
    </div>
   </div>


</div>
