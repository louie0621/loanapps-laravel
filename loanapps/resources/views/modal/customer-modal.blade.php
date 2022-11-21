<!-- Modal -->
<div class="modal fade" id="addcustomermodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Customer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="forms-sample">
                    <p class="card-description text-primary">
                        Personal Information
                    </p>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Firstname</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="fname">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Middle Initial</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" id="mi">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Lastname</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="lname">
                        </div>
                    </div>
                    <p class="card-description text-primary">
                        Co-maker personal information
                    </p>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Firstname</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="cofname">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Middle Initial</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="comi">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Lastname</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="colname">
                        </div>
                    </div>
                    <p class="card-description text-primary">
                        Loan Details
                    </p>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Date Release</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="loanrelease">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Loan Amount</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control numberonly" id="loanamt">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Interest Rate % per Month</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control numberonly" id="loanrate">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Payment Period</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control numberonly" id="loanperiod">
                        </div>
                        <div class="col-sm-3">
                            <select class="form-select form-select-sm" id="loanperiodtype">
                                <option value="1">Months</option>
                                <option value="2">Years</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Payment Method</label>
                        <div class="col-sm-9">
                            <select class="form-select form-select-sm" id="loanmethod">
                                <option value="1">Monthly</option>
                                <option value="2">Weekly</option>
                                <option value="3">Twice a Month</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Total Amount</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="loantotalamt" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Total Interest</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="totalinterest" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Payable Amount per ?</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="loanpaymentrate" disabled>
                        </div>
                    </div>

                    <button type="button" id="submitcustomerbtn" class="btn btn-primary me-2"><i class="icon-paper-plane"></i> Submit</button>
                    <button class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-secondary" id="sample">sample</button>
                </form>
            </div>
        </div>
    </div>
</div>