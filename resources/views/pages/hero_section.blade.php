<div id="home" class="intro route bg-image"    style="background-image: url('assets/room_hospital.jpg');  background-size: cover; width:100%; height:90vh;  display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            filter: brightness(90%);
            text-align: center;">
        <div class="intro-content display-table text-center">
            <div class="table-cell">
                <div class="container">
                    <h2 class="intro-title mb-4">Selamat Datang</h2>
                    <p class="intro-subtitle"><span
                            class="text-slider-items">Public Api Reservation</span><strong
                            class="text-slider"></strong></p>
                </div>
            </div>
            <a type="button" class="btn text-white" style="background-color:rgb(48, 107, 111);"  href="{{ url('/table_reservation') }}">Live Reservation</a>
        </div>
</div>



<!-- section about -->
<div id="about" class="intro route bg-image" style=" width:100%; height:100vh;  display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            text-align: center;">
        <div class="intro-content display-table text-center">
            <div class="table-cell">
                <div class="container">
                    <h2 class="mb-5">Tentang Proyek</h2>
                    <p>Tujuan aplikasi ini adalah untuk memberikan informasi terkait status kamar, fasilitas kamar.
Aplikasi ini juga dapat digunakan untuk mengetahui status kasur, memberikan informasi terkait fasilitas dari kamar yang tersedia, serta pengelompokkan kamar dengan target layanan kesehatan, pemerintah daerah, dan pengembang aplikasi pihak Ke-3.</p>
                    <b class="intro-subtitle"><span class="text-slider-items">Sistem Reservasi Kamar Rawat Inap</span><strong class="text-slider"></strong></b>
                    <p class="mt-3">Konfigurasi yang diterapkan dalam proyek ini menggunakan satu master dan dua slave, server master bertanggung jawab atas penulisan data dan pengelolaan permintaan dari klien, satu server slave berperan sebagai pelayan untuk melayani permintaan dari klien, dan server slave lainnya berfungsi sebagai server cadangan (backup).</p>
                    <img src="assets/master-slave.png" style="width: 650px"/>
                </div>
            </div>
        </div>
</div>

<!-- section contact -->
<div id="contact" class="intro route bg-image" style=" width:100%; height:50vh; background-color : rgb(48, 107, 111);  display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            text-align: center;">
        <div class="intro-content display-table text-center">
            <div class="table-cell">
                <div class="container d-flex">
                <div class="card m-2" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Contact Person</h5>
                        <p class="card-text">Whatsapp Manager : Rua</p>
                        <a href="https://wa.me/62895406803388" class="btn btn-dark text-white">Whatsapp Us</a>
                    </div>
                </div>
                <div class="card m-2" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Contact Mail</h5>
                        <p class="card-text">Our Email</p>
                        <a href="#" class="btn btn-dark text-white">Reservasikamar_id@gmail.com</a>
                    </div>
                </div>
            </div>
            </div>
        </div>
</div>
