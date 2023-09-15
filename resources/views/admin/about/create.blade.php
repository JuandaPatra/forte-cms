@extends('layouts.dashboard')
@section('title')
About Add
@endsection
@section('breadcrumbs')
{{ Breadcrumbs::render('about') }}
@endsection
@section('content')
<div class="row">
    <div class="col-12 col-md-12">
        <form action="{{route('about.store')}}" method="POST">
            @csrf

            <div class="card mb-4">
                <h5 class="card-header">About Us</h5>
                <div class="card-body">
                    <!-- title -->
                    <div class="col-xl-12">
                        <div class="nav-align-top mb-4">

                            <h5>About English</h5>
                            <div class="row">
                                <div class="row col-md-6">
                                    <div class="tab-pane fade active show" id="navs-top-home" role="tabpanel">
                                        <input type="hidden" name="about_id[]" value="{{$about[0]['id']}}">
                                        <input type="hidden" name="lang[]" value="en">
                                        <div class="mb-3">
                                            <label for="input_post_content" class="form-label">Description Left Top</label>
                                            <textarea id="input_post_content" name="description0" class="form-control @error('description0') is-invalid @enderror" rows="20">
                                            {{$about[0]['description1']}}
                                            </textarea>
                                            @error('description0')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>Wajib di isi</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="input_post_content1" class="form-label">Description Left Bottom</label>
                                            <textarea id="input_post_content1" name="description1" class="form-control @error('description1') is-invalid @enderror" rows="20">
                                            {{$about[0]['description2']}}
                                            </textarea>
                                            @error('description1')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>Wajib di isi</strong>
                                            </span>
                                            @enderror
                                        </div>

                                    </div>
                                </div>
                                <div class="row col-md-6">
                                    <div class="tab-pane fade active show" id="navs-top-home" role="tabpanel">


                                        <div class="mb-3">
                                            <label for="input_post_content2" class="form-label">Description Right Top</label>
                                            <textarea id="input_post_content2" name="description2" class="form-control @error('description2') is-invalid @enderror" rows="20">
                                            {{$about[0]['description3']}}
                                            </textarea>
                                            @error('description2')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>Wajib di isi</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="input_post_content3" class="form-label">Right Bottom Description</label>
                                            <textarea id="input_post_content3" name="description3" class="form-control @error('description3') is-invalid @enderror" rows="20">
                                            {{$about[0]['description4']}}
                                            </textarea>
                                            @error('description3')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>Wajib di isi</strong>
                                            </span>
                                            @enderror
                                        </div>



                                    </div>

                                </div>
                                <div class="tab-pane fade active show" id="navs-top-home" role="tabpanel">




                                </div>

                            </div>
                        </div>
                        <div class="nav-align-top mb-4">

                            <h5>About Japan</h5>
                            <div class="row">
                                <div class="row col-md-6">
                                    <div class="tab-pane fade active show" id="navs-top-home" role="tabpanel">
                                        <input type="hidden" name="about_id[]" value="{{$about[1]['id']}}">
                                        <input type="hidden" name="lang[]" value="ja">
                                        <div class="mb-3">
                                            <label for="input_post_content4" class="form-label">Description Left Top</label>
                                            <textarea id="input_post_content4" name="description4" class="form-control @error('description4') is-invalid @enderror" rows="20">
                                            {{$about[1]['description1']}}
                                            </textarea>
                                            @error('description4')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>Wajib di isi</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="input_post_content5" class="form-label">Description Left Bottom</label>
                                            <textarea id="input_post_content5" name="description5" class="form-control @error('description5') is-invalid @enderror" rows="20">
                                            {{$about[1]['description2']}}
                                            </textarea>
                                            @error('description5')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>Wajib di isi</strong>
                                            </span>
                                            @enderror
                                        </div>

                                    </div>
                                </div>
                                <div class="row col-md-6">
                                    <div class="tab-pane fade active show" id="navs-top-home" role="tabpanel">


                                        <div class="mb-3">
                                            <label for="input_post_content6" class="form-label">Description Right Top</label>
                                            <textarea id="input_post_content6" name="description6" class="form-control @error('description6') is-invalid @enderror" rows="20">
                                            {{$about[1]['description3']}}
                                            </textarea>
                                            @error('description6')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>Wajib di isi</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="input_post_content7" class="form-label">Right Bottom Description</label>
                                            <textarea id="input_post_content7" name="description7" class="form-control @error('description7') is-invalid @enderror" rows="20">
                                            {{$about[1]['description4']}}
                                            </textarea>
                                            @error('description7')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>Wajib di isi</strong>
                                            </span>
                                            @enderror
                                        </div>



                                    </div>

                                </div>
                                <div class="tab-pane fade active show" id="navs-top-home" role="tabpanel">




                                </div>

                            </div>
                        </div>

                        <div class="nav-align-top mb-4">

                            <h5>About Russia</h5>
                            <div class="row">
                                <div class="row col-md-6">
                                    <div class="tab-pane fade active show" id="navs-top-home" role="tabpanel">
                                        <input type="hidden" name="about_id[]" value="{{$about[2]['id']}}">
                                        <input type="hidden" name="lang[]" value="ru">
                                        <div class="mb-3">
                                            <label for="input_post_content8" class="form-label">Description Left Top</label>
                                            <textarea id="input_post_content8" name="description8" class="form-control @error('description8') is-invalid @enderror" rows="20">
                                            {{$about[2]['description1']}}
                                            </textarea>
                                            @error('description8')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>Wajib di isi</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="input_post_content9" class="form-label">Description Left Bottom</label>
                                            <textarea id="input_post_content9" name="description9" class="form-control @error('description9') is-invalid @enderror" rows="20">
                                            {{$about[2]['description2']}}
                                            </textarea>
                                            @error('description9')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>Wajib di isi</strong>
                                            </span>
                                            @enderror
                                        </div>

                                    </div>
                                </div>
                                <div class="row col-md-6">
                                    <div class="tab-pane fade active show" id="navs-top-home" role="tabpanel">


                                        <div class="mb-3">
                                            <label for="input_post_content10" class="form-label">Description Right Top</label>
                                            <textarea id="input_post_content10" name="description10" class="form-control @error('description10') is-invalid @enderror" rows="20">
                                            {{$about[2]['description3']}}
                                            </textarea>
                                            @error('description10')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>Wajib di isi</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="input_post_content11" class="form-label">Right Bottom Description</label>
                                            <textarea id="input_post_content11" name="description11" class="form-control @error('description11') is-invalid @enderror" rows="20">
                                            {{$about[2]['description4']}}
                                            </textarea>
                                            @error('description11')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>Wajib di isi</strong>
                                            </span>
                                            @enderror
                                        </div>



                                    </div>

                                </div>
                                <div class="tab-pane fade active show" id="navs-top-home" role="tabpanel">




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
            $("#input_post_content3").tinymce({
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

            $("#input_post_content4").tinymce({
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

            $("#input_post_content5").tinymce({
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

            $("#input_post_content6").tinymce({
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

            $("#input_post_content7").tinymce({
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

            $("#input_post_content8").tinymce({
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

            $("#input_post_content9").tinymce({
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

            $("#input_post_content10").tinymce({
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

            $("#input_post_content11").tinymce({
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