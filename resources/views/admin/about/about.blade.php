@extends('partials.adminlay')
@section('title','ADMIN PANEL | About Us')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.js"></script>

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8 col-lg-6">
        <div class="card shadow-sm px-3">
            <div class="card-body p-4">
                <h1 class="text-left mb-4">Enter info about DE-FORT:</h1>

                @if($errors->any())
                <div class="alert alert-danger" role="alert">
                    <strong>Whoops!</strong>
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form method="Post" action="/addabout">
                    @csrf
                    @method("PUT")
                    <div class="mb-3">
                        <label for="description" class="form-label"><b>Info for About:</b></label>
                        <div id="editor" style="min-height: 300px;"></div>
                        <input type="hidden" id="description" name="description">
                        <small class="form-text text-muted">Max. 8000 characters.</small>
                        <div class="flex-row">
                            <button type="submit" class="btn btn-primary mt-3">Submit</button>
                            <a href="/admin" class="btn btn-secondary mt-3 ms-2">Return</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        var quill = new Quill('#editor', {
            theme: 'snow',
            modules: {
                toolbar: [
                    ['bold', 'italic', 'underline'],
                    ['link'],
                    [{
                        'list': 'ordered'
                    }, {
                        'list': 'bullet'
                    }],
                    ['clean']
                ]
            },
            placeholder: 'Enter info about DE-FORT here...'
        });
        @if($about && $about['description'])
        quill.root.innerHTML = @json($about['description']);
        @else
        quill.root.innerHTML = '';
        @endif

        // Sync Quill content to hidden input
        quill.on('text-change', function() {
            var content = quill.root.innerHTML;
            if (content.length > 8000) {
                quill.deleteText(8000, content.length);
            }
            document.getElementById('description').value = content;
        });

        // Validate on form submit
        document.querySelector('form').onsubmit = function() {
            var content = quill.root.innerHTML;
            var textContent = quill.getText().trim();
            if (textContent.length === 0) {
                alert('Description is required.');
                return false;
            }
            if (textContent.length > 8000) {
                alert('Description cannot exceed 8000 characters.');
                return false;
            }
            document.getElementById('description').value = content;
            return true;
        };
    });
</script>
@endsection