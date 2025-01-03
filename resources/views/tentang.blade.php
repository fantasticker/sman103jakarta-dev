<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <main class="overflow-hidden">
        <div class="px-4 lg:px-8">
            <section class="text-center my-10">
                <h1 class="text-2xl lg:text-3xl font-bold mb-4">
                    Sejarah Singkat
                </h1>
                <div class="flex lg:flex-row flex-col items-center justify-center gap-8">
                    <p class="text-xs lg:text-base text-justify">
                        Sekolah ini dibangun pada tanggal 6 Oktober 1989
                        dengan luas tanah 4988 m2 dan luas bangunan 1612 m2
                        dengan nama SMA Negeri Klender. Kemudian secara
                        resmi menjadi SMA Negeri 103 Jakarta oleh Gubernur
                        DKI Jakarta pada waktu itu Bapak Wiyogo Atmodarminto
                        pada tanggal 11 September 1990 dengan jumlah
                        rombongan belajar 6 kelas.
                    </p>
                    <img alt="School Building" class="rounded-lg max-w-48 lg:max-w-80 object-cover"
                        src=" {{ asset('storage/images/tampak depan (2).jpg') }}" />
                </div>
            </section>

            <section class="mb-10 shadow-md rounded-lg">
                <div class="bg-orange-600 text-white rounded-t-lg p-4">
                    <h2 class="text-xs lg:text-2xl font-bold">Visi</h2>
                </div>
                <div class="bg-white text-xs lg:text-base rounded-b-lg p-2">
                    <p>Unggul dalam Imtaq, Akademik, dan Non Akademik</p>
                </div>
            </section>

            <section class="mb-10 shadow-md rounded-lg">
                <div class="bg-orange-600 text-white rounded-t-lg p-4">
                    <h2 class="text-xs lg:text-2xl font-bold">Misi</h2>
                </div>
                <div class="bg-white rounded-b-lg p-2">
                    <ol class="text-xs lg:text-base space-y-2 list-decimal list-inside">
                        <li>
                            Meningkatkan keimanan dan ketaqwaan sesuai agama
                            dan keyakinan masing-masing
                        </li>
                        <li>
                            Meningkatkan kualitas sumber daya manusia
                            melalui pembelajaran yang aktif, inovatif,
                            kreatif, efektif dan menyenangkan
                        </li>
                        <li>
                            Meningkatkan kecintaan terhadap tanah air dan
                            bangsa
                        </li>
                        <li>
                            Meningkatkan kreativitas melalui kegiatan
                            ekstrakurikuler
                        </li>
                    </ol>
                </div>
            </section>

            <section class="mb-10 shadow-md rounded-lg">
                <div class="bg-orange-600 text-white rounded-t-lg p-4">
                    <h2 class="text-xs lg:text-2xl font-bold">Tujuan</h2>
                </div>
                <div class="bg-white rounded-b-lg p-2">
                    <ol class="text-xs lg:text-base space-y-2 list-decimal list-inside">
                        <li>Terlaksananya kegiatan imtaq</li>
                        <li>
                            Terlaksananya pembelajaran yang aktif, inovatif,
                            kreatif, efektif dan menyenangkan
                        </li>
                        <li>
                            Mampu bersaing di Olimpiade Science dan O2SN
                        </li>
                        <li>
                            Terlaksananya upacara bendera dan peringatan
                            Hari Besar Nasional dan Agama
                        </li>
                    </ol>
                </div>
            </section>

            <section class="mb-10">
                <h2 class="text-center text-xl lg:text-2xl font-bold mb-4">
                    Manajemen Sekolah
                </h2>

                <div class="flex flex-col lg:flex-row flex-wrap gap-8 justify-center items-center">
                    <div class="flex flex-col justify-center items-center">
                        <img alt="Kepala Sekolah" class="rounded-full w-24 lg:w-48"
                            src="{{ asset('storage/images/kepala sekolah.jpg') }}" />
                        <p class="font-bold">Kepala Sekolah</p>
                        <p>Suparini, M.Pd</p>
                    </div>

                    <div class="flex flex-col justify-center items-center">
                        <img alt="Wakasek Sarpras" class="rounded-full w-24 lg:w-48"
                            src="{{ asset('storage/images/wakil kepala sekolah - sarpras.jpg') }}" />
                        <p class="font-bold">Wakasek Sarpras</p>
                        <p>Irawan Dwi A, S.Pd</p>
                    </div>

                    <div class="flex flex-col justify-center items-center">
                        <img alt="Wakasek Kesiswaan" class="rounded-full w-24 lg:w-48"
                            src="{{ asset('storage/images/wakil kepala sekolah - kesiswaan.jpg') }}" />
                        <p class="font-bold">Wakasek Kesiswaan</p>
                        <p>Cecep Irwan I, S.Pd</p>
                    </div>

                    <div class="flex flex-col justify-center items-center">
                        <img alt="Wakasek Kurikulum" class="rounded-full w-24 lg:w-48"
                            src="{{ asset('storage/images/wakil kepala sekolah - kurikulum.jpg') }}" />
                        <p class="font-bold">Wakasek Kurikulum</p>
                        <p>Meto Firmansyah, S.Kom</p>
                    </div>
                </div>
            </section>
        </div>
    </main>
</x-layout>
