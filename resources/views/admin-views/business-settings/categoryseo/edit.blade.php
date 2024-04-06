<!-- resources/views/admin-views/business-settings/ship-rocket-config/view.blade.php -->

@extends('layouts.back-end.app')

@section('title', translate('showoffer'))

@push('css_or_js')
    <!-- Add any CSS or JS files if needed -->
@endpush

@section('content')
    <div class="content container-fluid">
        <!-- Page Title -->
        <div class="mb-4 pb-2">
            <h2 class="h1 mb-0 text-capitalize d-flex align-items-center gap-2">
                <img src="{{ asset('/public/assets/back-end/img/3rd-party.png') }}" alt="">
                {{ translate('3rd_party') }}
            </h2>
        </div>
        <!-- End Page Title -->

        <!-- Inlile Menu -->
        @include('admin-views.business-settings.third-party-inline-menu')
        <!-- End Inlile Menu -->
    <!-- Demo -->
        <!-- Demo -->

        <!-- Your showoffer Form Goes Here -->
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.categoryseo.categoryseoupdate',['id' => $Data->id]) }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="offer_id">{{ translate('Category') }}</label>
                            <!-- <input type="text" class="form-control" id="offer_id" name="offer_id" value=""> -->
                            </div>
                        </div>
                    <div>                  
                   </div>
                    </div>
                    <select name="Category" style="padding:5px; margin:10px; border-radius:5px"  >
    <option value=""> {{$Data->Category}} </option >
    <option value="Imported">Imported  </option>
    <option value="Skin Care">Skin Care  </option>
    <option value="Hair Care">Hair Care</option>
    <option value="Face">Face</option>
    <option value="Eyes">Eyes  </option>
    <option value="Lips">Lips</option>
    <option value="Fragrance">Fragrance</option>
    <option value="Men">Men</option>
    <option value="Bath&Body">Bath&Body</option>
    <option value="Accesories">Accesories</option>
    <option value="Gifts&Combos">Gifts&Combos</option>
</select>
<div class="row">
                                        <div class="col-md-6">
                                            <label for="blog">Blog</label>
                                            <!-- <input type="textarea" style="width: 500px; height: 200px;" name="blog"> -->
                                            <textarea name="blog" style="width: 500px; height: 200px;" placeholder="Please enter details..."  >{{$Data->Content}}</textarea>

                                        </div>
                                    </div> <br>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">{{ translate('Submit') }}</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- End showoffer Configuration Form -->

        <div class="table-responsive datatable-custom">
            <table style="text-align: {{ Session::get('direction') === 'rtl' ? 'right' : 'left' }};"
                class="table table-hover table-borderless table-thead-bordered table-nowrap table-align-middle card-table w-100">
                <thead class="thead-light thead-50 text-capitalize">
                   
                </thead>
               
            </table>
        </div>
    </div>
@endsection
@push('script')
<!-- <script>
    function applyFormat(format) {
        var textarea = document.getElementById('textEditor');
        var text = textarea.value;
        var selectionStart = textarea.selectionStart;
        var selectionEnd = textarea.selectionEnd;
        
        switch(format) {
            case 'bold':
                text = text.slice(0, selectionStart) + '<b>' + text.slice(selectionStart, selectionEnd) + '</b>' + text.slice(selectionEnd);
                break;
            case 'italic':
                text = text.slice(0, selectionStart) + '<i>' + text.slice(selectionStart, selectionEnd) + '</i>' + text.slice(selectionEnd);
                break;
            case 'underline':
                text = text.slice(0, selectionStart) + '<u>' + text.slice(selectionStart, selectionEnd) + '</u>' + text.slice(selectionEnd);
                break;
        }
        
        textarea.value = text;
    }
</script> -->
    <!-- Add any additional scripts if needed -->
@endpush
