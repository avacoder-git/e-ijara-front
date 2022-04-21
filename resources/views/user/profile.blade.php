@extends('layouts.dashboard')

@section('content')
<div class="main-card mb-3 card">
        <div class="card-body"><h5 class="card-title">Фойдаланувчи малумотлари</h5>
                <form class="">
                        <div class="form-row">
                                <div class="col-md-4">
                                        <div class="position-relative form-group">
                                                <label for="exampleCity" class="">City</label>
                                                <input name="city" id="exampleCity" type="text" class="form-control">
                                        </div>
                                </div>
                                <div class="col-md-4">
                                        <div class="position-relative form-group">
                                                <label for="exampleState" class="">State</label>
                                                <input name="state" id="exampleState" type="text" class="form-control">
                                        </div>
                                </div>
                                <div class="col-md-4">
                                        <div class="position-relative form-group">
                                                <label for="exampleZip" class="">Zip</label>
                                                <input name="zip" id="exampleZip" type="text" class="form-control">
                                        </div>
                                </div>
                        </div>
                        <button class="mt-2 btn btn-primary">Sign in</button>
                </form>
        </div>
</div>

@endsection