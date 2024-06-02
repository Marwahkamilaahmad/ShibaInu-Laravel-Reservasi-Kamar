
@extends('pages.home')


@section('content')

    <div class="container mt-5">
        <h2>Ketersediaan Fasilitas</h2>
        <form action="{{url('post_reservation')}}" method="POST" class="mt-5">
            @csrf
            <div class="dropdown">
                <input type="button" class="btn btn-dark dropdown-toggle text-white" id="navbarDropdown" data-bs-toggle="dropdown"  aria-expanded="false" value="Cari Berdasarkan" >
                <i class="bi bi-arrow-down-circle"></i>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#" data-value="Tipe">Tipe</a></li>
                    <li><a class="dropdown-item" href="#" data-value="Nama Rumah Sakit">Nama Rumah Sakit</a></li>
                </ul>
            </div>
            <div class="mb-3 mt-3">
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <button type="submit" class="btn btn-light">Submit</button>
        </form>
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const dropdownItems = document.querySelectorAll('.dropdown-item');
            const inputField = document.getElementById('navbarDropdown');

            dropdownItems.forEach(item => {
                item.addEventListener('click', function(e) {
                    e.preventDefault();
                    const selectedValue = this.getAttribute('data-value');
                    inputField.value = selectedValue;
                });
            });
        });
    </script>






@endsection
