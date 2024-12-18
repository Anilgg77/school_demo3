<?php include"header.php"?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Subjects</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
        <!-- left column --><!-- Visit codeastro.com for more projects -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <form method="#" action="#">
                <div class="card-body">
                <div class="row">
                
                <div class="col-sm-6">
                  <label for="manager">Class name</label>
                    <select class="form-control">
                      <option>Select Class</option>
                      <option>Class 1</option>
                      <option>Class 2</option>
                      <option>Class 3</option>
                      <option>Class 4</option>
                      <option>Class 5</option>
                    </select>
                </div>


                <div class="col-sm-6">
                  <label for="itemunit">Subject Name</label>
                     <input type="text" class="form-control" autocomplete="off"  name="manager_name"  required>
                </div>

                <div class="col-sm-6">
                  <label for="manager">Subject Code</label>
                    <input type="text" class="form-control" autocomplete="off"  name="manager_name"  required>
                </div>
                </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Add Subject</button>
                </div>
              </form>
            </div> 
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
        <div class="col-12">
        <div class="card">
        <div class="card-header">
            <h3 class="card-title">Subjects List</h3>
        </div>
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
              <thead>
                  <tr>
                      <th>#</th>
                      <th>Class Name</th>
                      <th>Subject Name</th>
                      <th>Subject Code</th>
                      <th>Actions</th>
                  </tr>
              </thead>
              <tbody>
                 <tr>
                  <td>1</td>
                  <td>Class 1</td>
                    <td>Subject 1</td>
                    <td>SUB1</td>
                    <td><a  class='btn btn-primary'>Edit</i></a>
                        <button class='btn btn-danger' >Delete</button></td>
                 </tr>
                 <tr>
                  <td>2</td>
                  <td>Class 1</td>
                    <td>Subject 2</td>
                    <td>SUB2</td>
                    <td><a  class='btn btn-primary'>Edit</i></a>
                        <button class='btn btn-danger' >Delete</button></td>
                 </tr>
                 <tr>
                  <td>3</td>
                  <td>Class 1</td>
                    <td>Subject 3</td>
                    <td>SUB3</td>
                    <td><a  class='btn btn-primary'>Edit</i></a>
                        <button class='btn btn-danger' >Delete</button></td>
                 </tr>
                 <tr>
                  <td>4</td>
                  <td>Class 1</td>
                    <td>Subject 4</td>
                    <td>SUB4</td>
                    <td><a  class='btn btn-primary'>Edit</i></a>
                        <button class='btn btn-danger' >Delete</button></td>
                 </tr>
                 <tr>
                  <td>5</td>
                  <td>Class 1</td>
                    <td>Subject 5</td>
                    <td>SUB5</td>
                    <td><a  class='btn btn-primary'>Edit</i></a>
                        <button class='btn btn-danger' >Delete</button></td>
                 </tr>
                 <tr>
                  <td>5</td>
                  <td>Class 1</td>
                    <td>Subject 6</td>
                    <td>SUB6</td>
                    <td><a  class='btn btn-primary'>Edit</i></a>
                        <button class='btn btn-danger' >Delete</button></td>
                 </tr>
              </tbody>
          </table>
      </div>
      </div>
        </div>
        </div>
      </div>
    </section>
<?php include"footer.php"?>