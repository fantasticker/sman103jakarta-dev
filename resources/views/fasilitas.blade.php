<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <main>
        <div class="container mx-auto py-12 px-6">
            <h1 class="text-3xl font-bold text-center mb-8">
                Fasilitas SMA Negeri 103 Jakarta
            </h1>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Facility Item -->
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img alt="Ruang Kelas.jpg" class="w-full h-48 object-cover"
                        src="{{ asset('storage/images/ruang kelas.jpg') }}" />
                    <div class="p-4">
                        <h2 class="text-center">Ruang Kelas</h2>
                    </div>
                </div>

                <!-- Repeat Facility Item -->
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img alt="Taman.jpg" class="w-full h-48 object-cover"
                        src="{{ asset('storage/images/taman.jpg') }}" />
                    <div class="p-4">
                        <h2 class="text-center">Taman</h2>
                    </div>
                </div>

                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img alt="Perpustakaan.jpg" class="w-full h-48 object-cover"
                        src="{{ asset('storage/images/perpustakaan.jpg') }}" />
                    <div class="p-4">
                        <h2 class="text-center">Perpustakaan</h2>
                    </div>
                </div>

                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img alt="Masjid" class="w-full h-48 object-cover"
                        src="{{ asset('storage/images/masjid.jpg') }}" />
                    <div class="p-4">
                        <h2 class="text-center">Masjid</h2>
                    </div>
                </div>

                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img alt="Green House.jpg" class="w-full h-48 object-cover"
                        src="{{ asset('storage/images/green house.jpg') }}" />
                    <div class="p-4">
                        <h2 class="text-center">Green House</h2>
                    </div>
                </div>

                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img alt="Lapangan depan.jpg" class="w-full h-48 object-cover"
                        src="{{ asset('storage/images/lapangan depan.jpg') }}" />
                    <div class="p-4">
                        <h2 class="text-center">Lapangan Depan</h2>
                    </div>
                </div>

                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img alt="Parkiran.jpg" class="w-full h-48 object-cover"
                        src="{{ asset('storage/images/parkiran.jpg') }}" />
                    <div class="p-4">
                        <h2 class="text-center">Parkiran</h2>
                    </div>
                </div>

                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img alt="Laboratorium.jpg" class="w-full h-48 object-cover"
                        src="{{ asset('storage/images/laboratorium.jpg') }}" />
                    <div class="p-4">
                        <h2 class="text-center">Laboratorium</h2>
                    </div>
                </div>

                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img alt="Kantin (1).jpg" class="w-full h-48 object-cover"
                        src="{{ asset('storage/images/kantin (1).jpg') }}" />
                    <div class="p-4">
                        <h2 class="text-center">Kantin</h2>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-layout>
