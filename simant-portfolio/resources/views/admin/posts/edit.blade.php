<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Article | Blog Admin</title>

    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">

    <script
        src="https://cdn.tiny.cloud/1/{{ config('services.tinymce.api_key') }}/tinymce/8/tinymce.min.js"
        referrerpolicy="origin"
        crossorigin="anonymous">
    </script>
</head>
<body>

<main class="admin-dashboard">

    <header class="admin-header">
        <div>
            <h1>Edit Article</h1>
            <p>Update your blog article.</p>
        </div>

        <a href="{{ route('admin.posts.index') }}">
            Back to Articles
        </a>
    </header>

    <section class="admin-posts">

        <form
            method="POST"
            action="{{ route('admin.posts.update', $post) }}"
            enctype="multipart/form-data"
        >

            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Article Title</label>

                <input
                    type="text"
                    id="title"
                    name="title"
                    value="{{ old('title', $post->title) }}"
                    required
                >

                @error('title')
                    <p class="admin-error">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="excerpt">Short Description</label>

                <textarea
                    id="excerpt"
                    name="excerpt"
                    rows="3"
                    maxlength="500"
                >{{ old('excerpt', $post->excerpt) }}</textarea>

                @error('excerpt')
                    <p class="admin-error">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="content">Article Content</label>

                <textarea
                    id="content"
                    name="content"
                    rows="15"
                    required
                >{{ old('content', $post->content) }}</textarea>

                @error('content')
                    <p class="admin-error">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label>Current Featured Image</label>

                @if ($post->featured_image)
                    <img
                        src="{{ asset('storage/' . $post->featured_image) }}"
                        alt="{{ $post->title }}"
                        style="max-width:250px; display:block; border-radius:10px;"
                    >
                @else
                    <p>No featured image uploaded.</p>
                @endif
            </div>

            <div class="form-group">
                <label for="featured_image">Replace Featured Image</label>

                <input
                    type="file"
                    id="featured_image"
                    name="featured_image"
                    accept="image/jpeg,image/png,image/webp"
                >

                @error('featured_image')
                    <p class="admin-error">{{ $message }}</p>
                @enderror

                <div id="image-preview-container"
                     style="display:none; margin-top:15px;">

                    <p>New Image Preview:</p>

                    <img
                        id="image-preview"
                        src=""
                        alt="New featured image preview"
                        style="max-width:250px; border-radius:10px;"
                    >
                </div>
            </div>

            <div class="form-group">
                <label for="status">Article Status</label>

                <select id="status" name="status" required>

                    <option value="draft"
                        {{ old('status', $post->status) === 'draft' ? 'selected' : '' }}>
                        Draft
                    </option>

                    <option value="published"
                        {{ old('status', $post->status) === 'published' ? 'selected' : '' }}>
                        Published
                    </option>

                </select>

                @error('status')
                    <p class="admin-error">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit">Update Article</button>

        </form>

    </section>

</main>

<script>
    tinymce.init({
        selector: '#content',
        height: 500,
        menubar: 'file edit view insert format tools table',
        plugins: [
            'lists',
            'link',
            'table',
            'code',
            'codesample',
            'wordcount'
        ],
        toolbar: [
            'undo redo | blocks | bold italic underline',
            'alignleft aligncenter alignright | bullist numlist',
            'link table | codesample code | removeformat'
        ].join(' | '),
        setup: function (editor) {
            editor.on('change keyup', function () {
                editor.save();
            });
        }
    });

    const imageInput = document.getElementById('featured_image');
    const previewContainer = document.getElementById('image-preview-container');
    const imagePreview = document.getElementById('image-preview');

    imageInput.addEventListener('change', function () {
        const file = this.files[0];

        if (file) {
            imagePreview.src = URL.createObjectURL(file);
            previewContainer.style.display = 'block';
        } else {
            imagePreview.src = '';
            previewContainer.style.display = 'none';
        }
    });
</script>

</body>
</html>
