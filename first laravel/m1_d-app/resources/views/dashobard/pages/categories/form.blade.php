<div class="form-group mb-3">
    <label for="title">title <span class="text-danger">*</span></label>
    <input type="text" name="title" id="title" class="form-control" value="{{ $category->title }}">
</div>

<div class="form-group mb-3">
    <label for="description">description</label>
<textarea name="description" id="description" style="height: 100px">{{ $category->description }}</textarea>
</div>

