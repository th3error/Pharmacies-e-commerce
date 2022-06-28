<?php

namespace App\Console\Commands;

use App\Models\Pharmacy;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class searchCheapest extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pharmacies:search {product_id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Return the cheapest 5 pharmacies for input product';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $productId = $this->argument('product_id');
        $theQuery = DB::table('pharmacies')
            ->join('pharmacy_product', 'pharmacies.id', '=', 'pharmacy_product.pharmacy_id')
            ->where('pharmacy_product.product_id', $productId)
            ->select('pharmacies.id', 'pharmacies.name', 'pharmacy_product.price')
            ->orderBy('price', 'ASC')
            ->take(5)
            ->get();
        return $this->info($theQuery);
    }
}
