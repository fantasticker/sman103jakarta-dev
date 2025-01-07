<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <main>
        <section class="relative">
            <img class="absolute w-1/2 h-full opacity-85" src="{{ asset('storage/images/Ellipse 2.png') }}"
                alt="" />
            <img class="w-screen object-cover" src="{{ asset('storage/images/tampak depan.jpg') }}" alt="" />
            <div class="lg:hidden absolute top-10 left-5 text-white font-bold text-xs">
                <h1>
                    Unggul dalam Imtak, <br />Akademik, <br />
                    dan Non-Akademik
                </h1>
            </div>
            <div class="hidden lg:block absolute top-52 left-20 text-white font-bold text-3xl">
                <h1>
                    Unggul dalam Imtak, Akademik, <br />
                    dan Non Akademik
                </h1>
            </div>
        </section>

        <section class="relative lg:py-5">
            <div
                class="lg:hidden w-4/5 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/3 bg-white rounded-lg shadow-lg">
                <div class="flex justify-center items-center p-1">
                    <div class="flex-1 text-sm text-center">
                        <p class="font-bold">133</p>
                        <p>PTN</p>
                    </div>
                    <div class="flex-1 text-sm text-center">
                        <p class="font-bold">38</p>
                        <p>SNBP</p>
                    </div>
                    <div class="flex-1 text-sm text-center">
                        <p class="font-bold">47</p>
                        <p>SNBT</p>
                    </div>
                    <div class="flex-1 text-sm text-center">
                        <p class="font-bold">48</p>
                        <p>Mandiri</p>
                    </div>
                </div>
            </div>
            <div
                class="hidden lg:block w-11/12 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-16 bg-white rounded-lg shadow-lg">
                <div class="flex justify-around items-center p-4">
                    <div class="flex-1 text-center">
                        <p class="text-3xl font-bold">133</p>
                        <p>PTN</p>
                    </div>
                    <div class="flex-1 text-center">
                        <p class="text-3xl font-bold">38</p>
                        <p>SNBP</p>
                    </div>
                    <div class="flex-1 text-center">
                        <p class="text-3xl font-bold">47</p>
                        <p>SNBT</p>
                    </div>
                    <div class="flex-1 text-center">
                        <p class="text-3xl font-bold">48</p>
                        <p>Mandiri</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="container mx-auto p-12">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
                <div>
                    <h2 class="text-lg lg:text-2xl font-bold mb-4">
                        Komitmen SMA Negeri 103 Jakarta
                    </h2>
                    <p class="text-xs lg:text-base text-justify">
                        SMA Negeri 103 Jakarta berkomitmen menyelenggarakan
                        pendidikan holistik, memadukan pengembangan karakter
                        dan prestasi akademik. Berlandaskan nilai-nilai
                        luhur dan dedikasi tinggi, sekolah ini membekali
                        siswanya menjadi individu tangguh dan siap
                        menghadapi masa depan. Dengan segudang prestasi
                        akademik dan kegiatan ekstrakurikuler yang dinamis,
                        SMA Negeri 103 Jakarta mempersiapkan siswanya untuk
                        meraih masa depan gemilang.
                    </p>
                </div>
                <div>
                    <img alt="School Activity" class="rounded-lg shadow-lg h-80 w-full object-cover align-middle"
                        src="{{ asset('storage/images/sosialisasi wali murid.jpg') }}" />
                </div>
                <div class="md:order-4">
                    <h2 class="text-lg lg:text-2xl font-bold mb-4">
                        SMA Negeri 103 Jakarta: Raih Prestasi, Wujudkan
                        Cita-Cita!
                    </h2>
                    <p class="text-xs lg:text-base text-justify">
                        Di sini, para siswa dididik dengan penuh dedikasi
                        dan dibimbing untuk meraih prestasi gemilang,
                        membuka jalan menuju masa depan yang penuh makna.
                        SMA Negeri 103 Jakarta, berkomitmen melahirkan
                        generasi penerus bangsa yang unggul dan siap
                        berkarya untuk negeri.
                    </p>
                </div>
                <div>
                    <img alt="School Event"
                        class="md:order-3 rounded-lg shadow-lg h-80 w-full object-cover align-middle"
                        src="{{ asset('storage/images/juara lomba tari nusantara.jpg') }}" />
                </div>
            </div>
        </section>

        <section class="bg-gray-100 py-8 mx-auto p-12">
            <div class="container mx-auto">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-2xl font-bold">Berita Sekolah</h2>
                    <a class="text-blue-500 hover:underline" href="berita">
                        Lihat Selengkapnya
                    </a>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    @foreach ($posts as $berita)
                        @if ($berita['id'] <= '4')
                            <div class="bg-white p-4 rounded-lg shadow">
                                <h3 class="text-lg font-bold mb-2">
                                    <a href="berita/{{ $berita['slug'] }}">{{ $berita['title'] }}</a>
                                </h3>
                                <p class="text-gray-600 text-sm mb-2">
                                    {{ $berita['author']->name }}
                                </p>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </section>
    </main>
</x-layout>
