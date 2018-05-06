<?php

use Illuminate\Database\Seeder;
class MarketplacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('marketplaces')->insert([
            'logo'          => 'https://d26lpennugtm8s.cloudfront.net/assets/blog_es/logo_tiendanube.png',
            'name'          => 'marketplaces.label_opt_nube_title',
            'description'   => 'marketplaces.label_opt_nube_desc',
            'url'           => 'https://www.tiendanube.com/apps/669/authorize',
            'auth_url'      => 'https://www.tiendanube.com/apps/authorize/token',
            'token'         => '669',
            'secret'        => 'Yq3xVw2PnIL6kuWKPAcUf0oOAHcJY92r89cwaNOt7nIl7avJ',
            'type'          => 'authorization_code',
            'slug'          => 'nube',
            'status'        => TRUE
        ]);
    }
}