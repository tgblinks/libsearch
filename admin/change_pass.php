<div class="modal fade" role="dialog" id="Password_change">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">CHANGE PASSWORD</div>
                        <form method="post" action="change_password.php" id="change_password">
                            <div class="form-group">
                                     <label class="col-md-12"><strong>Old Password</strong></label>
                                     <div class="col-md-12">
                                       <input type="Password" id="old_password" name="old_password" value="" class="form-control form-control-line">
                                     </div>
                                </div>
                             <div class="form-group">
                                   <label class="col-md-12"><strong>New Password</strong></label>
                                     <div class="col-md-12">
                                     <input type="Password" id="new_password" name="new_password" value="" class="form-control form-control-line">
                                 </div>
                             </div>
                             <div class="form-group">
                                   <label class="col-md-12"><strong>Retype Password</strong></label>
                                  <div class="col-md-12">
                                   <input type="Password" id="confirm_password" name="confirm_password" value="" class="form-control form-control-line">
                                     </div>
                            </div>
                             <div class="form-group">
                                <div class="col-sm-12">
                                    <button class="btn btn-success" id="submit">Submit</button>
                                </div>
                                <div id="status"></div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                       </form>
                    </div>
                </div>
            </div>
