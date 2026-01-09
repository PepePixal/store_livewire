<div class="flex flex-1 flex-col gap-5 rounded-xl h-full w-full">
    <!-- Botón para crear nuevo producto -->
    <div class="text-right">
        <a href="{{route('products.create')}}"
        class=" whitespace-nowrap rounded bg-blue-500 border border-blue-500 px-4 py-2 text-center text-sm font-medium tracking-wide text-on-primary transition hover:opacity-75 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary active:opacity-100 active:outline-offset-0 disabled:cursor-not-allowed disabled:opacity-75 dark:border-primary-dark dark:bg-primary-dark dark:text-on-primary-dark dark:focus-visible:outline-primary-dark" role="button">
            Creatre New Product
        </a>
    </div>

    <!-- {{-- tabla de la biblioteca https://www.penguinui.com/components/table con taildwindCSS--}} -->
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
        <div class="p-4">
            {{ $products->links() }}
        </div>
    </div>
</div>

