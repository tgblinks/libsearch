<div class="modal fade" role="dialog" id="add_book">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header"><strong>ADD BOOKS</strong></div>
                         <form class="form-horizontal form-material" method="post" id="book_add" action="add.php" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label class="col-md-12"><strong>Book Title</strong></label>
                                        <div class="col-md-12">
                                            <input type="text" id="title" name="title" value="" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12"><strong>Author</strong></label>
                                        <div class="col-md-12">
                                            <input type="text" id="author" name="author" value="" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12"><strong>Edition</strong></label>
                                        <div class="col-md-12">
                                            <input type="text" id="edition" name="edition" value="" class="form-control form-control-line" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12"><strong>Class Number</strong></label>
                                        <div class="col-md-12">
                                            <input type="text" id="classno" name="classno" value="" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12"><strong>Copies Avilable</strong></label>
                                        <div class="col-md-12">
                                            <input type="text" id="copies" name="copies" value="" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12"><strong>Department</strong></label>
                                        <div class="col-md-12">
                                            <input type="text" id="dept" name="dept" value="" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12"><strong>College</strong></label>
                                        <div class="col-md-12">
                                            <input type="text" id="college" name="college" value="" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12"><strong>Room</strong></label>
                                        <div class="col-md-12">
                                            <input type="text" id="room" name="room" value="" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12"><strong>Shelf</strong></label>
                                        <div class="col-md-12">
                                            <input type="text" id="shelf" name="shelf" value="" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12"><strong>Row</strong></label>
                                        <div class="col-md-12">
                                            <input type="text" id="row" name="row" value="" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12"><strong>Upload Photo</strong></label>
                                        <div class="col-md-12">
                                            <input type="file" name="user_image" id="user_image" value="" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success" type="submit" id="submit" name="submit">Add Book</button>
                                        </div>
                                        <div id="status2"></div>
                                        <div class="modal-footer">
                                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>
                                    </div>
                                    </div>
                                </form>
                             </div>
                          </div>
                       </div>