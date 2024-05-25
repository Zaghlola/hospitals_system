<?php
namespace App\Repository\Sections;

use App\Interface\Sections\SectionRepositoryInterface;
use App\Models\Section;

class SectionRepository implements SectionRepositoryInterface{
  public function index()
  {
    $sections=Section::all();
    return view('dashboard.section.index',compact('sections'));
  }
}