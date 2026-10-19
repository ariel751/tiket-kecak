<div class="p-6 bg-white rounded-lg shadow-xl max-w-lg mx-auto">
    <div class="flex justify-between items-center pb-3 border-b">
        <h3 class="text-xl font-bold text-gray-800">Kalender Ketersediaan Tiket</h3>
        <button type="button" class="text-gray-400 hover:text-gray-600 font-bold text-xl" data-bs-dismiss="modal">&times;</button>
    </div>
    
    <div class="py-4">
        <p class="text-sm text-gray-600 mb-4">Pilih tanggal di bawah ini untuk melihat ketersediaan kuota tiket:</p>
        
        <!-- Simulasi Kalender / Tanggal Tersedia -->
        <div class="grid grid-cols-7 gap-2 text-center text-sm font-semibold mb-4">
            <span class="text-red-500">Min</span>
            <span>Sen</span>
            <span>Sel</span>
            <span>Rab</span>
            <span>Kam</span>
            <span>Jum</span>
            <span class="text-blue-500">Sab</span>
            
            <!-- Contoh kotak tanggal -->
            <div class="p-2 bg-gray-100 rounded text-gray-400">26</div>
            <div class="p-2 bg-gray-100 rounded text-gray-400">27</div>
            <div class="p-2 bg-gray-100 rounded text-gray-400">28</div>
            <div class="p-2 bg-gray-100 rounded text-gray-400">29</div>
            <div class="p-2 bg-gray-100 rounded text-gray-400">30</div>
            <div class="p-2 bg-violet-100 text-violet-700 rounded font-bold cursor-pointer hover:bg-violet-200">1</div>
            <div class="p-2 bg-violet-600 text-white rounded font-bold cursor-pointer">2 (Tersedia)</div>
            
            <div class="p-2 bg-violet-100 text-violet-700 rounded font-bold cursor-pointer hover:bg-violet-200">3</div>
            <div class="p-2 bg-violet-100 text-violet-700 rounded font-bold cursor-pointer hover:bg-violet-200">4</div>
            <div class="p-2 bg-violet-100 text-violet-700 rounded font-bold cursor-pointer hover:bg-violet-200">5</div>
            <div class="p-2 bg-violet-100 text-violet-700 rounded font-bold cursor-pointer hover:bg-violet-200">6</div>
            <div class="p-2 bg-violet-100 text-violet-700 rounded font-bold cursor-pointer hover:bg-violet-200">7</div>
            <div class="p-2 bg-violet-100 text-violet-700 rounded font-bold cursor-pointer hover:bg-violet-200">8</div>
            <div class="p-2 bg-violet-100 text-violet-700 rounded font-bold cursor-pointer hover:bg-violet-200">9</div>
        </div>
        
        <div class="bg-violet-50 p-3 rounded-md text-violet-800 text-xs">
            💡 <strong>Keterangan:</strong> Tanggal berwarna ungu menandakan jadwal pementasan Tari Kecak aktif dan kuota tiket masih tersedia.
        </div>
    </div>

    <div class="flex justify-end pt-3 border-t">
        <button type="button" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400 text-sm font-semibold" data-bs-dismiss="modal">Tutup</button>
    </div>
</div>