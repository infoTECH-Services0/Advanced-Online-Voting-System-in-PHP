<!-- schedule -->
<div class="modal fade" id="schedule">
    <div class="modal-dialog">
        <div class="modal-content" style="border-radius: 20px; box-shadow: 0 0 5px white; border: 3px ridge maroon">
            <div class="modal-header">

              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>

              <h4 class="modal-title"><b>Schedule Voting Time</b></h4>
            </div>


            <div class="modal-body">
              <div class="text-center">

                <form class="form-horizontal" method="POST" action="schedule_save.php">
                  <div class="form-group">
                    <label for="start_schedule" class="col-sm-3 control-label">Valid From: </label>

                    <div class="col-sm-9">
                      <input type="datetime-local" class="form-control" name="start_date" required>
                    </div>
                  </div>

                    <div class="form-group">
                        <label for="end_schedule" class="col-sm-3 control-label">Valid To: </label>

                        <div class="col-sm-9">
                            <input type="datetime-local" class="form-control" name="end_date" required>
                        </div>
                    </div>

              </div>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-primary btn-flat" name="save"><i class="fa fa-save"></i> Set</button>

              </form>

            </div>
        </div>
    </div>
</div>