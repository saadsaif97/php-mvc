<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4 text-center">Teachers</h1>
    <p class="lead text-center">Here you can manage Teachers.</p>
  </div>
</div>

<div class="container">

  <div class="row mb-5">
    <div class="col col-lg-8 offset-lg-2">
      <div class="card">
        <div class="card-body">
          <form action="/php-mvc/teachers" method="POST">
            <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" name="name" id="name" class="form-control form-control-sm" required>
            </div>
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" name="email" id="email" class="form-control form-control-sm" required>
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
              <th>Email</th>
              <th>Delete</th>
          </tr>
        </thead>
        <tbody>
          <?php
            if (count($teachers) == 0) {
              echo("<td>No data yet</td>");
            }
          ?>
          <?php foreach ($teachers as $key => $teacher) { ?>
            <tr>
              <td><?= $teacher->name ?></td>
              <td><?= $teacher->email ?></td>
              <td>
                <form action="/php-mvc/teachers?id=<?= $teacher->id ?>" method="POST">
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
