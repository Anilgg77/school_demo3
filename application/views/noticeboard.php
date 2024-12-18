<?php include"header.php"?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Notice Board</h1>
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
                  <label for="manager">Title</label>
                    <input type="text" class="form-control" autocomplete="off"  name="branch_code"  required>
                </div>

                

                <div class="col-sm-6">
                  <label for="itemunit">Date</label>
                  <input type="date" class="form-control" autocomplete="off" name="phonenumber" placeholder="Enter phone number" required>
                </div>

                <div class="col-sm-12">
                  <label for="itemunit">Description</label>
                  <textarea class="form-control"></textarea>
                </div>

                </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Add Notice</button>
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
                      <th>Title</th>
                      <th>Notice</th>
                      <th>Date</th>
                      <th>Actions</th>
                  </tr>
              </thead>
              <tbody>
                 <tr>
                  <td>1</td>
                    <td>Title 1</td>
                    <td>Classes will be held tomorrow</td>
                    <td>21/12/2025</td>
                    <td><a  class='btn btn-primary'>Edit</i></a>
                        <button class='btn btn-danger' >Delete</button></td>
                 </tr>
                 <tr>
                  <td>1</td>
                    <td>Title 2</td>
                    <td>Summary holidays from may25th</td>
                    <td>22/12/2025</td>
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