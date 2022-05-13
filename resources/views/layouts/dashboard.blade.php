<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>E-IJARA</title>
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"/>
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">


    <!-- Scripts -->
    <link href="{{ asset('assets/main.css') }}" rel="stylesheet">

    @yield('style')
</head>

<body>

<div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header" id="dashboard">
    <x-navbar></x-navbar>
    <div class="app-main">
        <x-sidebar></x-sidebar>
        <div class="app-main__outer">
            <div class="app-main__inner">
                @yield('content')
            </div>
        </div>
    </div>
</div>
{{--<script type="text/javascript" src="{{ asset('assets/scripts/main.js') }}"></script>--}}
<div type="text" class="d-none" id="geojson" > </div>


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
                                    <select name="purpose" id="purpose_id" class="form-control">
                                        <option value="">Tanlang</option>
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2"
        crossorigin="anonymous"></script>

@yield('javascript')

</body>

</html>
