@extends('layouts.master')
@section('title', 'Şəhidlər redaktə et')
@section('content')
     <div class="content">
                    <!-- Elements -->
                    <div class="block block-rounded">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Şəhidlər redaktə et</h3>
                            
                            {{-- @foreach ($photo->images as $img)
                                <img src="{{ asset($img->image) }}" style="width:150px;height:150px" />
                            @endforeach --}}
                            
                        </div>
                        <div class="block-content">
                        @include('settings.errors')
                            <form action="{{ route('photos.update',$photo->id) }}" method="POST" enctype="multipart/form-data">
                              @csrf
                              @method('PUT') 
                                <div class="row push">
                                    <div class="col-lg-12 col-xl-12 overflow-hidden">
                                    <h6>Cari Rəsm</h6>
                                        <img src="{{ asset($photo->preview_img) }}" style="width:250px; height:200px; margin-bottom:10px" alt="{{ $photo->title }}" />  
                                        <div class="form-group">
                                            <label>Önizləmə şəkili</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input js-custom-file-input-enabled" data-toggle="custom-file-input" id="example-file-input-multiple-custom" name="preview_img" />
                                                <label class="custom-file-label" for="example-file-input-multiple-custom">Şəkili Seçin...</label>
                                            </div>
                                        </div>
                                            <h6>Cari Rəsm</h6>
                                        {{-- @foreach ($photo->images as $img)
                                        <img src="{{ asset($img->image) }}" style="width:250px; height:200px; margin-bottom:10px" alt="{{ $photo->title }}" />  
                                        @endforeach --}}


<div class="row items-push js-gallery js-gallery-enabled">
@foreach ($photo->images as $img)
    
                        <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
                            <div class="options-container fx-item-zoom-in fx-overlay-zoom-out">
                                <img class="img-fluid options-item" src="{{ asset($img->image) }}" alt="{{ $photo->title }}" style="width:250px; height:200px; margin-bottom:10px" />
                                <div class="options-overlay bg-black-75">
                                    <div class="options-overlay-content">
                                        <a class="btn btn btn-danger img-lightbox" href="{{ route('photos.delete',$img->id) }}" onclick="return confirm('Silmək istədiyindən əminsən?')">
                                            <i class="si si-close mr-1"></i> Sil
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

    @endforeach

                    </div>

                                        <div class="form-group">
                                            <label>Fotolar Şəkili</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input js-custom-file-input-enabled" data-toggle="custom-file-input" id="example-file-input-multiple-custom" name="image[]" multiple />
                                                <label class="custom-file-label" for="example-file-input-multiple-custom">Şəkili Seçin...</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input">Başlıq</label>
                                            <input type="text" class="form-control" id="example-text-input" name="title" placeholder="Başlıq daxil edin..." value="{{ $photo->title }}" />
                                        </div>
                                        <div class="form-group">
                                            <label for="js-ckeditor5-classic">Açıqlama</label>
                                             <textarea class="form-control" id="editor" name="description" rows="4">{!! $photo->description !!}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group d-flex justify-content-between">
                                    <a href="{{ route('photos.index') }}" class="btn btn-md btn-primary">Geri</a>
                                    <button type="submit" class="btn btn-md btn-success">Redaktə et</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- END Elements -->
                </div>
@endsection
@section('scripts')
     <script>
  var useDarkMode = window.matchMedia('(prefers-color-scheme: dark)').matches;
  tinymce.init({
      selector: '#editor',
      plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
      imagetools_cors_hosts: ['picsum.photos'],
      menubar: 'file edit view insert format tools table help',
      toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent | numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen preview save print | insertfile image media template link anchor codesample | ltr rtl',
      toolbar_sticky: true,
      autosave_ask_before_unload: true,
      autosave_interval: '30s',
      autosave_prefix: '{path}{query}-{id}-',
      autosave_restore_when_empty: false,
      autosave_retention: '2m',
      image_advtab: true,
      link_list: [
          { title: 'My page 1', value: 'https://www.tiny.cloud' },
          { title: 'My page 2', value: 'http://www.moxiecode.com' }
      ],
      image_list: [
          { title: 'My page 1', value: 'https://www.tiny.cloud' },
          { title: 'My page 2', value: 'http://www.moxiecode.com' }
      ],
      image_class_list: [
          { title: 'None', value: '' },
          { title: 'Some class', value: 'class-name' }
      ],
      importcss_append: true,
      file_picker_callback: function (callback, value, meta) {
          /* Provide file and text for the link dialog */
          if (meta.filetype === 'file') {
              callback('https://www.google.com/logos/google.jpg', { text: 'My text' });
          }

          /* Provide image and alt text for the image dialog */
          if (meta.filetype === 'image') {
              callback('https://www.google.com/logos/google.jpg', { alt: 'My alt text' });
          }

          /* Provide alternative source and posted for the media dialog */
          if (meta.filetype === 'media') {
              callback('movie.mp4', { source2: 'alt.ogg', poster: 'https://www.google.com/logos/google.jpg' });
          }
      },
      templates: [
          { title: 'New Table', description: 'creates a new table', content: '<div class="mceTmpl"><table width="98%%" border="0" cellspacing="0" cellpadding="0"><tr><th scope="col"> </th><th scope="col"> </th></tr><tr><td> </td><td> </td></tr></table></div>' },
          { title: 'Starting my story', description: 'A cure for writers block', content: 'Once upon a time...' },
          { title: 'New list with dates', description: 'New List with dates', content: '<div class="mceTmpl"><span class="cdate">cdate</span><br /><span class="mdate">mdate</span><h2>My List</h2><ul><li></li><li></li></ul></div>' }
      ],
      template_cdate_format: '[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]',
      template_mdate_format: '[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]',
      height: 600,
      image_caption: true,
      quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
      noneditable_noneditable_class: 'mceNonEditable',
      toolbar_mode: 'sliding',
      contextmenu: 'link image imagetools table',
      skin: useDarkMode ? 'oxide-dark' : 'oxide',
      content_css: useDarkMode ? 'dark' : 'default',
      content_style: 'body { font-family:Arial,Helvetica,sans-serif; font-size:14px }'
  });

</script>
<!-- Page JS Plugins -->
        <script src="{{ asset('assets/js/plugins/magnific-popup/jquery.magnific-popup.min.js') }}"></script>

        <!-- Page JS Helpers (Magnific Popup Plugin) -->
        <script>jQuery(function(){Dashmix.helpers('magnific-popup');});</script>
@endsection