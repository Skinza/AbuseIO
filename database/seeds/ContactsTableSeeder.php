<?php

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('contacts')->delete();

        $contacts = array(
            [
                'id'            => 1,
                'reference'     => 'INTERNET',
                'name'          => 'Global internet',
                'email'         => 'internet@local.lan',
                'rpc_host'      => null,
                'rpc_key'       => null,
                'enabled'       => 1,
                'created_at'    => new DateTime,
                'updated_at'    => new DateTime,
            ],
            [
                'id'            => 2,
                'reference'     => 'CERT',
                'name'          => 'A country CERT',
                'email'         => 'cert@local.lan',
                'rpc_host'      => 'https://abuseio-rpc.cert.local.lan',
                'rpc_key'       => 'Ruoneik4Hah7shiekicigohl9Ooc4ahL',
                'enabled'       => 1,
                'created_at'    => new DateTime,
                'updated_at'    => new DateTime,
            ],
            [
                'id'            => 3,
                'reference'     => 'ISP',
                'name'          => 'Internet Service Provider',
                'email'         => '',
                'rpc_host'      => 'https://abuseio-rpc.isp.local.lan',
                'rpc_key'       => 'fi5Aip1Ne0eeph4weoP5aiShie5woaca',
                'enabled'       => 1,
                'created_at'    => new DateTime,
                'updated_at'    => new DateTime,
            ],
            [
                'id'            => 11,
                'reference'     => 'CUST1',
                'name'          => 'Customer 1',
                'email'         => 'cust1@local.lan',
                'rpc_host'      => null,
                'rpc_key'       => null,
                'enabled'       => 1,
                'created_at'    => new DateTime,
                'updated_at'    => new DateTime,
            ],
            [
                'id'            => 12,
                'reference'     => 'CUST2',
                'name'          => 'Customer 2',
                'email'         => 'cust2@local.lan',
                'rpc_host'      => null,
                'rpc_key'       => null,
                'enabled'       => 1,
                'created_at'    => new DateTime,
                'updated_at'    => new DateTime,
            ],
            [
                'id'            => 13,
                'reference'     => 'CUST3',
                'name'          => 'Customer 3',
                'email'         => 'cust3@local.lan',
                'rpc_host'      => null,
                'rpc_key'       => null,
                'enabled'       => 1,
                'created_at'    => new DateTime,
                'updated_at'    => new DateTime,
            ],
            [
                'id'            => 14,
                'reference'     => 'CUST4',
                'name'          => 'Customer 4',
                'email'         => 'cust4@local.lan',
                'rpc_host'      => null,
                'rpc_key'       => null,
                'enabled'       => 1,
                'created_at'    => new DateTime,
                'updated_at'    => new DateTime,
            ],
            [
                'id'            => 15,
                'reference'     => 'CUST5',
                'name'          => 'Customer 5',
                'email'         => 'cust5@local.lan',
                'rpc_host'      => null,
                'rpc_key'       => null,
                'enabled'       => 1,
                'created_at'    => new DateTime,
                'updated_at'    => new DateTime,
            ],
            [
                'id'            => 16,
                'reference'     => 'CUST6',
                'name'          => 'Customer 6',
                'email'         => 'cust6@local.lan',
                'rpc_host'      => null,
                'rpc_key'       => null,
                'enabled'       => 1,
                'created_at'    => new DateTime,
                'updated_at'    => new DateTime,
            ],
            [
                'id'            => 17,
                'reference'     => 'CUST7',
                'name'          => 'Customer 7',
                'email'         => 'cust7@local.lan',
                'rpc_host'      => null,
                'rpc_key'       => null,
                'enabled'       => 1,
                'created_at'    => new DateTime,
                'updated_at'    => new DateTime,
            ],
            [
                'id'            => 18,
                'reference'     => 'CUST8',
                'name'          => 'Customer 8',
                'email'         => 'cust8@local.lan',
                'rpc_host'      => null,
                'rpc_key'       => null,
                'enabled'       => 1,
                'created_at'    => new DateTime,
                'updated_at'    => new DateTime,
            ],
            [
                'id'            => 19,
                'reference'     => 'CUST9',
                'name'          => 'Customer 9',
                'email'         => 'cust9@local.lan',
                'rpc_host'      => null,
                'rpc_key'       => null,
                'enabled'       => 1,
                'created_at'    => new DateTime,
                'updated_at'    => new DateTime,
            ]
        );

        DB::table('contacts')->insert($contacts);
    }
}
