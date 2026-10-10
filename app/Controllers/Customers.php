<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index(): string
    {
        $customers = [
            [
                'full_name' => 'Alice Johnson',
                'email' => 'alice.johnson@example.com',
                'phone' => '0917-123-4567',
            ],
            [
                'full_name' => 'Mark Reyes',
                'email' => 'mark.reyes@example.com',
                'phone' => '0922-234-5678',
            ],
            [
                'full_name' => 'Rosa Dela Cruz',
                'email' => 'rosa.delacruz@example.com',
                'phone' => '0933-345-6789',
            ],
            [
                'full_name' => 'Daniel Lim',
                'email' => 'daniel.lim@example.com',
                'phone' => '0945-456-7890',
            ],
            [
                'full_name' => 'Sofia Santos',
                'email' => 'sofia.santos@example.com',
                'phone' => '0956-567-8901',
            ],
        ];

        return view('customers/index', ['customers' => $customers]);
    }
}
