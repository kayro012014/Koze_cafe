@extends('dashboard') <!-- Correct reference to the layout -->
<style>
    body {
        background: linear-gradient(to right, #f0f4f8, #d1e1e5);
        font-family: 'Arial', sans-serif;
    }
    .container {
        margin-top: 20px;
        padding: 20px;
        background-color: rgba(255, 255, 255, 0.9);
        border-radius: 10px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }
    .row {
        display: flex;
        flex-wrap: wrap;
        padding: 0 4px;
        justify-content: center;
    }
    .column {
        padding: 8px;
        box-sizing: border-box;
        flex: 0 0 25%; /* Fixed width to ensure four images per row */
        display: flex; /* Flexbox for centering */
        justify-content: center; /* Center horizontally */
        margin-bottom: 16px; /* Space below each column */
    }
    .product-card {
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 12px; /* Slightly rounded corners for a softer look */
        overflow: hidden;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15); /* More pronounced shadow */
        transition: transform 0.3s, box-shadow 0.3s; /* Smooth transition */
        text-align: center;
        width: 100%; /* Full width of the column */
        height: 200px; /* Fixed height for uniformity */
        position: relative; /* For absolute positioning of image */
    }
    .product-card img {
        position: absolute; /* Positioning the image */
        top: 0;
        left: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        object-fit: cover; /* Cover the card while maintaining aspect ratio */
        transition: transform 0.5s ease; /* Smooth zoom effect */
    }
    .product-card:hover {
        transform: scale(1.05); /* Slightly enlarge on hover */
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.25); /* More pronounced shadow on hover */
    }
    .product-card:hover img {
        transform: scale(1.1); /* Zoom in image on hover */
    }
    .product-title {
        padding: 10px;
        font-size: 1.2em; /* Slightly larger font */
        font-weight: bold;
        color: #333;
        position: absolute; /* Positioning for title */
        bottom: 0; /* Align title to the bottom */
        left: 0; /* Align title to the left */
        right: 0; /* Stretch title to the right */
        background: rgba(255, 255, 255, 0.7); /* Semi-transparent background for readability */
        border-radius: 8px; /* Rounded corners for title background */
        margin: 0; /* Remove default margin */
    }
    .filter-section, .image-buttons {
        margin-bottom: 20px;
    }
    .btn-secondary {
        margin-right: 5px;
        background-color: #007bff;
        color: #fff;
    }
    .btn-secondary:hover {
        background-color: #0056b3;
    }
    .text-end {
        margin-top: 20px;
    }

    /* Adjusted style for the search textbox */
    .filter-section input[type="text"] {
        width: 300px; /* Adjust the width as needed */
    }
    
    .image-buttons button {
        margin-left: 5px; /* Space between buttons */
    }
</style>

@section('content')
<div class="container">

    <!-- Search and Filter Section -->
    <div class="filter-section d-flex mb-4">
        <input type="text" class="form-control me-2" placeholder="Search Products" aria-label="Search" style="width: 300px;"> <!-- Adjusted width -->
        <button class="btn btn-primary" onclick="filterProducts()">Filter</button>
    </div>

    <!-- Category Buttons -->
    <div id="category-buttons" class="mb-4 d-flex flex-wrap">
        <!-- Category buttons will be dynamically inserted here -->
    </div>

    <!-- Add Product Button and Layout Buttons -->
    <div class="d-flex justify-content-between mb-4">
        <div>
            <button class="btn btn-success" onclick="openModal()">+ADD PRODUCT</button>
        </div>
        <div class="image-buttons d-flex flex-wrap">
            <div id="button-container" class="me-2">
                <!-- Layout buttons will be dynamically inserted here -->
            </div>
            <button class="btn btn-secondary" onclick="previousGroup()">Previous</button> <!-- Previous Button -->
            <button class="btn btn-secondary" onclick="nextGroup()">Next</button>
            <button class="btn btn-secondary" onclick="lastGroup()">Last</button>
        </div>
    </div>

    <!-- Modal Structure -->
    <div class="modal" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="productModalLabel">Add Product</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="productForm">
                        <div class="mb-3">
                            <label for="categorySelect" class="form-label">What Category:</label>
                            <select class="form-select" id="categorySelect" required>
                                <option selected disabled>Select a category</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="productImage" class="form-label">Upload Image:</label>
                            <input type="file" class="form-control" id="productImage" accept="image/*" required>
                        </div>
                        <div class="mb-3">
                            <label for="productName" class="form-label">Product Name:</label>
                            <input type="text" class="form-control" id="productName" required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="addProduct()">Add Product</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Image Display Section -->
    <div class="row" id="image-container">
        <!-- Images will be dynamically inserted here -->
    </div>

    <!-- Single Edit Button -->
    <div class="text-end mb-4">
        <a href="{{ route('products') }}" class="btn btn-warning">EDIT PRODUCTS</a>
    </div>
</div>

<script>
    const products = [
        { image: "/assets/pictures/espresso.jpg", title: "ESPRESSO", category: "COFFEE" },
        { image: "/assets/pictures/americano.jpg", title: "AMERICANO", category: "Category 2" },
        { image: "/assets/pictures/capuccino.jpeg", title: "CAPUCCINO", category: "COFFEE" },
        { image: "/assets/pictures/cafe_latte.jpg", title: "CAFE LATTE", category: "Category 3" },
        { image: "/assets/pictures/vanilla.jpg", title: "VANILLA", category: "Category 2" },
        { image: "/assets/pictures/spanish_latte.jpg", title: "SPANISH LATTE", category: "COFFEE" },
        { image: "/assets/pictures/caramel_macchiato.jpg", title: "CARAMEL MACCHIATO", category: "Category 3" },
        { image: "/assets/pictures/cafe_mocha.jpg", title: "CAFE MOCHA", category: "Category 2" },
        { image: "/assets/pictures/white_mocha.jpg", title: "WHITE MOCHA", category: "Category 2" },
    ];

    const buttonGroups = [
        [1, 2, 3, 4],
        [5, 6, 7, 8]
    ];
    let currentGroupIndex = 0;

    function renderCategoryButtons() {
        const categories = [...new Set(products.map(product => product.category))];
        const buttonContainer = document.getElementById('category-buttons');
        buttonContainer.innerHTML = ''; // Clear existing buttons

        categories.forEach(category => {
            const button = document.createElement('button');
            button.className = 'btn btn-secondary me-2';
            button.textContent = category;
            button.onclick = () => filterProducts(category); // Set onclick to filter by category
            buttonContainer.appendChild(button);
        });
    }

    function filterProducts(selectedCategory) {
        const filteredProducts = selectedCategory
            ? products.filter(product => product.category === selectedCategory)
            : products;
        displayImages(filteredProducts);
    }

    function setLayout(layout) {
        displayImages();
    }

    function displayImages(filteredProducts = products) {
        const container = document.getElementById('image-container');
        container.innerHTML = ''; // Clear existing images

        filteredProducts.forEach(product => {
            const column = document.createElement('div');
            column.className = 'column';

            const card = document.createElement('div');
            card.className = 'product-card';

            const img = document.createElement('img');
            img.src = product.image;
            img.alt = product.title;

            const title = document.createElement('div');
            title.className = 'product-title';
            title.textContent = product.title;

            card.appendChild(img);
            card.appendChild(title);
            column.appendChild(card);
            container.appendChild(column);
        });

        // If there are fewer products than columns, fill empty columns
        const emptyColumns = 4 - (filteredProducts.length % 4);
        for (let i = 0; i < emptyColumns; i++) {
            const column = document.createElement('div');
            column.className = 'column';

            const card = document.createElement('div');
            card.className = 'product-card';
            card.style.backgroundColor = 'transparent'; // Optional: Make empty cards transparent

            column.appendChild(card);
            container.appendChild(column);
        }
    }

    function renderButtons() {
        const buttonContainer = document.getElementById('button-container');
        buttonContainer.innerHTML = ''; // Clear existing buttons
        const currentGroup = buttonGroups[currentGroupIndex];

        currentGroup.forEach(index => {
            const button = document.createElement('button');
            button.className = 'btn btn-secondary';
            button.textContent = index;
            button.onclick = () => setLayout(index);
            buttonContainer.appendChild(button);
        });
    }

    function nextGroup() {
        if (currentGroupIndex < buttonGroups.length - 1) {
            currentGroupIndex++;
            renderButtons();
        }
    }

    function previousGroup() {
        if (currentGroupIndex > 0) {
            currentGroupIndex--;
            renderButtons();
        }
    }

    function lastGroup() {
        currentGroupIndex = buttonGroups.length - 1;
        renderButtons();
    }

    function openModal() {
        const modal = new bootstrap.Modal(document.getElementById('productModal'));
        modal.show();
        populateCategories(); // Populate the category dropdown in modal
    }

    function addProduct() {
    const category = document.getElementById('categorySelect').value;
    const productName = document.getElementById('productName').value.toUpperCase(); // Convert to uppercase
    const imageInput = document.getElementById('productImage');
    const file = imageInput.files[0];

    if (category && productName && file) {
        const reader = new FileReader();
        reader.onloadend = function () {
            const newProduct = {
                image: reader.result,
                title: productName,
                category: category
            };
            products.push(newProduct);
            displayImages(); // Re-display images with the new product
            const modal = bootstrap.Modal.getInstance(document.getElementById('productModal'));
            modal.hide();
            document.getElementById('productForm').reset();
            renderCategoryButtons(); // Update category buttons
        };
        reader.readAsDataURL(file);
    }
}

    // Initial setup
    renderCategoryButtons();
    displayImages();
    renderButtons();
</script>
@endsection 
