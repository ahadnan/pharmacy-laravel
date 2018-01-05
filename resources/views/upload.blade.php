@extends('layouts.front')

@section('content')
    <!-- UPLOAD_PRESCRIPTION SECTION -->
    <section id="upload-section">

        <div class="row mt-4">
            <div class="col-md-8">

                <h4>Upload Your Prescription</h4>
                <hr>
                <form action="{{ route('upload.store') }}" method="post" enctype="multipart/form-data">
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
                        <label for="address">Shipping Address*</label>
                        <input type="text" name="address" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number*</label>
                        <input type="text" name="phone" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="image">Upload Your File*</label>
                      <input type="file" name="image" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="message">Message*</label>
                        <textarea class="form-control" name="message" rows="5" placeholder="Write Any Instruction ..."></textarea>
                    </div>


                    <button class="btn btn-primary btn-block mt-4" type="submit">Submit</button>
                </form>

            </div>

        </div>
    </section>
@endsection
