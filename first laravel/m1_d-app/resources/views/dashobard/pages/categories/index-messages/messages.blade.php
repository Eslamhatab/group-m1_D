        @if(session()->has('Created_Category_Successfully'))
        <p>
        <div class="alert alert-success text-center mx-auto" style="width: 90%; margin-top: 3%;">
            {{ session()->get('Created_Category_Successfully') }}
        </div>
        </p>
        @elseif(session()->has('updated_category_successfully'))
        <p>
        <div class="alert alert-success text-center mx-auto" style="width: 90%; margin-top: 3%;">
            {{ session()->get('updated_category_successfully') }}
        </div>
        </p>
        @elseif(session()->has('softDeleted_category_successfully'))
        <p>
        <div class="alert alert-success text-center mx-auto" style="width: 90%; margin-top: 3%;">
            {{ session()->get('softDeleted_category_successfully') }} <a href="{{ route('categories.delete') }}">Trash</a>
        </div>
        </p>
        @elseif(session()->has('restored_category_successfully'))
        <p>
        <div class="alert alert-success text-center mx-auto" style="width: 90%; margin-top: 3%;">
            {{ session()->get('restored_category_successfully') }}
        </div>
        </p>
        @elseif(session()->has('forceDeleted_category_successfully'))
        <p>
        <div class="alert alert-success text-center mx-auto" style="width: 90%; margin-top: 3%;">
            {{ session()->get('forceDeleted_category_successfully') }}
        </div>
        </p>
        @endif
