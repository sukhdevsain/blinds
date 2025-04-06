// Product database

//? products wale sari image
const products = {
    all: [
        {
            category: 'zebra',
            image: './images/8.png',
            title: 'Zebra BlindsNew',
            price: '$24,28'
        },
        {
            category: 'motorized',
            image: './images/Image (3).png',
            title: 'New Blinds Prod',
            price: '$24,28'
        },
        {
            category: 'shades',
            image: './images/Image (4).png',
            title: 'Classic Light Filtering Roller Shades',
            price: '$24,28'
        }
    ],
    shades: [
        {
            image: './images/Image (4).png',
            title: 'Premium Light Filtering Shades',
            price: '$24,28'
        },
        {
            image: './images/Image (3).png',
            title: 'Blackout Roller Shades',
            price: '$24,28'
        },
        {
            image: './images/8.png',
            title: 'Solar Screen Shades',
            price: '$24,28'
        }
    ],
    motorized: [
        {
            image: './images/Image (3).png',
            title: 'Smart Motorized Blinds',
            price: '$24,28'
        },
        {
            image: './images/8.png',
            title: 'Automated Roller System',
            price: '$24,28'
        },
        {
            image: './images/Image (4).png',
            title: 'Voice Controlled Shades',
            price: '$24,28'
        }
    ],
    shutters: [
        {
            image: './images/8.png',
            title: 'Classic Wood Shutters',
            price: '$24,28'
        },
        {
            image: './images/Image (3).png',
            title: 'Modern Plantation Shutters',
            price: '$24,28'
        },
        {
            image: './images/Image (4).png',
            title: 'Premium Vinyl Shutters',
            price: '$24,28'
        }
    ],
    zebra: [
        {
            image: './images/8.png',
            title: 'Designer Zebra Blinds',
            price: '$24,28'
        },
        {
            image: './images/Image (3).png',
            title: 'Modern Zebra Shades',
            price: '$24,28'
        },
        {
            image: './images/Image (4).png',
            title: 'Light Filtering Zebra Blinds',
            price: '$24,28'
        }
    ]
};


// //? explore wale more product
const additionalProducts = {
    all: [
    ],
    shades: [
    ],
    motorized: [
    ],
    shutters: [
    ],
    zebra: [
    ]
};


//? filter and sort wale product
let currentCategory = 'all';
let loadedCount = 3;
let productCache = {}; 

function preGenerateProducts(category, count) {
    if (!productCache[category]) {
        productCache[category] = [];
    }
    
    const baseImages = ['./images/Image (3).png', './images/Image (4).png', './images/8.png'];
    for (let i = 0; i < count; i++) {
        productCache[category].push({
            image: baseImages[i % baseImages.length],
            title: `${category.charAt(0).toUpperCase() + category.slice(1)} Product ${loadedCount + i + 1}`,
            price: '$' + (Math.floor(Math.random() * 50) + 20) + '.99'
        });
    }
}

Object.keys(products).forEach(category => {
    preGenerateProducts(category, 12); 
});

function createProductCard(product) {
    return `
        <div class="col-lg-4 col-md-4 col-sm-12 product-item " data-category="${product.category || currentCategory}">
            <div class="product-card h-100 overflow-hidden h-100">
                <div class="product-image position-relative overflow-hidden">
                    <img class="position-absolute top-0 object-fit-cover w-100 h-100" src="${product.image}" alt="${product.title}" loading="lazy">
                </div>
                <div class="product-info text-center p-4">
                    <h3 class="product-title fw-medium">${product.title}</h3>
                    <div class="price fs-5 fw-bold">${product.price}</div>
                </div>
            </div>
        </div>
    `;
}

function displayProducts(category, isInitial = true) {
    const productGrid = document.getElementById('productGrid');
    const productsToShow = products[category];

    if (isInitial) {
        productGrid.innerHTML = '';
        loadedCount = 3;

        const initialHTML = productsToShow.slice(0, 3)
            .map(product => createProductCard(product))
            .join('');
        
        productGrid.innerHTML = initialHTML;
    }
}

function loadMore() {
    const productGrid = document.getElementById('productGrid');
    const currentProducts = products[currentCategory];
    
    let nextBatch;
    if (loadedCount >= currentProducts.length) {

        nextBatch = productCache[currentCategory].splice(0, 6);
        products[currentCategory] = [...currentProducts, ...nextBatch];
        

        if (productCache[currentCategory].length < 6) {
            preGenerateProducts(currentCategory, 12);
        }
    } else {
        nextBatch = currentProducts.slice(loadedCount, loadedCount + 6);
    }
    

    const newProductsHTML = nextBatch
        .map(product => createProductCard(product))
        .join('');
    

        productGrid.insertAdjacentHTML('beforeend', newProductsHTML);
    loadedCount += 6;
}


document.querySelectorAll('.filter-btn').forEach(button => {
    button.addEventListener('click', () => {
        const category = button.dataset.category;
        if (category === currentCategory) return;
        
        currentCategory = category;
        document.querySelector('.filter-btn.active').classList.remove('active');
        button.classList.add('active');
        displayProducts(category);
    });
});


const searchInput = document.getElementById('searchInput');
const debouncedSearch = debounce((searchTerm) => {
    document.querySelectorAll('.product-item').forEach(item => {
        const title = item.querySelector('.product-title').textContent.toLowerCase();
        item.style.display = title.includes(searchTerm) ? 'block' : 'none';
    });
}, 150);

searchInput.addEventListener('input', (e) => {
    debouncedSearch(e.target.value.toLowerCase());
});


function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}
displayProducts('all');

// slider-section-start
document.addEventListener('DOMContentLoaded', function () {
    const slider = document.querySelector('.slider');
    const prevBtn = document.querySelector('.prev');
    const nextBtn = document.querySelector('.next');
    const slides = document.querySelectorAll('.slide');
    const hotspots = document.querySelectorAll('.hotspot');
    const slideWidth = slides[0].offsetWidth + 16; // 16px for gap

    let currentIndex = 0;

    nextBtn.addEventListener('click', () => {
        if (currentIndex < slides.length - 1) {
            currentIndex++;
        } else {
            currentIndex = 0; // Go back to first slide
            slider.scrollLeft = -slideWidth;
        }
        slider.scrollBy({ left: slideWidth, behavior: 'smooth' });
    });

    prevBtn.addEventListener('click', () => {
        if (currentIndex > 0) {
            currentIndex--;
        } else {
            currentIndex = slides.length - 1; // Go to last slide
            slider.scrollLeft = slideWidth * slides.length;
        }
        slider.scrollBy({ left: -slideWidth, behavior: 'smooth' });
    });

    // Hotspot click event to toggle tooltip
    hotspots.forEach(hotspot => {
        hotspot.addEventListener('click', (e) => {
            e.stopPropagation(); // Prevents unwanted bubbling
            const tooltip = hotspot.querySelector('.tooltip');
            const allTooltips = document.querySelectorAll('.tooltip');
            
            // Hide all tooltips first
            allTooltips.forEach(tip => tip.classList.remove('show'));

            // Show current tooltip
            tooltip.classList.toggle('show');
        });
    });

    // Hide tooltip when clicking anywhere else
    document.addEventListener('click', () => {
        document.querySelectorAll('.tooltip').forEach(tip => tip.classList.remove('show'));
    });
});