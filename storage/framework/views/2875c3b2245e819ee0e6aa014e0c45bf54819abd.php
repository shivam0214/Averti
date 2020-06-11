<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
  <div class="container pt-3">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body"> 
            <div class="row">
                <div class="col-md-3">
                  <div class="tabs-vertical tabs-vertical-primary">
                        <ul class="nav nav-tabs flex-column">
                          <li class="nav-item">
                            <a class="nav-link " data-toggle="tab" href="#contact_list"> Contact</span></a>
                          </li>
                          <li class="nav-item">
                           <a class="btn btn-primary btn-square waves-effect waves-light m-1" data-toggle="tab" href="#new_contact">New Contact</a>
                          </li>
                        </ul>
                        <div>
                              <p> Doctor</p>
                              <p>Facility</p>
                              <p> In Home Help</p>
                              <p>Insurance</p>
                              <p>Pharmacy</p>
                              <p>Other</p>
                        </div>
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="tab-content">
                    <div id="new_contact" class="container tab-pane fade">
                      <form>
                           <div class="form-group">
                              <label for="input-6">Title</label>
                              <input type="text" class="form-control form-control" id="input-6">
                           </div>
                           <div class="form-group">
                              <label for="input-7">Company</label>
                              <input type="text" class="form-control form-control" id="input-7">
                           </div>
                           <div class="form-group">
                              <label for="input-8">Description</label>
                              <input type="text" class="form-control form-control" id="input-8" >
                           </div>
                           <div class="form-group">
                              <label for="input-9">Contact Type </label>
                            <select class="custom-select" id="inputGroupSelect01">
                              <option selected>Choose...</option>
                              <option value="1">Legal</option>
                              <option value="2">Financial</option>
                              <option value="3">Home Help</option>           
                              <option value="4">Other</option>
                            </select>
                           </div>
                           <div class="form-group">
                              <label for="input-10">Mobile Number</label>
                              <input type="number" class="form-control form-control" id="input-10" >
                           </div>
                        
                           <div class="form-group">
                              <label for="input-10">Email</label>
                              <input type="email" class="form-control form-control" id="input-11"></textarea> 
                           </div>
                           <div class="form-group">
                              <label for="input-11">Website</label>
                              <input type="text" class="form-control form-control" id="input-11"></textarea> 
                           </div>
                            <div class="form-group">
                              <label for="input-12">Address</label>
                              <input type="text" class="form-control form-control" id="input-12"></textarea> 
                           </div>
                         
                           <div class="form-group">
                              <label for="input-10">Notes</label>
                              <textarea type="text" class="form-control form-control" id="input-10"></textarea> 
                           </div>
                           
                           <div class="form-group">
                              <button type="submit" class="btn btn-primary px-5"> Create</button>
                           </div>
                      </form>
              
                    </div>
                    <div id="contact_list" class="container tab-pane active ">
                      <div class="table-responsive">
                      <h5>Contact List</h5>
                      <table class="table">
                    <thead>
                      <tr> <th>Name</th>
                          <th>Company</th>
                          <th>Contact Type</th>
                          <th>Mobile Number</th>
                          <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Jhone</td>
                        <td>Web</td>
                        <td>Other</td>
                        <td>888888888</td>
                        <td><a href="#">Edit</a></td>
                      </tr>
                    </tbody>
                      </table>
                    </div>
                  </div>
                </div>
            </div><!--End Row-->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('main.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('main.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\averti\resources\views/contact/contact.blade.php ENDPATH**/ ?>