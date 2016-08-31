  <?php
     if ($this->session->has("auth")) {
      $auth = $this->session->get("auth");
      $username=$auth['username'];
      echo "Hallo selamat datang $username ";
      ?>
      <br> <a href="<?= $this->url->get('login/logout') ?>">Logout</a>
      <?php
      }
  ?>
     <h2>User</h2>
        <div class="row">
          <center>
          <form action="<?= $this->url->get('user/search') ?>" class="search" method="POST">
                <input type="text" name="nama" class="form-control input-sm" placeholder="cari nama">
                <button type="submit" class="btn btn-primary btn-sm">Search</button>
              </form>
          </center>
      </div>
      </br>
      <table class="table table-hover">
          <thead>
            <tr>
              <th>Username</th>
              <th>Nama</th>
              <th>Email</th>
              <th>Edit</th>
              <th>Del</th>
            </tr>
          </thead>
          <tbody>
          <?php foreach ($data_user as $v) { ?>
            <tr>
              <td><?= $v->username ?></td>
              <td><?= $v->nama ?></td>
              <td><?= $v->email ?></td>
              <td><a href="user/edit/<?= $v->id ?>">edit</a> </td>
              <td><a href="user/del/<?= $v->id ?>">del</a></td>
            </tr>
          <?php } ?>
          </tbody>
        </table>