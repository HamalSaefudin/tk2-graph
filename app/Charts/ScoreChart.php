<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\Score;

class ScoreChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        $scores = Score::all();

        // Prepare the data arrays
        $data = [];
        $categories = ['quiz', 'tugas', 'absensi', 'praktik', 'uas'];

        $chart = $this->chart->barChart()
                ->setTitle('Score Chart')
                ->setSubtitle('Scores for various categories')
                ->setXAxis($categories);
    
        foreach ($scores as $score) {
            $name = $score->name;
            $scoresData = [];
    
            foreach ($categories as $category) {
                $scoresData[] = $score->$category;
            }
    
            $chart->addData($name, $scoresData);
        }
        return $chart;
    }
}
