@extends('home.tamplate')

@section('`title', 'SD Muhammadiyah 10 Medan')
<header class="masthead">
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center text-center text-lg-start">
            <div class="col-lg-6 d-flex flex-column align-items-center align-items-lg-start">
                <h1 class="display-4 lh-1">
                    <span class="text-red display-3">SD</span> Muhammadiyah 10 Medan
                </h1>
                <p class="w-75">Mencetak generasi unggul dengan kompetensi tinggi, berintegritas, berdaya saing, serta berkontribusi
                    bagi masyarakat melalui pendidikan berkualitas.</p>
            </div>
            <div class="col-lg-6 d-flex justify-content-center">
                <img src="{{ asset('landingpage/assets/img/school.png') }}" alt=""
                    class="w-75 rounded-start rounded-end">
            </div>
        </div>
    </div>
</header>

<!-- Quote/testimonial aside-->
<section class="">
    <div class="container-fluid px-5">
        <div class="row d-flex">
            <h1 class="text-center m-4 mb-5 ">Tentang SD Muhammadiyah 10 Medan</h1>
            <div class="col-xl-6">
                <div class="justify-content-center">
                    <img src="{{ asset('landingpage/assets/img/about-profil.png') }}" alt=""
                        class="w-100 rounded-4 shadow-lg" />
                </div>
            </div>
            <div class="col-xl-6 mt-sm-5 mt-lg-0 mt-md-4">
                <div class="h2 fs-1 mb-4">
                    "An intuitive solution to a common problem that we all face,
                    wrapped up in a single app!"
                </div>
                <img src="assets/img/tnw-logo.svg" alt="..." style="height: 3rem" />
            </div>
        </div>
    </div>
</section>
<!-- App features section-->
<section class="bg-gradient-">
    <div class="container-fluid px-5">
        <div class="row d-flex">
            <h1 class="text-center m-4 mb-5">
                Visi & Misi SD Muhammadiyah 10 Medan
            </h1>
            <div class="col-xl-6 mt-sm-5 mt-lg-0 mt-md-4">
                <h1>Misi</h1>

                <div class=" fs-2 mb-4">
                    <p> Melaksanankan Proses Pembelajaran Ilmu Agama dan umum , membina kemampuan ,
                        Keterampilan dan Bahasa Seni Rupa dan Olahraga , Menjalin Kerjasama dan harmonis baik internal
                        maupun eksternal.</p>

                </div>
                <img src="assets/img/tnw-logo.svg" alt="..." style="height: 3rem" />
            </div>
            <div class="col-xl-6">
                <h1>Visi</h1>
                <p class="fs-3">Mewujudkan Peserta Didik memiliki Kompetensi dan Berakhlak Mulia</p>
                <div class="justify-content-center">
                    <img src="{{ asset('landingpage/assets/img/visi-misi.png') }}" alt=""
                        class="w-100 rounded-4 shadow-lg" />
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Basic features section-->
<section class="bg-light">
    <div class="container px-5">
        <div class="row gx-5 align-items-center justify-content-center justify-content-lg-between">
            <h1 class="text-center m-4 mb-5">
                KEUNGGULAN SD MUHAMMADIYAH 10 MEDAN
            </h1>
            <div class="col-12 col-lg-5">
                <h2 class="display-4 lh-1 mb-4">Enter a new age of web design</h2>
                <p class="lead fw-normal text-muted mb-5 mb-lg-0">
                    This section is perfect for featuring some information about your
                    application, why it was built, the problem it solves, or anything
                    else! There's plenty of space for text here, so don't worry about
                    writing too much.
                </p>
            </div>
            <div class="col-sm-8 col-md-6">
                <div class="px-5 px-sm-0">
                    <img class="img-fluid rounded-circle" src="https://source.unsplash.com/u8Jn2rzYIps/900x900"
                        alt="..." />
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Call to action section-->
<section class="bg-danger">
    <div class="cta-content">
        <div class="container px-5">
            <h1 class="text-center text-white mb-4">Lokasi Google Maps</h1>
            <div class="row gx-5 align-items-center">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.1143557904966!2d98.69491397351138!3d3.561132350485045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3031305dec0f3cd9%3A0x801443a8142022f3!2sMuhammadiyah%2010%20Elementary%20School!5e0!3m2!1sen!2sid!4v1740234528982!5m2!1sen!2sid"
                    width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>
