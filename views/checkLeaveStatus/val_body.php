<main>
    <div class="d-flex flex-column justify-content-center">
        <div class="col-md-12 mt-3 px-4">
            <div class="pb-3">
                <a href="ck_leaveForm.php?title=Leave 20Input Form" class="btn btn-outline-light text-dark"><i class="fas fa-angle-left"></i> Back</a>
            </div>
            <!------------------- DataTables Example ----------------->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h4 class="text-center">Leave Status</h4>
                </div>
                <div class="card-body">

                    <!------------------------ Textbox Search ----------------------->
                    <div class="row mb-3 ml-1">
                        <div class="form-group mb-3">
                            <label for="userFirstname">Filter & Search</label>
                            <div class="col-sm">
                                <input type="name" class="form-control" id="filter" onkeyup="filter()" name="filter">
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover text-center text-nowrap" id="userTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th class="text-nowrap">Date Issued</th>
                                    <!-- <th>Employee No.</th> -->
                                    <th>Name</th>
                                    <!-- <th>Designation</th>
                                <th>Department</th> -->
                                    <th>Purpose</th>
                                    <th class="text-nowrap">Leave From</th>
                                    <th class="text-nowrap">Leave To</th>
                                    <th class="text-nowrap">Document</th>
                                    <th class="text-wrap">Reason of Leader</th>
                                    <th class="text-wrap">Date of Leader Approval/Disapproval</th>
                                    <th class="text-wrap">Reason of Superior</th>
                                    <th class="text-wrap">Date of Head Approval/Disapproval</th>
                                    <th class="text-wrap">HR Leave Remarks</th>
                                    <th class="text-nowrap">HR Leave Type</th>
                                    <th>HR Status</th>
                                    <th class="text-wrap">Transportation Allowance</th>
                                    <th>Status</th>
                                    <!-- <th>Approved / Denied by Superior</th>
                                <th>Approved / Denied by Leader</th>
                                <th>Date Approved / Denied by Leader</th>
                                <th>Date Approved / Denied by Superior</th>
                                <th>LeaderApproval Flag</th> -->
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>