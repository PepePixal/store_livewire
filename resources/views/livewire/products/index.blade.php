
{{-- tabla de la biblioteca https://www.penguinui.com/components/table con taildwindCSS--}}
<div class="overflow-hidden w-full overflow-x-auto rounded-radius border border-outline dark:border-outline-dark">
    <table class="w-full text-left text-sm text-on-surface dark:text-on-surface-dark">
        <thead class="border-b border-outline bg-surface-alt text-sm text-on-surface-strong dark:border-outline-dark dark:bg-surface-dark-alt dark:text-on-surface-dark-strong">
            <tr>
                <th scope="col" class="p-4">Product ID</th>
                <th scope="col" class="p-4">Name</th>
                <th scope="col" class="p-4">Stock</th>
                <th scope="col" class="p-4">Price</th>
                <th scope="col" class="p-4">Created At</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-outline dark:divide-outline-dark">
            {{-- si hay productos --}}
            @forelse ($products as $product)
                <tr>
                    <td class="p-4">{{$product->id}}</td>
                    <td class="p-4">{{$product->name}}</td>
                    <td class="p-4">{{$product->stock}}</td>
                    <td class="p-4">{{$product->price}}</td>
                    <td class="p-4">{{$product->created_at}}</td>
                </tr>
            {{-- si no hay productos --}}
            @empty
                <tr>
                    <td colspan="5" class="p-4 text-center">Productos no encontrados</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
