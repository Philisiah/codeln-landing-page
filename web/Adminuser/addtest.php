<?php include('header.php') ?>
<?php include('menu.php') ?>

            <div class="col-md-6">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <div class="panel-title"><b>Add Test</b>
                      </div>

                      <div class="panel-options">
                        <a class="bg" data-target="#sample-modal-dialog-1" data-toggle="modal" href="#sample-modal"><i class="entypo-cog"></i></a>
                        <a data-rel="collapse" href="#"><i class="entypo-down-open"></i></a>
                        <a data-rel="close" href="#!/tasks" ui-sref="Tasks"><i class="entypo-cancel"></i></a>
                      </div>
                    </div>

                    <div class="panel-body">
                      <form role="form">
                        <div class="form-group">
                          <input class="form-control input-lg" type="text" placeholder="Enter description">
                        </div>

                        <div class="form-group">
                        <select class="form-control">
                          <option value="">Chooses stack  </option>
                        </select>
                      </div>

                        <div class="form-group">
                          <input class="form-control input-sm" type="text" placeholder="Specify Deliverables  ">
                        </div>

                        <div class="form-group">
                          <select class="form-control input-lg">
                            <option value="">number of people</option>
                          </select>
                        </div>

                        <div class="form-group">
                          <select class="form-control">
                            <option value="">Payment section</option>
                          </select>
                        </div>

                        <div class="form-group">
                        <input class="form-control input-sm" type="text" placeholder="Publish Test and get test link">
                        </div>

                        <div class="form-group">
                        <input class="form-control input-sm" type="text" placeholder="View Test">
                        </div>
                        <div class="btn-group-vertical">
                        <button type="button" class="btn btn-danger"><i class="glyphicon glyphicon-home"></i> valider</button>
                      </div>
                    </div>
                    </div>

                    
                </div>
        </div><!-- content -->
      </div>
    </div>
    <!--footer-->
    <div class="site-footer">
      <div class="container">
<?php include('footer.php') ?>        