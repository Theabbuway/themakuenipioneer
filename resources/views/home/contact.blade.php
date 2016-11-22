@extends('layouts.master')

@section('content')
    <div class="contact_page">
        <div class="container">
            <h3 class="title">Contact</h3>
            <div class="col-md-8 contact-grids1 animated wow fadeInRight" data-wow-delay=".5s">
                <form action="#" method="post">
                    <div class="contact-form2">
                        <h4>Name</h4>

                        <input type="text" name="Name" placeholder="" required="">

                    </div>
                    <div class="contact-form2">
                        <h4>Website</h4>

                        <input type="text" name="Website" placeholder="" required="">

                    </div>

                    <div class="contact-form2">
                        <h4>Email</h4>

                        <input type="email" name="Email" placeholder="" required="">

                    </div>
                    <div class="contact-form2">
                        <h4>Subject</h4>

                        <input type="text" name="Subject" placeholder="" required="">

                    </div>


                    <div class="contact-me ">
                        <h4>Message</h4>

                        <textarea name="Message" placeholder="" required=""> </textarea>
                    </div>
                    <input type="submit" value="Submit" >
                </form>

            </div>

            <div class="col-md-4 contact-grids">
                <div class=" contact-grid animated wow fadeInLeft" data-wow-delay=".5s">
                    <div class="contact-grid1">
                        <div class="contact-grid2 ">
                            <i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>
                        </div>
                        <div class="contact-grid3">
                            <h4>Address</h4>
                            <p>The Makueni Pioneer <br> PO.Box 481 <span>Wote, Makueni.</span></p>
                        </div>
                    </div>
                </div>
                <div class=" contact-grid animated wow fadeInUp" data-wow-delay=".5s">
                    <div class="contact-grid1">
                        <div class="contact-grid2 contact-grid4">
                            <i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>
                        </div>
                        <div class="contact-grid3">
                            <h4>Call Us</h4>
                            <p>+254 706 478119<span>+254 712 960060</span></p>
                        </div>
                    </div>
                </div>
                <div class=" contact-grid animated wow fadeInRight" data-wow-delay=".5s">
                    <div class="contact-grid1">
                        <div class="contact-grid2 contact-grid5">
                            <i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>
                        </div>
                        <div class="contact-grid3">
                            <h4>Email</h4>
                            <p><span><a href="mailto:makuenipioneer@gmail.com">makuenipioneer@gmail.com</a></span></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
   <!--- <div class="map">
        <div class="container">
            <h3 class="title">View On Map</h3>
            <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d2482.432383990807!2d0.028213999961443994!3d51.52362882484525!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1423469959819" style="border:0"></iframe>
        </div>--->
    </div>
    <!-- //contact -->

@endsection