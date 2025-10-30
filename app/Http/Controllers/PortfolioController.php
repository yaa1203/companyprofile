<?php

namespace App\Http\Controllers;

use App\Models\Portofolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource with pagination.
     */
    public function index()
    {
        $portofolios = Portofolio::latest()->paginate(9);
        return view('user.portfolio.index', compact('portofolios'));
    }

    /**
     * Display the specified resource with next/previous navigation.
     */
    public function show($id)
    {
        $portfolio = Portofolio::findOrFail($id);
        
        // Get all portfolios ordered by latest
        $allPortfolios = Portofolio::latest()->get();
        
        // Find current index
        $currentIndex = $allPortfolios->search(function($item) use ($id) {
            return $item->id == $id;
        });
        
        // Get previous portfolio (circular: if first, go to last)
        $previousPortfolio = $currentIndex > 0 
            ? $allPortfolios[$currentIndex - 1] 
            : $allPortfolios->last();
        
        // Get next portfolio (circular: if last, go to first)
        $nextPortfolio = $currentIndex < $allPortfolios->count() - 1 
            ? $allPortfolios[$currentIndex + 1] 
            : $allPortfolios->first();
        
        // Get related portfolios (exclude current, limit 3)
        $relatedPortfolios = Portofolio::where('id', '!=', $id)
            ->latest()
            ->take(3)
            ->get();
        
        return view('user.portfolio.show', compact(
            'portfolio',
            'previousPortfolio',
            'nextPortfolio',
            'relatedPortfolios'
        ));
    }
}