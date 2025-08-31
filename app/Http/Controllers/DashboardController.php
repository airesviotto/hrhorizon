<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
        {   
            $label = ['Admin', 'Manager', 'HR', 'Logistic', 'Marketing', 'Labor'];
            $labels = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'];
            $chartData = [120, 150, 90, 200, 170, 220];
            $chartData2 = [140, 200, 190, 210, 120, 210];
            $chartData3 = [1, 5, 15, 18, 5, 38];

            $datasets = [
                 [
                    'label' => 'Vendas 2024',
                    'data' => $chartData,
                    'borderColor' => 'rgba(54, 162, 235, 1)',
                    'backgroundColor' => 'rgba(54, 162, 235, 0.2)',
                    'tension' => 0.3
                ],
                [
                    'label' => 'Vendas 2025',
                    'data' => $chartData2,
                    'borderColor' => 'rgba(99, 224, 255, 1)',
                    'backgroundColor' => 'rgba(115, 99, 255, 0.2)',
                    'tension' => 0.3
                ]
            ];

            $pieData = [
                 [
                    'label' => 'Vendas 2024',
                    'data' => $chartData3,
                    'backgroundColor' => [
                        'rgb(255, 99, 132)',
                        'rgb(75, 192, 192)',
                        'rgb(255, 205, 86)',
                        'rgb(201, 203, 207)',
                        'rgb(54, 162, 235)',
                        'rgb(197, 54, 245)',

                    ],
                    'tension' => 0.5
                ]
            ];
           
            return view('dashboard.main-dashboard', compact('labels','label', 'datasets', 'pieData'));
        }
}
