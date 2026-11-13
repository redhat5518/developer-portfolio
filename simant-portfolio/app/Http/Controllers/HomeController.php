<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $profile = [
            'name' => 'Simant Kumar',
            'role' => 'Senior Software Engineer',
            'tagline' => 'Building reliable backend systems, useful data products, and intelligent applications.',
            'location' => 'India',
        ];

        $skills = [
            'PHP',
            'Python',
            'Databases',
            'Laravel',
            'FastAPI',
            'Flask',
            'REST APIs',
            'Pandas|NumPy|Scikit-learn|Matplotlib',
            'JavaScript|React|Node.js',
            'Data Analytics',
            'AI Applications',
        ];

        return view('pages.home', compact('profile', 'skills'));
    }
}
