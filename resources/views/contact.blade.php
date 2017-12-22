@extends('layouts.front')

@section('content')
    <!-- CONTACT SECTION -->
    <section id="contact-section">
        <div class="card">
            <div class="card-block">
                <h3 class="card-title">Live Support</h3>
                <h6 class="card-subtitle mb-2 text-muted"> 24 hours | 7 days a week | 356 days a year &nbsp; &nbsp; &nbsp; Live Technical Support </h6>
                <p class="card-text">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium excepturi ducimus doloremque perspiciatis esse voluptates
                    voluptas quas laboriosam reiciendis, totam deleniti beatae a neque molestias quos, dolor deserunt
                    fugit voluptatum libero nobis! Consequatur error accusamus placeat nam, tenetur dolorum minus neque
                    eos, fugit, optio at. Quam, perferendis minima! Reprehenderit illum aliquam beatae nemo illo natus
                    ducimus ex aut aperiam numquam?
                </p>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-8">

                <h4>Contact Us</h4>
                <form >
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="name">Email</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="name">Message</label>
                        <textarea class="form-control" rows="5">write message ... </textarea>
                    </div>


                    <button class="btn btn-outline-primary btn-block mt-4" type="submit">Submit</button>
                </form>

            </div>
            <div class="col-md-4 cinfo">
                <h4>Company Information</h4>
                500 Lorem ipsum dolor sit amet. <br>
                22-56-2-9 Lorem, ipsum dolor. <br>
                Bangladesh <br>
                Moblie:(+880) 1675996843 <br>
                Fax:(000) 111 222 333 <br>
                Email: adnan@mail.com <br>
                website: www.onlinePharmacy.com

            </div>
        </div>
    </section>
@endsection
