<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Product - Admin</title>
    @vite('resources/css/app.css')
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</head>
<body class="bg-gray-100">
    <!-- Header -->
    <header class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <div class="flex justify-between items-center">
                <h1 class="text-2xl font-bold text-gray-800">Create New Product</h1>
                <div class="flex items-center gap-4">
                    <a href="{{ route('admin.products') }}" class="text-gray-600 hover:text-gray-800">Back to Products</a>
                    <a href="{{ route('admin.dashboard') }}" class="text-gray-600 hover:text-gray-800">Dashboard</a>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="bg-white rounded-lg shadow-md p-8">
            <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Name -->
                <div class="mb-6">
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Product Name *</label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    @error('name')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Price -->
                <div class="mb-6">
                    <label for="price" class="block text-sm font-medium text-gray-700 mb-2">Price *</label>
                    <input type="number" name="price" id="price" step="0.01" min="0" value="{{ old('price') }}" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    @error('price')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Category Select -->
                <div class="mb-6">
                    <label for="category" class="block text-sm font-medium text-gray-700 mb-2">Category *</label>
                    <select name="category" id="category" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <option value="">Select Category</option>
                        <option value="chair" {{ old('category') == 'chair' ? 'selected' : '' }}>Chair</option>
                        <option value="table" {{ old('category') == 'table' ? 'selected' : '' }}>Table</option>
                        <option value="sofa" {{ old('category') == 'sofa' ? 'selected' : '' }}>Sofa</option>
                        <option value="lamp" {{ old('category') == 'lamp' ? 'selected' : '' }}>Lamp</option>
                        <option value="bed" {{ old('category') == 'bed' ? 'selected' : '' }}>Bed</option>
                        <option value="other" {{ old('category') == 'other' ? 'selected' : '' }}>Other</option>
                    </select>
                    @error('category')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Color Variations -->
                <div class="mb-6">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Color Variations *</label>
                    <div id="color-variations-container" class="space-y-4">
                        @php
                            $oldColors = old('color', [['name' => '', 'stock' => '', 'hex_code' => '#000000']]);
                        @endphp
                        
                        @foreach($oldColors as $index => $color)
                        <div class="color-variation-item p-4 border border-gray-300 rounded-lg bg-gray-50">
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <div>
                                    <label class="block text-xs font-medium text-gray-600 mb-1">Color Name *</label>
                                    <input type="text" name="color[{{ $index }}][name]" 
                                        value="{{ $color['name'] }}" 
                                        placeholder="e.g., Red, Blue, Black"
                                        class="w-full px-3 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-blue-500 focus:border-blue-500" required>
                                </div>
                                <div>
                                    <label class="block text-xs font-medium text-gray-600 mb-1">Color Code</label>
                                    <div class="flex gap-2">
                                        <input type="color" name="color[{{ $index }}][hex_code]" 
                                            value="{{ $color['hex_code'] ?? '#000000' }}"
                                            class="w-12 h-10 border border-gray-300 rounded cursor-pointer">
                                        <input type="text" name="color[{{ $index }}][hex_code]" 
                                            value="{{ $color['hex_code'] ?? '#000000' }}"
                                            placeholder="#000000"
                                            class="flex-1 px-3 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                    </div>
                                </div>
                                <div>
                                    <label class="block text-xs font-medium text-gray-600 mb-1">Stock *</label>
                                    <div class="flex gap-2">
                                        <input type="number" name="color[{{ $index }}][stock]" 
                                            value="{{ $color['stock'] }}" 
                                            placeholder="0"
                                            min="0"
                                            class="w-full px-3 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-blue-500 focus:border-blue-500" required>
                                        <button type="button" onclick="removeColorVariation(this)" 
                                                class="px-3 py-2 bg-red-500 text-white rounded hover:bg-red-600 transition-colors {{ $loop->first && $loop->count == 1 ? 'hidden' : '' }}">
                                            <iconify-icon icon="mdi:delete"></iconify-icon>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    
                    <button type="button" onclick="addColorVariation()" 
                            class="mt-3 flex items-center gap-2 px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 transition-colors">
                        <iconify-icon icon="mdi:plus"></iconify-icon>
                        Add Another Color
                    </button>
                    
                    @error('color')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                    @error('color.*.name')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                    @error('color.*.stock')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                    
                    <button type="button" onclick="addColorVariation()" 
                            class="mt-3 flex items-center gap-2 px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 transition-colors">
                        <iconify-icon icon="mdi:plus"></iconify-icon>
                        Add Another Color
                    </button>
                    
                    @error('color')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                    @error('color.*.name')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                    @error('color.*.stock')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Description -->
                <div class="mb-6">
                    <label for="description" class="block text-sm font-medium text-gray-700 mb-2">Description *</label>
                    <textarea name="description" id="description" rows="4" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">{{ old('description') }}</textarea>
                    @error('description')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Image -->
                <div class="mb-6">
                    <label for="image" class="block text-sm font-medium text-gray-700 mb-2">Product Image</label>
                    <input type="file" name="image" id="image" accept="image/*"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    @error('image')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Submit Buttons -->
                <div class="flex gap-4">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg transition">
                        Create Product
                    </button>
                    <a href="{{ route('admin.products') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-6 py-2 rounded-lg transition">
                        Cancel
                    </a>
                </div>
            </form>
        </div>
    </main>

    <script>
        let colorIndex = {{ count($oldColors) }};
    
    function addColorVariation() {
        const container = document.getElementById('color-variations-container');
        
        const newItem = document.createElement('div');
        newItem.className = 'color-variation-item p-4 border border-gray-300 rounded-lg bg-gray-50';
        newItem.innerHTML = `
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div>
                    <label class="block text-xs font-medium text-gray-600 mb-1">Color Name *</label>
                    <input type="text" name="color[${colorIndex}][name]" 
                           placeholder="e.g., Red, Blue, Black"
                           class="w-full px-3 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-blue-500 focus:border-blue-500" required>
                </div>
                <div>
                    <label class="block text-xs font-medium text-gray-600 mb-1">Color Code</label>
                    <div class="flex gap-2">
                        <input type="color" name="color[${colorIndex}][hex_code]" 
                               value="#000000"
                               class="w-12 h-10 border border-gray-300 rounded cursor-pointer">
                        <input type="text" name="color[${colorIndex}][hex_code]" 
                               value="#000000"
                               placeholder="#000000"
                               class="flex-1 px-3 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    </div>
                </div>
                <div>
                    <label class="block text-xs font-medium text-gray-600 mb-1">Stock *</label>
                    <div class="flex gap-2">
                        <input type="number" name="color[${colorIndex}][stock]" 
                               placeholder="0"
                               min="0"
                               class="w-full px-3 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-blue-500 focus:border-blue-500" required>
                        <button type="button" onclick="removeColorVariation(this)" 
                                class="px-3 py-2 bg-red-500 text-white rounded hover:bg-red-600 transition-colors">
                            <iconify-icon icon="mdi:delete"></iconify-icon>
                        </button>
                    </div>
                </div>
            </div>
        `;
        
        container.appendChild(newItem);
        colorIndex++;
        updateDeleteButtonsVisibility();
    }
    
    function removeColorVariation(button) {
        const item = button.closest('.color-variation-item');
        item.remove();
        updateDeleteButtonsVisibility();
    }
    
    function updateDeleteButtonsVisibility() {
        const items = document.querySelectorAll('.color-variation-item');
        const deleteButtons = document.querySelectorAll('.color-variation-item button[onclick="removeColorVariation(this)"]');
        
        if (items.length === 1) {
            deleteButtons[0].classList.add('hidden');
        } else {
            deleteButtons.forEach(button => button.classList.remove('hidden'));
        }
    }
    
    // Sync color inputs
    document.addEventListener('input', function(e) {
        if (e.target.type === 'color' && e.target.name.includes('hex_code')) {
            const textInput = e.target.parentElement.querySelector('input[type="text"]');
            if (textInput) {
                textInput.value = e.target.value;
            }
        }
        
        if (e.target.type === 'text' && e.target.name.includes('hex_code') && e.target.value.match(/^#[0-9A-F]{6}$/i)) {
            const colorInput = e.target.parentElement.querySelector('input[type="color"]');
            if (colorInput) {
                colorInput.value = e.target.value;
            }
        }
    });
    
    document.addEventListener('DOMContentLoaded', function() {
        updateDeleteButtonsVisibility();
    });
    </script>
</body>
</html>