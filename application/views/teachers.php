<?php include"header.php"?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Teachers</h1>
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
                  <label for="manager">teacher name</label>
                    <input type="text" class="form-control" autocomplete="off"  name="branch_code"  required>
                </div>

                

                <div class="col-sm-6">
                  <label for="itemunit">Phone Number</label>
                  <input type="number" class="form-control" autocomplete="off" name="phonenumber" placeholder="Enter phone number" required>
                </div>

                <div class="col-sm-6">
                  <label for="manager">email</label>
                    <input type="text" class="form-control" autocomplete="off"  name="manager_name"  required>
                </div>
                </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Add Teachers</button>
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
            <h3 class="card-title">Teachers List</h3>
        </div>
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
              <thead>
                  <tr>
                      <th>#</th>
                      <th>Teacher Name</th>
                      <th>Phone</th>
                      <th>Email</th>
                      <th>Actions</th>
                  </tr>
              </thead>
              <tbody>
                 <tr>
                  <td>1</td>
                    <td>Raghu</td>
                    <td>123456789</td>
                    <td>teacher1@gmail.com</td>
                    <td><a  class='btn btn-primary'>Edit</i></a>
                        <button class='btn btn-danger' >Delete</button></td>
                 </tr>
                 <tr>
                  <td>2</td>
                    <td>Sanjay</td>
                    <td>1234565659</td>
                    <td>teacher2@gmail.com</td>
                    <td><a  class='btn btn-primary'>Edit</i></a>
                        <button class='btn btn-danger' >Delete</button></td>
                 </tr>
                 <tr>
                  <td>3</td>
                    <td>Sandhya</td>
                    <td>123456889</td>
                    <td>teacher3@gmail.com</td>
                    <td><a  class='btn btn-primary'>Edit</i></a>
                        <button class='btn btn-danger' >Delete</button></td>
                 </tr>
                 <tr>
                  <td>4</td>
                    <td>Prajval</td>
                    <td>123456857</td>
                    <td>teacher4@gmail.com</td>
                    <td><a  class='btn btn-primary'>Edit</i></a>
                        <button class='btn btn-danger' >Delete</button></td>
                 </tr>
                 <tr>
                  <td>5</td>
                    <td>Revathi</td>
                    <td>123489589</td>
                    <td>teacher5@gmail.com</td>
                    <td><a  class='btn btn-primary'>Edit</i></a>
                        <button class='btn btn-danger' >Delete</button></td>
                 </tr>
                 <tr>
                  <td>6</td>
                    <td>Jayanth</td>
                    <td>123454589</td>
                    <td>teacher6@gmail.com</td>
                    <td><a  class='btn btn-primary'>Edit</i></a>
                        <button class='btn btn-danger' >Delete</button></td>
                 </tr>
                 <tr>
                  <td>7</td>
                    <td>Raghu</td>
                    <td>123456789</td>
                    <td>teacher1@gmail.com</td>
                    <td><a  class='btn btn-primary'>Edit</i></a>
                        <button class='btn btn-danger' >Delete</button></td>
                 </tr>
                 <tr>
                  <td>8</td>
                    <td>Raghu</td>
                    <td>123456789</td>
                    <td>teacher1@gmail.com</td>
                    <td><a  class='btn btn-primary'>Edit</i></a>
                        <button class='btn btn-danger' >Delete</button></td>
                 </tr>
                 <tr>
                  <td>9</td>
                    <td>Raghu</td>
                    <td>123456789</td>
                    <td>teacher1@gmail.com</td>
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