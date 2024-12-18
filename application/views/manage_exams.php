<?php include"header.php"?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage Exams</h1>
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
              <form method="post" action="#">
                <div class="card-body">
                <div class="row">
                
                <div class="col-sm-6">
                  <label for="manager">Exam Name</label>
                    <input type="text" class="form-control" autocomplete="off"  name="branch_code"  required>
                </div>

                

                <div class="col-sm-6">
                  <label for="itemunit">Date</label>
                  <input type="date" class="form-control" autocomplete="off" name="phonenumber" placeholder="Enter phone number" required>
                </div>

                </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Add Exams</button>
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
            <h3 class="card-title">Exams List</h3>
        </div>
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
              <thead>
                  <tr>
                      <th>#</th>
                      <th>Exam Name</th>
                      <th>Exam Date</th>
                      <th>Actions</th>
                  </tr>
              </thead>
              <tbody>
                 <tr>
                  <td>1</td>
                    <td>First Intenral</td>
                    <td>21/12/2025</td>
                    <td><a  class='btn btn-primary'>Edit</i></a>
                        <button class='btn btn-danger' >Delete</button></td>
                 </tr>
                  <tr>
                  <td>2</td>
                    <td>Second Intenral</td>
                    <td>25/12/2025</td>
                    <td><a  class='btn btn-primary'>Edit</i></a>
                        <button class='btn btn-danger' >Delete</button></td>
                 </tr>
                  <tr>
                  <td>3</td>
                    <td>Third Intenral</td>
                    <td>28/12/2025</td>
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