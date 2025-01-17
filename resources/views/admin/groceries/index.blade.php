@extends('layouts.admin')
@section('content')
    <h1 class="text-center">My Grocery List</h1>
    <div id="app">
        <table class="table mt-5">
            <thead>
                <tr>
                    <th></th>
                    <th scope="col">Product</th>
                    <th scope="col">Vegetarian</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($groceries as $eachGrocery)
                    <tr>
                        <td>
                            <input type="checkbox" name="added" id="added" class="js-checked">
                        </td>
                        <td>{{ $eachGrocery->product }}</td>
                        <td>
                            @if ($eachGrocery->is_vegetarian)
                                <span><i class="fa-solid fa-check"></i></span>
                            @else
                                <span><i class="fa-solid fa-xmark"></i></span>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="new-product-form mt-5">
            <form enctype="multipart/form-data" method="POST" action="{{route('admin.groceries.store')}}" >
                @csrf
                <div class="d-flex justify-content-between align-items-center">
                    <div class="mb-3 flex-fill me-2">
                        <input type="text" class="form-control" id="product" name="product" placeholder="Add a new product">
                    </div>
                    <div class="mb-3 form-check flex-fill ms-4">
                        <label class="form-check-label" for="is_vegetarian">Vegetarian</label>
                        <input type="checkbox" class="form-check-input" id="is_vegetarian" name="is_vegetarian" value="1">
                    </div>
                    <div class="mb-3">
                        <button class="ms-btn" type="submit">Save</button>
                    </div>
                </div>
            </form>
        </div>
        {{-- BTN per eliminare tutti i prodotti anche da DB --}}
        <div class="delete-btn mt-5">
            <form enctype="multipart/form-data" method="POST" action="{{route('admin.groceries.eliminateAll')}}">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger js-delete-btn" onclick="return confirm('Sei sicuro di voler eliminare tutti i dati?')" data-grocery-title="{{ $groceries }}" type="submit">Empty All</button>
            </form>
        </div>
        {{-- BTN per eliminare tutti i prodotti anche da DB --}}
    </div>
    {{-- JS per le checkbox laterali --}}
    <script>
        const allSideCheckboxes = document.querySelectorAll('.js-checked');
        allSideCheckboxes.forEach((sideCheckbox) => {
            sideCheckbox.addEventListener('click', function(event) {
                if(this.parentElement.parentElement.classList.contains("disabled")) {
                    this.parentElement.parentElement.classList.remove("disabled");
                } else {
                    this.parentElement.parentElement.classList.add("disabled");
                }
            })
        })
    </script>
@endsection



{{-- @section('scripts')
<script>
    const { createApp } = Vue;
    createApp({
        data(){
            return {
                message: "test"
            };
        },
    })
</script>
@endsection --}}

