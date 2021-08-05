<div class="w-full overflow-x-hidden border-t flex flex-col">
    <main class="w-full flex-grow p-6">
        <h1 class="text-3xl text-black pb-6">{{$title}}</h1>

<div class="w-full mt-12">
    <p class="text-xl pb-3 flex items-center">
        <i class="fas fa-list mr-3"></i> {{$title}}
    </p>
    <div class="bg-white overflow-auto">
        <table class="min-w-full bg-white">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Nama Kayu</th>
                    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Tanggal Buat</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Jumlah Kayu</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Harga Beli</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Harga Jual</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm"></th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                @foreach ($kayu as $item )
                <tr>
                    <td class="w-1/3 text-left py-3 px-4">{{$item->nama_barang}}</td>
                    <td class="w-1/3 text-left py-3 px-4">{{date('d/m/Y', strtotime($date))}}</td>
                    <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="tel:622322662">622322662</a></td>
                    <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
</div>
</main>

<footer class="w-full bg-white text-right p-4">
    Built by <a target="_blank" href="https://davidgrzyb.com" class="underline">David Grzyb</a>.
</footer>
</div>