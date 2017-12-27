@extends('layouts.front')

@section('content')
    <!-- UPLOAD_PRESCRIPTION SECTION -->
    <section id="upload-section">

        <div class="row mt-4">
            <div class="col-md-8">

                <h4>Requesting Medicine</h4>
                <hr>
                <form action="{{ route('upload') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name">Name*</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Email*</label>
                        <input type="text" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number*</label>
                        <input type="text" name="phone" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="file">Upload Your File*</label>
                      <input type="file" name="file" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="name">Comment</label>
                        <textarea class="form-control" rows="5">write something ... </textarea>
                    </div>


                    <button class="btn btn-primary btn-block mt-4" type="submit">Submit</button>
                </form>

            </div>

        </div>
    </section>
@endsection
