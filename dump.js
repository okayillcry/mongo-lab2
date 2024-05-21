db.createCollection("products");

db.products.insertMany([
    {
        name: "Intel Core i9-11900K",
        price: 549.99,
        stock: 10,
        manufacturer: "Intel",
        category: "Processors",
        reviews: [
            {user: "Alice", comment: "Great performance!", rating: 5},
            {user: "Bob", comment: "Runs hot.", rating: 4}
        ]
    },
    {
        name: "AMD Ryzen 9 5900X",
        price: 499.99,
        stock: 0,
        manufacturer: "AMD",
        category: "Processors",
        reviews: [
            {user: "Charlie", comment: "Best for gaming.", rating: 5},
            {user: "Dave", comment: "A bit expensive.", rating: 4}
        ]
    },
    {
        name: "ASUS ROG Strix Z590-E",
        price: 359.99,
        stock: 15,
        manufacturer: "ASUS",
        category: "Motherboards",
        reviews: [
            {user: "Eve", comment: "Solid build.", rating: 5},
            {user: "Frank", comment: "Easy to set up.", rating: 4}
        ]
    },
    {
        name: "MSI MPG Z490 Gaming Edge",
        price: 249.99,
        stock: 20,
        manufacturer: "MSI",
        category: "Motherboards",
        reviews: [
            {user: "Grace", comment: "Good value for money.", rating: 4},
            {user: "Hank", comment: "Lacks some features.", rating: 3}
        ]
    },
    {
        name: "NVIDIA GeForce RTX 3080",
        price: 699.99,
        stock: 5,
        manufacturer: "NVIDIA",
        category: "Graphics Cards",
        reviews: [
            {user: "Ivy", comment: "Amazing performance.", rating: 5},
            {user: "Jack", comment: "Hard to find in stock.", rating: 4}
        ]
    },
    {
        name: "AMD Radeon RX 6800 XT",
        price: 649.99,
        stock: 0,
        manufacturer: "AMD",
        category: "Graphics Cards",
        reviews: [
            {user: "Karen", comment: "Great for gaming.", rating: 5},
            {user: "Leo", comment: "Better than NVIDIA for some games.", rating: 4}
        ]
    },
    {
        name: "Corsair Vengeance LPX 16GB",
        price: 89.99,
        stock: 50,
        manufacturer: "Corsair",
        category: "Memory",
        reviews: [
            {user: "Mona", comment: "Stable and fast.", rating: 5},
            {user: "Nina", comment: "Works perfectly.", rating: 4}
        ]
    },
    {
        name: "G.Skill Ripjaws V 32GB",
        price: 159.99,
        stock: 25,
        manufacturer: "G.Skill",
        category: "Memory",
        reviews: [
            {user: "Oscar", comment: "High performance.", rating: 5},
            {user: "Paul", comment: "A bit pricey.", rating: 4}
        ]
    },
    {
        name: "Samsung 970 EVO Plus 1TB",
        price: 169.99,
        stock: 30,
        manufacturer: "Samsung",
        category: "Storage",
        reviews: [
            {user: "Quincy", comment: "Super fast SSD.", rating: 5},
            {user: "Rita", comment: "Easy to install.", rating: 4}
        ]
    },
    {
        name: "Western Digital Blue 4TB",
        price: 99.99,
        stock: 40,
        manufacturer: "Western Digital",
        category: "Storage",
        reviews: [
            {user: "Steve", comment: "Lots of storage for a good price.", rating: 5},
            {user: "Tina", comment: "Reliable and quiet.", rating: 4}
        ]
    }
]);
