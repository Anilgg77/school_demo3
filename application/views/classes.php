<?php include"header.php"?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Classes</h1>
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
                    <input type="text" class="form-control" autocomplete="off"  name="branch_code"  required>
                </div>

                

                <div class="col-sm-6">
                  <label for="itemunit">Class Code</label>
                     <input type="text" class="form-control" autocomplete="off"  name="manager_name"  required>
                </div>

                <div class="col-sm-6">
                  <label for="manager">Teachers</label>
                    <select class="form-control">
                    	<option>Select Teacher</option>
                    	<option>Raju</option>
                    	<option>Sandhya</option>
                    	<option>Arjun</option>
                    	<option>Jayanth</option>
                    	<option>Manjunath</option>
                    </select>
                </div>
                </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Add Class</button>
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
            <h3 class="card-title">Classes List</h3>
        </div>
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
              <thead>
                  <tr>
                      <th>#</th>
                      <th>Class Name</th>
                      <th>Teacher Name</th>
                      <th>Actions</th>
                  </tr>
              </thead>
              <tbody>
                 <tr>
                  <td>1</td>
                  <td>Class 1</td>
                    <td>Raghu</td>
                    <td><a  class='btn btn-primary'>Edit</i></a>
                        <button class='btn btn-danger' >Delete</button></td>
                 </tr>
                 <tr>
                  <td>2</td>
                  <td>Class 2</td>
                    <td>Manjunath</td>
                    <td><a  class='btn btn-primary'>Edit</i></a>
                        <button class='btn btn-danger' >Delete</button></td>
                 </tr>
                 <tr>
                  <td>3</td>
                  <td>Class 3</td>
                    <td>Jayahth</td>
                    <td><a  class='btn btn-primary'>Edit</i></a>
                        <button class='btn btn-danger' >Delete</button></td>
                 </tr>
                 <tr>
                  <td>4</td>
                  <td>Class 4</td>
                    <td>Arjun</td>
                    <td><a  class='btn btn-primary'>Edit</i></a>
                        <button class='btn btn-danger' >Delete</button></td>
                 </tr>
                 <tr>
                  <td>5</td>
                  <td>Class 5</td>
                    <td>Sandhya</td>
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