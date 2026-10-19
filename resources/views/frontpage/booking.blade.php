<x-home-layout>
    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-8">
                <h1 class="text-3xl font-bold text-gray-900 mb-6">Form Pemesanan Tiket Tari Kecak</h1>
                
                <form action="{{ route('booking.store') }}" method="POST" class="space-y-6">
                    @csrf
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Pilih Pertunjukan</label>
                        <select name="show_name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-violet-500 focus:ring-violet-500 border p-2.5">
                            <option>Kecak Fire Gianyar (Rp. 120.000)</option>
                            <option>Kecak Fire & Trance Dance - Pura Dalem Taman Kaja (Rp. 150.000)</option>
                        </select>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Nama Pemesan</label>
                            <input type="text" name="name" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm border p-2.5" placeholder="Masukkan nama lengkap">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Nomor WhatsApp / Telepon</label>
                            <input type="text" name="phone" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm border p-2.5" placeholder="Contoh: 08123456789">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Tanggal Kunjungan</label>
                            <input type="date" name="visit_date" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm border p-2.5">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Jumlah Tiket</label>
                            <input type="number" name="quantity" min="1" value="1" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm border p-2.5">
                        </div>
                    </div>

                    <div class="flex justify-end space-x-4 pt-4">
                        <a href="{{ route('home') }}" class="px-6 py-2 border border-gray-300 rounded-md text-gray-700 hover:bg-gray-50">Batal</a>
                        <button type="submit" class="px-6 py-2 bg-violet-600 text-white rounded-md hover:bg-violet-700 font-semibold">Konfirmasi Pesan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-home-layout>