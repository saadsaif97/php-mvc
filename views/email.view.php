<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4 text-center">Email</h1>
    <p class="lead text-center">You can send email from here.</p>
  </div>
</div>

<div class="container">

  <div class="row mb-5">
    <div class="col col-lg-8 offset-lg-2">
      <div class="card">
        <div class="card-body">
          <form action="/php-mvc/email" method="POST">
            <div class="form-group">
              <label for="to">To:</label>
              <input type="email" name="to" id="to" class="form-control form-control-sm" required>
            </div>
            <div class="form-group">
              <label for="message">Message:</label>
              <textarea name="message" id="message" cols="30" class="form-control form-control-sm" rows="10" required></textarea>
              <!-- <input type="text" name="message" id="message" class="form-control form-control-sm" required> -->
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-paper-plane"></i> Send Email</button>
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
              <th>Email</th>
              <th>Message</th>
              <td></td>
          </tr>
        </thead>
        <tbody>
          <?php
            if (count($emails) == 0) {
              echo("<td>No data yet</td>");
            }
          ?>
          <?php foreach ($emails as $key => $email) { ?>
            <tr>
              <td><?= $email->email ?></td>
              <td><?= $email->message ?></td>
              <td>
                  <form action="/php-mvc/email?id=<?= $email->id ?>" method="POST">
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

