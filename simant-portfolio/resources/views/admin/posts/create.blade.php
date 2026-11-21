<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Create Article | Blog Admin</title>

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
            <h1>Create New Article</h1>
            <p>Write and publish a new blog post.</p>
        </div>

        <a href="{{ route('admin.dashboard') }}" class="admin-back-link">
            <span aria-hidden="true">←</span>
            Back to Dashboard
        </a>
    </header>

    <section class="admin-posts">

        <form method="POST" action="{{ route('admin.posts.store') }}" enctype="multipart/form-data">

            @csrf

            <div class="form-group">
                <label for="title">Article Title</label>

                <input
                    type="text"
                    id="title"
                    name="title"
                    value="{{ old('title') }}"
                    placeholder="Enter article title"
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
                    placeholder="Write a short summary..."
                >{{ old('excerpt') }}</textarea>

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
                    placeholder="Write your article here..."
                    required
                >{{ old('content') }}</textarea>

                @error('content')
                    <p class="admin-error">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="featured_image">Featured Image</label>

                <input
                    type="file"
                    id="featured_image"
                    name="featured_image"
                    accept="image/jpeg,image/png,image/webp"
                >

                <small>Allowed formats: JPG, PNG and WebP. Maximum size: 2 MB.</small>
                <div id="image-preview-container" style="display: none; margin-top: 15px;">
                    <p>Image Preview:</p>

                    <img
                        id="image-preview"
                        src=""
                        alt="Featured image preview"
                        style="max-width: 250px; max-height: 180px; border-radius: 10px;"
                    >
                </div>

                @error('featured_image')
                    <p class="admin-error">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="status">Article Status</label>

                <select id="status" name="status" required>
                    <option value="draft"
                        {{ old('status', 'draft') === 'draft' ? 'selected' : '' }}>
                        Save as Draft
                    </option>

                    <option value="published"
                        {{ old('status') === 'published' ? 'selected' : '' }}>
                        Publish Now
                    </option>
                </select>

                @error('status')
                    <p class="admin-error">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit">Save Article</button>

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

        content_style: `
            body {
                font-family: Arial, sans-serif;
                font-size: 16px;
                line-height: 1.7;
            }
            pre {
                background: #1e293b;
                color: #ffffff;
                padding: 15px;
                border-radius: 8px;
            }
        `,
        setup: function (editor) {
            editor.on('change keyup', function () {
                editor.save();
            });
        }
    });
</script>
<script>
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
