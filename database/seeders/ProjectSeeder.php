<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Project::create([
            'title' => 'E-commerce Platform',
            'description' => 'A full-stack e-commerce platform built with Laravel and Vue.js, featuring product listings, shopping cart, and secure payment gateway integration.',
            'thumbnail_url' => 'https://via.placeholder.com/300x200?text=E-commerce',
            'category' => 'Web Apps',
            'details_link' => '#',
        ]);

        \App\Models\Project::create([
            'title' => 'AI Chatbot',
            'description' => 'An intelligent chatbot powered by natural language processing (NLP) for customer support, capable of understanding and responding to user queries.',
            'thumbnail_url' => 'https://via.placeholder.com/300x200?text=AI+Chatbot',
            'category' => 'AI Projects',
            'details_link' => '#',
        ]);

        \App\Models\Project::create([
            'title' => 'DevOps Automation Tool',
            'description' => 'A custom tool to automate CI/CD pipelines, including automated testing, deployment, and infrastructure provisioning using Ansible and Docker.',
            'thumbnail_url' => 'https://via.placeholder.com/300x200?text=DevOps+Tool',
            'category' => 'Tools',
            'details_link' => '#',
        ]);

        \App\Models\Project::create([
            'title' => 'Mobile Expense Tracker',
            'description' => 'A cross-platform mobile application built with React Native for tracking daily expenses, with features like categorization, budgeting, and data visualization.',
            'thumbnail_url' => 'https://via.placeholder.com/300x200?text=Mobile+App',
            'category' => 'Mobile Apps',
            'details_link' => '#',
        ]);

        \App\Models\Project::create([
            'title' => 'Real-time Dashboard',
            'description' => 'A real-time data visualization dashboard using WebSockets and D3.js to display live analytics and system metrics.',
            'thumbnail_url' => 'https://via.placeholder.com/300x200?text=Dashboard',
            'category' => 'Web Apps',
            'details_link' => '#',
        ]);
    }
}
