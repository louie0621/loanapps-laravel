@extends('layouts.apps')

@section('content')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        <div class="d-sm-flex align-items-center justify-content-between">
                            <h4 class="card-title">Customers list</h4>
                            <div>
                                <div class="btn-wrapper">
                                    <a href="#" class="btn btn-otline-dark btn-sm"><i class="icon-printer"></i> Print</a>
                                    <a href="#" class="btn btn-primary text-white me-0 btn-sm" data-toggle="modal" data-target="#addcustomermodal"><i class="icon-plus"></i> Add</a>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>
                                            Name
                                        </th>
                                        <th>
                                            Loan Amount
                                        </th>
                                        <th>
                                            Partial Payment
                                        </th>
                                        <th>
                                            Unpaid Balance
                                        </th>
                                        <th>
                                            Deadline
                                        </th>
                                        <th>
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            Henry Tom
                                        </td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>
                                            $ 150.00
                                        </td>
                                        <td>
                                            June 16, 2015
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            @include('modal.customer-modal')
        </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->
    <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2021. All rights reserved.</span>
        </div>
    </footer>
    <!-- partial -->
</div>
@endsection

@section('script')

<script>
    $(document).ready(function() {

        $(document).on("click", "#submitcustomerbtn", function(e) {
            
            var error = [];

            if ($("#fname").val().length > 0) {
                $("#fname").removeClass("is-invalid");
            } else {
                $("#fname").addClass("is-invalid");
                error.push("1")
            }
            if ($("#mi").val().length > 0) {
                $("#mi").removeClass("is-invalid");
            } else {
                $("#mi").addClass("is-invalid");
                error.push("1")
            }
            if ($("#lname").val().length > 0) {
                $("#lname").removeClass("is-invalid");
            } else {
                $("#lname").addClass("is-invalid");
                error.push("1")
            }
            if ($("#cofname").val().length > 0) {
                $("#cofname").removeClass("is-invalid");
            } else {
                $("#cofname").addClass("is-invalid");
                error.push("1")
            }
            if ($("#comi").val().length > 0) {
                $("#comi").removeClass("is-invalid");
            } else {
                $("#comi").addClass("is-invalid");
                error.push("1")
            }
            if ($("#colname").val().length > 0) {
                $("#colname").removeClass("is-invalid");
            } else {
                $("#colname").addClass("is-invalid");
                error.push("1")
            }
            if ($("#loanrelease").val().length > 0) {
                $("#loanrelease").removeClass("is-invalid");
            } else {
                $("#loanrelease").addClass("is-invalid");
                error.push("1")
            }
            if ($("#loanamt").val().length > 0) {
                $("#loanamt").removeClass("is-invalid");
            } else {
                $("#loanamt").addClass("is-invalid");
                error.push("1")
            }
            if ($("#loanrate").val().length > 0) {
                $("#loanrate").removeClass("is-invalid");
            } else {
                $("#loanrate").addClass("is-invalid");
                error.push("1")
            }
            if ($("#loanperiod").val().length > 0) {
                $("#loanperiod").removeClass("is-invalid");
            } else {
                $("#loanperiod").addClass("is-invalid");
                error.push("1")
            }
            if (error.length <= 0) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });
                $.ajax({
                    url: "{{ route('storecustomer') }}",
                    method: 'POST',
                    data: {
                        fname: $('#fname').val(),
                        mi: $('#mi').val(),
                        lname: $('#lname').val(),
                        cofname: $('#cofname').val(),
                        comi: $('#comi').val(),
                        colname: $('#colname').val(),
                        releasedate: $('#loanrelease').val(),
                        loanamount: $('#loanamt').val(),
                        loanrate: $('#loanrate').val(),
                        loanperiod: $('#loanperiod').val(),
                        loanmethod: $("#loanmethod").children("option:selected").val(),
                        loantotalamount: $('#loantotalamt').val(),
                        loanpaymentrate: $('#loanpaymentrate').val(),
                        _token: '{!! csrf_token() !!}'
                    },
                    dataType: "json",
                    success: function(result) {

                    },
                    error: function(data, textStatus, errorThrown) {
                        console.log(data);

                    },
                });
            }


        })

    })
</script>

@endsection