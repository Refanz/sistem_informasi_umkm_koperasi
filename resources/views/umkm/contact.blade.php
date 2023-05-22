@extends('layouts.main-umkm')

@section('container')

<!-- contact us -->

<!-- Section Location -->
<section class="location">
    <div class="gap-section">
        <div class="section-title">lokasi</div>
        <div class="line-title"></div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15840.891136803526!2d110.4097441!3d-6.9830154!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b4ee6be306b%3A0xfd899c515a701d2d!2sDinas%20Koperasi%20dan%20UMKM%20Kota%20Semarang!5e0!3m2!1sen!2sid!4v1683901807596!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
</section> <!-- End Section Location -->

<!-- Contact Form -->
<section class="contact-us">
    <div class="gap-section">
        <div class="section-title">kontak</div>
        <div class="line-title"></div>
        <div class="row-item">
            <div class="contact-col">
                <div>
                    <i class="fa fa-map-marker"></i>
                    <span>
                        <h5>Alamat</h5>
                        <p>Jl. Pemuda 175 Gedung Pandanaran Lt. 7, Semarang</p>
                    </span>
                </div>

                <div>
                    <i class="fa fa-phone"></i>
                    <span>
                        <h5>Telepon</h5>
                        <p>024358486</p>
                    </span>
                </div>

                <div>
                    <i class="fa fa-envelope-o"></i>
                    <span>
                        <h5>Email</h5>
                        <p>kopumkmsmg@gmail.com</p>
                    </span>
                </div>
            </div>
            <div class="contact-col">
                <form action="https://formsubmit.co/kopumkmsmg@gmail.com" method="POST">
                    <input type="text" name="name" placeholder="Nama" required />
                    <input type="email" name="email" placeholder="Email" required />
                    <input type="text" name="subject" placeholder="Subjek" required />
                    <textarea rows="6" name="message" placeholder="Pesan" required></textarea>
                    <button type="submit" class="primary-btn red-btn">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section> <!-- Contact Form -->

@endsection

