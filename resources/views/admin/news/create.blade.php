@extends('layouts.dashboard')
@section('title')
News Add
@endsection
@section('breadcrumbs')
 {{ Breadcrumbs::render('news-create') }} 
@endsection
@section('content')
<div class="row">
    <div class="col-12 col-md-12">
        <form action="{{route('news.store')}}" method="POST">
            @csrf
            <div class="card mb-4">
                <h5 class="card-header">Add News</h5>
                <div class="card-body">
                    <!-- title -->
                    <div class="col-xl-12">
                        <div class="nav-align-top mb-4">
                            
                            <div class="tab-content">
                                <div class="tab-pane fade active show" id="navs-top-home" role="tabpanel">
                                    <div class="mb-3">
                                        <label for="input_post_title" class="form-label">Name</label>
                                        <input id="input_post_title" name="title" type="text" placeholder="" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" />
                                        @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <!-- slug -->
                                    <div class="mb-3">
                                        <label for="input_post_slug" class="form-label">Slug</label>
                                        <input id="input_post_slug" name="slug" type="text" class="form-control @error('slug') is-invalid @enderror" readonly value="{{ old('slug') }}" />
                                        @error('slug')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="input_post_image" class="form-label">Image</label>
                                        <div class="input-group">
                                            <button id="button_post_image" data-input="input_post_image" class="btn btn-outline-primary" type="button">
                                                Browse
                                            </button>
                                            <input id="input_post_image" name="thumbnail" value="{{ old('thumbnail') }}" type="text" class="form-control @error('thumbnail') is-invalid @enderror" placeholder="" readonly />
                                            @error('thumbnail')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>Wajib diisi</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="input_post_image" class="form-label">Image 2</label>
                                        <div class="input-group">
                                            <button id="button_post_image2" data-input="input_post_image2" class="btn btn-outline-primary" type="button">
                                                Browse
                                            </button>
                                            <input id="input_post_image2" name="images2" value="{{ old('images2') }}" type="text" class="form-control @error('images2') is-invalid @enderror" placeholder="" readonly />
                                            @error('images2')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>Wajib diisi</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="input_post_title" class="form-label">title English</label>
                                        <input id="input_post_title" name="name0" type="text" placeholder="" class="form-control @error('name0') is-invalid @enderror" name="name0" value="{{ old('name0') }}" />
                                        @error('name0')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="input_post_title" class="form-label">short desc English</label>
                                        <input id="input_post_title" name="shortdesc0" type="text" placeholder="" class="form-control @error('name0') is-invalid @enderror" name="name0" value="{{ old('name0') }}" />
                                        @error('shortdesc0')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <input type="hidden" name="lang[]" value="en">
                                    <div class="mb-3">
                                        <label for="input_post_content" class="form-label">Description English</label>
                                        <textarea id="input_post_content" name="description0" class="form-control @error('description0') is-invalid @enderror" rows="20">

                                        </textarea>
                                        @error('description1')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="input_post_title" class="form-label">news title Japan</label>
                                        <input id="input_post_title" name="name1" type="text" placeholder="" class="form-control @error('name1') is-invalid @enderror" name="name1" value="{{ old('name1') }}" />
                                        @error('name1')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="input_post_title" class="form-label">short desc Japan</label>
                                        <input id="input_post_title" name="shortdesc1" type="text" placeholder="" class="form-control @error('shortdesc1') is-invalid @enderror" name="shortdesc1" value="{{ old('shortdesc1') }}" />
                                        @error('shortdesc1')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <input type="hidden" name="lang[]" value="ja">
                                    <div class="mb-3">
                                        <label for="input_post_content1" class="form-label">News Description Japan</label>
                                        <textarea id="input_post_content1" name="description1" class="form-control @error('description1') is-invalid @enderror" rows="20">
                                        </textarea>
                                        @error('description1')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="input_post_title" class="form-label">news title Russia</label>
                                        <input id="input_post_title" name="name2" type="text" placeholder="" class="form-control @error('name2') is-invalid @enderror" name="name2" value="{{ old('name2') }}" />
                                        @error('name2')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="input_post_title" class="form-label">short desc Russia</label>
                                        <input id="input_post_title" name="shortdesc2" type="text" placeholder="" class="form-control @error('shortdesc2') is-invalid @enderror" name="shortdesc2" value="{{ old('shortdesc2') }}" />
                                        @error('shortdesc2')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <input type="hidden" name="lang[]" value="ru">
                                    <div class="mb-3">
                                        <label for="input_post_content2" class="form-label">News Description Russia</label>
                                        <textarea id="input_post_content2" name="description2" class="form-control @error('description2') is-invalid @enderror" rows="20">
                                        </textarea>
                                        @error('description2')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>


                                </div>
                                <div class="tab-pane fade" id="navs-top-profile" role="tabpanel">
                                    <p>
                                        Donut dragée jelly pie halvah. Danish gingerbread bonbon cookie wafer candy oat cake ice cream. Gummies
                                        halvah
                                        tootsie roll muffin biscuit icing dessert gingerbread. Pastry ice cream cheesecake fruitcake.
                                    </p>
                                    <p class="mb-0">
                                        Jelly-o jelly beans icing pastry cake cake lemon drops. Muffin muffin pie tiramisu halvah cotton candy
                                        liquorice caramels.
                                    </p>
                                </div>
                                <div class="tab-pane fade  " id="navs-top-messages" role="tabpanel">
                                    <p>
                                        Oat cake chupa chups dragée donut toffee. Sweet cotton candy jelly beans macaroon gummies cupcake gummi
                                        bears
                                        cake chocolate.
                                    </p>
                                    <p class="mb-0">
                                        Cake chocolate bar cotton candy apple pie tootsie roll ice cream apple pie brownie cake. Sweet roll icing
                                        sesame snaps caramels danish toffee. Brownie biscuit dessert dessert. Pudding jelly jelly-o tart brownie
                                        jelly.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>






                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-success px-4"><i class="menu-icon bx bx-save"></i>Save</button>
                    </div>

                </div>
            </div>

    </div>

    @endsection


    @push('javascript-external')
    <script src="{{ asset('vendor/laravel-filemanager/js/stand-alone-button.js') }}"></script>
    <script src="{{ asset('vendor/tinymce5/jquery.tinymce.min.js') }}"></script>
    <script src="{{ asset('vendor/easy-number-separator-master/easy-number-separator.js') }}"></script>
    <script src="{{ asset('vendor/tinymce5/tinymce.min.js') }}"></script>
    @endpush
    @push('javascript-internal')
    <script>
        $(document).ready(function() {
            $("#input_post_title").change(function(event) {
                $("#input_post_slug").val(
                    event.target.value
                    .trim()
                    .toLowerCase()
                    .replace(/[^a-z\d-]/gi, "-")
                    .replace(/-+/g, "-")
                    .replace(/^-|-$/g, "")
                );
            });
            // event : input thumbnail with file manager and description
            $('#button_post_thumbnail').filemanager('image');
            $('#button_post_image').filemanager('image');
            $('#button_post_image2').filemanager('image');
            $('#button_post_pdf').filemanager('application');
            // event :  description

            easyNumberSeparator({
                selector: '#input_post_price',
                separator: '.'
            })



            $("#input_post_content").tinymce({
                relative_urls: false,
                language: "en",
                plugins: [
                    "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                    "searchreplace wordcount visualblocks visualchars code fullscreen",
                    "insertdatetime media nonbreaking save table directionality",
                    "emoticons template paste textpattern",
                ],
                forced_root_block: '',
                toolbar1: "fullscreen preview",
                toolbar2: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
                file_picker_callback: function(callback, value, meta) {
                    let x = window.innerWidth || document.documentElement.clientWidth || document
                        .getElementsByTagName('body')[0].clientWidth;
                    let y = window.innerHeight || document.documentElement.clientHeight || document
                        .getElementsByTagName('body')[0].clientHeight;

                    let cmsURL = "{{ route('unisharp.lfm.show') }}" + '?editor=' + meta.fieldname;
                    if (meta.filetype == 'image') {
                        cmsURL = cmsURL + "&type=Images";
                    } else {
                        cmsURL = cmsURL + "&type=Files";
                    }
                    tinyMCE.activeEditor.windowManager.openUrl({
                        url: cmsURL,
                        title: 'Filemanager',
                        width: x * 0.8,
                        height: y * 0.8,
                        resizable: "yes",
                        close_previous: "no",
                        onMessage: (api, message) => {
                            callback(message.content);
                        }
                    });
                }
            });

            $("#input_post_content1").tinymce({
                relative_urls: false,
                language: "en",
                plugins: [
                    "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                    "searchreplace wordcount visualblocks visualchars code fullscreen",
                    "insertdatetime media nonbreaking save table directionality",
                    "emoticons template paste textpattern",
                ],
                forced_root_block: '',
                toolbar1: "fullscreen preview",
                toolbar2: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
                file_picker_callback: function(callback, value, meta) {
                    let x = window.innerWidth || document.documentElement.clientWidth || document
                        .getElementsByTagName('body')[0].clientWidth;
                    let y = window.innerHeight || document.documentElement.clientHeight || document
                        .getElementsByTagName('body')[0].clientHeight;

                    let cmsURL = "" + '?editor=' + meta.fieldname;
                    if (meta.filetype == 'image') {
                        cmsURL = cmsURL + "&type=Images";
                    } else {
                        cmsURL = cmsURL + "&type=Files";
                    }
                    tinyMCE.activeEditor.windowManager.openUrl({
                        url: cmsURL,
                        title: 'Filemanager',
                        width: x * 0.8,
                        height: y * 0.8,
                        resizable: "yes",
                        close_previous: "no",
                        onMessage: (api, message) => {
                            callback(message.content);
                        }
                    });
                }
            });
            $("#input_post_content2").tinymce({
                relative_urls: false,
                language: "en",
                plugins: [
                    "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                    "searchreplace wordcount visualblocks visualchars code fullscreen",
                    "insertdatetime media nonbreaking save table directionality",
                    "emoticons template paste textpattern",
                ],
                forced_root_block: '',
                toolbar1: "fullscreen preview",
                toolbar2: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
                file_picker_callback: function(callback, value, meta) {
                    let x = window.innerWidth || document.documentElement.clientWidth || document
                        .getElementsByTagName('body')[0].clientWidth;
                    let y = window.innerHeight || document.documentElement.clientHeight || document
                        .getElementsByTagName('body')[0].clientHeight;

                    let cmsURL = "" + '?editor=' + meta.fieldname;
                    if (meta.filetype == 'image') {
                        cmsURL = cmsURL + "&type=Images";
                    } else {
                        cmsURL = cmsURL + "&type=Files";
                    }
                    tinyMCE.activeEditor.windowManager.openUrl({
                        url: cmsURL,
                        title: 'Filemanager',
                        width: x * 0.8,
                        height: y * 0.8,
                        resizable: "yes",
                        close_previous: "no",
                        onMessage: (api, message) => {
                            callback(message.content);
                        }
                    });
                }
            });

            $(".visa-input").on("input", function() {
                let visaPrice = 0
                let price = 0

                let visaInput = $('.visa-input').val().replace(/[.]+/g, "")
                visaPrice = parseInt(visaInput)

                let priceTrip = $('.tourPrice').val().replace(/[.]+/g, "")
                price = parseInt(priceTrip)

                if (priceTrip == '') {
                    price = 0

                } else if (visaInput == '') {
                    visaPrice = 0
                }

                let total = visaPrice + price

                // let installment1 = $('.installment1-price').val().replace(/[.]+/g, "")
                // let input_dp_price = $('.dp-price').val().replace(/[.]+/g, "")
                // installment2Price = total - parseInt(installment1) - parseInt(input_dp_price)

                // $('.installment2-price').val(installment2Price).change()

                // easyNumberSeparator({
                //    selector: '#input_post_price',
                //    separator: '.'
                // })
                $('#input_post_prices_total').val(total.toLocaleString("id-ID", {
                    style: "currency",
                    currency: "IDR",
                    minimumFractionDigits: 0
                })).change()
            });

            $('.tourPrice').on("input", function() {
                let visaPrice = 0
                let price = 0

                let visaInput = $('.visa-input').val().replace(/[.]+/g, "")
                visaPrice = parseInt(visaInput)

                let priceTrip = $('.tourPrice').val().replace(/[.]+/g, "")
                price = parseInt(priceTrip)

                if (priceTrip == '') {
                    price = 0

                } else if (visaInput == '') {
                    visaPrice = 0
                }



                let total = visaPrice + price

                // let installment1 = $('.installment1-price').val().replace(/[.]+/g, "")
                // let input_dp_price = $('.dp-price').val().replace(/[.]+/g, "")
                // installment2Price = total - parseInt(installment1) - parseInt(input_dp_price)

                // $('.installment2-price').val(installment2Price).change()

                // easyNumberSeparator({
                //    selector: '#input_post_price',
                //    separator: '.'
                // })
                $('#input_post_prices_total').val(total.toLocaleString("id-ID", {
                    style: "currency",
                    currency: "IDR",
                    minimumFractionDigits: 0
                })).change()
            })


            $('.tipping-price').on("input", function() {
                let tip = 0
                let tipPrice = $(this).val().replace(/[.]+/g, "")
                let days = $('.days-total').val()
                if (tipPrice == '') {
                    tip = 0
                } else {
                    tip = tipPrice
                }
                $('.total-tipping-price').val(tip * days).change()
                easyNumberSeparator({
                    selector: '#input_post_price',
                    separator: '.'
                })


            })
            // $('.dp-price').on("input", function(){
            //    let datas = $('.dp-price').val()
            //    console.log(datas)

            // })

            $("#btn-add-post-images").click(function() {
                var hmtl = $(".clone").html();
                $(".increment").after(hmtl);
            });


            $("body").on("click", ".btn-danger", function() {
                $(this).parents(".control-group").remove();
            });
        });
    </script>
    @endpush