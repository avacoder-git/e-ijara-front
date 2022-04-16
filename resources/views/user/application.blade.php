@extends('layouts.dashboard')

@section('content')

<div class="container">
    <form action="{{ route('user.application.region') }}" method="post">
        @csrf
        <div class="row justify-content-center">
            <div class="col-4">
                <div id="list-example" class="list-group">
                    <a class="list-group-item list-group-item-action" href="#list-item-1">Item 1</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-2">Item 2</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-3">Item 3</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-4">Item 4</a>
                </div>
            </div>
            <div class="col-8">
                <div data-spy="scroll" style="height: 400px;position: relative;
    margin-top: 0.5rem;
    overflow: auto;" data-target="#list-example" data-offset="0" class="scrollspy-example">
                    <h4 id="list-item-1">Item 1</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus eos, et eaque nihil nam ut veritatis porro cum repellendus veniam soluta placeat ex voluptas, assumenda alias non ipsum atque laborum voluptates sequi laudantium temporibus possimus, est cupiditate! Dolore est, aliquam corrupti amet autem recusandae repellendus unde. Voluptates tenetur omnis ea.</p>
                    <h4 id="list-item-2">Item 2</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque possimus quae ipsa quo facere ipsum fugit commodi asperiores ex at eveniet doloribus optio, nemo obcaecati odit hic voluptates, nulla non vero saepe. Ea minus iure sequi repudiandae nobis rerum officiis libero esse exercitationem quisquam repellat mollitia, veniam consectetur amet atque, sunt corporis cupiditate. Nesciunt optio numquam quos quam corrupti!</p>
                    <h4 id="list-item-3">Item 3</h4>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque ab, nam incidunt aut sequi cum corporis quod vero illum expedita excepturi distinctio architecto. Qui dolor reiciendis inventore rem! Harum velit dignissimos ullam temporibus similique ipsam modi quo alias sunt error rem, laboriosam magni perferendis molestiae vel, obcaecati mollitia libero aut!</p>
                    <h4 id="list-item-4">Item 4</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat velit ratione hic aliquam labore ducimus reprehenderit ipsum placeat laboriosam eos.</p>
                </div>
            </div>

            <div class="col-5 my-4">
                <div class="form-group form-check">
                    <input type="checkbox" name="agree" class="form-check-input" id="agree">
                    <label class="form-check-label" for="agree">Roziman</label>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-2">
                <button type="submit" class="btn btn-success shadow">Ariza topshirish</button>
            </div>
        </div>
    </form>
</div>

@endsection