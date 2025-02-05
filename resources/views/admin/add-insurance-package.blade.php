@extends('layouts.admin')
@section('title','Add Package')
@section('content')
@include('includes.banner',['one'=>'Package','two'=>'Create'])
<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <form id="add-account" class="form-group" action="add-account.php" method="post" enctype="multipart/form-data">
                <div class="card">
                    <div class="card-header">
                        <h4>Add Package</h4>
                    </div>
                    <div class="card-body">

                        <div class="form-group">
                            <label>Insurance Company</label>
                            <select class="form-control" name="district" id="">
                                <option value="">Select Insurance Company</option>
                                <option value="">Insurance Company 1</option>
                                <option value="">Insurance Company 2</option>
                                <option value="">Insurance Company 3</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Package Name</label>
                            <input type="text" class="form-control" name="name" required>
                        </div>
                        <div class="form-group">
                            <label>Amount</label>
                            <input type="number" class="form-control" name="name" required>
                        </div>
                        <div class="form-group">
                            <label>Package Year Range</label>
                            <input type="number" class="form-control" min="1" name="name" required>
                        </div>

                    </div>
                    <div class="card-footer text-left">
                        <button class="btn btn-primary mr-1" type="submit" name="submit">Add New</button>
                        <button class="btn btn-secondary" type="reset">Reset</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
