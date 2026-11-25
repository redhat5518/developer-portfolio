<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        
        $profile = [
            'name' => 'Simant Kumar',
            'role' => 'Senior Software Engineer | Backend & AI Integrations',
            'tagline' => 'Building enterprise backend systems, scalable API integrations, SportsTech solutions, and AI-enabled applications using PHP, Python, and modern AI/ML technologies.',
            'location' => 'India',
        ];
        
        $skills = [
            'PHP',
            'Python',
            'Laravel',
            'Flask',
            'FastAPI',
            'MySQL|SQLite|MongoDB',
            'REST APIs|Webhooks|OAuth 2.0',
            'LangChain|RAG|Embeddings',
            'PyTorch|Pandas|NumPy|Scikit-learn',
            'Computer Vision|Image Classification|Model Fine-tuning',
            'JavaScript|jQuery|React|Node.js',
            'HTML5|CSS3|Bootstrap',
            'Data Analytics|Data Visualization|Highcharts',
            'AI/ML Applications|AI Enablement',
            'Twilio|Stripe|Slack API|Zapier',
            'SportsTech|Athlete Analytics',
            'Legacy Modernization|Application Security',
        ];


        return view('pages.home', compact('profile', 'skills'));
    }
}
