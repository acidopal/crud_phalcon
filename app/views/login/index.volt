               <form class="form-horizontal" action="{{url("login/login")}}" method="POST">
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="username">Username:</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="username" placeholder="Enter username">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="pass">Password:</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" name="pass" placeholder="Enter password">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-default">Sign In</button>
                    </div>
                  </div>
                </form>