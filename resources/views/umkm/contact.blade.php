@extends('layouts.main-umkm')

@section('container')

<!-- contact us -->

<section class="location">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d438.32661149834024!2d110.40981002235667!3d-6.98311663827957!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b4ee6be306b%3A0xfd899c515a701d2d!2sDinas%20Koperasi%20dan%20UMKM%20Kota%20Semarang!5e0!3m2!1sen!2sid!4v1675249118812!5m2!1sen!2sid" width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>

<section class="contact-us">
    <div class="row">
        <div class="contact-col">
            <div>
                <i class="fa fa-home"></i>
                <span>
                    <h5>Jl. Pemuda No.214, Gedung Pandanaran Lt. 7</h5>
                    <p>Sekayu, Kec. Semarang Tengah, Semarang, Jawa Tengah 50132</p>
                </span>
            </div>

            <div>
                <i class="fa fa-phone"></i>
                <span>
                    <h5>Telp. (024) 3584086</h5>
                    <p>Senin sampai Jumat, Jam 08.00-14.00 WIB</p>
                </span>
            </div>

            <div>
                <i class="fa fa-envelope-o"></i>
                <span>
                    <h5>kopumkmsmg@gmail.com</h5>
                    <p>Email</p>
                </span>
            </div>
        </div>
        <div class="contact-col">
            <form action="">
                <input type="text" placeholder="Enter your name" required />
                <input type="email" placeholder="Enter email address" required />
                <input type="text" placeholder="Enter your subject" required />
                <textarea rows="8" placeholder="Message"></textarea>
                <button type="submit" class="hero-btn red-btn">Send Message</button>
            </form>
        </div>
    </div>
</section>

@endsection
