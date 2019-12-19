@csrf

<div class="form-group @if($errors->has('name')) has-error @endif">
    <label for="inputEmail3" class="col-sm-2 control-label">Название для админки</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="name" value="{{ old('name') ?? ($news->name ?? '') }}">
    </div>

    @if($errors->has('name'))
        <span class="help-block">{{ $errors->first('name') }}</span>
    @endif
</div>

<div class="form-group @if($errors->has('title')) has-error @endif">
    <label class="col-sm-2 control-label">Заголовок</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="title" value="{{ old('title') ?? ($news->title ?? '') }}">
    </div>

    @if($errors->has('title'))
        <span class="help-block">{{ $errors->first('title') }}</span>
    @endif
</div>

<div class="form-group @if($errors->has('text')) has-error @endif">
    <label class="col-sm-2 control-label">Текст новости</label>
    <div class="col-sm-10">
        <textarea type="text" id="editor1" rows="10" class="form-control boxed" name="text">{{ old('text') ?? ($news->text ?? '') }}</textarea>
    </div>

    @if($errors->has('text'))
        <span class="help-block">{{ $errors->first('text') }}</span>
    @endif
</div>

<div class="form-group @if($errors->has('is_active')) has-error @endif">
    <label class="col-sm-2 control-label">Активный</label>
    <div class="col-sm-10">
        <div class="checkbox">
            <label><input name="is_active" type="checkbox" {{ !empty($news) && $news->is_active || old('is_active') ? 'checked' : '' }} value="1">Отображение на сайте</label>
        </div>
    </div>

    @if($errors->has('is_active'))
        <span class="help-block">{{ $errors->first('is_active') }}</span>
    @endif
</div>


<div class="timeline-item">
    <h3 class="timeline-header">Картинки</h3>
    <div class="form-group">
        <div class="col-sm-12">
            <input type="file" name="images">
        </div>
    </div>

    @if(!empty($images))
        <div class="timeline-body">
            @foreach($images as $image)
                <label class="control-label image-control-label">
                    <a href="{{ route('news.delete_media', $image) }}" class="control-btn remove label-control-btn">
                        <img src="/img/close.png" alt="">
                    </a>
                    <img src="{{ !empty($image->getUrl('cart')) ? $image->getUrl('cart') : ''  }}" class="margin control-label-img">
                </label>
            @endforeach
        </div>
    @endif
</div>

@push('js')
    <script src="@js(admin/ckeditor/ckeditor.js)" type="text/javascript"></script>
    <script>
        CKEDITOR.replace('editor1', {
            toolbar: [
                [ 'Bold', 'Italic', 'Underline', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink' ],
                [ 'FontSize', 'TextColor', 'BGColor' ]
            ]
        });
    </script>
@endpush
