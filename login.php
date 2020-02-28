<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title" id="myModalLabel">Please Login</h4>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="form-signin">

                        <div class="form-group">
                            <div class="col-sm-3">
                                <input type="text" id="inputEmail" class="form-control" placeholder="User Name" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-3">
                                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                            </div>
                        </div>
                        <input type="hidden" id="action">
                        <input type="hidden" id="form">
                        
                    </div>
                </div> <!-- /container -->
                <span   id="txterror">
                    
                </span>
            </div>

            <div class="modal-footer">

                <button class="btn btn-primary"  onclick="IsValiedData();">Sign in</button>
            </div>
        </div>
    </div>
</div>
<script src="js/user.js"></script>