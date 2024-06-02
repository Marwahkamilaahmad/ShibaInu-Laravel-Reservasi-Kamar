

@include('pages.reservation')


<section class="container mt-5">
    <h3 class="text-center mb-3">Table Fasilitas Detail Kamar</h3>
    <table class="table align-middle mb-0 bg-white">
        <thead class="bg-dark text-white">
            <tr>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Tipe</th>
                <th>Tersedia</th>
                <th>Terpakai</th>
                <th>Total Kamar</th>
            </tr>
        </thead>
        <tbody>
            @if($data != null && count($data) > 0)
                @foreach($data as $item)
                <tr>
                    <td>
                        <p class="fw-normal mb-1">{{ $item['nama'] }}</p>
                    </td>
                    <td>{{ $item['alamat'] }}</td>
                    <td>
                        <span class="badge badge-success rounded-pill d-inline">{{ $item['tipe'] }}</span>
                    </td>
                    <td>{{ $item['tersedia'] }}</td>
                    <td>{{ $item['terpakai'] }}</td>
                    <td>{{ $item['total kamar'] }}</td>
                </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="6" class="text-center">Tidak ada data tersedia.</td>
                </tr>
            @endif
        </tbody>
    </table>
</section>


