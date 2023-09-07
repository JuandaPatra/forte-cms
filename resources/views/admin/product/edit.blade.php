@extends('layouts.dashboard')
@section('title')
Category Edit
@endsection
@section('breadcrumbs')
{{-- {{ Breadcrumbs::render('add_category') }} --}}
@endsection
@section('content')
<div class="row">
    <div class="col-12 col-md-12">
        <form action="{{route('product.update',['product'=>$product->id])}} " method="POST">
            @csrf
            @method('PUT')
            <div class="card mb-4">
                <h5 class="card-header">Product Edit</h5>
                <div class="card-body">
                    <!-- title -->
                    <div class="col-xl-12">
                        <div class="nav-align-top mb-4">

                            <div class="tab-pane fade active show" id="navs-top-home" role="tabpanel">
                                <div class="mb-3">
                                    <label for="input_post_title" class="form-label">Name</label>
                                    <input id="input_post_title" name="title" type="text" placeholder="" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title', $product->name) }}" />
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlSelect1" class="form-label">Category</label>
                                    <select id="select_post_status1" name="category" class="form-select @error('category') is-invalid @enderror">
                                        <option value="">Please Select</option>
                                        @foreach($categories as $category)
                                        <option value="{{$category->id}}" {{ old('category',  $productDetail[0]->category) == $category->id ? "selected" : null }}>{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('category')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Silahkan pilih category</strong>
                                    </span>
                                    @enderror
                                </div>

                                <!-- slug -->
                                <div class="mb-3">
                                    <label for="input_post_slug" class="form-label">Slug</label>
                                    <input id="input_post_slug" name="slug" type="text" class="form-control @error('slug') is-invalid @enderror" readonly value="{{ old('slug', $product->slug) }}" />
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
                                            <input id="input_post_image" name="images1" value="{{ old('images1', $productDetail[0]->images1) }}" type="text" class="form-control @error('images1') is-invalid @enderror" placeholder="" readonly />
                                            @error('images1')
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
                                            <input id="input_post_image2" name="images2" value="{{ old('images2', $productDetail[0]->images2) }}" type="text" class="form-control @error('images2') is-invalid @enderror" placeholder="" readonly />
                                            @error('images2')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>Wajib diisi</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlSelect1" class="form-label">Intensity</label>
                                    <select id="select_post_intensity" name="intensity" class="form-select @error('intensity') is-invalid @enderror">
                                        <option value="">Please Select</option>
                                        <option value="0" {{ old('intensity', $productDetail[0]->intensity) == 0 ? "selected" : null }}>0</option>
                                        <option value="1" {{ old('intensity', $productDetail[0]->intensity) == 1 ? "selected" : null }}>1</option>
                                        <option value="2" {{ old('intensity', $productDetail[0]->intensity) == 2 ? "selected" : null }}>2</option>
                                        <option value="3" {{ old('intensity', $productDetail[0]->intensity) == 3 ? "selected" : null }}>3</option>
                                        <option value="4" {{ old('intensity', $productDetail[0]->intensity) == 4 ? "selected" : null }}>4</option>
                                        <option value="5" {{ old('intensity', $productDetail[0]->intensity) == 5 ? "selected" : null }}>5</option>
                                    </select>
                                    @error('intensity')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Silahkan pilih intensity</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="exampleFormControlSelect1" class="form-label">Body</label>
                                    <select id="select_post_body" name="body" class="form-select @error('body') is-invalid @enderror">
                                        <option value="">Please Select</option>
                                        <option value="0" {{ old('body', $productDetail[0]->body) == 0 ? "selected" : null }}>0</option>
                                        <option value="1" {{ old('body', $productDetail[0]->body) == 1 ? "selected" : null }}>1</option>
                                        <option value="2" {{ old('body', $productDetail[0]->body) == 2 ? "selected" : null }}>2</option>
                                        <option value="3" {{ old('body', $productDetail[0]->body) == 3 ? "selected" : null }}>3</option>
                                        <option value="4" {{ old('body', $productDetail[0]->body) == 4 ? "selected" : null }}>4</option>
                                        <option value="5" {{ old('body', $productDetail[0]->body) == 5 ? "selected" : null }}>5</option>
                                    </select>
                                    @error('body')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Silahkan pilih body</strong>
                                    </span>
                                    @enderror
                                </div>


                                <div class="mb-3">
                                    <label for="exampleFormControlSelect1" class="form-label">Smoothness</label>
                                    <select id="select_post_smoothness" name="smoothness" class="form-select @error('smoothness') is-invalid @enderror">
                                        <option value="">Please Select</option>
                                        <option value="0" {{ old('smoothness', $productDetail[0]->smoothness) == 0 ? "selected" : null }}>0</option>
                                        <option value="1" {{ old('smoothness', $productDetail[0]->smoothness) == 1 ? "selected" : null }}>1</option>
                                        <option value="2" {{ old('smoothness', $productDetail[0]->smoothness) == 2 ? "selected" : null }}>2</option>
                                        <option value="3" {{ old('smoothness', $productDetail[0]->smoothness) == 3 ? "selected" : null }}>3</option>
                                        <option value="4" {{ old('smoothness', $productDetail[0]->smoothness) == 4 ? "selected" : null }}>4</option>
                                        <option value="5" {{ old('smoothness', $productDetail[0]->smoothness) == 5 ? "selected" : null }}>5</option>
                                    </select>
                                    @error('smoothness')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Silahkan pilih Smoothness</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="exampleFormControlSelect1" class="form-label">Sensation</label>
                                    <select id="select_post_sensation" name="sensation" class="form-select @error('sensation') is-invalid @enderror">
                                        <option value="">Please Select</option>
                                        <option value="0" {{ old('sensation', $productDetail[0]->sensation) == 0 ? "selected" : null }}>0</option>
                                        <option value="1" {{ old('sensation', $productDetail[0]->sensation) == 1 ? "selected" : null }}>1</option>
                                        <option value="2" {{ old('sensation', $productDetail[0]->sensation) == 2 ? "selected" : null }}>2</option>
                                        <option value="3" {{ old('sensation', $productDetail[0]->sensation) == 3 ? "selected" : null }}>3</option>
                                        <option value="4" {{ old('sensation', $productDetail[0]->sensation) == 4 ? "selected" : null }}>4</option>
                                        <option value="5" {{ old('sensation', $productDetail[0]->sensation) == 5 ? "selected" : null }}>5</option>
                                    </select>
                                    @error('sensation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Silahkan pilih Sensation</strong>
                                    </span>
                                    @enderror
                                </div>


                                <div class="mb-3">
                                    <label for="input_post_diameter" class="form-label">Diameter</label>
                                    <input id="input_post_diameter" name="diameter" type="text" placeholder="" class="form-control @error('diameter') is-invalid @enderror" name="diameter" value="{{ old('diameter', $productDetail[0]->diameter) }}" />
                                    @error('diameter')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="input_post_length" class="form-label">Length</label>
                                    <input id="input_post_length" name="length" type="text" placeholder="" class="form-control @error('length') is-invalid @enderror" name="length" value="{{ old('length', $productDetail[0]->length) }}" />
                                    @error('length')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="input_post_title" class="form-label">Name English</label>
                                    <input id="input_post_title" name="name0" type="text" placeholder="" class="form-control @error('name0') is-invalid @enderror" name="name0" value="{{ old('name0', $productDetail[0]['name']) }}" />
                                    @error('name0')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <input type="hidden" name="lang[]" value="en">
                                <div class="mb-3">
                                    <label for="input_post_content" class="form-label">Description</label>
                                    <textarea id="input_post_content" name="description0" class="form-control @error('description0') is-invalid @enderror" rows="20">
                                    {{$productDetail[0]['description']}}
                                    </textarea>
                                    @error('description1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="input_post_title" class="form-label">Name Japan</label>
                                    <input id="input_post_title" name="name1" type="text" placeholder="" class="form-control @error('name1') is-invalid @enderror" name="name1" value="{{ old('name1', $productDetail[1]['name']) }}" />
                                    @error('name1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <input type="hidden" name="lang[]" value="ja">
                                <div class="mb-3">
                                    <label for="input_post_content1" class="form-label">Description</label>
                                    <textarea id="input_post_content1" name="description1" class="form-control @error('description1') is-invalid @enderror" rows="20">
                                    {{$productDetail[1]['description']}}
                                    </textarea>
                                    @error('description1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="input_post_title" class="form-label">Name Russia</label>
                                    <input id="input_post_title" name="name2" type="text" placeholder="" class="form-control @error('name2') is-invalid @enderror" name="name2" value="{{ old('name2', $productDetail[2]['name']) }}" />
                                    @error('name2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <input type="hidden" name="lang[]" value="ru">
                                <div class="mb-3">
                                    <label for="input_post_content2" class="form-label">Description</label>
                                    <textarea id="input_post_content2" name="description2" class="form-control @error('description2') is-invalid @enderror" rows="20">
                                    {{$productDetail[2]['description']}}
                                    </textarea>
                                    @error('description2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>


                            </div>
                            
                        </div>
                    </div>






                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-success px-4"><i class="menu-icon bx bx-save"></i>Save</button>

                    </div>

                    <!-- <a class="btn btn-danger px-4" href=""><i class='bx bx-left-arrow-alt'></i>Back</a> -->
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