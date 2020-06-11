<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
          <div class="card">
                <div class="card-body">
                  <nav> 
                  <ul class="nav nav-tabs nav-tabs-primary nav-justified">
                    <li class="nav-item">
                      <a class="nav-link active" data-toggle="tab" href="#suggest"> Suggest</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#progress"> Progress</span></a>
                    </li>
                      <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#complete">Completed</span></a>
                    </li>
                   <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#cancelled"> Cancelled</span></a>
                    </li>
                  </ul>
                  </nav>
                  <!-- Tab panes -->
                  <div class="tab-content">
  							     <a class="btn btn-primary btn-square waves-effect waves-light m-1" data-toggle="tab" href="#new_task">New Task</a>
  		                <div id="new_task" class="container tab-pane fade">
  		                     	<div class="offset-3">
            		           <form  method="POST" action="#">
                             <div class="form-group">
                              <label for="input-6">Title</label>
                              <input type="text" class="form-control form-control" id="input-6">
                             </div>
                             <div class="form-group">
                              <label for="input-7">Deadline</label>
                              <input type="date" class="form-control form-control" id="input-7">
                             </div>
                             <div class="form-group">
                              <label for="input-8">Responsible person</label>
                              <input type="text" class="form-control form-control" id="input-8" >
                             </div>
                             <div class="form-group">
                              <label for="inputGroupSelect01">Category</label>
                              <select class="custom-select" id="inputGroupSelect01">
                                <option selected>Choose...</option>
                                <option value="1">Legal</option>
                                <option value="2">Financial</option>
                                <option value="3">Other</option>
                              </select>
                             </div>
                             <div class="form-group">
                              <label for="input-10">Status</label>
                                <select class="custom-select" id="inputGroupSelect01">
                                <option selected>Choose...</option>
                                <option value="1">Planned</option>
                                <option value="2">In Progress</option>
                              </select>                 
                               </div>            
                             <div class="form-group">
                              <label for="input-10">Description</label>
                              <textarea type="text" class="form-control form-control" id="input-10"></textarea> 
                             </div>
                             <div class="form-group">
                              <button type="submit" class="btn btn-primary px-5"> Create</button>
                            </div>
                          </form>
                
                    </div>
                  </div>
                  <div id="suggest" class="container tab-pane active">
                    <h5>Suggest</h5>
                    <p>Start by customizing your needs or work with your care coordinator to determine the right priorities.</p>
                    <div class="table-responsive">
                    <table class="table">
                      <thead>
                       <tr> <th>Created</th>
                        <th>Target Compltion Date </th>
                        <th>Status</th>
                        <th>Category</th>
                         <th>Action</th> 
                         </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Dec/12/2019</td>
                          <td>No Date Set</td>
                          <td> Complete</td>
                          <td>Other</td>
                          <td><a href="#">Edit</a></td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                  </div>
                  <div id="Progress" class="container tab-pane fade">
                      <h5>In Progress (1 task)
                          </h5>
                          <p>Making progress! Love that. Wellthy experts can help if needed.</p>

                  </div>
                  <div id="complete" class="container tab-pane fade">
                        <h5>Complete (2 tasks)
                            </h5>
                          <p>    
                            Wow, look at you. Taking care like a pro.
                            </p>
                      <div class="table-responsive">
                          <table class="table">
                            <thead>
                             <tr> <th>Created</th>
                              <th>Target Compltion Date </th>
                              <th>Status</th>
                              <th>Category</th>
                               <th>Action</th> 
                               </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>Dec/12/2019</td>
                                <td>No Date Set</td>
                                <td> Complete</td>
                                <td>Other</td>
                                <td><a href="#">Edit</a></td>
                              </tr>
                            </tbody>
                          </table>
                      </div>
                  </div>
                  <div id="cancelled" class="container tab-pane fade">
                        <h5>Cancelled (1 task)</h5>
                           <p> Click on an existing task below to see updates or create a new task.</p>
                        <div class="table-responsive">
                          <table class="table">
                            <thead>
                             <tr> <th>Created</th>
                              <th>Target Compltion Date </th>
                              <th>Status</th>
                              <th>Category</th>
                               <th>Action</th> 
                               </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>Dec/12/2019</td>
                                <td>No Date Set</td>
                                <td> Cancelled</td>
                                <td>Other</td>
                                <td><a href="#">Edit</a></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                    </div>                   
                </div>     
        </div>
      </div>
    </div>
  </div>
</div>      
  
<?php $__env->stopSection(); ?>


<?php echo $__env->make('main.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('main.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\averti\resources\views/task/task.blade.php ENDPATH**/ ?>