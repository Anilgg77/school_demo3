<?php include"header.php"?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add Students</h1>
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
                  <label for="itemunit">Student Name</label>
                     <input type="text" class="form-control" autocomplete="off"  name="manager_name"  required>
                </div>
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
                  <label for="manager">Father's Name</label>
                    <input type="text" class="form-control" autocomplete="off"  name="manager_name"  required>
                </div>
                <div class="col-sm-6">
                  <label for="manager">Roll Number</label>
                    <input type="text" class="form-control" autocomplete="off"  name="manager_name"  required>
                </div>
                <div class="col-sm-6">
                  <label for="manager">Birth Date</label>
                    <input type="date" class="form-control" autocomplete="off"  name="manager_name"  required>
                </div>
                <div class="col-sm-6">
                  <label for="manager">Gender</label>
                    <select class="form-control">
                      <option>Select gender</option>
                      <option>Male</option>
                      <option>Female</option>
                      <option>Others</option>
                    </select>
                </div>

                 <div class="col-sm-6">
                  <label for="manager">phone</label>
                    <input type="text" class="form-control" autocomplete="off"  name="manager_name"  required>
                </div>

                 <div class="col-sm-6">
                  <label for="manager">Address</label>
                    <input type="text" class="form-control" autocomplete="off"  name="manager_name"  required>
                </div>

                </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Add Students</button>
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
            <h3 class="card-title">Students List</h3>
        </div>
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
              <thead>
                  <tr>
                      <th>#</th>
                      <th>Student Name</th>
                      <th>Class</th>
                      <th>Student ID</th>
                      <th>phone</th>
                      <th>Actions</th>
                  </tr>
              </thead>
              <tbody>
                 <tr>
                  <td>1</td>
                  <td>Student1</td>
                    <td>Class1</td>
                    <td>ST1234</td>
                    <td>456975522</td>
                    <td><a  class='btn btn-primary'>Edit</i></a>
                        <button class='btn btn-danger' >Delete</button></td>
                 </tr>
                 <tr>
                  <td>2</td>
                  <td>Student2</td>
                    <td>Class1</td>
                    <td>ST1111</td>
                    <td>456975522</td>
                    <td><a  class='btn btn-primary'>Edit</i></a>
                        <button class='btn btn-danger' >Delete</button></td>
                 </tr>
                 <tr>
                  <td>3</td>
                  <td>Student3</td>
                    <td>Class1</td>
                    <td>ST1236</td>
                    <td>456975522</td>
                    <td><a  class='btn btn-primary'>Edit</i></a>
                        <button class='btn btn-danger' >Delete</button></td>
                 </tr>
                 <tr>
                  <td>4</td>
                  <td>Student4</td>
                    <td>Class1</td>
                    <td>ST1277</td>
                    <td>456975522</td>
                    <td><a  class='btn btn-primary'>Edit</i></a>
                        <button class='btn btn-danger' >Delete</button></td>
                 </tr>
                 <tr>
                  <td>5</td>
                  <td>Student5</td>
                    <td>Class1</td>
                    <td>ST1222</td>
                    <td>456975522</td>
                    <td><a  class='btn btn-primary'>Edit</i></a>
                        <button class='btn btn-danger' >Delete</button></td>
                 </tr>
                 <tr>
                  <td>6</td>
                  <td>Student7</td>
                    <td>Class2</td>
                    <td>ST12358</td>
                    <td>456975522</td>
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