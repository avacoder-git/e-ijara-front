@extends('layouts.dashboard')

@section('style')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
          integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
          crossorigin="">
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
            integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
            crossorigin=""></script>
    <link rel="stylesheet" href="https://unpkg.com/@geoman-io/leaflet-geoman-free@latest/dist/leaflet-geoman.css"/>
    <script src="https://unpkg.com/@geoman-io/leaflet-geoman-free@latest/dist/leaflet-geoman.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@turf/turf@6/turf.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/leaflet.snogylop@0.4.0/src/leaflet.snogylop.min.js"></script>
    <script src="https://unpkg.com/geojson-vt@3.2.0/geojson-vt.js"></script>
    <script src="{{ asset('assets/js/geojson-vt.js') }}"></script>
    <script src="{{ asset('assets/js/leaflet-geojson-vt2.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    <style>
        #map {
            height: 80%;
        }
        .dropdown-menu{
            max-height: 400px;
            overflow-y: scroll;
            border-radius: 10px;

        }
        .dropdown-menu::-webkit-scrollbar {
            width: 5px;               /* width of the entire scrollbar */
        }
        .dropdown-menu::-webkit-scrollbar-track {
            background: white;        /* color of the tracking area */
        }
        .dropdown-menu::-webkit-scrollbar-thumb {
            background-color: blue;    /* color of the scroll thumb */
            border-radius: 50rem;       /* roundness of the scroll thumb */
        }

        .loader{
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: rgba(0,0,0,0.5);
            z-index: 10000;
        }

        .opacity{
            opacity: 0;
        }

    </style>

@endsection

@section('content')

    <div id="loader" class="loader d-none"></div>
    <div id="loader2">
    </div>

    <div class="row justify-content-center">
        <div class="col-3 my-3">
            <select name="" id="regions" class="form-control">
                <option value="">Tanlang</option>
            </select>
        </div>
        <div class="col-3 my-3">
            <select name="" id="districts" class="form-control">
                <option value="">Tanlang</option>
            </select>
        </div>

    </div>


    <div id="map">

    </div>






@endsection

@section("footer")


    <div class="modal fade bd-example-modal-lg-2" id="values_modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">


        <div class="modal-dialog modal-lg">

            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Ариза топшириш</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body ht-250 scrollbar-sm pos-relative" style="overflow-y: auto;">

                    <div class="main-card mb-3 card">


                        <div class="card-body">
                            <h5 class="card-title">Керакли маълумотлар</h5>
                            <div>
                                <div class="form-group">
                                    <label for="regions">Вилоят</label>
                                    <input type="number" name="region_id" disabled class="d-none" id="region_id">
                                    <input type="text" class="form-control" disabled id="region_name">
                                </div>
                                <div class="text-danger" id="error_region_id"></div>


                                <div class="form-group">
                                    <label for="districts">Тагланган ер Тумани</label>
                                    <input type="number" name="district_id" disabled class="d-none" id="district_id">
                                    <input type="text" class="form-control" disabled id="district_name">
                                </div>
                                <div class="text-danger" id="error_distric_id"></div>

                                <div class="form-group">
                                    <label for="regions">Ер участкасини ижарага олиш мақсади </label>
                                    <select name="purpose" id="purpose_id" class="form-control" required>
                                        <option value="">ижарага олиш мақсадини белгиланг</option>
                                        @foreach($land_purposes as $key => $item)
                                            <option value="{{ $key }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="text-danger" id="error_purpose_id"></div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Ер участкасининг майдони (га)</span>
                                    <input type="text" class="form-control disabled" disabled id="area">
                                </div>
                                <div class="text-danger" id="error_area"></div>


                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text">Кўзланаётган ижара муддати </span></div>
                                    <input placeholder="Amount" id="amount" type="number" class="form-control">
                                </div>
                                <div class="text-danger" id="error_amount"></div>


                                <div class="text-danger" id="error"></div>

                            </div>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Ёпиш</button>
                    <button type="submit" class="btn d-block btn-primary" id="submit" style="color:white">Аризани топшириш</button>
                </div>

            </div>

        </div>

        {{--    </form>--}}

    </div>
@endsection

@section('javascript')

    <script type="text/javascript" src="{{ asset('js/map.js') }}"></script>

@endsection
