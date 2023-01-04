<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Item;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class itemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            // women
            [
                'id' => 'Sacha Striped Shirt',
                'category_id' => 'women',
                'rating' => rand(2, 5),
                'description' => 'Barcelona-born M.N.G dresses the modern woman with quality, chic designs that combine the best of this season’s trends with timeless appeal. From trench coats to tailored blazers, relaxed knits, leather handbags, covetable shoes and glamorous maxi gowns, M.N.G delivers a range of designs to suit every style profile and dress code.',
                'price' => 400000,
                'discount'=> 40,
            ],
            [
                'id' => 'Keirra Midi Dress',
                'category_id' => 'women',
                'rating' => rand(2, 5),
                'description' => 'Reach your new season fashion goals with the latest from Atmos&Here. From must-have dresses to classic off-duty tees and denim you’ll never want to take off, look to the brand for on-trend pieces in the latest shapes, colours and prints to match any dress code.',
                'price' => 930000,
                'discount'=> 0,
            ],
            [
                'id' => 'Cavanaugh Layered Dress',
                'category_id' => 'women',
                'rating' => rand(2, 5),
                'description' => 'The Cavanaugh Layered Dress by Willa embodies contemporary femininity, transporting you from the office to the bar with sophistication and poise. With tailoring accents and details, this chic piece remains a timeless and adaptable wardrobe staple.',
                'price' => 748000,
                'discount'=> 0,
            ],
            [
                'id' => 'Classic Pullover Jumper',
                'category_id' => 'women',
                'rating' => rand(2, 5),
                'description' => 'The Classic Pullover Jumper by Calli is the perfect staple piece to add to your wardrobe this season. Designed with a luxe fabric and form-flattering silhouette, this piece is sure to take you seamlessly from work, to weekend and anywhere in-between.',
                'price' => 240000,
                'discount'=> 10,
            ],
            [
                'id' => 'Chill Pullover',
                'category_id' => 'women',
                'rating' => rand(2, 5),
                'description' => 'Daytime dressing just got easier with Callis Chill Pullover. Cut in a ribbed fabrication and embellished with tortoise shell buttons, style yours with our popular Luna Relaxed Jeans.',
                'price' => 320000,
                'discount'=> 0,
            ],
            [
                'id' => 'Amy Button Front Shirt',
                'category_id' => 'women',
                'rating' => rand(2, 5),
                'description' => 'Reach your new season fashion goals with the latest from Atmos&Here. From must-have dresses to classic off-duty tees and denim you’ll never want to take off, look to the brand for on-trend pieces in the latest shapes, colours and prints to match any dress code.',
                'price' => 375000,
                'discount'=> 0,
            ],
        
            // men
            [
                'id' => 'Bligh Car Coat',
                'category_id' => 'men',
                'rating' => rand(2, 5),
                'description' => 'Based in Sydney, menswear label Staple Superior delivers wardrobe essentials made with superior grade cotton fabrics, which offer a superior handfeel, strength and lasting quality. With a focus on key styles and shapes that every man needs in his wardrobe, you’ll be ready for anything life may throw at you.',
                'price' => 559000,
                'discount'=> 0,
            ],
            [
                'id' => 'Phoenix Check Shirt',
                'category_id' => 'men',
                'rating' => rand(2, 5),
                'description' => 'Based in Sydney, menswear label Staple Superior delivers wardrobe essentials made with superior grade cotton fabrics, which offer a superior handfeel, strength and lasting quality. With a focus on key styles and shapes that every man needs in his wardrobe, you’ll be ready for anything life may throw at you.',
                'price' => 599000,
                'discount'=> 0,
            ],
            [
                'id' => 'Smitty Short Sleeve Tee',
                'category_id' => 'men',
                'rating' => rand(2, 5),
                'description' => 'Launched in 1973, surf icon Billabong has cemented its status as a leader in apparel and accessories that cater to an action-packed lifestyle. From go-anywhere logo tees and tanks to walkshorts, swimwear and breezy jersey basics, the brand offers a wide range of casual clothing bound to win a place in any weekend wardrobe.',
                'price' => 369000,
                'discount'=> 20,
            ],
            [
                'id' => 'Dunstan Waistcoat',
                'category_id' => 'men',
                'rating' => rand(2, 5),
                'description' => 'The Tarocash Dunstan Waistcoat is the perfect addition to your wardrobe. Tarocash Waistcoats are for the everyday modern man. Tarocash offers accessible and affordable mens fashion that ensures you look sharp for any occasion.',
                'price' => 820000,
                'discount'=> 0,
            ],
            [
                'id' => 'Jakob Micro Print Shirt',
                'category_id' => 'men',
                'rating' => rand(2, 5),
                'description' => 'Capturing the bold, masculine charisma of the modern Australian man, yd. is an aspirational lifestyle brand with premium appeal and an unwavering focus on accessible tailoring, classic staples and on-the-pulse casualwear that asserts a refined and confident attitude.',
                'price' => 450000,
                'discount'=> 0,
            ],
            [
                'id' => 'Maiden Shirt',
                'category_id' => 'men',
                'rating' => rand(2, 5),
                'description' => 'Capturing the bold, masculine charisma of the modern Australian man, yd. is an aspirational lifestyle brand with premium appeal and an unwavering focus on accessible tailoring, classic staples and on-the-pulse casualwear that asserts a refined and confident attitude.',
                'price' => 445000,
                'discount'=> 45,
            ],

            
            // new arrivals
            [
                'id' => 'Shone Joy',
                'category_id' => 'women',
                'rating' => rand(2, 5),
                'description' => 'With undulating frills and an earthen olive-based botanical print, Shona Joys Claudette Balloon Sleeve Drawstring Mini Dress is the perfect partner to barely-there heels and delicate gold jewellery.',
                'price' => 1032000,
                'discount'=> 0,
            ],
            [
                'id' => 'Sabrina Ruffle Hem Top',
                'category_id' => 'women',
                'rating' => rand(2, 5),
                'description' => 'Reach your new season fashion goals with the latest from Atmos&Here. From must-have dresses to classic off-duty tees and denim you’ll never want to take off, look to the brand for on-trend pieces in the latest shapes, colours and prints to match any dress code.',
                'price' => 399000,
                'discount'=> 0,
            ],
            [
                'id' => 'Victoria Front Shirt',
                'category_id' => 'women',
                'rating' => rand(2, 5),
                'description' => 'This womens shirt is crafted from a lightweight fabric with a subtly shiny finish and features a half button played, large collar and statement buttons.',
                'price' => 359000,
                'discount'=> 0,
            ],
            [
                'id' => 'Reena Mini Dress',
                'category_id' => 'women',
                'rating' => rand(2, 5),
                'description' => 'Savels Reena Mini Dress will make it look like you put in more effort than you really did. We wont tell. Style yours with mules to complete this look.',
                'price' => 790000,
                'discount'=> 0,
            ],
            [
                'id' => 'Kori Bomber',
                'category_id' => 'women',
                'rating' => rand(2, 5),
                'description' => 'Throw on this seasons penchant for knitted textures in the Rue Stiic Kori Bomber.',
                'price' => 899000,
                'discount'=> 0,
            ],

            // sale
            [
                'id' => 'Hawaian Midi Dress',
                'category_id' => 'women',
                'rating' => rand(2, 5),
                'description' => ' Featuring a beautiful red color, subtle ruffle details and high slit makes this a stunner for your next night out. The smocked back panel and tie up straps allow for a customised fit just for you.',
                'price' => 567000,
                'discount'=> 30,
            ],
            [
                'id' => 'Dani Active Crop',
                'category_id' => 'women',
                'rating' => rand(2, 5),
                'description' => 'Designed to ensure full support and freedom of movement, the Dani Active Bra will be your best friend through a comfortable workout, from running to skiing to horse riding,',
                'price' => 967000,
                'discount'=> 70,
            ],
            [
                'id' => 'Maternity Drawstring Dress',
                'category_id' => 'women',
                'rating' => rand(2, 5),
                'description' => 'With a drawstring waistband for customisable comfort as you grow, the Maternity Drawstring Dress from Angel Maternity is a pretty, practical choice both during and after your pregnancy.',
                'price' => 799000,
                'discount'=> 20,
            ],

        ];

        foreach($items as $item){
            Item::create($item);
        }
        
    }
}
