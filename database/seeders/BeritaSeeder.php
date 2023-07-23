<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Berita;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Berita::create([
            'judul' => 'Block Bottom Valve Bag',
            'tanggal' => '2023-07-01',
            'isi' => 'Our bags come with block bottom shape that can minimize space for storage and during transportation process, combined with valve for easy filling, especially for cement industry that is commonly using rotary packer to maximize their filling capacity.
            It is also stronger and more durable than multi-ply kraft paper or PP woven sandwiched kraft paper cement bag.
            Cement bag is generally made from multi-ply / multi layer kraft paper (up to 5 ply) or PP woven sandwiched kraft paper (up to 3 ply). But nowadays with our latest European Technology, we can eliminate the usage of kraft paper and replace it with only 1 ply high tenacity laminated woven PP fabric that is fully recyclable so it means the bag is more eco friendly.
            They also have micro perforations technology to assure that they have highest standard on air permeability. This fully adjustable conversion system giving the ability for the bag to be airtight to highly air-permeable for filling or breathing the goods and yet ensure perfect protection for the products.
            This block bottom bag can be used for cement, resin, and other bulk material.',
            'gambar' => 'admin/img/bbvb.png',
            'gambar2' => '',
            'gambar3' => '',
            'gambar4' => '',
            'gambar5' => '',
        ]);
        Berita::create([
            'judul' => 'Bulk Container Bag (FIBC)',
            'tanggal' => '2023-07-01',
            'isi' => 'FIBC is a container bag in large dimensions for storing and transporting various products which form is granular, powder, or flakes for example cement, sand, fertilizers, plastic resin and so on.
            It is made of woven polypropylene and normally have customable size depends on the kind of product will be filled into.
            Its capacity is normally 500 kg – 2.000 kg and can be more. Transporting and loading is done on either pallets or by lifting it in loops. Bags are made with either one loop or four lifting loops. Emptying is made easy by a special opening in the bottom or by simply cutting it open.
            We can put a tube liner made of LDPE inside to protect the product from humidity and also we can add more protection by coating the fabric using PP Lamination.
            At first the FIBC as we know it today were manufactured from PVC rubber and generally utilised within the rubber industry for the transportation of Carbon Black to be used as a reinforcing agent in a variety of rubber products.
            By the 1960s development of polypropylene, combined with advances in weaving, the bigbags as we know it today came into being and was rapidly adopted by a wide variety of oil and chemical companies to store and transport powdered and granular products.
            It was during the oil crisis of the 1970s that the FIBC really came into its own for transporting huge quantities of cement to the Middle East from across Europe for the rapid expansion of the oil producing countries. At its zenith, upwards of 50,000 metric tons of cement was being shipped out on a weekly basis to feed the vast building programmed.
            The modern FIBC transports a growing figure of over ¼ billion tonnes of product each year and is used to handle, store and move products as varied as cereals to powdered chemicals and flour to animal feeds. With a capacity of up to 3m³ and load capability ranging from ½ a tonne to two tonnes FIBCs are highly cost effective, easily recyclable and ideal for virtually any free-flowing granule, powder, pellet or flake.',
            'gambar' => 'admin/img/fibc.png',
            'gambar2' => '',
            'gambar3' => '',
            'gambar4' => '',
            'gambar5' => '',
        ]);
        Berita::create([
            'judul' => 'PP Woven Bag',
            'tanggal' => '2023-07-01',
            'isi' => 'PP Woven Bag is a bag made of woven polypropylene, mostly made on milky white color or transparent for various granular, powder, pellet or flake product in food and chemical industry.
            But especially for rice grain industry, nowadays they prefer to use the colorful one because they believe it is more attractive and very useful to build their brand image in the rice market.
            The size and the strength of these bags are various, customable for customer needs. Its load capacity ranging from ten kilograms to one hundred kilograms.
            The fabric can be uncoated or coated and also we can insert a tube PE inner to give more protection to the product.
            This polypropylene woven bag is printable using flexo gravure technology and also rotogravure technology by using PP extrude lamination as adhesive agent to put the identity or trademark of the product to be easily recognized in the market.',
            'gambar' => 'admin/img/bopp.png',
            'gambar2' => '',
            'gambar3' => '',
            'gambar4' => '',
            'gambar5' => '',
        ]);
    }
}
