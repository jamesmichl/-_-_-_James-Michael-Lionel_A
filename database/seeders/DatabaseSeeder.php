<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Book;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Post::create([
            "user_id" => 2,
            "title" => "Post ke 1",
            "slug" => "post-ke-1",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nam, mollitia quos! Voluptate provident dignissimos fugit dolor, repellendus quam voluptatibus eveniet hic laborum? Voluptatum minima officiis optio eum dolor dolorem, repudiandae modi ad at delectus explicabo molestiae accusantium vel a numquam vitae dignissimos! Sunt doloribus iusto repudiandae animi sint ullam magnam beatae ipsam eum nam excepturi laboriosam impedit sapiente minus eaque earum tempora, odit quidem. Corporis velit minima animi ut vitae dolor molestias et eaque quod voluptatum corrupti accusantium dolores exercitationem, nam error autem impedit natus tenetur ipsam! Impedit nobis, iure obcaecati adipisci voluptas facere suscipit reprehenderit perferendis tenetur molestiae minima?",
            "category_id" => 1
        ]);
        Category::create([
            "name" => "NowaDays",
            "slug" => "nowadays"
        ]);
        // Post 1 - Travel and Nature
        Post::create([
            "user_id" => 2,
            "title" => "Exploring the Beauty of National Parks",
            "slug" => "exploring-national-parks",
            "body" => "National parks offer a unique glimpse into the diverse and stunning landscapes of our planet. These sanctuaries of natural beauty boast everything from snow-capped mountains and verdant forests to crystal-clear lakes and winding rivers. Each park is a haven for wildlife, offering visitors a chance to see animals in their natural habitat. Hiking trails range from easy walks to challenging treks, leading adventurers to breathtaking vistas and serene spots. Whether it's the serenity of the Great Smoky Mountains or the rugged beauty of the Grand Canyon, national parks are a testament to the planet's splendor.",
            "category_id" => 1 // Adjust this to match the ID for 'Travel and Nature'
        ]);

        // Post 2 - Food and Cooking
        Post::create([
            "user_id" => 3,
            "title" => "The Art of Cooking: Culinary Secrets",
            "slug" => "art-of-cooking",
            "body" => "Cooking is an art form that combines flavors, textures, and ingredients to create culinary masterpieces. This journey through the culinary world explores various cooking techniques, from the basics of chopping and sautéing to the complexities of molecular gastronomy. Discover the secrets behind creating balanced dishes, the importance of fresh ingredients, and the joy of sharing a meal. Whether you're an aspiring chef or a home cook, this exploration of culinary arts will enhance your cooking skills and deepen your appreciation for food.",
            "category_id" => 2 // Adjust this to match the ID for 'Food and Cooking'
        ]);

        // Post 3 - Technology and Innovation
        Post::create([
            "user_id" => 2,
            "title" => "Technological Advances in the 21st Century",
            "slug" => "tech-advances-21st-century",
            "body" => "The 21st century has been marked by rapid technological advancements that have reshaped our world. From the rise of the internet and smartphones to breakthroughs in artificial intelligence and renewable energy, technology continues to push the boundaries of what's possible. This article delves into various innovations that have emerged in recent years, their impact on society, and the ethical considerations they bring. We explore the future of technology, potential developments in fields like biotechnology and robotics, and how these advancements could shape the next decade.",
            "category_id" => 3 // Adjust this to match the ID for 'Technology and Innovation'
        ]);

        // Additional Post 1 - Travel and Nature
        Post::create([
            "user_id" => 1,
            "title" => "Discovering Hidden Gems: Lesser-Known National Parks",
            "slug" => "hidden-gems-national-parks",
            "body" => "While famous parks like Yellowstone and Yosemite get most of the attention, there are many lesser-known national parks that offer their own unique beauty and solitude. These hidden gems provide an opportunity to explore untouched landscapes, encounter rare wildlife, and experience the tranquility of nature without the crowds. From the remote wilderness of Alaska's national parks to the historic landscapes of the East Coast, these lesser-known destinations are a treasure trove for nature enthusiasts.",
            "category_id" => 1 // Adjust this to match the ID for 'Travel and Nature'
        ]);

        // Additional Post 2 - Food and Cooking
        Post::create([
            "user_id" => 1,
            "title" => "Exploring World Cuisines: A Culinary Journey",
            "slug" => "exploring-world-cuisines",
            "body" => "Food is not just a means of sustenance, but a gateway to the world's cultures. This culinary journey explores various cuisines from around the globe, highlighting the unique flavors, ingredients, and cooking techniques of each region. From the spicy curries of India to the delicate sushi of Japan, and from the rich pastas of Italy to the hearty stews of Eastern Europe, each cuisine tells a story of its people and their history. Discover the diversity of the world's food and the ways in which different cultures celebrate through their culinary traditions.",
            "category_id" => 2 // Adjust this to match the ID for 'Food and Cooking'
        ]);

        // Additional Post 3 - Technology and Innovation
        Post::create([
            "user_id" => 3,
            "title" => "The Future of Artificial Intelligence",
            "slug" => "future-of-ai",
            "body" => "Artificial intelligence (AI) is rapidly evolving, transforming industries and everyday life. This article delves into the future possibilities and challenges of AI, exploring how it's reshaping sectors like healthcare, transportation, and finance. We examine the ethical implications of AI, including concerns about privacy, security, and the impact on jobs. Additionally, the potential for AI to solve complex global issues, such as climate change and healthcare, is explored, highlighting the balance between innovation and responsibility.",
            "category_id" => 3 // Adjust this to match the ID for 'Technology and Innovation'
        ]);

        // Additional Post 4 - Travel and Nature
        Post::create([
            "user_id" => 2,
            "title" => "Sustainable Travel: Protecting Our Planet",
            "slug" => "sustainable-travel",
            "body" => "As travel becomes more accessible, it's crucial to consider the impact on the environment. Sustainable travel focuses on conserving nature, supporting local communities, and minimizing the ecological footprint of tourism. This article explores how travelers can make responsible choices, from selecting eco-friendly accommodations to participating in conservation efforts. It also highlights destinations that are leading the way in sustainable tourism practices, showing that it's possible to explore the world in a way that preserves it for future generations.",
            "category_id" => 1 // Adjust this to match the ID for 'Travel and Nature'
        ]);

        // Additional Post 5 - Food and Cooking
        Post::create([
            "user_id" => 1,
            "title" => "The Art of Baking: From Pastries to Breads",
            "slug" => "art-of-baking",
            "body" => "Baking is a delightful blend of science and art. This article explores the intricacies of baking, from delicate pastries to hearty breads. Learn about the precision required in measuring ingredients, the science of leavening agents, and the art of decorating cakes and pastries. We'll share tips and techniques for achieving the perfect crust on pies, the fluffiest cakes, and the most aromatic breads. Whether you're a novice baker or a seasoned pro, this exploration into the world of baking will inspire your next culinary creation.",
            "category_id" => 2 // Adjust this to match the ID for 'Food and Cooking'
        ]);

        // Additional Post 6 - Technology and Innovation
        Post::create([
            "user_id" => 3,
            "title" => "Emerging Trends in Renewable Energy",
            "slug" => "renewable-energy-trends",
            "body" => "As the world seeks sustainable energy solutions, renewable energy is at the forefront. This article examines emerging trends in solar, wind, and hydro power, as well as innovations in energy storage and distribution. We explore how these technologies are becoming more efficient and cost-effective, paving the way for a greener future. The role of government policies and consumer behavior in driving the adoption of renewable energy is also discussed, along with the challenges and opportunities in transitioning away from fossil fuels.",
            "category_id" => 3 // Adjust this to match the ID for 'Technology and Innovation'
        ]);
        // Post 7 - Travel and Nature
        Post::create([
            "title" => "Adventures in the Amazon Rainforest",
            "slug" => "adventures-amazon-rainforest",
            "body" => "The Amazon Rainforest, a vast tropical paradise, is a hub of biodiversity and natural beauty. Home to thousands of unique species of flora and fauna, it offers an unparalleled opportunity to connect with nature. This article explores the rich ecosystems of the rainforest, the indigenous cultures that inhabit these lands, and the exciting adventures that await visitors. From river cruises to jungle treks, learn about the importance of rainforest conservation and how eco-tourism can contribute to preserving this vital ecosystem for future generations.",
            "category_id" => 1, // Adjust this to match the ID for 'Travel and Nature'
            "user_id" => 1 // Assign to user with ID 1
        ]);

        // Post 8 - Food and Cooking
        Post::create([
            "title" => "The World of Spices: Flavors That Transform",
            "slug" => "world-of-spices",
            "body" => "Spices play an integral role in culinary arts, adding depth and complexity to dishes across the globe. This post delves into the fascinating world of spices, exploring their history, origins, and the traditions that surround them. Learn about the health benefits of various spices, how they are cultivated and processed, and their uses in different cuisines. From the fiery heat of chili peppers to the sweet fragrance of cinnamon, discover how spices can transform a simple dish into a gastronomic experience that tantalizes the senses.",
            "category_id" => 2, // Adjust this to match the ID for 'Food and Cooking'
            "user_id" => 2 // Assign to user with ID 2
        ]);

        // Post 9 - Technology and Innovation
        Post::create([
            "title" => "Virtual Reality: The Future of Immersive Experience",
            "slug" => "virtual-reality-future",
            "body" => "Virtual Reality (VR) technology is revolutionizing the way we interact with digital content, creating fully immersive experiences that were once the realm of science fiction. This article examines the evolution of VR, its current applications in various fields such as gaming, education, and healthcare, and the potential it holds for the future. With advancements in VR hardware and software, we are stepping into a new era of digital interaction, where the boundaries between the virtual and the real world are increasingly blurred.",
            "category_id" => 3, // Adjust this to match the ID for 'Technology and Innovation'
            "user_id" => 3 // Assign to user with ID 3
        ]);

        // Post 10 - Travel and Nature
        Post::create([
            "title" => "Exploring the Underwater World: Scuba Diving Adventures",
            "slug" => "underwater-world-scuba",
            "body" => "Scuba diving offers a unique opportunity to explore the mysterious and breathtaking world beneath the ocean's surface. This post highlights the best scuba diving destinations around the globe, from the vibrant coral reefs of the Caribbean to the shipwrecks of the Pacific. Learn about the marine life you can expect to encounter, essential diving skills, and safety tips for beginners. Whether you're a seasoned diver or looking to dive for the first time, discover the beauty and tranquility of the underwater world.",
            "category_id" => 1, // Adjust this to match the ID for 'Travel and Nature'
            "user_id" => 4 // Assign to user with ID 4
        ]);

        // Post 11 - Food and Cooking
        Post::create([
            "title" => "Farm to Table: The Local Food Movement",
            "slug" => "farm-to-table-local-food",
            "body" => "The farm-to-table movement is reshaping the food industry, emphasizing the importance of locally sourced, sustainable, and ethical food practices. This movement supports local farmers, reduces the carbon footprint of food transportation, and promotes healthier eating habits. In this article, we explore how chefs and restaurants are incorporating farm-to-table principles into their menus, and how consumers can participate in this movement. Discover the journey of food from the farm to your plate and how choosing local can make a significant difference in the quality of your meals and the health of the planet.",
            "category_id" => 2, // Adjust this to match the ID for 'Food and Cooking'
            "user_id" => 5 // Assign to user with ID 5
        ]);

        // Post 12 - Technology and Innovation
        Post::create([
            "title" => "Smart Home Technology: Revolutionizing Daily Living",
            "slug" => "smart-home-technology",
            "body" => "Smart home technology is not just a futuristic concept – it's here, transforming our daily living with innovative solutions that offer convenience, efficiency, and security. From voice-activated assistants to automated lighting, heating, and security systems, this article examines how these technologies integrate into our homes, making them more connected and intelligent. Explore the latest trends in smart home devices, the benefits they bring, and how they're changing the landscape of home automation and daily living. As these technologies continue to evolve, they promise to make our homes smarter, safer, and more responsive to our needs.",
            "category_id" => 3, // Adjust this to match the ID for 'Technology and Innovation'
            "user_id" => 6 // Assign to user with ID 6
        ]);
        // Post 13 - Travel and Nature
        Post::create([
            "title" => "The Mystique of Mountain Ranges: A Hiker's Dream",
            "slug" => "mystique-mountain-ranges",
            "body" => "Mountain ranges around the world, from the snow-capped peaks of the Himalayas to the rugged trails of the Rockies, offer some of the most breathtaking landscapes and challenging hikes. This article explores the allure of these majestic terrains, detailing the unique flora and fauna, the cultural heritage of local communities, and the sheer thrill of conquering summits. Learn about the different hiking trails suitable for various skill levels, the preparations needed for mountain expeditions, and the conservation efforts to protect these natural wonders.",
            "category_id" => 1, // Adjust this to match the ID for 'Travel and Nature'
            "user_id" => 5 // Assign to user with ID 5
        ]);

        // Post 14 - Food and Cooking
        Post::create([
            "title" => "Gourmet Desserts: A Journey Through Sweet Delights",
            "slug" => "gourmet-desserts-journey",
            "body" => "Gourmet desserts are not just treats for the palate but a celebration of culinary artistry. This post embarks on a journey through the world of high-end desserts, showcasing the creativity and skill involved in crafting intricate pastries, chocolates, elaborate cakes, and artistic tarts. Discover the techniques used by master dessert chefs, the evolution of dessert trends, and how these sweet creations are a blend of taste, texture, and visual artistry. Learn about the influence of different cultures on dessert making and how contemporary chefs are reinventing classic sweets.",
            "category_id" => 2, // Adjust this to match the ID for 'Food and Cooking'
            "user_id" => 1 // Assign to user with ID 1
        ]);

        // Post 15 - Technology and Innovation
        Post::create([
            "title" => "The Evolution of Mobile Technology",
            "slug" => "evolution-mobile-technology",
            "body" => "Mobile technology has significantly evolved, transforming from basic communication devices to essential tools for our daily lives. This article delves into the history and development of mobile technology, exploring its profound impact on communication, entertainment, and productivity. Learn about the advent of smartphones, the rise of mobile applications, and the future trends such as 5G, foldable screens, and the integration of AI. We also explore the societal implications of mobile technology, including changes in social interactions, privacy concerns, and the digital divide.",
            "category_id" => 3, // Adjust this to match the ID for 'Technology and Innovation'
            "user_id" => 6 // Assign to user with ID 6
        ]);

        // Post 16 - Travel and Nature
        Post::create([
            "title" => "Wildlife Safaris: An Encounter with Nature",
            "slug" => "wildlife-safaris-encounter",
            "body" => "Wildlife safaris offer an unparalleled opportunity to encounter the majestic beauty of nature. This article takes you through various safari destinations across the globe, from the vast savannahs of Africa to the dense jungles of Asia. Discover the thrill of observing wildlife in their natural habitat, learn about different species and their behaviors, and understand the importance of wildlife conservation. The article also provides tips for responsible and ethical safari experiences, ensuring minimal impact on the environment and the animals.",
            "category_id" => 1, // Adjust this to match the ID for 'Travel and Nature'
            "user_id" => 2 // Assign to user with ID 2
        ]);


        // Categories
        Category::create([
            "name" => "Travel and Nature",
            "slug" => "travel-nature"
        ]);

        Category::create([
            "name" => "Food and Cooking",
            "slug" => "food-cooking"
        ]);

        Category::create([
            "name" => "Technology and Innovation",
            "slug" => "tech-innovation"
        ]);

        User::create([
            "name" => "Alice Johnson",
            "username" => "alicejohnson", // added username
            "email" => "alice.johnson@gmail.com",
            "password" => bcrypt('AlicePass123')
        ]);

        // User 2
        User::create([
            "name" => "Bob Smith",
            "username" => "bobsmith", // added username
            "email" => "bob.smith@gmail.com",
            "password" => bcrypt('BobPass456')
        ]);

        // User 3
        User::create([
            "name" => "Charlie Brown",
            "username" => "charliebrown", // added username
            "email" => "charlie.brown@gmail.com",
            "password" => bcrypt('CharliePass789')
        ]);

        // User 4
        User::create([
            "name" => "Diana Ross",
            "username" => "dianaross", // added username
            "email" => "diana.ross@gmail.com",
            "password" => bcrypt('DianaPass101')
        ]);

        // User 5
        User::create([
            "name" => "Edward Norton",
            "username" => "edwardnorton", // added username
            "email" => "edward.norton@gmail.com",
            "password" => bcrypt('EdwardPass202')
        ]);

        // User 6
        User::create([
            "name" => "Fiona Apple",
            "username" => "fionaapple", // added username
            "email" => "fiona.apple@gmail.com",
            "password" => bcrypt('FionaPass303')
        ]);
    }
}
