<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <main class="px-4 lg:px-32 min-h-screen">
        <section class="my-10">
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
        <section class="shadow-xl rounded-lg w-fit mx-auto my-10">
            <div class="bg-orange-500 text-white rounded-t-lg p-4">
                <h2 class="text-xs lg:text-2xl font-bold">Kepala Sekolah Pendahulu</h2>
            </div>
            <div class="bg-white rounded-b-lg p-8">
                <ol class="text-xs lg:text-base space-y-2 list-decimal list-inside">
                    <li>
                        Drs.P. Parman As.P (1990 – 1994)
                    </li>
                    <li>
                        Dra.Tioman Manik (1994 – 1998)
                    </li>
                    <li>
                        Drs. Al Heru Sukirno (1998 – 2003)
                    </li>
                    <li>
                        Drs.H.Sunarno, MM (2003 – 2005)
                    </li>
                    <li>
                        Drs.Muh. Agus Salisin (2005 – 2007)
                    </li>
                    <li>
                        Drs.M. Hasugian, MM (2008 – 2010)
                    </li>
                    <li>
                        Drs. Utar Muchtar, MM (2010 – 2012)
                    </li>
                    <li>
                        Warnoto, M.Pd (2012 - 2014)
                    </li>
                    <li>
                        Ibu Dra.Hj. Umi Harini, MM (2015 - 2016)
                    </li>
                    <li>
                        Niyata Sirat, S.Pd (2016 - 2019)
                    </li>
                    <li>
                        Drs. Kristian M. Tambunan, S.Kom (2019 - 2022)
                    </li>
                    <li>
                        Suparini, M.Pd (2022 - sekarang)
                    </li>
                </ol>
            </div>
        </section>
    </main>
</x-layout>
