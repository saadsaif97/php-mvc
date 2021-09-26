<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4 text-center">Courses</h1>
    <p class="lead text-center">Here you can manage Courses.</p>
  </div>
</div>

<div class="container">

  <div class="row mb-5">
    <div class="col col-lg-8 offset-lg-2">
      <div class="card">
        <div class="card-body">
          <form action="/php-mvc/courses" method="POST">
            <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" name="name" id="name" class="form-control form-control-sm" required>
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-sm btn-primary" value="Create">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

   <div class="table-responsive">
     <table class="table">
      <thead>
          <tr>
              <th>Name</th>
              <th>DELETE</th>
          </tr>
        </thead>
        <tbody>
          <?php
            if (count($courses) == 0) {
              echo("<td>No data yet</td>");
            }
          ?>
          <?php foreach ($courses as $key => $course) { ?>
            <tr>
              <td><?= $course->name ?></td>
              <td>
                  <form action="/php-mvc/courses?id=<?= $course->id ?>" method="POST">
                    <button type="submit" class="btn btn-sm btn-danger">
                      <i class="fas fa-trash text-white"></i>
                    </button>
                  </form>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
   </div>
</div>

